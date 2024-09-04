<?php
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
/**
 * Wizard
 *
 * @package Whizzie
 * @author Catapult Themes
 * @since 1.0.0
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class ThemeWhizzie
{

	public static $is_valid_key = 'false';
	public static $theme_key = '';

	protected $version = '1.1.0';

	/** @var string Current theme name, used as namespace in actions. */
	protected $theme_name = '';
	protected $theme_title = '';

	/** @var string Wizard page slug and title. */
	protected $page_slug = '';
	protected $page_title = '';
	protected $plugin_path = '';
	protected $parent_slug = '';

	/** @var array Wizard steps set by user. */
	protected $config_steps = array();

	/**
	 * Relative plugin url for this plugin folder
	 * @since 1.0.0
	 * @var string
	 */
	protected $plugin_url = '';

	/**
	 * TGMPA instance storage
	 *
	 * @var object
	 */
	protected $tgmpa_instance;

	/**
	 * TGMPA Menu slug
	 *
	 * @var string
	 */
	protected $tgmpa_menu_slug = 'tgmpa-install-plugins';

	/**
	 * TGMPA Menu url
	 *
	 * @var string
	 */
	protected $tgmpa_url = 'themes.php?page=tgmpa-install-plugins';

	// Where to find the widget.wie file
	protected $widget_file_url = '';

	/**
	 * Constructor
	 *
	 * @param $vw_stock_images_pro_config	Our config parameters
	 */
	public function __construct($vw_stock_images_pro_config)
	{
		$this->set_vars($vw_stock_images_pro_config);
		$this->init();

		include_once(ABSPATH . 'wp-admin/includes/plugin.php');
	}

	public static function get_the_validation_status()
	{
		return get_option('vw_stock_images_pro_theme_validation_status');
	}

	public static function set_the_validation_status($is_valid)
	{
		update_option('vw_stock_images_pro_theme_validation_status', $is_valid);
	}

	public static function get_the_suspension_status()
	{
		return get_option('vw_stock_images_pro_theme_suspension_status');
	}

	public static function set_the_suspension_status($is_suspended)
	{
		update_option('vw_stock_images_pro_theme_suspension_status', $is_suspended);
	}

	public static function set_the_theme_key($the_key)
	{
		update_option('vw_pro_theme_key', $the_key);
	}

	public static function remove_the_theme_key()
	{
		delete_option('vw_pro_theme_key');
	}

	public static function get_the_theme_key()
	{
		return get_option('vw_pro_theme_key');
	}

	/**
	 * Set some settings
	 * @since 1.0.0
	 * @param $vw_stock_images_pro_config	Our config parameters
	 */
	public function set_vars($vw_stock_images_pro_config)
	{

		require_once trailingslashit(WHIZZIE_DIR) . 'tgm/tgm.php';
		require_once trailingslashit(WHIZZIE_DIR) . 'widgets/class-vw-widget-importer.php';

		if (isset($vw_stock_images_pro_config['page_slug'])) {
			$this->page_slug = esc_attr($vw_stock_images_pro_config['page_slug']);
		}
		if (isset($vw_stock_images_pro_config['page_title'])) {
			$this->page_title = esc_attr($vw_stock_images_pro_config['page_title']);
		}
		if (isset($vw_stock_images_pro_config['steps'])) {
			$this->config_steps = $vw_stock_images_pro_config['steps'];
		}

		$this->plugin_path = trailingslashit(dirname(__FILE__));
		$relative_url = str_replace(get_template_directory(), '', $this->plugin_path);
		$this->plugin_url = trailingslashit(get_template_directory_uri() . $relative_url);
		$current_theme = wp_get_theme();
		$this->theme_title = $current_theme->get('Name');
		$this->theme_name = strtolower(preg_replace('#[^a-zA-Z]#', '', $current_theme->get('Name')));
		$this->page_slug = apply_filters($this->theme_name . '_theme_setup_wizard_page_slug', $this->theme_name . '-wizard');
		$this->parent_slug = apply_filters($this->theme_name . '_theme_setup_wizard_parent_slug', '');

		$this->widget_file_url = trailingslashit(WHIZZIE_DIR) . 'widgets/vw-stock-images-pro-widgets.wie';

	}

	/**
	 * Hooks and filters
	 * @since 1.0.0
	 */
	public function init()
	{

		if (class_exists('TGM_Plugin_Activation') && isset($GLOBALS['tgmpa'])) {
			add_action('init', array($this, 'get_tgmpa_instance'), 30);
			add_action('init', array($this, 'set_tgmpa_url'), 40);
		}

		add_action('after_switch_theme', array($this, 'redirect_to_wizard'));
		add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
		add_action('admin_menu', array($this, 'menu_page'));
		add_action('admin_init', array($this, 'get_plugins'), 30);
		add_filter('tgmpa_load', array($this, 'tgmpa_load'), 10, 1);
		add_action('wp_ajax_setup_plugins', array($this, 'setup_plugins'));
		add_action('wp_ajax_setup_widgets', array($this, 'setup_widgets'));

		add_action('wp_ajax_setup_builder', array($this, 'setup_builder'));
		add_action('wp_ajax_wz_install_activate_ibtana', array($this, 'wz_install_activate_ibtana'));

		add_action('wp_ajax_wz_activate_vw_stock_images_pro', array($this, 'wz_activate_vw_stock_images_pro'));

		add_action('admin_enqueue_scripts', array($this, 'vw_stock_images_pro_admin_theme_style'));


	}

	public function redirect_to_wizard()
	{
		global $pagenow;
		if (is_admin() && 'themes.php' == $pagenow && isset($_GET['activated']) && current_user_can('manage_options')) {
			wp_redirect(admin_url('themes.php?page=' . esc_attr($this->page_slug)));
		}
	}

	public function enqueue_scripts()
	{
		wp_enqueue_style('theme-wizard-style', get_template_directory_uri() . '/theme-wizard/assets/css/theme-wizard-style.css');
		wp_register_script('theme-wizard-script', get_template_directory_uri() . '/theme-wizard/assets/js/theme-wizard-script.js', array('jquery'), time());
		wp_localize_script(
			'theme-wizard-script',
			'vw_stock_images_pro_whizzie_params',
			array(
				'ajaxurl' => admin_url('admin-ajax.php'),
				'wpnonce' => wp_create_nonce('whizzie_nonce'),
				'verify_text' => esc_html('verifying', 'vw-stock-images-pro'),
				'IBTANA_THEME_LICENCE_ENDPOINT' => IBTANA_THEME_LICENCE_ENDPOINT
			)
		);
		wp_enqueue_script('theme-wizard-script');
		wp_enqueue_script('tabs', get_template_directory_uri() . '/theme-wizard/getstarted/js/tab.js');
		wp_enqueue_script('vw-notify-popup', get_template_directory_uri() . '/assets/js/notify.min.js');
	}

	public static function get_instance()
	{
		if (!self::$instance) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function tgmpa_load($status)
	{
		return is_admin() || current_user_can('install_themes');
	}

	/**
	 * Get configured TGMPA instance
	 *
	 * @access public
	 * @since 1.1.2
	 */
	public function get_tgmpa_instance()
	{
		$this->tgmpa_instance = call_user_func(array(get_class($GLOBALS['tgmpa']), 'get_instance'));
	}

	/**
	 * Update $tgmpa_menu_slug and $tgmpa_parent_slug from TGMPA instance
	 *
	 * @access public
	 * @since 1.1.2
	 */
	public function set_tgmpa_url()
	{
		$this->tgmpa_menu_slug = (property_exists($this->tgmpa_instance, 'menu')) ? $this->tgmpa_instance->menu : $this->tgmpa_menu_slug;
		$this->tgmpa_menu_slug = apply_filters($this->theme_name . '_theme_setup_wizard_tgmpa_menu_slug', $this->tgmpa_menu_slug);
		$tgmpa_parent_slug = (property_exists($this->tgmpa_instance, 'parent_slug') && $this->tgmpa_instance->parent_slug !== 'themes.php') ? 'admin.php' : 'themes.php';
		$this->tgmpa_url = apply_filters($this->theme_name . '_theme_setup_wizard_tgmpa_url', $tgmpa_parent_slug . '?page=' . $this->tgmpa_menu_slug);
	}

	/**
	 * Make a modal screen for the wizard
	 */
	public function menu_page()
	{
		add_menu_page(esc_html($this->page_title), esc_html($this->page_title), 'manage_options', $this->page_slug, array($this, 'vw_stock_images_pro_mostrar_guide'), get_template_directory_uri() . '/theme-wizard/assets/images/admin-menu.svg', 40);
	}

	public function activation_page()
	{
		$theme_key = ThemeWhizzie::get_the_theme_key();
		$validation_status = ThemeWhizzie::get_the_validation_status();
		?>
		<div class="wrap">
			<label><?php esc_html_e('Enter Your Theme License Key:', 'vw-stock-images-pro'); ?></label>
			<form id="vw_stock_images_pro_license_form">
				<input type="text" name="vw_stock_images_pro_license_key" value="<?php echo $theme_key ?>" <?php if ($validation_status === 'true') {
					   echo "disabled";
				   } ?> required placeholder="License Key" />
				<div class="licence-key-button-wrap">
					<button class="button" type="submit" name="button" <?php if ($validation_status === 'true') {
						echo "disabled";
					} ?>>
						<?php if ($validation_status === 'true') {
							?>
							Activated
							<?php
						} else { ?>
							Activate
							<?php
						}
						?>
					</button>

					<?php if ($validation_status === 'true') { ?>
						<button id="change--key" class="button" type="button" name="button">
							Change Key
						</button>
						<div class="next-button">
							<button id="start-now-next" class="button" type="button" name="button"
								onclick="openCity(event, 'demo_offer')">
								Next
							</button>
						</div>
					<?php } ?>
				</div>
			</form>
		</div>
		<?php
	}

	/**
	 * Make an interface for the wizard
	 */
	public function wizard_page()
	{

		tgmpa_load_bulk_installer();

		// install plugins with TGM.
		if (!class_exists('TGM_Plugin_Activation') || !isset($GLOBALS['tgmpa'])) {
			die('Failed to find TGM');
		}
		$url = wp_nonce_url(add_query_arg(array('plugins' => 'go')), 'whizzie-setup');

		// copied from TGM
		$method = ''; // Leave blank so WP_Filesystem can populate it as necessary.
		$fields = array_keys($_POST); // Extra fields to pass to WP_Filesystem.
		if (false === ($creds = request_filesystem_credentials(esc_url_raw($url), $method, false, false, $fields))) {
			return true; // Stop the normal page form from displaying, credential request form will be shown.
		}
		// Now we have some credentials, setup WP_Filesystem.
		if (!WP_Filesystem($creds)) {
			// Our credentials were no good, ask the user for them again.
			request_filesystem_credentials(esc_url_raw($url), $method, true, false, $fields);
			return true;
		}


		/* If we arrive here, we have the filesystem */ ?>
		<div class="wrap">
			<div class="wizard-logo-wrap">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/theme-wizard/assets/images/adminIcon.png'); ?>">
				<span class="wizard-main-title">
					<?php esc_html_e('Welcome to ', 'vw-stock-images-pro');
					echo $this->theme_title; ?>
				</span>
			</div>
			<?php echo '<div class="card whizzie-wrap">';
			// The wizard is a list with only one item visible at a time
			$steps = $this->get_steps();
			echo '<ul class="whizzie-menu vw-wizard-menu-page">';
			foreach ($steps as $step) {
				$class = 'step step-' . esc_attr($step['id']);
				echo '<li data-step="' . esc_attr($step['id']) . '" class="' . esc_attr($class) . '" >';
				printf(
					'<span class="wizard-main-title">%s</span>',
					esc_html($step['title'])
				);
				// $content is split into summary and detail
				$content = call_user_func(array($this, $step['view']));
				if (isset($content['summary'])) {
					printf(
						'<div class="summary">%s</div>',
						wp_kses_post($content['summary'])
					);
				}
				if (isset($content['detail'])) {
					// Add a link to see more detail
					printf('<div class="wz-require-plugins">');
					printf(
						'<div class="detail">%s</div>',
						$content['detail'] // Need to escape this
					);
					printf('</div>');
				}

				printf('<div class="wizard-button-wrapper">');
				if (ThemeWhizzie::get_the_validation_status() === 'true') {
					// The next button
					if (isset($step['button_text']) && $step['button_text']) {
						printf(
							'<div class="button-wrap"><a href="#" class="button button-primary do-it" data-callback="%s" data-step="%s">%s</a></div>',
							esc_attr($step['callback']),
							esc_attr($step['id']),
							esc_html($step['button_text'])
						);
					}

					if (isset($step['button_text_one'])) {
						printf(
							'<div class="button-wrap button-wrap-one">
										<a href="#" class="button button-primary do-it" data-callback="install_widgets" data-step="widgets"><img src="' . get_template_directory_uri() . '/theme-wizard/assets/images/Customize-Icon.png"></a>
										<p class="demo-type-text">%s</p>
									</div>',
							esc_html($step['button_text_one'])
						);
					}
					if (isset($step['button_text_two'])) {
						printf(
							'<div class="button-wrap button-wrap-two">
										<a href="#" class="button button-primary do-it" data-step="widgets" data-callback="page_builder" id="ibtana_button"><img src="' . get_template_directory_uri() . '/theme-wizard/assets/images/Gutenberg-Icon.png"></a>
										<p class="demo-type-text">%s</p>
									</div>',
							esc_html($step['button_text_two'])
						);
					}

				} else {
					printf(
						'<div class="button-wrap"><a href="#" class="button button-primary key-activation-tab-click">%s</a></div>',
						esc_html(__('Activate Your License', 'vw-stock-images-pro'))
					);
				}
				printf('</div>');

				echo '</li>';
			}
			echo '</ul>';
			echo '<ul class="whizzie-nav wizard-icon-nav">';
			$stepI = 1;
			foreach ($steps as $step) {
				$stepAct = ($stepI == 1) ? 1 : 0;
				if (isset($step['icon_url']) && $step['icon_url']) {
					echo '<li class="nav-step-' . esc_attr($step['id']) . '" wizard-steps="step-' . esc_attr($step['id']) . '" data-enable="' . $stepAct . '">
							<img src="' . esc_attr($step['icon_url']) . '">
							</li>';
				}
				$stepI++;
			}
			echo '</ul>';
			?>
			<div class="step-loading"><span class="spinner">
					<img
						src="<?php echo esc_url(get_template_directory_uri() . '/theme-wizard/assets/images/Spinner-Animaion.gif'); ?>">
				</span></div>
			<?php echo '</div>'; ?>

		</div>
	<?php }
	/**
	 * Set options for the steps
	 * Incorporate any options set by the theme dev
	 * Return the array for the steps
	 * @return Array
	 */
	public function get_steps()
	{
		$dev_steps = $this->config_steps;
		$steps = array(
			'intro' => array(
				'id' => 'intro',
				'title' => __('', 'vw-stock-images-pro'),
				'icon' => 'dashboard',
				'view' => 'get_step_intro', // Callback for content
				'callback' => 'do_next_step', // Callback for JS
				'button_text' => __('Start Now', 'vw-stock-images-pro'),
				'can_skip' => false, // Show a skip button?
				'icon_url' => get_template_directory_uri() . '/theme-wizard/assets/images/Icons-01.svg'
			),
			'plugins' => array(
				'id' => 'plugins',
				'title' => __('Plugins', 'vw-stock-images-pro'),
				'icon' => 'admin-plugins',
				'view' => 'get_step_plugins',
				'callback' => 'install_plugins',
				'button_text' => __('Install Plugins', 'vw-stock-images-pro'),
				'can_skip' => true,
				'icon_url' => get_template_directory_uri() . '/theme-wizard/assets/images/Icons-02.svg'
			),
			'widgets' => array(
				'id' => 'widgets',
				'title' => __('Customizer', 'vw-stock-images-pro'),
				'icon' => 'welcome-widgets-menus',
				'view' => 'get_step_widgets',
				'callback' => 'install_widgets',
				'button_text_one' => __('Click On The Image To Import Customizer Demo', 'vw-stock-images-pro'),
				'button_text_two' => __('Click On The Image To Import Gutenberg Block Demo', 'vw-stock-images-pro'),
				'can_skip' => true,
				'icon_url' => get_template_directory_uri() . '/theme-wizard/assets/images/Icons-03.svg'
			),

			'done' => array(
				'id' => 'done',
				'title' => __('All Done', 'vw-stock-images-pro'),
				'icon' => 'yes',
				'view' => 'get_step_done',
				'callback' => '',
				'icon_url' => get_template_directory_uri() . '/theme-wizard/assets/images/Icons-04.svg'
			)
		);

		// Iterate through each step and replace with dev config values
		if ($dev_steps) {
			// Configurable elements - these are the only ones the dev can update from config.php
			$can_config = array('title', 'icon', 'button_text', 'can_skip', 'button_text_two');
			foreach ($dev_steps as $dev_step) {
				// We can only proceed if an ID exists and matches one of our IDs
				if (isset($dev_step['id'])) {
					$id = $dev_step['id'];
					if (isset($steps[$id])) {
						foreach ($can_config as $element) {
							if (isset($dev_step[$element])) {
								$steps[$id][$element] = $dev_step[$element];
							}
						}
					}
				}
			}
		}
		return $steps;
	}

	/**
	 * Print the content for the intro step
	 */
	public function get_step_intro()
	{ ?>
		<div class="summary">
			<p>
				<?php esc_html_e('Thank you for choosing this ' . $this->theme_title . ' Theme. Using this quick setup wizard, you will be able to configure your new website and get it running in just a few minutes. Just follow these simple steps mentioned in the wizard and get started with your website.', 'vw-stock-images-pro'); ?>
			</p>
			<p>
				<?php esc_html_e('You may even skip the steps and get back to the dashboard if you have no time at the present moment. You can come back any time if you change your mind.', 'vw-stock-images-pro'); ?>
			</p>
		</div>
	<?php }

	public function get_step_importer()
	{ ?>
		<div class="summary">
			<p>
				<?php esc_html_e('Thank you for choosing this ' . $this->theme_title . ' Theme. Using this quick setup wizard, you will be able to configure your new website and get it running in just a few minutes. Just follow these simple steps mentioned in the wizard and get started with your website.', 'vw-stock-images-pro'); ?>
			</p>
		</div>
	<?php }
	/**
	 * Get the content for the plugins step
	 * @return $content Array
	 */
	public function get_step_plugins()
	{
		$plugins = $this->get_plugins();
		$content = array(); ?>
		<div class="summary">
			<p>
				<?php esc_html_e('Additional plugins always make your website exceptional. Install these plugins by clicking the install button. You may also deactivate them from the dashboard.', 'vw-stock-images-pro') ?>
			</p>
		</div>
		<?php // The detail element is initially hidden from the user
				$content['detail'] = '<span class="wizard-plugin-count">' . count($plugins['all']) . '</span><ul class="whizzie-do-plugins">';
				$plugins['all'] = $this->moveArrayPosition($plugins['all'], 0, 14);
				// Add each plugin into a list
				foreach ($plugins['all'] as $slug => $plugin) {
					$content['detail'] .= '<li data-slug="' . esc_attr($slug) . '">' . esc_html($plugin['name']) . '<div class="wizard-plugin-title">';

					$content['detail'] .= '<span class="wizard-plugin-status">Installation Required</span><i class="spinner"></i></div></li>';

				}
				$content['detail'] .= '</ul>';

				return $content;
	}


	/**
	 * Print the content for the widgets step
	 * @since 1.1.0
	 */
	public function get_step_widgets()
	{ ?>
		<div class="summary">
			<p>
				<?php esc_html_e('This theme supports importing the demo content and adding widgets. Get them installed with the below button. Using the Customizer, it is possible to update or even deactivate them', 'vw-stock-images-pro'); ?>
			</p>
		</div>
	<?php }


	/**
	 * Print the content for the Design choices for the user
	 */

	public function get_step_design()
	{ ?>

		<div class="ibtana-design-product-row">
		</div>
		<div class="wizard-design-button-wrapper">
			<a href="#" class="button button-primary do-it" data-step="design" id="IbtanaImportButton"
				data-callback="inner_page_builder">Import</a>
		</div>

	<?php }
	/**
	 * Print the content for the final step
	 */
	public function get_step_done()
	{

		?>

		<div class="vw-setup-finish">
			<p>
				<?php echo esc_html('Your demo content has been imported successfully . Click on the finish button for more information.'); ?>
			</p>
			<div class="finish-buttons">
				<a href="<?php echo esc_url(admin_url('/customize.php')); ?>" class="wz-btn-customizer"
					target="_blank"><?php esc_html_e('Customize Your Demo', 'vw-stock-images-pro') ?></a>
				<a href="" class="wz-btn-builder"
					target="_blank"><?php esc_html_e('Customize Your Demo', 'vw-stock-images-pro'); ?></a>
				<a href="<?php echo esc_url(site_url()); ?>" class="wz-btn-visit-site"
					target="_blank"><?php esc_html_e('Visit Your Site', 'vw-stock-images-pro'); ?></a>
			</div>
			<div class="vw-finish-btn">
				<a href="javascript:void(0);" class="button button-primary" onclick="openCity(event, 'theme_info')"
					data-tab="theme_info">Finish</a>
			</div>
		</div>

	<?php }

	function moveArrayPosition(&$array, $a, $b)
	{
		$p1 = array_splice($array, $a, 1);
		$p2 = array_splice($array, 0, $b);
		$array = array_merge($p2, $p1, $array);
		return $array;
	}

	/**
	 * Get the plugins registered with TGMPA
	 */
	public function get_plugins()
	{

		$instance = call_user_func(array(get_class($GLOBALS['tgmpa']), 'get_instance'));
		$plugins = array(
			'all' => array(),
			'install' => array(),
			'update' => array(),
			'activate' => array()
		);
		foreach ($instance->plugins as $slug => $plugin) {
			if ($instance->is_plugin_active($slug) && false === $instance->does_plugin_have_update($slug)) {
				// Plugin is installed and up to date
				continue;
			} else {
				$plugins['all'][$slug] = $plugin;
				if (!$instance->is_plugin_installed($slug)) {
					$plugins['install'][$slug] = $plugin;
				} else {
					if (false !== $instance->does_plugin_have_update($slug)) {
						$plugins['update'][$slug] = $plugin;
					}
					if ($instance->can_plugin_activate($slug)) {
						$plugins['activate'][$slug] = $plugin;
					}
				}
			}
		}
		return $plugins;
	}

	public function setup_plugins()
	{

		if (!check_ajax_referer('whizzie_nonce', 'wpnonce') || empty($_POST['slug'])) {
			wp_send_json_error(array('error' => 1, 'message' => esc_html__('No Slug Found', 'vw-stock-images-pro')));
		}
		$json = array();
		// send back some json we use to hit up TGM
		$plugins = $this->get_plugins();

		// what are we doing with this plugin?
		foreach ($plugins['activate'] as $slug => $plugin) {
			if ($_POST['slug'] == $slug) {
				$json = array(
					'url' => admin_url($this->tgmpa_url),
					'plugin' => array($slug),
					'tgmpa-page' => $this->tgmpa_menu_slug,
					'plugin_status' => 'all',
					'_wpnonce' => wp_create_nonce('bulk-plugins'),
					'action' => 'tgmpa-bulk-activate',
					'action2' => -1,
					'message' => esc_html__('Activating Plugin', 'vw-stock-images-pro'),
				);
				break;
			}
		}
		foreach ($plugins['update'] as $slug => $plugin) {
			if ($_POST['slug'] == $slug) {
				$json = array(
					'url' => admin_url($this->tgmpa_url),
					'plugin' => array($slug),
					'tgmpa-page' => $this->tgmpa_menu_slug,
					'plugin_status' => 'all',
					'_wpnonce' => wp_create_nonce('bulk-plugins'),
					'action' => 'tgmpa-bulk-update',
					'action2' => -1,
					'message' => esc_html__('Updating Plugin', 'vw-stock-images-pro'),
				);
				break;
			}
		}
		foreach ($plugins['install'] as $slug => $plugin) {
			if ($_POST['slug'] == $slug) {
				$json = array(
					'url' => admin_url($this->tgmpa_url),
					'plugin' => array($slug),
					'tgmpa-page' => $this->tgmpa_menu_slug,
					'plugin_status' => 'all',
					'_wpnonce' => wp_create_nonce('bulk-plugins'),
					'action' => 'tgmpa-bulk-install',
					'action2' => -1,
					'message' => esc_html__('Installing Plugin', 'vw-stock-images-pro'),
				);
				break;
			}
		}
		if ($json) {
			$json['hash'] = md5(serialize($json)); // used for checking if duplicates happen, move to next plugin
			wp_send_json($json);
		} else {
			wp_send_json(array('done' => 1, 'message' => esc_html__('Success', 'vw-stock-images-pro')));
		}
		exit;
	}

	public static function get_page_id_by_title($pagename)
	{
		$args = array(
			'post_type' => 'page',
			'posts_per_page' => 1,
			'title' => $pagename
		);
		$query = new WP_Query($args);

		$page_id = '1';
		if (isset($query->post->ID)) {
			$page_id = $query->post->ID;
		}

		return $page_id;
	}

	public function theme_create_customizer_nav_menu_gutenberg()
	{
		$menuname = 'Primary Menu';
		$bpmenulocation = 'primary';
		$menu_exists = wp_get_nav_menu_object($menuname);

		if (!$menu_exists) {
			$menu_id = wp_create_nav_menu($menuname);
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Home'),
				'menu-item-classes' => 'home',
				'menu-item-url' => home_url('/'),
				'menu-item-status' => 'publish'
			));


			if (!has_nav_menu($bpmenulocation)) {
				$locations = get_theme_mod('nav_menu_locations');
				$locations[$bpmenulocation] = $menu_id;
				set_theme_mod('nav_menu_locations', $locations);
			}
		}
	}

	// ------- Create Nav Menu --------
	public function theme_create_customizer_nav_menu()
	{
		$menuname = 'Primary Menu';
		$bpmenulocation = 'primary';
		$menu_exists = wp_get_nav_menu_object($menuname);

		if (!$menu_exists) {
			$menu_id = wp_create_nav_menu($menuname);
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Home'),
				'menu-item-classes' => 'home',
				'menu-item-url' => home_url('/'),
				'menu-item-status' => 'publish'
			));

			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('About', 'vw-stock-images-pro'),
				'menu-item-classes' => 'about',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('About')),
				'menu-item-type' => 'custom',
				'menu-item-status' => 'publish'
			));

			$categories_menu_id = wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Services', 'vw-stock-images-pro'),
				'menu-item-status' => 'publish',
			));

			$terms_services = get_terms(array(
				'taxonomy' => 'services-category',
				'hide_empty' => false
			));

			foreach ($terms_services as $term) {

				if ($term->name == 'Commercial' || $term->name == 'Residential') {
					wp_update_nav_menu_item($menu_id, 0, array(
						'menu-item-title' => __($term->name . ' Services', 'vw-stock-images-pro'),
						'menu-item-classes' => $term->slug,
						'menu-item-url' => get_term_link($term->term_id),
						'menu-item-status' => 'publish',
						'menu-item-parent-id' => $categories_menu_id
					));
				}
			}

			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Shop', 'vw-stock-images-pro'),
				'menu-item-classes' => 'shop',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Shop')),
				'menu-item-status' => 'publish'
			));
			$parent_page_item = wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Pages', 'vw-stock-images-pro'),
				'menu-item-classes' => 'page',
				'menu-item-status' => 'publish'
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Pest Library', 'vw-stock-images-pro'),
				'menu-item-classes' => 'pest-library',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Pest Library')),
				'menu-item-status' => 'publish',
				'menu-item-parent-id' => $parent_page_item
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Support', 'vw-stock-images-pro'),
				'menu-item-classes' => 'support',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Support')),
				'menu-item-status' => 'publish',
				'menu-item-parent-id' => $parent_page_item
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Terms & Condition', 'vw-stock-images-pro'),
				'menu-item-classes' => 'term-condition',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Terms & Condition')),
				'menu-item-status' => 'publish',
				'menu-item-parent-id' => $parent_page_item
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Privacy Policy', 'vw-stock-images-pro'),
				'menu-item-classes' => 'privacy-policy',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Privacy Policy')),
				'menu-item-status' => 'publish',
				'menu-item-parent-id' => $parent_page_item
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('404', 'vw-stock-images-pro'),
				'menu-item-classes' => 'error',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('404')),
				'menu-item-status' => 'publish',
				'menu-item-parent-id' => $parent_page_item
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Faq', 'vw-stock-images-pro'),
				'menu-item-classes' => 'faq',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('FAQ')),
				'menu-item-status' => 'publish',
				'menu-item-parent-id' => $parent_page_item
			));
			$blog_page_item = wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Blog', 'vw-stock-images-pro'),
				'menu-item-classes' => 'page',
				'menu-item-status' => 'publish'
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Blog With No Sidebar', 'vw-stock-images-pro'),
				'menu-item-classes' => 'blog-left-sidebar',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Blog')),
				'menu-item-status' => 'publish',
				'menu-item-parent-id' => $blog_page_item
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Blog Left Sidebar', 'vw-stock-images-pro'),
				'menu-item-classes' => 'blog-left-sidebar',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Blog Left Sidebar')),
				'menu-item-status' => 'publish',
				'menu-item-parent-id' => $blog_page_item
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Blog Right Sidebar', 'vw-stock-images-pro'),
				'menu-item-classes' => 'blog-right-sidebar',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Blog Right Sidebar')),
				'menu-item-status' => 'publish',
				'menu-item-parent-id' => $blog_page_item
			));

			if (!has_nav_menu($bpmenulocation)) {
				$locations = get_theme_mod('nav_menu_locations');
				$locations[$bpmenulocation] = $menu_id;
				set_theme_mod('nav_menu_locations', $locations);
			}
		}
	}

	//  }

	// ------- Create Footer Menu --------
	public function theme_create_customizer_footer_quick_links_menu()
	{
		$menuname = 'Quick Menu';
		$bpmenulocation = 'footer1';
		$menu_exists = wp_get_nav_menu_object($menuname);

		if (!$menu_exists) {
			$menu_id = wp_create_nav_menu($menuname);

			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('About', 'vw-stock-images-pro'),
				'menu-item-classes' => 'about',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('About')),
				'menu-item-type' => 'custom',
				'menu-item-status' => 'publish'
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Services', 'vw-stock-images-pro'),
				'menu-item-classes' => 'about',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Services')),
				'menu-item-type' => 'custom',
				'menu-item-status' => 'publish'
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Blog', 'vw-stock-images-pro'),
				'menu-item-classes' => 'page',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Blog')),
				'menu-item-status' => 'publish'
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Privacy Policy', 'vw-stock-images-pro'),
				'menu-item-classes' => 'privacy-policy',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Privacy Policy')),
				'menu-item-status' => 'publish',
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Terms & Condition', 'vw-stock-images-pro'),
				'menu-item-classes' => 'term-condition',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Terms & Condition')),
				'menu-item-status' => 'publish',
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Faq', 'vw-stock-images-pro'),
				'menu-item-classes' => 'faq',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('FAQ')),
				'menu-item-status' => 'publish',
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Contact', 'vw-stock-images-pro'),
				'menu-item-classes' => 'contact',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Contact')),
				'menu-item-status' => 'publish',
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Support', 'vw-stock-images-pro'),
				'menu-item-classes' => 'support',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Support')),
				'menu-item-status' => 'publish',
			));
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => __('Shop', 'vw-stock-images-pro'),
				'menu-item-classes' => 'shop',
				'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Shop')),
				'menu-item-status' => 'publish',
			));

			if (!has_nav_menu($bpmenulocation)) {
				$locations = get_theme_mod('nav_menu_locations');
				$locations[$bpmenulocation] = $menu_id;
				set_theme_mod('nav_menu_locations', $locations);
			}
		}
	}

	// ------- Create Footer Menu --------

	public function theme_create_customizer_footer_services_menu()
	{
		$main_menu_items = array(
			'Services' => array(
				'Education Centre',
				'Industrial Cleaning',
				'Office Cleaning',
				'Medical Cleaning',
				'School Cleaning'
			)
		);

		$menuname = 'Services';
		$bpmenulocation = 'footer2';
		$menu_exists = wp_get_nav_menu_object($menuname);

		if (!$menu_exists) {
			$menu_id = wp_create_nav_menu($menuname);

			foreach ($main_menu_items as $top_level_name => $column_titles) {
				foreach ($column_titles as $category_name) {
					$page = get_page_by_title($category_name, OBJECT, 'services');
					wp_update_nav_menu_item($menu_id, 0, array(
						'menu-item-title' => __($category_name, 'vw-stock-images-pro'),
						'menu-item-classes' => 'menu-category',
						'menu-item-url' => get_post_permalink($page->ID),
						'menu-item-status' => 'publish',
						'menu-item-parent-id' => $sub_menu_heading
					));
				}

			}

			if (!has_nav_menu($bpmenulocation)) {
				$locations = get_theme_mod('nav_menu_locations');
				$locations[$bpmenulocation] = $menu_id;
				set_theme_mod('nav_menu_locations', $locations);
			}
		}

	}



	/**
	 * Imports the Demo Content
	 * @since 1.1.0
	 */
	public function setup_widgets()
	{

		ini_set('upload_max_filesize', '300M');
		ini_set('max_execution_time', '3000');


		// $this->custom_posttype_option();

		set_theme_mod('vw_stock_images_pro_inner_page_banner_bgimage', get_template_directory_uri() . '/assets/images/title-banner.png');


		// vw_title_banner_image_wp_custom_attachment START
		$image_url = get_template_directory_uri() . '/assets/images/title-banner.png';
		$upload_dir = wp_upload_dir();
		$image_data = file_get_contents($image_url);
		$filename = basename($image_url);
		if (wp_mkdir_p($upload_dir['path'])) {
			$file = $upload_dir['path'] . '/' . $filename;
		} else {
			$file = $upload_dir['basedir'] . '/' . $filename;
		}
		file_put_contents($file, $image_data);
		$wp_filetype = wp_check_filetype($filename, null);
		$attachment = array(
			'post_mime_type' => $wp_filetype['type'],
			'post_title' => sanitize_file_name($filename),
			'post_content' => '',
			'post_status' => 'inherit'
		);
		$attach_id = wp_insert_attachment($attachment, $file);
		require_once(ABSPATH . 'wp-admin/includes/image.php');
		$attach_data = wp_generate_attachment_metadata($attach_id, $file);
		wp_update_attachment_metadata($attach_id, $attach_data);
		$banner_attachment_url = wp_get_attachment_url($attach_id);
		// vw_title_banner_image_wp_custom_attachment END

		//POST and update the customizer and other related data of VW Video Vlog Pro
		$home_id = '';
		$vw_blog_id = '';
		$page_id = '';
		$contact_id = '';
		// Create a front page and assigned the template
		$home_title = 'Home';
		$home_check = get_page_by_title($home_title);
		$home = array(
			'post_type' => 'page',
			'post_title' => $home_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'home'
		);
		$home_id = wp_insert_post($home);
		//Set the home page template
		add_post_meta($home_id, '_wp_page_template', 'page-template/home-page.php');

		//Set the static front page
		$home = get_page_by_title('Home');
		update_option('page_on_front', $home->ID);
		update_option('show_on_front', 'page');

		//  assign the banner image to the shop page
		$shop_page = get_page_by_title('Shop');
		add_post_meta($shop_page->ID, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);


		// Create a blog Blog and assigned the template
		$blog_title = 'Blog';
		$blog_check = get_page_by_title($blog_title);
		$blog = array(
			'post_type' => 'page',
			'post_title' => $blog_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'blog'
		);
		$blog_id = wp_insert_post($blog);

		//Set the blog page template
		add_post_meta($blog_id, '_wp_page_template', 'page-template/blog-fullwidth-extend.php');
		add_post_meta($blog_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);
		// add_post_meta( $blog_id, '
		// ', $attachment_url );



		$blog_title = 'Blog Left Sidebar';
		$blog = array(
			'post_type' => 'page',
			'post_title' => $blog_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'blog-left-sidebar'
		);
		$blog_id = wp_insert_post($blog);

		//Set the blog page template
		add_post_meta($blog_id, '_wp_page_template', 'page-template/blog-with-left-sidebar.php');
		add_post_meta($blog_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

		$blog_title = 'Blog Right Sidebar';
		$blog = array(
			'post_type' => 'page',
			'post_title' => $blog_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'blog-right-sidebar'
		);
		$blog_id = wp_insert_post($blog);

		//Set the blog page template
		add_post_meta($blog_id, '_wp_page_template', 'page-template/blog-with-right-sidebar.php');
		add_post_meta($blog_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

		// Create a Page
		if (get_page_by_title('Page') == NULL) {
			$page_title = 'Page ';
			$content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. laborum.ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

			$page_check = get_page_by_title($page_title);
			$page = array(
				'post_type' => 'page',
				'post_title' => $page_title,
				'post_content' => $content,
				'post_status' => 'publish',
				'post_author' => 1,
				'post_slug' => 'page'
			);
			$page_id = wp_insert_post($page);
			add_post_meta($page_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);
			$page_title = 'Page Left Sidebar';
			$content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semelTe obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.';

			$page_check = get_page_by_title($page_title);
			$vw_page = array(
				'post_type' => 'page',
				'post_title' => $page_title,
				'post_content' => $content,
				'post_status' => 'publish',
				'post_author' => 1,
				'post_slug' => 'page-left'
			);
			$page_id = wp_insert_post($vw_page);

			//Set the blog page template
			add_post_meta($page_id, '_wp_page_template', 'page-template/page-with-left-sidebar.php');
			add_post_meta($page_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

			$page_title = 'Page Right Sidebar';
			$content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semelTe obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.';

			$page_check = get_page_by_title($page_title);
			$vw_page = array(
				'post_type' => 'page',
				'post_title' => $page_title,
				'post_content' => $content,
				'post_status' => 'publish',
				'post_author' => 1,
				'post_slug' => 'page-right'
			);
			$page_id = wp_insert_post($vw_page);

			//Set the blog page template
			add_post_meta($page_id, '_wp_page_template', 'page-template/page-with-right-sidebar.php');
			add_post_meta($page_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);
		}
		// Create a contact page and assigned the template
		$contact_title = 'Contact';
		$contact_check = get_page_by_title($contact_title);
		$contact = array(
			'post_type' => 'page',
			'post_title' => $contact_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'contact'
		);
		$contact_id = wp_insert_post($contact);

		//Set the blog with right sidebar template
		add_post_meta($contact_id, '_wp_page_template', 'page-template/contact.php');
		add_post_meta($contact_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

		// Create a Services page and assigned the template
		$services_title = 'Services';
		$services_check = get_page_by_title($services_title);
		$services = array(
			'post_type' => 'page',
			'post_title' => $services_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'services'
		);
		$services_id = wp_insert_post($services);

		add_post_meta($services_id, '_wp_page_template', 'page-template/services.php');
		add_post_meta($services_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

		//-----Pests Problem-------
		$pests_library_title = 'Pest Library';
		$pests_library_check = get_page_by_title($pests_library_title);
		$pests_library = array(
			'post_type' => 'page',
			'post_title' => $pests_library_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'pests_library'
		);
		$pests_library_id = wp_insert_post($pests_library);

		add_post_meta($pests_library_id, '_wp_page_template', 'page-template/pests-library.php');
		add_post_meta($pests_library_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

		//---------------FAQ-------------

		$faq_title = 'FAQ';
		$faq_check = get_page_by_title($faq_title);
		$faq = array(
			'post_type' => 'page',
			'post_title' => $faq_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'faq'
		);
		$faq_id = wp_insert_post($faq);

		add_post_meta($faq_id, '_wp_page_template', 'page-template/Faq.php');
		add_post_meta($faq_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);


		//---------------Appointment-------------

		$appoinment_title = 'Appointment';
		$appoinment_check = get_page_by_title($appoinment_title);
		$appoinment = array(
			'post_type' => 'page',
			'post_title' => $appoinment_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'appoinment'
		);
		$appoinment_id = wp_insert_post($appoinment);

		add_post_meta($appoinment_id, '_wp_page_template', 'page-template/Appointment.php');
		add_post_meta($appoinment_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);


		// / Create a Terms page and assigned the template


		//Privacy Policy page
		$privacy_content = '
					<h2>Privacy Policy</h2>
				    <p>Pests Control Services is committed to protecting the privacy and security of your personal information. This Privacy Policy describes how we collect, use, and disclose information through our website and services.</p>

				    <h2>Information We Collect</h2>
				    <p>We may collect personal information that you provide to us, such as your name, address, email address, phone number, and payment information when you:</p>
				    <ul>
				        <li>Request a quote or schedule a service</li>
				        <li>Contact us through our website or by phone</li>
				        <li>Participate in surveys or promotions</li>
				        <li>Submit reviews or testimonials</li>
				    </ul>
				    <p>We may also collect information automatically when you visit our website, including your IP address, browser type, device type, and browsing behavior.</p>

				    <h2>How We Use Your Information</h2>
				    <p>We use the information we collect for the following purposes:</p>
				    <ul class="">
				        <li>To provide and improve our services</li>
				        <li>To communicate with you about your inquiries, appointments, and account</li>
				        <li>To send you promotional offers, newsletters, and updates (you may opt out at any time)</li>
				        <li>To analyze website usage and trends</li>
				        <li>To prevent fraud and enhance security</li>
				    </ul>

				    <h2>Information Sharing</h2>
				    <p>We may share your personal information with third parties for the following purposes:</p>
				    <ul>
				        <li>Service providers: We may share your information with contractors, vendors, and other third parties who help us provide and improve our services.</li>
				        <li>Legal purposes: We may disclose your information in response to legal requests, court orders, or to comply with applicable laws and regulations.</li>
				        <li>Business transfers: In the event of a merger, acquisition, or sale of assets, your information may be transferred as part of the transaction.</li>
				    </ul>

				    <h2>Data Security</h2>
				    <p>We take reasonable measures to protect the security and integrity of your personal information. However, please note that no method of transmission over the internet or electronic storage is 100% secure.</p>

				    <h2>Your Choices</h2>
				    <p>You may update, correct, or delete your personal information by contacting us. You may also unsubscribe from promotional emails by following the instructions provided in the email.</p>

				    <h2>Childrens Privacy</h2>
				    <p>Our services are not directed to individuals under the age of 18. We do not knowingly collect personal information from children. If you believe that we have inadvertently collected information from a child, please contact us immediately.</p>

				    <h2>Changes to this Privacy Policy</h2>
				    <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new policy on this page.</p>

				    <h2>Contact Us</h2>
				    <p>If you have any questions or concerns about our Privacy Policy, please contact us at <a href="mailto:contact@example.com">contact@example.com</a>.</p>
				';

		$page_name = 'Privacy Policy';//
		$page_id = ThemeWhizzie::get_page_id_by_title($page_name);
		if ($page_id) {
			$my_post = array(
				'ID' => $page_id,
				'post_status' => 'publish',
				'post_content' => $privacy_content
			);
			$privacy_id = wp_update_post($my_post);
			add_post_meta($privacy_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);
		}


		//Terms Condition page

		$terms_page = 'Terms & Condition';
		$content = '
				<div id="terms-condition-main">
			    <h2>1. Acceptance of Terms</h2>
			    <p>By accessing or using our website, you agree to be bound by these Terms and Conditions, our Privacy Policy, and all applicable laws and regulations. If you do not agree with any of these terms, you are prohibited from using or accessing this site.</p>

			    <h2>2. Services</h2>
			    <p>Our company provides pest control services as described on our website. By requesting our services, you agree to abide by our service terms and any additional agreements made between you and our company.</p>

			    <h2>3. Payment</h2>
			    <p>Payment for our services is due upon completion, unless otherwise agreed upon. We accept payment via [list accepted payment methods]. Failure to pay may result in additional fees or legal action.</p>

			    <h2>4. Cancellations and Refunds</h2>
			    <p>Cancellations must be made [number of days] prior to the scheduled service date to receive a full refund. Refunds will be issued in the original form of payment. Refunds will not be provided for cancellations made after this time period.</p>

			    <h2>5. Liability</h2>
			    <p>Our company is not liable for any damages or injuries resulting from the use of our services, except where prohibited by law. We are not responsible for damages to property or belongings caused by pests.</p>

			    <h2>6. Warranty</h2>
			    <p>We warrant that our services will be performed in a professional manner and in accordance with industry standards. If you are not satisfied with our services, please contact us within [number of days] for resolution.</p>

			    <h2>7. Indemnification</h2>
			    <p>You agree to indemnify and hold harmless our company, its officers, employees, and agents from any claims, damages, or losses arising out of your use of our services or violation of these Terms and Conditions.</p>

			    <h2>8. Governing Law</h2>
			    <p>These Terms and Conditions shall be governed by and construed in accordance with the laws of [your jurisdiction]. Any disputes arising under these terms shall be subject to the exclusive jurisdiction of the courts in [your jurisdiction].</p>

			    <h2>9. Changes to Terms</h2>
			    <p>We reserve the right to update or modify these Terms and Conditions at any time without prior notice. Changes will be effective immediately upon posting to our website. It is your responsibility to review these terms periodically for updates.</p>

			    <h2>10. Contact Us</h2>
			    <p>If you have any questions or concerns about these Terms and Conditions, please contact us at <a href="mailto:contact@example.com">contact@example.com</a>.</p>
				</div>
					';
		$menu = array(
			'post_type' => 'page',
			'post_title' => $terms_page,
			'post_content' => $content,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'page'
		);
		$menu_id = wp_insert_post($menu);

		//Set the blog with right sidebar template
		add_post_meta($menu_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);


		//Terms Condition page

		$support_page = 'Support';
		$content = '
			<h2>How To Get Support?</h2>

					<h4>Dear customers, future customers and Friends!</h4>

					<p>This support interface has all the tools we need to listen to your ideas and help you with your problems. Just choose your Department and write your questions or problems. We love feedback and satisfied customers. We promise that you will get answer for your question in 24 hours, so prepare to get satisfied.</p>

					<hr>

					<h4>If you have product related problem on your site please provide us the following things:</h4>

					<p>This support interface has all the tools we need to listen to your ideas and help you with your problems. Just choose your Department and write your questions or problems. We love feedback and satisfied customers. We promise that you will get answer for your question in 24 hours, so prepare to get satisfied.</p>


					<ul class="half-width">
						<li>Link to your site: To check your site...</li>
						<li>FTP access (optional): Sometimes we can`t solve the problems without it...</li>
						<li>Admin account: To dig in the site more deeply...</li>
						<li>Important: Please sure that you added your domain to our domain list here. We will be priority support for domains which are registered in our domain list.</li>
						<li>Order id: To identify yourself...</li>
						<li>Order id: To identify yourself...</li>
					</ul>

					<hr>

					<h4>How to write a support message?<h4>

					<ul class="d-block">
					<li>Language: Please write us in the following languages: english.</li>
					<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
					</ul>

					<h2 class="mt-5">Contact Us</h2>

					<h4>Lorem Ipsum is simply dummy text of the printing</h4>

					<ul class="d-block">
						<li class="mb-2">Lorem Ipsum is simply dummy text of the printing</li>
						<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
					</ul>
				';
		$support = array(
			'post_type' => 'page',
			'post_title' => $support_page,
			'post_content' => $content,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'page'
		);
		$support_id = wp_insert_post($support);

		//Set the blog with right sidebar template
		add_post_meta($support_id, '_wp_page_template', 'page-template/support.php');
		add_post_meta($support_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);





		$menu_title = '2 Columns';
		$content = '[products  columns="2" orderby="date" order="DESC" visibility="visible"]';
		$menu = array(
			'post_type' => 'page',
			'post_title' => $menu_title,
			'post_content' => $content,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'page'
		);
		$menu_id = wp_insert_post($menu);

		//Set the blog with right sidebar template
		add_post_meta($menu_id, '_wp_page_template', 'page-template/2-columns.php');
		add_post_meta($menu_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

		// Create a contact page and assigned the template
		$menu_title = '3 Columns';
		$content = '[products  columns="3" orderby="date" order="DESC" visibility="visible"]';
		$menu = array(
			'post_type' => 'page',
			'post_title' => $menu_title,
			'post_content' => $content,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'page'
		);
		$menu_id = wp_insert_post($menu);

		//Set the blog with right sidebar template
		add_post_meta($menu_id, '_wp_page_template', 'page-template/3-columns.php');
		add_post_meta($menu_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

		// Create a  page and assigned the template
		$menu_title = '4 Columns';
		$content = '[products  columns="4" orderby="date" order="DESC" visibility="visible"]';
		$menu = array(
			'post_type' => 'page',
			'post_title' => $menu_title,
			'post_content' => $content,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'page'
		);
		$menu_id = wp_insert_post($menu);


		$aboutus_title = 'About';
		$aboutus = array(
			'post_type' => 'page',
			'post_title' => $aboutus_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'aboutus'
		);
		$aboutus_id = wp_insert_post($aboutus);


		add_post_meta($aboutus_id, '_wp_page_template', 'page-template/about.php');
		add_post_meta($aboutus_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

		$error_title = '404';
		$error = array(
			'post_type' => 'page',
			'post_title' => $error_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'error-us'
		);
		$error_id = wp_insert_post($error);

		//Set the single testimonial with right sidebar template
		add_post_meta($error_id, '_wp_page_template', '404.php');
		add_post_meta($error_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);


		$location_title = 'Location';
		$location_check = get_page_by_title($location_title);
		$location = array(
			'post_type' => 'page',
			'post_title' => $location_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'location'
		);
		$location_id = wp_insert_post($location);

		add_post_meta($location_id, '_wp_page_template', 'page-template/find-location.php');
		add_post_meta($location_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

		// -------------- Section Ordering ---------------
		set_theme_mod('vw_stock_images_pro_section_ordering_settings_repeater', 'slider,pests-problem,about,professional-services,counter-offer,why-choose-us,counter,popular-products,faq,our-newsletter,our-clients,professional-team,latest-news,gallery,partners');

		// topbar

		$topbar_social_icons = array(
			'vwsmp_facebook' => 'https://www.facebook.com/',
			'vwsmp_admin_check_facebook' => '1',
			'vwsmp_twitter' => 'https://www.twitter.com/',
			'vwsmp_admin_check_twitter' => '1',
			'vwsmp_instagram' => 'https://www.instagram.com/',
			'vwsmp_admin_check_instagram' => '1',
			'vwsmp_pinterest' => 'https://www.pinterest.com/',
			'vwsmp_admin_check_pinterest' => '1',
		);

		update_option('vwsmp_options', $topbar_social_icons);

		//Scroll Top
		set_theme_mod('vw_stock_images_pro_genral_section_show_scroll_top_icon', 'fas fa-angle-double-up');

		// topbar

		set_theme_mod('vw_stock_images_pro_topbar_location_icon', get_template_directory_uri() . '/assets/images/header/location.png');
		set_theme_mod('vw_stock_images_pro_topbar_location_text', 'Find Location');
		set_theme_mod('vw_stock_images_pro_topbar_location_text_url', get_permalink(ThemeWhizzie::get_page_id_by_title('Location')));

		set_theme_mod('vw_stock_images_pro_topbar_number_icon', get_template_directory_uri() . '/assets/images/header/contact.png');
		set_theme_mod('vw_stock_images_pro_topbar_text_number', 'Contact Us');
		set_theme_mod('vw_stock_images_pro_topbar_text_number_url', get_permalink(ThemeWhizzie::get_page_id_by_title('Contact')));

		set_theme_mod('vw_stock_images_pro_topbar_appoinment_btn_text', 'Appointment');
		set_theme_mod('vw_stock_images_pro_topbar_appoinment_btn_url', get_permalink(ThemeWhizzie::get_page_id_by_title('Appointment')));

		// set_theme_mod('vw_stock_images_pro_search_placeholder_text_search_placeholder_text', 'Search Here');
		// set_theme_mod( 'vw_stock_images_pro_header_search_icon', 'fa fa-search' );
		// -----------------slider---------------------------

		set_theme_mod('vw_stock_images_pro_slider_heading', 'High Quality Stock Images & Videos');
		set_theme_mod('vw_stock_images_pro_slider_heading_two', 'Solutions for Every Need');
		set_theme_mod('vw_stock_images_pro_slider_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
		set_theme_mod('vw_stock_images_pro_slider_right_mosquito_img', get_template_directory_uri() . '/assets/images/slider/mosquito.png');
		set_theme_mod('vw_stock_images_pro_slider_right_beetle_img', get_template_directory_uri() . '/assets/images/slider/beetle.png');
		set_theme_mod('vw_stock_images_pro_slider_right_man_img', get_template_directory_uri() . '/assets/images/slider/slider-man.png');
		set_theme_mod('vw_stock_images_pro_slider_btn_text', 'Read More');
		set_theme_mod('vw_stock_images_pro_slider_btn_url', get_permalink(ThemeWhizzie::get_page_id_by_title('about')));

		set_theme_mod('vw_stock_images_pro_slider_additonal_img_one', get_template_directory_uri() . '/assets/images/slider/spider.png');
		set_theme_mod('vw_stock_images_pro_slider_additonal_img_two', get_template_directory_uri() . '/assets/images/slider/cockroach.png');

		set_theme_mod('vw_stock_images_pro_slider_facebook_icon', 'fa-brands fa-facebook-f');
		set_theme_mod('vw_stock_images_pro_slider_facebook_icon_url', 'https://www.facebook.com/');

		set_theme_mod('vw_stock_images_pro_slider_twitter_icon', 'fab fa-x-twitter');
		set_theme_mod('vw_stock_images_pro_slider_twitter_icon_url', 'https://twitter.com/');

		set_theme_mod('vw_stock_images_pro_slider_instagram_icon', 'fab fa-instagram');
		set_theme_mod('vw_stock_images_pro_slider_instagram_icon_url', 'https://www.instagram.com/');

		set_theme_mod('vw_stock_images_pro_slider_youtube_icon', 'fa-brands fa-youtube');
		set_theme_mod('vw_stock_images_pro_slider_youtube_icon_url', 'https://www.youtube.com/');

		set_theme_mod('vw_stock_images_pro_slider_dribble_icon', 'fa-solid fa-basketball');
		set_theme_mod('vw_stock_images_pro_slider_dribble_icon_url', 'https://dribbble.com/');

		set_theme_mod('vw_stock_images_pro_slider_social_icon_heading', 'Follow On Social Media');

		set_theme_mod('vw_stock_images_pro_slider_right_beetle_img', get_template_directory_uri() . '/assets/images/slider/beetle.png');
		set_theme_mod('vw_stock_images_pro_slider_right_mosquito_img', get_template_directory_uri() . '/assets/images/slider/mosquito.png');
		set_theme_mod('vw_stock_images_pro_slider_right_reviews_img', get_template_directory_uri() . '/assets/images/slider/Slider-review.png');
		set_theme_mod('vw_stock_images_pro_right_review_heading', '120K+');
		set_theme_mod('vw_stock_images_pro_right_review_para', 'Reviews');
		// -----------------Pests Problem-------------------


		set_theme_mod('vw_stock_images_pro_pests_problem_heading', 'Common Pests Problems');
		set_theme_mod('vw_stock_images_pro_pests_problem_paragraph', 'Lorem Ipsum is simply dummy text of the printing and typesetting');
		set_theme_mod('vw_stock_images_pro_pests_problem_btn_text', 'View More');
		set_theme_mod('vw_stock_images_pro_pests_problem_btn_url', get_permalink(ThemeWhizzie::get_page_id_by_title('Pest Library')));



		$content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, q.";
		$pests_title = array('Termites', 'Bed bugs', 'Mosquitos', 'Cockroaches', 'Gnats', 'Beetles', 'Flies', 'Ticks');
		for ($i = 1; $i <= 8; $i++) {
			// Create post object
			$my_post = array(
				'post_title' => wp_strip_all_tags($pests_title[$i - 1]),
				'post_content' => $content,
				'post_status' => 'publish',
				'post_type' => 'pests-problem'
			);

			// Insert the post into the database
			$post_id = wp_insert_post($my_post);

			update_post_meta($post_id, 'pests-para-one', "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.");
			update_post_meta($post_id, 'pests-list-heading', "Solutions");
			update_post_meta($post_id, 'pests-list-one', "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet, ligula condimentum tincidunt, arcu orci laoreet massa,");
			update_post_meta($post_id, 'pests-list-two', "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet, ligula condimentum tincidunt, arcu orci laoreet massa,.");
			update_post_meta($post_id, 'pests-list-three', "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet, ligula condimentum tincidunt, arcu orci laoreet massa.");
			update_post_meta($post_id, 'pests-list-four', "Lorem Ipsum is simply dummy text of the printing.");
			update_post_meta($post_id, 'pests-list-five', "Lorem Ipsum is simply dummy text of the printing.");
			update_post_meta($post_id, 'pests-para-two', "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla ariatur");


			add_post_meta($post_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);


			update_post_meta($post_id, 'service-para', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.");

			$image_url = get_template_directory_uri() . '/assets/images/pests-problem/problem' . $i . '.png';

			$image_name = 'problem' . $i . '.png';
			$upload_dir = wp_upload_dir();
			// Set upload folder
			$image_data = file_get_contents($image_url);
			// Get image data
			$unique_file_name = wp_unique_filename($upload_dir['path'], $image_name);
			// Generate unique name
			$filename = basename($unique_file_name);
			// Create image file name
			// Check folder permission and define file location
			if (wp_mkdir_p($upload_dir['path'])) {
				$file = $upload_dir['path'] . '/' . $filename;
			} else {
				$file = $upload_dir['basedir'] . '/' . $filename;
			}
			// Create the image  file on the server
			file_put_contents($file, $image_data);
			// Check image file type
			$wp_filetype = wp_check_filetype($filename, null);
			// Set attachment data
			$attachment = array(
				'post_mime_type' => $wp_filetype['type'],
				'post_title' => sanitize_file_name($filename),
				'post_content' => '',
				'post_type' => 'pests-problem',
				'post_status' => 'inherit'
			);

			// Create the attachment
			$attach_id = wp_insert_attachment($attachment, $file, $post_id);
			// Include image.php
			require_once(ABSPATH . 'wp-admin/includes/image.php');
			// Define attachment metadata
			$attach_data = wp_generate_attachment_metadata($attach_id, $file);
			// Assign metadata to attachment
			wp_update_attachment_metadata($attach_id, $attach_data);
			// And finally assign featured image to post
			set_post_thumbnail($post_id, $attach_id);
		}

		// -------------About Section-------------------
		set_theme_mod('vw_stock_images_pro_about_heading', 'Your Trusted Partner in Effective Pest Management Solutions');
		set_theme_mod('vw_stock_images_pro_about_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");

		set_theme_mod('vw_stock_images_pro_about_left_img_one', get_template_directory_uri() . '/assets/images/about/medal.png');
		set_theme_mod('vw_stock_images_pro_about_left_heading_one', 'Professional Service');
		set_theme_mod('vw_stock_images_pro_about_left_paragraph_one', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text");

		set_theme_mod('vw_stock_images_pro_about_left_img_two', get_template_directory_uri() . '/assets/images/about/layer.png');
		set_theme_mod('vw_stock_images_pro_about_left_heading_two', '100% Service Guarantee');
		set_theme_mod('vw_stock_images_pro_about_left_paragraph_two', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text");

		set_theme_mod('vw_stock_images_pro_about_left_btn_text', 'Explore More');
		set_theme_mod('vw_stock_images_pro_about_left_btn_url', get_permalink(ThemeWhizzie::get_page_id_by_title('about')));

		set_theme_mod('vw_stock_images_pro_about_manager_img', get_template_directory_uri() . '/assets/images/about/profile.png');
		set_theme_mod('vw_stock_images_pro_about_manager_name', 'Mirza Alexander');
		set_theme_mod('vw_stock_images_pro_about_manager_text', "Manager");

		set_theme_mod('vw_stock_images_pro_about_manager_sign_img', get_template_directory_uri() . '/assets/images/about/sign.png');

		set_theme_mod('vw_stock_images_pro_about_img_one', get_template_directory_uri() . '/assets/images/about/about-img2.png');
		set_theme_mod('vw_stock_images_pro_about_img_two', get_template_directory_uri() . '/assets/images/about/about-img1.png');
		set_theme_mod('vw_stock_images_pro_about_img_three', get_template_directory_uri() . '/assets/images/about/about-img3.png');

		set_theme_mod('vw_stock_images_pro_about_year_number', '22+');
		set_theme_mod('vw_stock_images_pro_about_year_text', 'Experience');
		set_theme_mod('vw_stock_images_pro_about_phone_icon', 'fa-solid fa-phone');
		set_theme_mod('vw_stock_images_pro_about_number', 'Emergency');
		set_theme_mod('vw_stock_images_pro_about_emergency_number', '+12 345678912');

		// ---------------------Professional  Services--------------
		set_theme_mod('vw_stock_images_pro_professional_services_heading', 'Professional Services');
		set_theme_mod('vw_stock_images_pro_professional_services_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry");
		set_theme_mod('vw_stock_images_pro_professional_services_bg_color', "#F1F1F1");

		$services_categories_array = array();

		$parent_category_arr = array(
			'Commercial' => array(
				'Medical Cleaning',
				'Office Cleaning',
				'Industrial Cleaning',
				'School Cleaning',
				'Building Cleaning',
				'Education Centre',
				'Warehouse Cleaning',
				'Factory Cleaning'
			),
			'Residential' => array('Mattress Sanitizing', 'Carpet Sanitizing', 'Whole Home Sanitize', 'Kitchen'),

		);
		$cat = 1;
		foreach ($parent_category_arr as $parent_services_cat => $parent_services) {

			$content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.";
			$parent_category = wp_insert_term(
				$parent_services_cat,
				'services-category',
				array(
					'description' => $content
				)
			);

			// Check for WP_Error before proceeding
			if (!is_wp_error($parent_category)) {
				$term_category = get_term_by('id', $parent_category['term_id'], 'services-category');

				update_term_meta($parent_category['term_id'], 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

				if ($term_category) {
					$term_slug = $term_category->slug;
					array_push($services_categories_array, $term_slug);
				}
			} else {
				// Handle the error, e.g., log it or display a message
				error_log('Error inserting term: ' . $parent_category->get_error_message());
			}

			update_term_meta($parent_category['term_id'], 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

			if ($term_category) {
				$term_slug = $term_category->slug;

				array_push($services_categories_array, $term_slug);//
			}

			set_theme_mod('vw_stock_images_pro_professional_services_categories', $services_categories_array);

			update_term_meta($parent_category['term_id'], 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);


			update_term_meta($parent_category['term_id'], 'serv_cat_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");
			update_term_meta($parent_category['term_id'], 'serv_points_one', "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet");
			update_term_meta($parent_category['term_id'], 'serv_points_two', "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet");
			update_term_meta($parent_category['term_id'], 'serv_points_three', "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet");
			update_term_meta($parent_category['term_id'], 'serv_points_four', "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet");


			if ($parent_services_cat == 'Commercial') {
				update_term_meta($parent_category['term_id'], 'serv_cat_heading', 'The Importance of Disinfecting and Sanitizing');
				update_term_meta($parent_category['term_id'], 'serv_points_heading', "Professionalism, Quality and Reliability");
				update_term_meta($parent_category['term_id'], 'category_image_one', get_template_directory_uri() . '/assets/images/services/commercial1.png');
				update_term_meta($parent_category['term_id'], 'category_image_two', get_template_directory_uri() . '/assets/images/services/commercial2.png');
			} else {
				update_term_meta($parent_category['term_id'], 'serv_cat_heading', 'Top-Quality Solutions for Condos, Rentals & More');
				update_term_meta($parent_category['term_id'], 'serv_points_heading', "Why Book Our Residential Services?");
				update_term_meta($parent_category['term_id'], 'category_image_one', get_template_directory_uri() . '/assets/images/services/residential1.png');
				update_term_meta($parent_category['term_id'], 'category_image_two', get_template_directory_uri() . '/assets/images/services/residential2.png');
			}
			$cat++;//

			$services_meta = array(
				array(
					'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
				),
				array(
					'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
				),
				array(
					'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
				),
				array(
					'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
				),
				array(
					'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
				),
				array(
					'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
				),
				array(
					'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
				),
			);


			foreach ($parent_services as $services) {
				$serv_content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged., when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting";
				$my_post = array(
					'post_title' => $services,
					'post_content' => $serv_content,
					'post_status' => 'publish',
					'post_type' => 'services',
				);
				// Insert the post into the database
				$services_id = wp_insert_post($my_post);
				wp_set_object_terms($services_id, $parent_category['term_id'], 'services-category', true);

				add_post_meta($services_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

				update_post_meta($services_id, 'read-more-text', 'Read More');
				update_post_meta($services_id, 'services_inner_title', 'Other Ways to Clean a Mattress');
				update_post_meta($services_id, 'services_inner_para', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.");
				update_post_meta($services_id, 'services_repeater_fields', $services_meta);
				update_post_meta($services_id, 'services_inner_title', 'Other Ways to Clean a Mattress');
				update_post_meta($services_id, 'get_service_btn', 'Get Service Now');
				update_post_meta($services_id, 'get_service_btn_url', get_permalink(ThemeWhizzie::get_page_id_by_title('Appointment')));


				$meta_img = get_template_directory_uri() . '/assets/images/services/' . $parent_services_cat . '/' . str_replace(" ", "-", $services) . '-Meta.png';
				update_post_meta($services_id, 'service-img', $meta_img);

				$image_url = get_template_directory_uri() . '/assets/images/services/' . $parent_services_cat . '/' . str_replace(" ", "-", $services) . '.png';
				$image_name = $services . '.png';
				$upload_dir = wp_upload_dir();
				// Set upload folder
				$image_data = file_get_contents(esc_url($image_url));

				// Get image data
				$unique_file_name = wp_unique_filename($upload_dir['path'], $image_name);
				// Generate unique name
				$filename = basename($unique_file_name);
				// Create image file name

				// Check folder permission and define file location
				if (wp_mkdir_p($upload_dir['path'])) {
					$file = $upload_dir['path'] . '/' . $filename;
				} else {
					$file = $upload_dir['basedir'] . '/' . $filename;
				}
				// Create the image  file on the server
				file_put_contents($file, $image_data);

				// Check image file type
				$wp_filetype = wp_check_filetype($filename, null);

				// Set attachment data
				$attachment = array(
					'post_mime_type' => $wp_filetype['type'],
					'post_title' => sanitize_file_name($filename),
					'post_type' => 'services',
					'post_status' => 'inherit',
				);
				// Create the attachment
				$attach_id = wp_insert_attachment($attachment, $file, $services_id);

				// Include image.php
				require_once(ABSPATH . 'wp-admin/includes/image.php');

				// Define attachment metadata
				$attach_data = wp_generate_attachment_metadata($attach_id, $file);


				// And finally assign featured image to post
				set_post_thumbnail($services_id, $attach_id);

			}
		}




		// -------------Counter Section-------------------

		set_theme_mod('vw_stock_images_pro_counter_offer_heading', 'Get Your First Pest Control Treatment FREE! Protect Your Home Today');
		set_theme_mod('vw_stock_images_pro_counter_offer_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");
		set_theme_mod('vw_stock_images_pro_counter_offer_clock_timer_end', 'July 25 2024 11:00:00');
		set_theme_mod('vw_stock_images_pro_counter_offer_sec_btn_text', 'Get Start');
		set_theme_mod('vw_stock_images_pro_counter_offer_sec_btn_url', '#');

		set_theme_mod('vw_stock_images_pro_counter_offer_img', get_template_directory_uri() . '/assets/images/counter-offer/offer-men.png');
		set_theme_mod('vw_stock_images_pro_counter_offer_bgcolor', '#F1F1F1');


		// ------------------------Why Choose Us-----------------
		set_theme_mod('vw_stock_images_pro_why_choose_us_bgcolor', '#F1F1F1');

		set_theme_mod('vw_stock_images_pro_why_choose_number', '8');
		$why_choose_title = array('Integrated Pest Management', 'Customized Treatment Plans', 'Interior Treatments', 'Bird Management', 'Regular Inspections', 'Exterior Perimeter Defense', 'Rodent Control', 'Fly Control');
		for ($i = 1; $i <= 8; $i++) {
			set_theme_mod('vw_stock_images_pro_why_choose_icon_img' . $i, get_template_directory_uri() . '/assets/images/why-choose/check-icon' . $i . '.png');
			set_theme_mod('vw_stock_images_pro_why_choose_title' . $i, $why_choose_title[$i - 1]);
		}
		set_theme_mod('vw_stock_images_pro_why_choose_heading', 'Why Our Customer Choose Us?');
		set_theme_mod('vw_stock_images_pro_why_choose_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book  text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");

		set_theme_mod('vw_stock_images_pro_why_choose_img_one', get_template_directory_uri() . '/assets/images/why-choose/why-choose1.png');
		set_theme_mod('vw_stock_images_pro_why_choose_img_video_bg_img', get_template_directory_uri() . '/assets/images/why-choose/video-bg.png');
		set_theme_mod('vw_stock_images_pro_why_choose_beetle_img', get_template_directory_uri() . '/assets/images/why-choose/why-choose-beetle.png');

		set_theme_mod('vw_stock_images_pro_why_choose_video_play_icon', 'fas fa-play');
		set_theme_mod('vw_rental_vacation_pro_video_box_video_url', 'https://www.youtube.com/embed/Wimkqo8gDZ0');

		// -----------------------Counter sec----------------
		set_theme_mod('vw_stock_images_pro_counter_bgcolor', '#F1F1F1');
		set_theme_mod('vw_stock_images_pro_counter_number', 4);

		$record_no = array('12', '102', '95', '22');
		$record_sufix = array('k+', '+', '+', '+');
		$record_title = array('Happy Customer', 'Company Support', 'Professional Expert', 'Year Experience');

		for ($i = 1; $i <= 4; $i++) {
			set_theme_mod('vw_stock_images_pro_counter_image' . $i, get_template_directory_uri() . '/assets/images/counter/counter' . $i . '.png');
			set_theme_mod('vw_stock_images_pro_counter_no' . $i, $record_no[$i - 1]);
			set_theme_mod('vw_stock_images_pro_counter_no_suffix' . $i, $record_sufix[$i - 1]);
			set_theme_mod('vw_stock_images_pro_counter_title' . $i, $record_title[$i - 1]);
		}

		// -------------product category-------------------

		set_theme_mod('vw_stock_images_pro_related_page_paragraph', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');


		set_theme_mod('vw_stock_images_pro_popular_products_heading', 'Popular Products');
		set_theme_mod('vw_stock_images_pro_popular_products_paragraph', 'Lorem Ipsum is simply dummy text of the printing and typesetting');

		set_theme_mod('vw_stock_images_pro_popular_products_btn_text', 'View More');
		set_theme_mod('vw_stock_images_pro_popular_products_btn_url', get_permalink(ThemeWhizzie::get_page_id_by_title('Shop')));

		$product_category = array(
			'Anti-Fly' => array('Handy Fly Swatter', 'Mosquito Bat'),
			'Anti-Roach' => array('Anti Cockroach Spray', 'Mosquito Coils', 'Insect Control System'),
			'Pest Prevention' => array('Herbicide Sprayer', 'Protective Sunglasses', 'Aerosol Spray Machine', 'Garden Fertilisers', 'Weed Lawn Biological'),
			'Anti-Cockroach' => array('Anti Cockroach Oil', 'Rat Trap Rodent'),
		);
		
		$k = 0;
		foreach ($product_category as $product_name => $product_title) {
			// Insert product categories
			$content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit...";
			$parent_category = wp_insert_term(
				$product_name, // the term
				'product_cat', // the taxonomy
				array(
					'description' => $content,
					'slug' => 'product_cat' . $k
				)
			);
		
			$l = 0;
			// Create products
			$review_text = array(
				'Nice product',
				'Good Quality Product',
				'Nice Product. Must buy It.',
				'I like this Product',
				'Nice Product',
			);
		
			foreach ($product_title as $key => $pro_text) {
				$content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit...";
				$product_excerpt = "Lorem ipsum dolor sit amet, consectetur adipiscing elit...";
				
				// Create post object
				$my_post = array(
					'post_title'    => wp_strip_all_tags($pro_text),
					'post_content'  => $content,
					'post_status'   => 'publish',
					'post_type'     => 'product',
					'post_excerpt'  => $product_excerpt
				);
				
				// Insert the post into the database
				$post_id = wp_insert_post($my_post);
				wp_set_object_terms($post_id, $product_name, 'product_cat', true);
		
				// Insert reviews and ratings
				for ($c = 0; $c <= 4; $c++) {
					$comment_id = wp_insert_comment(array(
						'comment_post_ID' => $post_id,
						'comment_author' => get_the_author_meta('display_name'),
						'comment_author_email' => get_the_author_meta('user_email'),
						'comment_content' => $review_text[$c],
						'comment_parent' => 0,
						'user_id' => get_current_user_id(),
						'comment_date' => date('Y-m-d H:i:s'),
						'comment_approved' => 1,
					));
		
					update_comment_meta($comment_id, 'rating', 4);
				}
		
				// Set pricing
				$random_price = 0;
				update_post_meta($post_id, '_sale_price', $random_price);
				update_post_meta($post_id, '_price', $random_price);
				update_post_meta($post_id, '_regular_price', $random_price);
		
				// Downloadable product settings
				update_post_meta($post_id, '_downloadable', 'yes');
				update_post_meta($post_id, '_virtual', 'yes');
				
				// Generate the image URL
				$image_url = get_template_directory_uri() . '/assets/images/product/' . str_replace(' ', '-', $pro_text) . '.png';
				$image_name = $pro_text . '.png';
				
				// Upload image to media library
				$upload_dir = wp_upload_dir();
				$image_data = file_get_contents(esc_url($image_url));
				$unique_file_name = wp_unique_filename($upload_dir['path'], $image_name);
				$filename = basename($unique_file_name);
		
				if (wp_mkdir_p($upload_dir['path'])) {
					$file = $upload_dir['path'] . '/' . $filename;
				} else {
					$file = $upload_dir['basedir'] . '/' . $filename;
				}
		
				file_put_contents($file, $image_data);
		
				$wp_filetype = wp_check_filetype($filename, null);
		
				$attachment = array(
					'post_mime_type' => $wp_filetype['type'],
					'post_title' => sanitize_file_name($filename),
					'post_type' => 'product',
					'post_status' => 'inherit',
				);
		
				$attach_id = wp_insert_attachment($attachment, $file, $post_id);
		
				require_once(ABSPATH . 'wp-admin/includes/image.php');
		
				$attach_data = wp_generate_attachment_metadata($attach_id, $file);
				wp_update_attachment_metadata($attach_id, $attach_data);
		
				// Set as downloadable file
				$downloadable_files = array(
					md5($filename) => array(
						'name' => $pro_text,
						'file' => wp_get_attachment_url($attach_id),
					),
				);
		
				update_post_meta($post_id, '_downloadable_files', $downloadable_files);
				set_post_thumbnail($post_id, $attach_id);
		
				++$l;
			}
			++$k;
		}
		

		// ---------------------------Faq------------------

		set_theme_mod('vw_stock_images_pro_faq_heading', 'Frequently Asked Questions');
		set_theme_mod('vw_stock_images_pro_faq_paragraph', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry');
		set_theme_mod('vw_stock_images_pro_faq_question_heading', 'Any Question?');
		set_theme_mod('vw_stock_images_pro_faq_question_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");

		set_theme_mod('vw_stock_images_pro_faq_question_image', get_template_directory_uri() . '/assets/images/question.png');

		set_theme_mod('vw_stock_images_pro_faq_number', '5');
		$faqque = array(
			"What should I expect on my first appointment?",
			"What all is included in your service?",
			"Do you furnish the cleaning supplies?",
			"Are you insured?",
			"How To Work This Site?"
		);

		for ($i = 1; $i <= 5; $i++) {
			set_theme_mod('vw_stock_images_pro_faq_que' . $i, $faqque[$i - 1]);
			set_theme_mod('vw_stock_images_pro_faq_ans' . $i, "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");
		}


		// shortcode
		$cf7title = "Faq Contact Us";
		$cf7content = '
				<div class="row justify-content-md-start justify-content-center">
									<div class="col-lg-6">
									<label> Your Name
									  [text* your-name autocomplete:name placeholder "Name Here"]
									  </label>
									</div>
									<div class="col-lg-6">
									<label> Email

										[email* email-459 placeholder "Email Address Here"]
									 </label>
									</div>
									<div class="col-lg-12">	<label> Message
									    [textarea your-message placeholder "Question Here"] </label></div>
	<div class="theme-btn">
	                   [submit "Submit Now"]                </div>

									</div>


				[_site_title] "[your-subject]"
				[_site_title] <abc@gmail.com>
				From: [your-name] <[your-email]>
				Subject: [your-subject]

				Message Body:
				[your-message]

				--
				This e-mail was sent from a contact form on [_site_title] ([_site_url])
				[_site_admin_email]
				Reply-To: [your-email]

				0
				0

				[_site_title] "[your-subject]"
				[_site_title] <abc@gmail.com>
				Message Body:
				[your-message]

				--
				This e-mail was sent from a contact form on [_site_title] ([_site_url])
				[your-email]
				Reply-To: [_site_admin_email]

				0
				0
				Thank you for your message. It has been sent.
				There was an error trying to send your message. Please try again later.
				One or more fields have an error. Please check and try again.
				There was an error trying to send your message. Please try again later.
				You must accept the terms and conditions before sending your message.
				The field is required.
				The field is too long.
				The field is too short.
				There was an unknown error uploading the file.
				You are not allowed to upload files of this type.
				The file is too big.
				There was an error uploading the file.';

		$cf7_post = array(
			'post_title' => wp_strip_all_tags($cf7title),
			'post_content' => $cf7content,
			'post_status' => 'publish',
			'post_type' => 'wpcf7_contact_form',
		);
		// Insert the post into the database
		$cf7post_id = wp_insert_post($cf7_post);

		add_post_meta($cf7post_id, "_form", '			<div class="row justify-content-md-start justify-content-center">
								<div class="col-lg-6">
								<label> Your Name
								  [text* your-name autocomplete:name placeholder "Name Here"]
								  </label>
								</div>
								<div class="col-lg-6">
								<label> Email

[email* email-459 placeholder "Email Address Here"]
								 </label>
								</div>
								<div class="col-lg-12">	<label> Message
								    [textarea your-message placeholder "Question Here"] </label></div>
<div class="theme-btn">
                   [submit "Submit Now"]                </div>

								</div>
');

		$cf7mail_data = array(
			'subject' => '[_site_title] "[your-subject]"',
			'sender' => '[_site_title] <abc@gmail.com>',
			'body' => 'From: [your-name] <[your-email]>
				Subject: [your-subject]

				Message Body:
				[your-message]

				--
				This e-mail was sent from a contact form on [_site_title] ([_site_url])',
			'recipient' => '[_site_admin_email]',
			'additional_headers' => 'Reply-To: [your-email]',
			'attachments' => '',
			'use_html' => 0,
			'exclude_blank' => 0
		);

		add_post_meta($cf7post_id, "_mail", $cf7mail_data);
		// Gets term object from Tree in the database.

		$cf7shortcode = '[contact-form-7 id="' . $cf7post_id . '" title="' . $cf7title . '"]';

		set_theme_mod('vw_stock_images_pro_faq_contact_shortcode', $cf7shortcode);


		// ---------------------Our Client Say----------------------------
		set_theme_mod('vw_stock_images_pro_our_newsletter_heading', 'Subscribe Our Newsletter');
		set_theme_mod('vw_stock_images_pro_our_newsletter_para', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry');

		set_theme_mod('vw_stock_images_pro_appoinment_heading', 'Make an appointment');
		set_theme_mod('vw_stock_images_pro_appoinment_para', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry');

		set_theme_mod('vw_stock_images_pro_appoinment_text', 'Appointment');
		set_theme_mod('vw_stock_images_pro_appoinment_url', get_permalink(ThemeWhizzie::get_page_id_by_title('Appointment')));

		set_theme_mod('vw_stock_images_pro_our_newsletter_beetle_img', get_template_directory_uri() . '/assets/images/newsletter/news-beetle.png');

		set_theme_mod('vw_stock_images_pro_our_newsletter_man_image', get_template_directory_uri() . '/assets/images/newsletter/news-man.png');

		// Newsletter shortcode
		$cf7title = "Newsletter Form";
		$cf7content = '
<div class="news-form-main">
[email* your-email placeholder "Email Address"]
<div class="theme-btn">[submit "Subscribe Now"]</div>
</div>
[_site_title] "[your-subject]"
[_site_title] <abc@gmail.com>
From: [your-name] <[your-email]>
Subject: [your-subject]

Message Body:
[your-message]

--
This e-mail was sent from a contact form on [_site_title] ([_site_url])
[_site_admin_email]
Reply-To: [your-email]

0
0

[_site_title] "[your-subject]"
[_site_title] <abc@gmail.com>
Message Body:
[your-message]

--
This e-mail was sent from a contact form on [_site_title] ([_site_url])
[your-email]
Reply-To: [_site_admin_email]

0
0
Thank you for your message. It has been sent.
There was an error trying to send your message. Please try again later.
One or more fields have an error. Please check and try again.
There was an error trying to send your message. Please try again later.
You must accept the terms and conditions before sending your message.
The field is required.
The field is too long.
The field is too short.
There was an unknown error uploading the file.
You are not allowed to upload files of this type.
The file is too big.
There was an error uploading the file.';

		$cf7_post = array(
			'post_title' => wp_strip_all_tags($cf7title),
			'post_content' => $cf7content,
			'post_status' => 'publish',
			'post_type' => 'wpcf7_contact_form',
		);
		// Insert the post into the database
		$cf7post_id = wp_insert_post($cf7_post);

		add_post_meta($cf7post_id, "_form", '<div class="news-form-main">
[email* your-email placeholder "Email Address"]
<div class="theme-btn">[submit "Subscribe Now"]</div>
</div>');

		$cf7mail_data = array(
			'subject' => '[_site_title] "[your-subject]"',
			'sender' => '[_site_title] <abc@gmail.com>',
			'body' => 'From: [your-name] <[your-email]>
Subject: [your-subject]

Message Body:
[your-message]

--
This e-mail was sent from a contact form on [_site_title] ([_site_url])',
			'recipient' => '[_site_admin_email]',
			'additional_headers' => 'Reply-To: [your-email]',
			'attachments' => '',
			'use_html' => 0,
			'exclude_blank' => 0
		);

		add_post_meta($cf7post_id, "_mail", $cf7mail_data);
		// Gets term object from Tree in the database.

		$cf7shortcodeNews = '[contact-form-7 id="' . $cf7post_id . '" title="' . $cf7title . '"]';


		set_theme_mod('vw_stock_images_pro_our_newsletter_shortcode', $cf7shortcodeNews);

		// ---------------------Our Client Say----------------------------


		set_theme_mod('vw_stock_images_pro_team_heading', 'Professional Team');
		set_theme_mod('vw_stock_images_pro_team_paragraph', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry');

		$team_title = array('John Smith', 'Smith Jackson', 'Charlie Parker', 'John Smith');
		$team_desig = array('Pest Cleaner', 'Pest Cleaner', 'Pest Cleaner', 'Pest Cleaner', 'Pest Cleaner');

		for ($i = 1; $i <= 4; $i++) {
			$title = $team_title[$i - 1];
			$content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.';

			// Create post object
			$my_post = array(
				'post_title' => wp_strip_all_tags($title),
				'post_content' => $content,
				'post_status' => 'publish',
				'post_type' => 'pests-team',
			);

			// Insert the post into the database
			$team_id = wp_insert_post($my_post);

			update_post_meta($team_id, 'team_desig', $team_desig[$i - 1]);
			update_post_meta($team_id, 'team_facebook', 'https://www.facebook.com/' . $title);
			update_post_meta($team_id, 'team_twitter', 'https://www.twitter.com/' . $title);
			update_post_meta($team_id, 'team_instagram', 'https://www.youtube.com/' . $title);
			update_post_meta($team_id, 'team_youtube', 'https://www.instagram.com/' . $title);
			add_post_meta($team_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

			$image_url = get_template_directory_uri() . '/assets/images/team/team' . $i . '.png';

			$image_name = 'team' . $i . '.png';
			$upload_dir = wp_upload_dir();
			// Set upload folder
			$image_data = file_get_contents($image_url);
			// Get image data
			$unique_file_name = wp_unique_filename($upload_dir['path'], $image_name);
			// Generate unique name
			$filename = basename($unique_file_name);
			// Create image file name
			// Check folder permission and define file location
			if (wp_mkdir_p($upload_dir['path'])) {
				$file = $upload_dir['path'] . '/' . $filename;
			} else {
				$file = $upload_dir['basedir'] . '/' . $filename;
			}
			// Create the image  file on the server
			file_put_contents($file, $image_data);
			// Check image file type
			$wp_filetype = wp_check_filetype($filename, null);
			// Set attachment data
			$attachment = array(
				'post_mime_type' => $wp_filetype['type'],
				'post_title' => sanitize_file_name($filename),
				'post_content' => '',
				'post_type' => 'pests-team',
				'post_status' => 'inherit'
			);

			// Create the attachment
			$attach_id = wp_insert_attachment($attachment, $file, $team_id);
			// Include image.php
			require_once(ABSPATH . 'wp-admin/includes/image.php');
			// Define attachment metadata
			$attach_data = wp_generate_attachment_metadata($attach_id, $file);
			// Assign metadata to attachment
			wp_update_attachment_metadata($attach_id, $attach_data);
			// And finally assign featured image to post
			set_post_thumbnail($team_id, $attach_id);
		}


		// ---------------------Professional Team----------------------------

		set_theme_mod('vw_stock_images_pro_our_client_heading', 'What Our Clients Says?');
		set_theme_mod('vw_stock_images_pro_our_client_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text");

		$client_title = array('Cries Morning', 'Kathleen Meade', 'Jesus Erickson');
		$client_desig = array('Manager', 'Homeowner', 'Homeowner');

		for ($i = 1; $i <= 3; $i++) {
			$title = $client_title[$i - 1];
			$content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.";

			// Create post object
			$my_post = array(
				'post_title' => wp_strip_all_tags($title),
				'post_content' => $content,
				'post_status' => 'publish',
				'post_type' => 'our-client',
			);

			// Insert the post into the database
			$client_id = wp_insert_post($my_post);

			update_post_meta($client_id, 'client_designation', $client_desig[$i - 1]);

			if ($client_title[$i - 1] == 'Cries Morning') {
				update_post_meta($client_id, 'client-img-one', get_template_directory_uri() . '/assets/images/our-client/client-meta1.png');

			} elseif ($client_title[$i - 1] == 'Kathleen Meade') {
				update_post_meta($client_id, 'client-img-one', get_template_directory_uri() . '/assets/images/our-client/client-meta2.png');

			} else {
				update_post_meta($client_id, 'client-img-one', get_template_directory_uri() . '/assets/images/our-client/client-meta3.png');

			}



			$image_url = get_template_directory_uri() . '/assets/images/our-client/client' . $i . '.png';

			$image_name = 'client' . $i . '.png';
			$upload_dir = wp_upload_dir();
			// Set upload folder
			$image_data = file_get_contents($image_url);
			// Get image data
			$unique_file_name = wp_unique_filename($upload_dir['path'], $image_name);
			// Generate unique name
			$filename = basename($unique_file_name);
			// Create image file name
			// Check folder permission and define file location
			if (wp_mkdir_p($upload_dir['path'])) {
				$file = $upload_dir['path'] . '/' . $filename;
			} else {
				$file = $upload_dir['basedir'] . '/' . $filename;
			}
			// Create the image  file on the server
			file_put_contents($file, $image_data);
			// Check image file type
			$wp_filetype = wp_check_filetype($filename, null);
			// Set attachment data
			$attachment = array(
				'post_mime_type' => $wp_filetype['type'],
				'post_title' => sanitize_file_name($filename),
				'post_content' => '',
				'post_type' => 'our-client',
				'post_status' => 'inherit'
			);

			// Create the attachment
			$attach_id = wp_insert_attachment($attachment, $file, $client_id);
			// Include image.php
			require_once(ABSPATH . 'wp-admin/includes/image.php');
			// Define attachment metadata
			$attach_data = wp_generate_attachment_metadata($attach_id, $file);
			// Assign metadata to attachment
			wp_update_attachment_metadata($attach_id, $attach_data);
			// And finally assign featured image to post
			set_post_thumbnail($client_id, $attach_id);
		}

		/*---------------------- Latest Post----------------*/

		set_theme_mod('vw_stock_images_pro_latest_news_bgcolor', '#F1F1F1');
		set_theme_mod('vw_stock_images_pro_latest_news_heading', 'Latest News & Blog');
		set_theme_mod('vw_stock_images_pro_latest_news_paragraph', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
		set_theme_mod('vw_stock_images_pro_latest_news_btn_url', get_permalink(ThemeWhizzie::get_page_id_by_title('Blog')));
		set_theme_mod('vw_stock_images_pro_latest_news_btn_text', 'View More');

		$post_category_name = array(
			'Factory Cleaning' => array(
				"Factory Shine Solutions",
				'Sparkling Factory Floors'
			),
			'House Cleaning' => array(
				"Sparkling Home Solutions",
				"Spotless Home Secrets"
			),
			'Office Cleaning' => array(
				"Professional Office Cleaners Hub",
				"Workspace Shine Chronicles"
			),
		);

		foreach ($post_category_name as $post_category => $post_name) {
			$content = 'This is sample Post category';
			$parent_name = wp_insert_term(
				$post_category, // the term
				'category', // the taxonomy
				array(
					'description' => $content,
					'slug' => strtolower(str_replace(' ', '_', $post_category))
				)
			);

			// Create Blog Category end
			// create post START
			foreach ($post_name as $key => $post_title) {
				$content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id porta nibh venenatis cras. In aliquam sem fringilla ut morbi. Blandit aliquam etiam erat velit. Risus commodo viverra maecenas accumsan lacus vel. Suscipit adipiscing bibendum est ultricies. Dignissim enim sit amet venenatis urna cursus eget nunc.";
				// Create post object
				$my_post = array(
					'post_title' => wp_strip_all_tags($post_title),
					'post_content' => $content,
					'post_status' => 'publish',
					'post_type' => 'post',
				);
				// Insert the post into the database
				$post_id = wp_insert_post($my_post);

				add_post_meta($post_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

				wp_set_object_terms($post_id, $post_category, 'category', true);
				$uncategorized = get_term_by('name', 'Uncategorized', 'category');
				if ($uncategorized) {
					wp_delete_term($uncategorized->term_id, 'category');
				}
				set_theme_mod('vw_ecommerce_landing_page_pro_medical_blog_next_title', 'Next');
				set_theme_mod('vw_ecommerce_landing_page_pro_medical_blog_prev_title', 'Previous');

				update_post_meta($post_id, 'post-ques', 'Why do we use it?');
				update_post_meta($post_id, 'post-para-one', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
				update_post_meta($post_id, 'post-point-one', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
				update_post_meta($post_id, 'post-point-two', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
				update_post_meta($post_id, 'post-point-three', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
				update_post_meta($post_id, 'post-point-four', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');

				$image_url = get_template_directory_uri() . '/assets/images/blog/' . str_replace(' ', '-', $post_title) . '.png';
				$image_name = $post_title . '.png';
				$upload_dir = wp_upload_dir();
				$image_data = file_get_contents($image_url);
				$unique_file_name = wp_unique_filename($upload_dir['path'], $image_name);
				$filename = basename($unique_file_name);
				if (wp_mkdir_p($upload_dir['path'])) {
					$file = $upload_dir['path'] . '/' . $filename;
				} else {
					$file = $upload_dir['basedir'] . '/' . $filename;
				}
				file_put_contents($file, $image_data);
				$wp_filetype = wp_check_filetype($filename, null);
				$attachment = array(
					'post_mime_type' => $wp_filetype['type'],
					'post_title' => sanitize_file_name($filename),
					'post_content' => '',
					'post_type' => 'post',
					'post_status' => 'inherit'
				);
				// Create the attachment
				$attach_id = wp_insert_attachment($attachment, $file, $post_id);
				require_once(ABSPATH . 'wp-admin/includes/image.php');
				$attach_data = wp_generate_attachment_metadata($attach_id, $file);
				wp_update_attachment_metadata($attach_id, $attach_data);
				set_post_thumbnail($post_id, $attach_id);
			}
			// create post END
		}
		set_theme_mod('vw_stock_images_pro_recent_blog_heading', 'Related Blogs');
		set_theme_mod('vw_stock_images_pro_recent_blog_paragraph', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry');

		// ---------------------Gallery----------------------------
		set_theme_mod('vw_stock_images_pro_gallery_bg_color', '#F1F1F1');
		set_theme_mod('vw_stock_images_pro_gallery_heading', 'Our Gallery');
		set_theme_mod('vw_stock_images_pro_gallery_paragraph', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');

		set_theme_mod('vw_stock_images_pro_gallery_number', '7');
		for ($i = 1; $i <= 7; $i++) {
			set_theme_mod('vw_stock_images_pro_gallery_image' . $i, get_template_directory_uri() . '/assets/images/gallery/gallery' . $i . '.png');
		}


		// ------------------Partners Section------------
		set_theme_mod('vw_stock_images_pro_partners_bgcolor', '#F1F1F1');
		set_theme_mod('vw_stock_images_pro_partners_heading', 'Supplies & Partners');
		set_theme_mod('vw_stock_images_pro_partners_paragraph', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');


		set_theme_mod('vw_stock_images_pro_partners_number', 5);
		for ($i = 1; $i <= 5; $i++) {
			set_theme_mod('vw_stock_images_pro_partners_images' . $i, get_template_directory_uri() . '/assets/images/partners/partner' . $i . '.png');
		}


		// ------------contact us section-------------

		$cf7title = "Contact Us";
		$cf7content = '
		[text* your-name autocomplete:name placeholder "Enter Your Name*"]
				    [tel* tel-203 placeholder "Phone No*"]
					   [email* email-431 placeholder "Enter Your E-mail*"]

					    [textarea your-message placeholder "Enter Your Message"]

				<div class="theme-btn">[submit "Submit Now"]</div>
		[_site_title] "[your-subject]"
		[_site_title] <abc@gmail.com>
		From: [your-name] <[your-email]>
		Subject: [your-subject]

		Message Body:
		[your-message]

		--
		This e-mail was sent from a contact form on [_site_title] ([_site_url])
		[_site_admin_email]
		Reply-To: [your-email]

		0
		0

		[_site_title] "[your-subject]"
		[_site_title] <abc@gmail.com>
		Message Body:
		[your-message]

		--
		This e-mail was sent from a contact form on [_site_title] ([_site_url])
		[your-email]
		Reply-To: [_site_admin_email]

		0
		0
		Thank you for your message. It has been sent.
		There was an error trying to send your message. Please try again later.
		One or more fields have an error. Please check and try again.
		There was an error trying to send your message. Please try again later.
		You must accept the terms and conditions before sending your message.
		The field is required.
		The field is too long.
		The field is too short.
		There was an unknown error uploading the file.
		You are not allowed to upload files of this type.
		The file is too big.
		There was an error uploading the file.';

		$cf7_post = array(
			'post_title' => wp_strip_all_tags($cf7title),
			'post_content' => $cf7content,
			'post_status' => 'publish',
			'post_type' => 'wpcf7_contact_form',
		);
		// Insert the post into the database
		$cf7post_id = wp_insert_post($cf7_post);

		add_post_meta($cf7post_id, "_form", '[text* your-name autocomplete:name placeholder "Enter Your Name*"]

			    [tel* tel-203 placeholder "Phone No*"]

				   [email* email-431 placeholder "Enter Your E-mail*"]

				    [textarea your-message placeholder "Enter Your Message"]

				<div class="theme-btn">[submit "Submit Now"]</div>');

		$cf7mail_data = array(
			'subject' => '[_site_title] "[your-subject]"',
			'sender' => '[_site_title] <abc@gmail.com>',
			'body' => 'From: [your-name] <[your-email]>
		Subject: [your-subject]

		Message Body:
		[your-message]

		--
		This e-mail was sent from a contact form on [_site_title] ([_site_url])',
			'recipient' => '[_site_admin_email]',
			'additional_headers' => 'Reply-To: [your-email]',
			'attachments' => '',
			'use_html' => 0,
			'exclude_blank' => 0
		);

		add_post_meta($cf7post_id, "_mail", $cf7mail_data);
		// Gets term object from Tree in the database.

		$cf7shortcode = '[contact-form-7 id="' . $cf7post_id . '" title="' . $cf7title . '"]';

		set_theme_mod('vw_stock_images_pro_contact_us_section_shortcode', $cf7shortcode);
		set_theme_mod('vw_stock_images_pro_contact_us_section_sub_heading', 'CONTACT US');
		set_theme_mod('vw_stock_images_pro_contact_us_section_heading', "We're Here to Help");
		set_theme_mod('vw_stock_images_pro_contact_us_section_paragraph', "Contact us with any questions, concerns, or feedback and we'll get back to you as soon as possible");
		set_theme_mod('vw_stock_images_pro_contact_us_address_longitude', '-80.053361');
		set_theme_mod('vw_stock_images_pro_contact_us_address_latitude', '26.704241');
		// newsletter


		// /footer\
		set_theme_mod('vw_stock_images_pro_section_footer_bgcolor', '#000');
		set_theme_mod('vw_stock_images_pro_footer_instagram_title', 'Instagram');
		set_theme_mod('vw_stock_images_pro_footer_instagram_shortcode', '[instagram-feed]');
		set_theme_mod('vw_stock_images_pro_footer_instagram_img', get_template_directory_uri() . '/assets/images/instagram.png');
		set_theme_mod('vw_stock_images_pro_footer_copyright_para', 'All Rights Reserved.');

		// -----------About Page-------------

		set_theme_mod('vw_stock_images_pro_about_section_mission_heading', 'The Mission');
		set_theme_mod('vw_stock_images_pro_about_section_mission_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');

		set_theme_mod('vw_stock_images_pro_about_section_story_heading', 'The Story');
		set_theme_mod('vw_stock_images_pro_about_section_story_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');

		set_theme_mod('vw_stock_images_pro_about_section_vission_heading', 'The Vission');
		set_theme_mod('vw_stock_images_pro_about_section_vission_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');

		set_theme_mod('vw_stock_images_pro_about_section_vission_point_one', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
		set_theme_mod('vw_stock_images_pro_about_section_vission_point_two', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');


		set_theme_mod('vw_stock_images_pro_about_section_our_value_heading', 'Our Values');
		set_theme_mod('vvw_stock_images_pro_about_section_our_value_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');

		set_theme_mod('vw_stock_images_pro_about_our_resource_heading', 'Our Resources');
		set_theme_mod('vw_stock_images_pro_about_our_resource_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');


		set_theme_mod('vw_stock_images_pro_about_section_feature_heading', 'Features:');
		set_theme_mod('vw_stock_images_pro_about_section_feature_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');

		set_theme_mod('vw_stock_images_pro_about_section_feature_point_one', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
		set_theme_mod('vw_stock_images_pro_about_section_feature_point_two', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

		set_theme_mod('vw_stock_images_pro_about_section_vission_img_one', get_template_directory_uri() . '/assets/images/about-page/vision1.png');
		set_theme_mod('vw_stock_images_pro_about_section_vission_img_two', get_template_directory_uri() . '/assets/images/about-page/vision2.png');

		set_theme_mod('vw_stock_images_pro_about_section_feature_img', get_template_directory_uri() . '/assets/images/about-page/feature.png');

		//Contact From Title
		set_theme_mod('vw_stock_images_pro_contactpage_form_title', 'Contact Information');
		set_theme_mod('vw_stock_images_pro_contactpage_form_subtitle', 'Fill up the contact form and our team will get back in touch with you within 24 hours.');
		set_theme_mod('vw_stock_images_pro_address_latitude', '28.8027594');
		set_theme_mod('vw_stock_images_pro_address_longitude', '-105.9808615');
		set_theme_mod('vw_stock_images_pro_contact_page_form_bg_image', get_template_directory_uri() . '/assets/images/contact/contact-bg.png');
		// set_theme_mod( 'vw_stock_images_pro_contact_page_bg_image',get_template_directory_uri().'/assets/images/contact/contact-bg.png' );

		/*---------------__Blog Page----------------------*/
		set_theme_mod('vw_stock_images_pro_blog_category_prev_title', 'Previous');
		set_theme_mod('vw_stock_images_pro_blog_category_next_title', 'Next');

		// empty cart page START
		set_theme_mod('vw_stock_images_pro_empty_cart_page_icon', 'fa-regular fa-heart');
		set_theme_mod('vw_stock_images_pro_empty_cart_page_heading', 'WISHLIST IS EMPTY');
		set_theme_mod('vw_stock_images_pro_empty_cart_page_description', 'You Don\'t Have Any Products In The Wishlist Right Now. You Will Find A Lot Of Interesting Products In Out Online Store.');
		set_theme_mod('vw_stock_images_pro_empty_cart_page_btn_text', 'Continue Shopping');
		set_theme_mod('vw_stock_images_pro_empty_cart_page_btn_link', get_permalink(get_page_by_title('Shop ')));

		// empty cart page EnD


		set_theme_mod('vw_stock_images_pro_error_temp_bg_images', get_template_directory_uri() . '/assets/images/404.png');
		set_theme_mod('vw_stock_images_pro_404_page_heading', 'Page Not Found');
		set_theme_mod('vw_stock_images_pro_404_page_content', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
		set_theme_mod('vw_stock_images_pro_404_page_button_text', 'Back to Home');
		set_theme_mod('vw_stock_images_pro_res_open_menu_icon', 'fas fa-bars');

		// appoinment Page form shortcode
		$cf7title = "Appoinment Form";
		$cf7content = '
	<div id="client-info">
	   <h3>Client Information</h3>
	      <div class="row">
				     <label> Name</label>
	        <div class="col-lg-6 ap-col">
	          [text* your-name autocomplete:name]
	  			<p>First Name</p></div>
	        <div class="col-lg-6 ap-col">
	          [text* your-name autocomplete:name]
	          <p>Last Name</p></div>
	      <div class="col-lg-12 ap-col"><label> Address [text* text-94]</label><p>Street Address</p></div>
	      <div class="col-lg-12 ap-col">[text* text-94]<p>Street Address Line 2</p></div>
	      <div class="col-lg-6 ap-col">[text* text-665]<p>City</p></div>
	      <div class="col-lg-6 ap-col">[text* text-665]<p>State / Province</p></div>
	      <div class="col-lg-12 ap-col">[text* text-94]<p>Postal / Zip Code</p></div>
	      <div class="col-lg-6 ap-col"><label> Email [email* email-869]</label><p>example@example.com</p></div>
	      <div class="col-lg-6 ap-col"><label> Phone Number [text* text-737]</label><p>Please enter a valid phone number</p></div>
	  </div>
	</div>
	<hr/>
	<div id="property-info">
	  <h3>Property Information</h3>
	   <div class="row">
	      <div class="col-lg-6 ap-col"><label> Property Type [radio radio-764 use_label_element default:1 "Residential" "Commercial" "Industrial" "Others"] </label></div>
	     <div class="col-lg-6 ap-col types-pests"><label> Type of Pest(s) or Problems [radio radio-540 use_label_element default:1 "Ants" "Beetles" "Gnats" "Ticks" "Flies" "Termites"]  </label></div>
	   </div>
	   <div class="col-lg-6 ap-col"><label> Property Size (if known) [text text-467 placeholder]</label></div>
	</div>
	<hr/>
	<div id="property-info">
	  <h3>Services Details</h3>
	  <div class="row">
	    <div class="col-lg-12 ap-col">
	      <label> Briefly describe the pest control services you need [textarea textarea-47]</label>
	    </div>
	    <div class="col-lg-12 ap-col">
	      <label>Additional Information [textarea textarea-47]</label>
	    </div>
	    <div class="col-lg-12 ap-col">
	      <h3>Frequency of Service</h3>
	      <div class="property-types"><label>Property Type [radio radio-132 use_label_element default:1 "One Time Service" "Regular Maintenance (e.g.Monthly, Quarterly)" "Other"]</label></div>
	      <div class="theme-btn"> [submit "Submit Now"]</div>
	    </div>
	  </div>
	</div>

	[_site_title] "[your-subject]"
	[_site_title] <abc@gmail.com>
	From: [your-name] <[your-email]>
	Subject: [your-subject]

	Message Body:
	[your-message]

	--
	This e-mail was sent from a contact form on [_site_title] ([_site_url])
	[_site_admin_email]
	Reply-To: [your-email]

	0
	0

	[_site_title] "[your-subject]"
	[_site_title] <abc@gmail.com>
	Message Body:
	[your-message]

	--
	This e-mail was sent from a contact form on [_site_title] ([_site_url])
	[your-email]
	Reply-To: [_site_admin_email]

	0
	0
	Thank you for your message. It has been sent.
	There was an error trying to send your message. Please try again later.
	One or more fields have an error. Please check and try again.
	There was an error trying to send your message. Please try again later.
	You must accept the terms and conditions before sending your message.
	The field is required.
	The field is too long.
	The field is too short.
	There was an unknown error uploading the file.
	You are not allowed to upload files of this type.
	The file is too big.
	There was an error uploading the file.';

		$cf7_post = array(
			'post_title' => wp_strip_all_tags($cf7title),
			'post_content' => $cf7content,
			'post_status' => 'publish',
			'post_type' => 'wpcf7_contact_form',
		);
		// Insert the post into the database
		$cf7post_id = wp_insert_post($cf7_post);

		add_post_meta($cf7post_id, "_form", '<div id="client-info">
	   <h3>Client Information</h3>
	      <div class="row">
				     <label> Name</label>
	        <div class="col-lg-6 ap-col">
	          [text* your-name autocomplete:name]
	     			<p>First Name</p></div>
	        <div class="col-lg-6 ap-col">
	          [text* your-name autocomplete:name]
	          <p>Last Name</p></div>
	      <div class="col-lg-12 ap-col"><label> Address [text* text-94]</label><p>Street Address</p></div>
	      <div class="col-lg-12 ap-col">[text* text-94]<p>Street Address Line 2</p></div>
	      <div class="col-lg-6 ap-col">[text* text-665]<p>City</p></div>
	      <div class="col-lg-6 ap-col">[text* text-665]<p>State / Province</p></div>
	      <div class="col-lg-12 ap-col">[text* text-94]<p>Postal / Zip Code</p></div>
	      <div class="col-lg-6 ap-col"><label> Email [email* email-869]</label><p>example@example.com</p></div>
	      <div class="col-lg-6 ap-col"><label> Phone Number [text* text-737]</label><p>Please enter a valid phone number</p></div>
	  </div>
	</div>
	<hr/>
	<div id="property-info">
	  <h3>Property Information</h3>
	   <div class="row">
	      <div class="col-lg-6 ap-col"><label> Property Type [radio radio-764 use_label_element default:1 "Residential" "Commercial" "Industrial" "Others"] </label></div>
	     <div class="col-lg-6 ap-col types-pests"><label> Type of Pest(s) or Problems [radio radio-540 use_label_element default:1 "Ants" "Beetles" "Gnats" "Ticks" "Flies" "Termites"]  </label></div>
	   </div>
	   <div class="col-lg-6 ap-col"><label> Property Size (if known) [text text-467 placeholder]</label></div>
	</div>
	<hr/>
	<div id="property-info">
	  <h3>Services Details</h3>
	  <div class="row">
	    <div class="col-lg-12 ap-col">
	      <label> Briefly describe the pest control services you need [textarea textarea-47]</label>
	    </div>
	    <div class="col-lg-12 ap-col">
	      <label>Additional Information [textarea textarea-47]</label>
	    </div>
	    <div class="col-lg-12 ap-col">
	      <h3>Frequency of Service</h3>
	      <div class="property-types"><label>Property Type [radio radio-132 use_label_element default:1 "One Time Service" "Regular Maintenance (e.g.Monthly, Quarterly)" "Other"]</label></div>
	      <div class="theme-btn"> [submit "Submit Now"]</div>
	    </div>
	  </div>
	</div>
');

		$cf7mail_data = array(
			'subject' => '[_site_title] "[your-subject]"',
			'sender' => '[_site_title] <abc@gmail.com>',
			'body' => 'From: [your-name] <[your-email]>
	Subject: [your-subject]

	Message Body:
	[your-message]

	--
	This e-mail was sent from a contact form on [_site_title] ([_site_url])',
			'recipient' => '[_site_admin_email]',
			'additional_headers' => 'Reply-To: [your-email]',
			'attachments' => '',
			'use_html' => 0,
			'exclude_blank' => 0
		);

		add_post_meta($cf7post_id, "_mail", $cf7mail_data);
		// Gets term object from Tree in the database.

		$cf7shortcodeNews = '[contact-form-7 id="' . $cf7post_id . '" title="' . $cf7title . '"]';


		set_theme_mod('vw_stock_images_pro_appoinment_form_shortcode', $cf7shortcodeNews);


		set_theme_mod('vw_stock_images_pro_appoinment_form_heading', 'Pest Control Quote Form');

		// -------------------location ----------------

		set_theme_mod('vw_stock_images_pro_location_number', '4');
		$location_name = array('Branch Name Here', 'Branch Name Here', 'Branch Name Here', 'Branch Name Here');
		$location_address = array('4953 Vine CA 92465', 'Location 123 Newyork', '4b, Walse Street , USA', '12/ Washington Way, New York');
		$location_number = array('+12 345678912', '+12 345678912', '+12 345678912', '+12 345678912');
		$find_now = array('Find Now', 'Find Now', 'Find Now', 'Find Now');
		for ($i = 1; $i <= 4; $i++) {
			set_theme_mod('vw_stock_images_pro_location_name' . $i, $location_name[$i - 1]);
			set_theme_mod('vw_stock_images_pro_location_address' . $i, $location_address[$i - 1]);
			set_theme_mod('vw_stock_images_pro_location_number' . $i, $location_number[$i - 1]);
			set_theme_mod('vw_stock_images_pro_location_find_now_btn' . $i, $find_now[$i - 1]);
		}
		set_theme_mod('vw_stock_images_pro_location_latitude', '28.8027594');
		set_theme_mod('vw_stock_images_pro_location_longitude', '-105.9808615');



		$this->theme_create_customizer_nav_menu();
		$this->theme_create_customizer_footer_services_menu();
		$this->theme_create_customizer_footer_quick_links_menu();


		$VW_Widget_Importer = new VW_Widget_Importer;
		$VW_Widget_Importer->import_widgets($this->widget_file_url);

		// echo "string";
		exit;
	}


	public function wz_activate_vw_stock_images_pro()
	{
		$vw_stock_images_pro_license_key = $_POST['vw_stock_images_pro_license_key'];

		$endpoint = SHOPIFY_THEME_LICENCE_ENDPOINT . 'verifyTheme';

		$body = [
			'theme_license_key' => $vw_stock_images_pro_license_key,
			'site_url' => site_url(),
			'theme_text_domain' => wp_get_theme()->get('TextDomain')
		];
		$body = wp_json_encode($body);
		$options = [
			'body' => $body,
			'headers' => [
				'Content-Type' => 'application/json',
			]
		];
		$response = wp_remote_post($endpoint, $options);
		if (is_wp_error($response)) {
			ThemeWhizzie::remove_the_theme_key();
			ThemeWhizzie::set_the_validation_status('false');
			$response = array('status' => false, 'msg' => 'Something Went Wrong!');
			wp_send_json($response);
			exit;
		} else {
			$response_body = wp_remote_retrieve_body($response);
			$response_body = json_decode($response_body);

			if ($response_body->is_suspended == 1) {
				ThemeWhizzie::set_the_suspension_status('true');
			} else {
				ThemeWhizzie::set_the_suspension_status('false');
			}

			if ($response_body->status === false) {
				ThemeWhizzie::remove_the_theme_key();
				ThemeWhizzie::set_the_validation_status('false');
				$response = array('status' => false, 'msg' => $response_body->msg);
				wp_send_json($response);
				exit;
			} else {
				ThemeWhizzie::set_the_validation_status('true');
				ThemeWhizzie::set_the_theme_key($vw_stock_images_pro_license_key);
				$response = array('status' => true, 'msg' => 'Theme Activated Successfully!');
				wp_send_json($response);
				exit;
			}
		}
	}



	/**
	 * Imports Ibtana Builder Demo Content
	 * @since 1.1.0
	 */
	public function setup_builder()
	{
		$buildercontent = '';
		$resp_slug = '';
		$json_theme = array('base_theme_text_domain' => 'pest-control-treatment');
		$json_args = array(
			'method' => 'POST',
			'headers' => array(
				'Content-Type' => 'application/json'
			),
			'body' => json_encode($json_theme),
		);

		$request_data = wp_remote_post(IBTANA_THEME_LICENCE_ENDPOINT . 'get_client_ibtana_premium_theme_json_with_inner_pages', $json_args);
		$response_json = json_decode(wp_remote_retrieve_body($request_data));

		// echo '<pre>'; print_r($response_json->data); echo '</pre>';


		foreach ($response_json->data as $resp_json) {
			if ($resp_json->page_type == 'template') {
				$resp_slug = $resp_json->slug;
			}
		}


		// demo content start

		// ---------------------Professional  Services--------------
		set_theme_mod('vw_stock_images_pro_professional_services_heading', 'Professional Services');
		set_theme_mod('vw_stock_images_pro_professional_services_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry");
		set_theme_mod('vw_stock_images_pro_professional_services_bg_color', "#F1F1F1");

		$services_categories_array = array();

		$parent_category_arr = array(
			'Commercial' => array(
				'Medical Cleaning',
				'Office Cleaning',
				'Industrial Cleaning',
				'School Cleaning',
				'Building Cleaning',
				'Education Centre',
				'Warehouse Cleaning',
				'Factory Cleaning'
			),
			'Residential' => array('Mattress Sanitizing', 'Carpet Sanitizing', 'Whole Home Sanitize', 'Kitchen'),

		);
		$cat = 1;
		foreach ($parent_category_arr as $parent_services_cat => $parent_services) {

			$content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.";
			$parent_category = wp_insert_term(
				$parent_services_cat,
				'services-category',
				array(
					'description' => $content
				)
			);

			$term_category = get_term_by('id', $parent_category['term_id'], 'services-category');

			update_term_meta($parent_category['term_id'], 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

			if ($term_category) {
				$term_slug = $term_category->slug;

				array_push($services_categories_array, $term_slug);//
			}

			set_theme_mod('vw_stock_images_pro_professional_services_categories', $services_categories_array);

			update_term_meta($parent_category['term_id'], 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);


			update_term_meta($parent_category['term_id'], 'serv_cat_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");
			update_term_meta($parent_category['term_id'], 'serv_points_one', "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet");
			update_term_meta($parent_category['term_id'], 'serv_points_two', "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet");
			update_term_meta($parent_category['term_id'], 'serv_points_three', "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet");
			update_term_meta($parent_category['term_id'], 'serv_points_four', "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet");


			if ($parent_services_cat == 'Commercial') {
				update_term_meta($parent_category['term_id'], 'serv_cat_heading', 'The Importance of Disinfecting and Sanitizing');
				update_term_meta($parent_category['term_id'], 'serv_points_heading', "Professionalism, Quality and Reliability");
				update_term_meta($parent_category['term_id'], 'category_image_one', get_template_directory_uri() . '/assets/images/services/commercial1.png');
				update_term_meta($parent_category['term_id'], 'category_image_two', get_template_directory_uri() . '/assets/images/services/commercial2.png');
			} else {
				update_term_meta($parent_category['term_id'], 'serv_cat_heading', 'Top-Quality Solutions for Condos, Rentals & More');
				update_term_meta($parent_category['term_id'], 'serv_points_heading', "Why Book Our Residential Services?");
				update_term_meta($parent_category['term_id'], 'category_image_one', get_template_directory_uri() . '/assets/images/services/residential1.png');
				update_term_meta($parent_category['term_id'], 'category_image_two', get_template_directory_uri() . '/assets/images/services/residential2.png');
			}
			$cat++;//

			$services_meta = array(
				array(
					'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
				),
				array(
					'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
				),
				array(
					'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
				),
				array(
					'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
				),
				array(
					'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
				),
				array(
					'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
				),
				array(
					'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
				),
			);


			foreach ($parent_services as $services) {
				$serv_content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged., when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting";
				$my_post = array(
					'post_title' => $services,
					'post_content' => $serv_content,
					'post_status' => 'publish',
					'post_type' => 'services',
				);
				// Insert the post into the database
				$services_id = wp_insert_post($my_post);
				wp_set_object_terms($services_id, $parent_category['term_id'], 'services-category', true);

				add_post_meta($services_id, 'vw_title_banner_image_wp_custom_attachment', $banner_attachment_url);

				update_post_meta($services_id, 'read-more-text', 'Read More');
				update_post_meta($services_id, 'services_inner_title', 'Other Ways to Clean a Mattress');
				update_post_meta($services_id, 'services_inner_para', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.");
				update_post_meta($services_id, 'services_repeater_fields', $services_meta);
				update_post_meta($services_id, 'services_inner_title', 'Other Ways to Clean a Mattress');
				update_post_meta($services_id, 'get_service_btn', 'Get Service Now');
				update_post_meta($services_id, 'get_service_btn_url', get_permalink(ThemeWhizzie::get_page_id_by_title('Appointment')));


				$meta_img = get_template_directory_uri() . '/assets/images/services/' . $parent_services_cat . '/' . str_replace(" ", "-", $services) . '-Meta.png';
				update_post_meta($services_id, 'service-img', $meta_img);

				$image_url = get_template_directory_uri() . '/assets/images/services/' . $parent_services_cat . '/' . str_replace(" ", "-", $services) . '.png';
				$image_name = $services . '.png';
				$upload_dir = wp_upload_dir();
				// Set upload folder
				$image_data = file_get_contents(esc_url($image_url));

				// Get image data
				$unique_file_name = wp_unique_filename($upload_dir['path'], $image_name);
				// Generate unique name
				$filename = basename($unique_file_name);
				// Create image file name

				// Check folder permission and define file location
				if (wp_mkdir_p($upload_dir['path'])) {
					$file = $upload_dir['path'] . '/' . $filename;
				} else {
					$file = $upload_dir['basedir'] . '/' . $filename;
				}
				// Create the image  file on the server
				file_put_contents($file, $image_data);

				// Check image file type
				$wp_filetype = wp_check_filetype($filename, null);

				// Set attachment data
				$attachment = array(
					'post_mime_type' => $wp_filetype['type'],
					'post_title' => sanitize_file_name($filename),
					'post_type' => 'services',
					'post_status' => 'inherit',
				);
				// Create the attachment
				$attach_id = wp_insert_attachment($attachment, $file, $services_id);

				// Include image.php
				require_once(ABSPATH . 'wp-admin/includes/image.php');

				// Define attachment metadata
				$attach_data = wp_generate_attachment_metadata($attach_id, $file);


				// And finally assign featured image to post
				set_post_thumbnail($services_id, $attach_id);

			}
		}


		set_theme_mod('vw_stock_images_pro_our_newsletter_heading', 'Subscribe Our Newsletter');
		set_theme_mod('vw_stock_images_pro_our_newsletter_para', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry');

		set_theme_mod('vw_stock_images_pro_appoinment_heading', 'Make an appointment');
		set_theme_mod('vw_stock_images_pro_appoinment_para', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry');

		set_theme_mod('vw_stock_images_pro_appoinment_text', 'Appointment');
		set_theme_mod('vw_stock_images_pro_appoinment_url', get_permalink(ThemeWhizzie::get_page_id_by_title('Appointment')));

		set_theme_mod('vw_stock_images_pro_our_newsletter_beetle_img', get_template_directory_uri() . '/assets/images/newsletter/news-beetle.png');

		set_theme_mod('vw_stock_images_pro_our_newsletter_man_image', get_template_directory_uri() . '/assets/images/newsletter/news-man.png');

		// Newsletter shortcode
		$cf7title = "Newsletter Form";
		$cf7content = '
			<div class="news-form-main">
			[email* your-email placeholder "Email Address"]
			<div class="theme-btn">[submit "Subscribe Now"]</div>
			</div>
			[_site_title] "[your-subject]"
			[_site_title] <abc@gmail.com>
			From: [your-name] <[your-email]>
			Subject: [your-subject]

			Message Body:
			[your-message]

			--
			This e-mail was sent from a contact form on [_site_title] ([_site_url])
			[_site_admin_email]
			Reply-To: [your-email]

			0
			0

			[_site_title] "[your-subject]"
			[_site_title] <abc@gmail.com>
			Message Body:
			[your-message]

			--
			This e-mail was sent from a contact form on [_site_title] ([_site_url])
			[your-email]
			Reply-To: [_site_admin_email]

			0
			0
			Thank you for your message. It has been sent.
			There was an error trying to send your message. Please try again later.
			One or more fields have an error. Please check and try again.
			There was an error trying to send your message. Please try again later.
			You must accept the terms and conditions before sending your message.
			The field is required.
			The field is too long.
			The field is too short.
			There was an unknown error uploading the file.
			You are not allowed to upload files of this type.
			The file is too big.
			There was an error uploading the file.';

		$cf7_post = array(
			'post_title' => wp_strip_all_tags($cf7title),
			'post_content' => $cf7content,
			'post_status' => 'publish',
			'post_type' => 'wpcf7_contact_form',
		);
		// Insert the post into the database
		$cf7post_id = wp_insert_post($cf7_post);

		add_post_meta($cf7post_id, "_form", '<div class="news-form-main">
			[email* your-email placeholder "Email Address"]
			<div class="theme-btn">[submit "Subscribe Now"]</div>
			</div>');

		$cf7mail_data = array(
			'subject' => '[_site_title] "[your-subject]"',
			'sender' => '[_site_title] <abc@gmail.com>',
			'body' => 'From: [your-name] <[your-email]>
			Subject: [your-subject]

			Message Body:
			[your-message]

			--
			This e-mail was sent from a contact form on [_site_title] ([_site_url])',
			'recipient' => '[_site_admin_email]',
			'additional_headers' => 'Reply-To: [your-email]',
			'attachments' => '',
			'use_html' => 0,
			'exclude_blank' => 0
		);

		add_post_meta($cf7post_id, "_mail", $cf7mail_data);
		// Gets term object from Tree in the database.

		$cf7shortcodeNews = '[contact-form-7 id="' . $cf7post_id . '" title="' . $cf7title . '"]';



		// shortcode
		$cf7title = "Faq Contact Us";
		$cf7content = '
			<div class="row justify-content-md-start justify-content-center">
								<div class="col-lg-6">
								<label> Your Name
									[text* your-name autocomplete:name placeholder "Name Here"]
									</label>
								</div>
								<div class="col-lg-6">
								<label> Email

									[email* email-459 placeholder "Email Address Here"]
								 </label>
								</div>
								<div class="col-lg-12">	<label> Message
										[textarea your-message placeholder "Question Here"] </label></div>
<div class="theme-btn">
									 [submit "Submit Now"]                </div>

								</div>


			[_site_title] "[your-subject]"
			[_site_title] <abc@gmail.com>
			From: [your-name] <[your-email]>
			Subject: [your-subject]

			Message Body:
			[your-message]

			--
			This e-mail was sent from a contact form on [_site_title] ([_site_url])
			[_site_admin_email]
			Reply-To: [your-email]

			0
			0

			[_site_title] "[your-subject]"
			[_site_title] <abc@gmail.com>
			Message Body:
			[your-message]

			--
			This e-mail was sent from a contact form on [_site_title] ([_site_url])
			[your-email]
			Reply-To: [_site_admin_email]

			0
			0
			Thank you for your message. It has been sent.
			There was an error trying to send your message. Please try again later.
			One or more fields have an error. Please check and try again.
			There was an error trying to send your message. Please try again later.
			You must accept the terms and conditions before sending your message.
			The field is required.
			The field is too long.
			The field is too short.
			There was an unknown error uploading the file.
			You are not allowed to upload files of this type.
			The file is too big.
			There was an error uploading the file.';

		$cf7_post = array(
			'post_title' => wp_strip_all_tags($cf7title),
			'post_content' => $cf7content,
			'post_status' => 'publish',
			'post_type' => 'wpcf7_contact_form',
		);
		// Insert the post into the database
		$cf7post_id = wp_insert_post($cf7_post);

		add_post_meta($cf7post_id, "_form", '			<div class="row justify-content-md-start justify-content-center">
							<div class="col-lg-6">
							<label> Your Name
								[text* your-name autocomplete:name placeholder "Name Here"]
								</label>
							</div>
							<div class="col-lg-6">
							<label> Email

[email* email-459 placeholder "Email Address Here"]
							 </label>
							</div>
							<div class="col-lg-12">	<label> Message
									[textarea your-message placeholder "Question Here"] </label></div>
<div class="theme-btn">
								 [submit "Submit Now"]                </div>

							</div>
');

		$cf7mail_data = array(
			'subject' => '[_site_title] "[your-subject]"',
			'sender' => '[_site_title] <abc@gmail.com>',
			'body' => 'From: [your-name] <[your-email]>
			Subject: [your-subject]

			Message Body:
			[your-message]

			--
			This e-mail was sent from a contact form on [_site_title] ([_site_url])',
			'recipient' => '[_site_admin_email]',
			'additional_headers' => 'Reply-To: [your-email]',
			'attachments' => '',
			'use_html' => 0,
			'exclude_blank' => 0
		);

		add_post_meta($cf7post_id, "_mail", $cf7mail_data);
		// Gets term object from Tree in the database.

		$cf7shortcode = '[contact-form-7 id="' . $cf7post_id . '" title="' . $cf7title . '"]';


		$json_theme1 = array('premium_template_slug' => $resp_slug);
		$json_args1 = array(
			'method' => 'POST',
			'headers' => array(
				'Content-Type' => 'application/json'
			),
			'body' => json_encode($json_theme1),
		);

		$request_data1 = wp_remote_post(IBTANA_THEME_LICENCE_ENDPOINT . 'get_client_ibtana_premium_theme_json', $json_args1);
		$response_json1 = json_decode(wp_remote_retrieve_body($request_data1));
		/*	    print_r($response_json1->data);
		 */
		$buildercontent = $response_json1->data;



		$home_id;

		$page_title = 'Home Page';
		$page_slug = 'home-page';

		$page_check = get_page_by_title($page_title);
		$vw_page = array(
			'post_type' => 'page',
			'post_title' => $page_title,
			'post_content' => $buildercontent,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => $page_slug
		);
		$home_id = wp_insert_post(wp_slash($vw_page));
		add_post_meta($home_id, '_wp_page_template', 'page-template/ibtana-template.php');

		update_option('page_on_front', $home_id);
		update_option('show_on_front', 'page');

		$this->theme_create_customizer_nav_menu_gutenberg();


		$VW_Widget_Importer = new VW_Widget_Importer;
		$VW_Widget_Importer->import_widgets($this->widget_file_url);

		if (isset($home_id)) {
			echo json_encode(['home_page_id' => $home_id, 'home_page_url' => get_edit_post_link($home_id, '')]);
		}
		exit;

	}


	// ------------ Ibtana Activation Close -----------
	//guidline for about theme
	public function vw_stock_images_pro_mostrar_guide()
	{

		$display_string = '';

		// Check the validation Start
		$vw_stock_images_pro_license_key = ThemeWhizzie::get_the_theme_key();
		$endpoint = SHOPIFY_THEME_LICENCE_ENDPOINT . 'status';
		$body = [
			'theme_license_key' => $vw_stock_images_pro_license_key,
			'site_url' => site_url(),
			'theme_text_domain' => wp_get_theme()->get('TextDomain')
		];
		$body = wp_json_encode($body);
		$options = [
			'body' => $body,
			'headers' => [
				'Content-Type' => 'application/json',
			]
		];
		$response = wp_remote_post($endpoint, $options);
		if (is_wp_error($response)) {
			// ThemeWhizzie::set_the_validation_status('false');
		} else {
			$response_body = wp_remote_retrieve_body($response);
			$response_body = json_decode($response_body);

			if ($response_body->is_suspended == 1) {
				ThemeWhizzie::set_the_suspension_status('true');
			} else {
				ThemeWhizzie::set_the_suspension_status('false');
			}

			$display_string = isset($response_body->display_string) ? $response_body->display_string : '';

			if ($display_string != '') {
				if (strpos($display_string, '[THEME_NAME]') !== false) {
					$display_string = str_replace("[THEME_NAME]", "VW Stock Images", $display_string);
				}
				if (strpos($display_string, '[THEME_PERMALINK]') !== false) {
					$display_string = str_replace("[THEME_PERMALINK]", "https://www.vwthemes.com/themes/lens-wordpress-theme/", $display_string);
				}
				echo '<div class="notice is-dismissible error thb_admin_notices">' . $display_string . '</div>';
			}



			if ($response_body->status === false) {
				ThemeWhizzie::set_the_validation_status('false');
			} else {
				ThemeWhizzie::set_the_validation_status('true');
			}
		}
		// Check the validation END

		$theme_validation_status = ThemeWhizzie::get_the_validation_status();

		//custom function about theme customizer
		$return = add_query_arg(array());
		$theme = wp_get_theme('vw-stock-images-pro');

		?>

		<div class="wrapper-info get-stared-page-wrap">

			<div class="wrapper-info-content">
				<h2><?php _e('Welcome to VW Stock Images', 'vw-stock-images-pro'); ?> <span class="version">Version:
						<?php echo esc_html($theme['Version']); ?></span></h2>
				<p><?php _e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, block based and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.', 'vw-stock-images-pro'); ?>
				</p>
			</div>
			<div class="tab-sec theme-option-tab">
				<div class="tab">
					<button class="tablinks active" onclick="openCity(event, 'theme_activation')"
						data-tab="theme_activation"><?php _e('Key Activation', 'vw-stock-images-pro'); ?></button>
					<button class="tablinks wizard-tab" onclick="openCity(event, 'demo_offer')"
						data-tab="demo_offer"><?php _e('Setup Wizard', 'vw-stock-images-pro'); ?></button>
					<button class="tablinks" onclick="openCity(event, 'theme_info')"
						data-tab="theme_info"><?php _e('Support', 'vw-stock-images-pro'); ?></button>
					<button class="tablinks" onclick="openCity(event, 'plugins')"
						data-tab="plugins"><?php _e('Plugins', 'vw-stock-images-pro'); ?></button>
					<button class="tablinks other-product-tab"
						onclick="openCity(event, 'others_theme')"><?php esc_html_e('All Themes', 'vw-stock-images-pro'); ?></button>
				</div>

				<!-- Tab content -->
				<div id="theme_activation" class="tabcontent open">

					<div class="theme_activation-wrapper">
						<div class="theme_activation_spinner">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								style="margin:auto;background:#fff;display:block;" width="200px" height="200px"
								viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
								<g transform="translate(50,50)">
									<g transform="scale(0.7)">
										<circle cx="0" cy="0" r="50" fill="#0f81d0"></circle>
										<circle cx="0" cy="-28" r="15" fill="#cfd7dd">
											<animateTransform attributeName="transform" type="rotate" dur="1s"
												repeatCount="indefinite" keyTimes="0;1" values="0 0 0;360 0 0">
											</animateTransform>
										</circle>
									</g>
								</g>
							</svg>
						</div>
						<div class="theme-wizard-key-status">
							<?php
							if ($theme_validation_status === 'false') {
								esc_html_e('Theme License Key is not activated!', 'vw-stock-images-pro');
							} else {
								esc_html_e('Theme License is Activated!', 'vw-stock-images-pro');
							}
							?>
						</div>
						<?php $this->activation_page(); ?>
					</div>
				</div>
				<div id="demo_offer" class="tabcontent">
					<?php $this->wizard_page(); ?>
				</div>
				<div id="theme_info" class="tabcontent">
					<div class="col-left-inner">
						<h3><?php _e('VW Stock Images Information', 'vw-stock-images-pro'); ?></h3>
						<hr class="h3hr">
						<h4><?php _e('Theme Documentation', 'vw-stock-images-pro'); ?></h4>
						<p><?php _e('If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-stock-images-pro'); ?>
						</p>
						<div class="info-link">
							<a href="<?php echo esc_url(vw_stock_images_pro_THEME_DOC); ?>" target="_blank">
								<?php _e('Documentation', 'vw-stock-images-pro'); ?></a>
						</div>
						<hr>
						<h4><?php _e('Having Trouble, Need Support?', 'vw-stock-images-pro'); ?></h4>
						<p> <?php _e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-stock-images-pro'); ?>
						</p>
						<div class="info-link">
							<a href="<?php echo esc_url(vw_stock_images_pro_SUPPORT); ?>"
								target="_blank"><?php _e('Support Forum', 'vw-stock-images-pro'); ?></a>
						</div>
						<hr>
						<h4><?php _e('Reviews & Testimonials', 'vw-stock-images-pro'); ?></h4>
						<p> <?php _e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-stock-images-pro'); ?>
						</p>
						<div class="info-link">
							<a href="<?php echo esc_url(vw_stock_images_pro_REVIEW); ?>"
								target="_blank"><?php _e('Reviews', 'vw-stock-images-pro'); ?></a>
						</div>
					</div>
					<div class="col-right-inner">
						<div id="vw-demo-setup-guid">
							<h3><?php esc_html_e('Checkout our setup videos', 'vw-stock-images-pro'); ?></h3>
							<hr />
							<ul>
								<li>
									<a href="javascript:void(0);"
										doc-video-url="https://www.youtube.com/embed/nLB9E6BBBv0"><span
											class="dashicons dashicons-welcome-widgets-menus"></span>Setup Menu</a>
								</li>
								<li>
									<a href="javascript:void(0);"
										doc-video-url="https://www.youtube.com/embed/gjccwcAK47o"><span
											class="dashicons dashicons-email-alt"></span>Setup Contact Page</a>
								</li>
								<li>
									<a href="javascript:void(0);"
										doc-video-url="https://www.youtube.com/embed/7BvTpLh-RB8"><span
											class="dashicons dashicons-editor-table"></span>Setup Widgets</a>
								</li>
								<li>
									<a href="javascript:void(0);"
										doc-video-url="https://www.youtube.com/embed/Mox298rk0Qo"><span
											class="dashicons dashicons-share"></span>Setup Social Icon</a>
								</li>
								<li>
									<a href="javascript:void(0);"
										doc-video-url="https://www.youtube.com/embed/hLtS4sztAX4"><span
											class="dashicons dashicons-wordpress-alt"></span>Install WordPress Theme</a>
								</li>
								<li>
									<a href="javascript:void(0);"
										doc-video-url="https://www.youtube.com/embed/8UxkXkix-ic"><span
											class="dashicons dashicons-admin-users"></span>Create WordPress User</a>
								</li>
								<li>
									<a href="javascript:void(0);"
										doc-video-url="https://www.youtube.com/embed/1xGlbWOzQBg"><span
											class="dashicons dashicons-image-flip-horizontal"></span>Setup Slider</a>
								</li>
								<li>
									<a href="javascript:void(0);"
										doc-video-url="https://www.youtube.com/embed/pJFF_wjdvcA"><span
											class="dashicons dashicons-database"></span>WordPress Backup</a>
								</li>
								<li>
									<a href="javascript:void(0);"
										doc-video-url="https://www.youtube.com/embed/xXdnUTPG_6A"><span
											class="dashicons dashicons-instagram"></span>Connect Instagram</a>
								</li>
								<li>
									<a href="javascript:void(0);"
										doc-video-url="https://www.youtube.com/embed/leLBzmbvdQQ"><span
											class="dashicons dashicons-table-col-delete"></span>Fix 404 Error</a>
								</li>
								<li>
									<a href="javascript:void(0);"
										doc-video-url="https://www.youtube.com/embed/OPBONJBtO6g"><span
											class="dashicons dashicons-admin-page"></span>Setup Template Pages</a>
								</li>
								<li>
									<a href="javascript:void(0);"
										doc-video-url="https://www.youtube.com/embed/j7veMuhcXYA"><span
											class="dashicons dashicons-video-alt3"></span>Create a New Post</a>
								</li>
								<li>
									<a href="javascript:void(0);"
										doc-video-url="https://www.youtube.com/embed/ovcok3FPRto"><span
											class="dashicons dashicons-welcome-add-page"></span>Setup Shortcode Pages</a>
								</li>
								<li>
									<a href="javascript:void(0);"
										doc-video-url="https://www.youtube.com/embed/O6elK2kSHQw"><span
											class="dashicons dashicons-images-alt2"></span>Setup Gallery Plugin</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="wz-video-model">
				<span class="dashicons dashicons-no"></span>
				<iframe width="100%" src="" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen></iframe>
			</div>
			<div id="plugins" class="tabcontent">
				<div class="wizard-plugin-wrapper">
					<div class="o-product-row">
						<div class="plugin-col ibtana-plugin-col">
							<img
								src="<?php echo esc_url(get_template_directory_uri() . '/theme-wizard/assets/images/banner-772x250.png'); ?>">
							<h3><?php echo esc_html('Ibtana - WordPress Website Builder Plugin'); ?></h3>
							<p><?php echo esc_html('Ibtana Gutenberg Editor has ready made eye catching responsive templates build with custom blocks and options to extend Gutenberg’s default capabilities. You can easily import demo content for the block or templates with a single click'); ?>
							</p>
							<?php
							$plugin_ins = Vw_Premium_Theme_Plugin_Activation_Settings::get_instance();
							$vw_theme_actions = $plugin_ins->recommended_actions;

							if ($vw_theme_actions):
								foreach ($vw_theme_actions as $key => $vw_theme_actionValue):
									?>
									<div class="ibtana-activation-btn">
										<?php echo wp_kses_post($vw_theme_actionValue['link']); ?>
									</div>
								<?php endforeach;
							endif; ?>
						</div>
						<div class="plugin-col">
							<img
								src="<?php echo esc_url(get_template_directory_uri() . '/theme-wizard/assets/images/Ibtana-ecommerce-banner.png'); ?>">

							<h3><?php echo esc_html('Ibtana – Woocommerce Product Addons'); ?></h3>
							<p><?php echo esc_html('Ibtana – Ecommerce Product Addons is excellent for designing a highly customized product page that shows your products in a more prominent and interesting way. With these product add ons, creating unique product pages is now possible.'); ?>
							</p>
							<a href="<?php echo esc_url('https://www.vwthemes.com/plugins/woocommerce-product-add-ons/'); ?>"
								target="_blank"><?php echo esc_html('Buy Now'); ?></a>
						</div>
						<div class="plugin-col">
							<img
								src="<?php echo esc_url(get_template_directory_uri() . '/theme-wizard/assets/images/mega-menu.png'); ?>">

							<h3><?php echo esc_html('Ibtana- Mega Menu Addon'); ?></h3>
							<p><?php echo esc_html('View our mega menu demos or start the setup wizard which will guide you through all the steps to set up your menus.'); ?>
							</p>
							<a href="<?php echo esc_url('https://www.vwthemes.com/plugins/woocommerce-product-add-ons/'); ?>"
								target="_blank"><?php echo esc_html('Buy Now'); ?></a>
						</div>
						<div class="plugin-col">
							<img
								src="<?php echo esc_url(get_template_directory_uri() . '/theme-wizard/assets/images/VWThemes_banner_plugin.png'); ?>">
							<h3><?php echo esc_html('Title Banner Image Plugin'); ?></h3>
							<p><?php echo esc_html('If you are interested in adding the banner images, you check VW Title Banner Plugin. Its main speciality is that it permits user the addition of banner image on post, custom post or any page. '); ?>
							</p>
							<a href="<?php echo esc_url('https://www.vwthemes.com/premium-plugin/vw-title-banner-plugin/'); ?>"
								target="_blank"><?php echo esc_html('Buy Now'); ?></a>
						</div>

						<div class="plugin-col">
							<img
								src="<?php echo esc_url(get_template_directory_uri() . '/theme-wizard/assets/images/gallery_plugin_banner.png'); ?>">

							<h3><?php echo esc_html('VW Gallery Images Plugin'); ?></h3>
							<p><?php echo esc_html('The VW Gallery Plugin is an amazing WordPress gallery plugin. It helps you in creating the elegant gallery within few minutes. The VW Gallery plugin offers the advantage of displaying multiple galleries on a single page or post.'); ?>
							</p>
							<a href="<?php echo esc_url('https://www.vwthemes.com/premium-plugin/vw-gallery-plugin/'); ?>"
								target="_blank"><?php echo esc_html('Buy Now'); ?></a>
						</div>

					</div>
				</div>
			</div>
			<div id="others_theme" class="tabcontent">
				<script>

					var data_post = { "para": "1" };

					jQuery.ajax({
						method: "POST",
						url: "https://www.vwthemes.com/wp-json/ibtana-licence/v2/get_modal_contents",
						data: JSON.stringify(data_post),
						dataType: 'json',
						contentType: 'application/json',
					}).done(function (data) {
						/*console.log(data);*/
						var premium_data = data.data.products;
						for (var i = 0; i < premium_data.length; i++) {
							var premium_product = premium_data[i];
							var card_content = `<div class="o-products-col" data-id="` + premium_product.id + `">
											  <div class="o-products-image">
												  <img src="`+ premium_product.image + `">
											  </div>
											  <h3>`+ premium_product.title + `</h3>
											  <a href="`+ premium_product.permalink + `" target="_blank">Buy Now</a>
											  <a href="`+ premium_product.demo_url + `" target="_blank">View Demo</a>
										  </div>`;
							jQuery('.wz-spinner-wrap').css('display', 'none');
							jQuery('#other-products .o-product-row').append(card_content);
						}

						var premium_category = data.data.sub;
						var active_class = ""
						/*console.log(premium_category.length);*/
						for (let i = 0; i < premium_category.length; i++) {
							if (i == 0) {
								active_class = "active";
							} else {
								active_class = "";
							}
							let premium_product = premium_category[i];
							let card_content = `<li data-ids="` + premium_product.product_ids + `" onclick="other_products(this);" class="` + active_class + `">
											  `+ premium_product.name + `<span class="badge badge-info">` + premium_product.product_ids.length + `</span>
										  </li>`;
							jQuery('.o-product-col-1 ul').append(card_content);
						}
					});

					function other_products(content) {

						jQuery('.o-product-col-1 ul li').attr('class', '');
						content.classList.add("active");
						var data_ids = jQuery(content).attr('data-ids');

						var id_arr = data_ids.split(',');
						jQuery('.o-product-row .o-products-col[data-id]').hide();
						for (var i = 0; i < id_arr.length; i++) {
							var single_id = id_arr[i];
							jQuery('.o-product-row .o-products-col[data-id="' + single_id + '"]').show();
						}

					}

				</script>
				<div id="other-products">
					<div class="wz-spinner-wrap">
						<div class="lds-dual-ring"></div>
					</div>
					<div class="o-product-main-row">
						<div class="o-product-col-1">
							<ul>

							</ul>
						</div>
						<div class="o-product-col-2">
							<div class="social-theme-search">
								<input class="themesearchinput" type="text" placeholder="Search Theme Here">
							</div>
							<div class="o-product-row" style="clear: both;">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

	<?php }


	// Add a Custom CSS file to WP Admin Area
	public function vw_stock_images_pro_admin_theme_style()
	{
		wp_enqueue_style('vw-stock-images-pro-font', $this->vw_stock_images_pro_admin_font_url(), array());
		wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/theme-wizard/getstarted/getstart.css');
	}

	// Theme Font URL
	public function vw_stock_images_pro_admin_font_url()
	{
		$font_url = '';
		$font_family = array();
		$font_family[] = 'Muli:300,400,600,700,800,900';

		$query_args = array(
			'family' => urlencode(implode('|', $font_family)),
		);
		$font_url = add_query_arg($query_args, '//fonts.googleapis.com/css');
		return $font_url;
	}
}

set_theme_mod('vw_stock_images_pro_slider_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
set_theme_mod('vw_stock_images_pro_slider_heading', 'High Quality Stock Images & Videos');

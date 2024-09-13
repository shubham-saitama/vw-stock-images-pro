/**
 * Exoplanet Custom JS
 *
 * @package Exoplanet
 *
 * Distributed under the MIT license - http://opensource.org/licenses/MIT
 */

var stickyon = jQuery('#sticky-onoff').text().trim();
var a1 = stickyon.length;
window.onscroll = function () {
  if (a1 == 3) {
    myScrollNav();
  }
}

var navbar = document.getElementById("vw-sticky-menu");
var sticky = navbar.offsetTop;
function myScrollNav() {
  if (window.pageYOffset > sticky) {
    //alert(window.pageYOffset);
    navbar.classList.add("sticky");
    navbar.classList.add("stickynavbar");
  } else {
    navbar.classList.remove("sticky");
    navbar.classList.remove("stickynavbar");
  }
}
jQuery(function ($) {

  jQuery('.search-icon > i').click(function () {
    jQuery(".serach_outer").slideDown(700);
  });

  jQuery('.closepop i').click(function () {
    jQuery(".serach_outer").slideUp(700);
  });
});

var menu_width = "";

var menu_width = "";
/* Mobile responsive Menu*/
jQuery(function ($) {
  jQuery('#open_nav').click(function () {
    jQuery('#sidebar1').css({ "width": "250px", "display": "block" })
  })
  jQuery('#close_nav').click(function () {
    jQuery('#sidebar1').css({ "width": "0", "display": "none" })
  })
});

jQuery(document).ready(function () {
  jQuery('.archive .product a.added').removeClass("loading");
})

function setQueryParams(data_obj) {
  let url = new URL(window.location.href)
  let params = new URLSearchParams(url.search)

  const data_obj_keys = Object.keys(data_obj)

  for (let index = 0; index < data_obj_keys.length; index++) {
    const element = data_obj_keys[index]

    if ((element != 'base_url') && (element != 'values')) {

      const value = data_obj[element];

      if (Array.isArray(value)) {

        const joined_cat = value.join(',');
        params.set(element, joined_cat);
      } else {
        params.set(element, value);
      }
    }
  }

  const querySting = params.toString()

  window.history.replaceState(null, null, `?${querySting}`)
}

function checkCategoryCheckboxFromURL() {

  const params = new URLSearchParams(window.location.search);

  const categoriesParam = params.get('image_cat');

  const search_value = params.get('search_value');
  jQuery(`input[name="products_search"]`).val(search_value);

  if (categoriesParam) {

    const categorySlugs = categoriesParam.split(',');

    categorySlugs.forEach(categoryslug => {

      const categoryCheckbox = jQuery(`input[name="image_cat"][value="${categoryslug}"]`);

      if (categoryCheckbox.length) {
        categoryCheckbox.prop('checked', true);
        categoryCheckbox.parent('label').addClass('active-cat');
      }
    });
  }
}

function vw_stock_images_pro_filters(page) {
  var data_obj = {};

  // data_obj['values'] = jQuery('#product-price-slider').slider("values");
  // data_obj['search_value'] = jQuery('[name="products_search"]').val();

  jQuery('.sidebar-filter [type="checkbox"]:checked').each(function (index, element) {
    if (!Array.isArray(data_obj[jQuery(element).attr('name')])) {
      data_obj[jQuery(element).attr('name')] = new Array();
    }
    data_obj[jQuery(element).attr('name')].push(jQuery(element).val())
  });

  if (page) {
    data_obj['paged'] = page;
  }

  setQueryParams(data_obj);

  data_obj.base_url = window.location.href;
  // console.log('data obj===========>', data_obj);
  jQuery.post(vw_stock_images_pro_customscripts_obj.ajaxurl, {
    'action': 'get_shop_page_filter',
    'data': data_obj
  })
    .done(function (response) {
      // console.log('Response:', response);
      var $newItems = jQuery(response.html);
      jQuery('.pagination-wrapper').html(response.pagination);
      jQuery('.row.grid').empty();
      jQuery('.row.grid').prepend($newItems).isotope('prepended', $newItems);
      jQuery('#filters .button').first().click();
    });

}

jQuery(document).ready(function ($) {

  checkCategoryCheckboxFromURL()

  // vw_stock_images_pro_filters();

  jQuery('.archive .product a.added').removeClass("loading");

  const get_woocommerce_currency_symbol = vw_stock_images_pro_customscripts_obj.get_woocommerce_currency_symbol;
  const finalAmount = get_woocommerce_currency_symbol + parseInt(vw_stock_images_pro_customscripts_obj.product_max_price);
  const StartAmountProduct = get_woocommerce_currency_symbol + 0;


  jQuery("#product-amount-final").text(finalAmount);
  jQuery("#product-amount-start").text(StartAmountProduct);

  jQuery('.sidebar-filter [type="checkbox"]').on('change', function (event) {
    vw_stock_images_pro_filters();
    jQuery(this).parent('label').toggleClass('active-cat');
  });


  jQuery('[name="products_search"').on('input', function (event) {
    vw_stock_images_pro_filters();
  });

  if ($("#product-price-slider").length) {
    jQuery("#product-price-slider").slider({
      range: true,
      min: 0,
      max: parseInt(vw_stock_images_pro_customscripts_obj.product_max_price),
      values: [0, parseInt(vw_stock_images_pro_customscripts_obj.product_max_price)],
      change: function (event, ui) {

        if (event.originalEvent) {
          vw_stock_images_pro_filters();
        }
      },
      slide: function (event, ui) {

        jQuery("#product-amount-start").text(
          get_woocommerce_currency_symbol + ui.values[0]
        );
        jQuery("#product-amount-end").text(
          get_woocommerce_currency_symbol + ui.values[1]
        );
      }
    });

    var data_obj = {};
    data_obj['values'] = $("#product-price-slider").slider("values");
  }

  jQuery('.yith-wcwl-add-button .add_to_wishlist').on('click', add_to_wishlist);

  jQuery('a.add_to_wishlist.single_add_to_wishlist').on('click', add_to_wishlist)

})

function add_to_wishlist(e) {
  setTimeout(() => {
    jQuery.ajax({
      type: 'POST',
      url: vw_stock_images_pro_customscripts_obj.ajaxurl,
      data: {
        action: 'get_wishlist_count'
      },
      success: function (response) {
        if (response.status == 200) {
          jQuery('.wishlist-counter.count').text(response.wishlist_count);
        }
      }
    });
  }, 1000);
}


jQuery('document').ready(function () {

  jQuery('#videoBtn').click(function () {
    jQuery("#chooseVideo").css("display", "block");
  });
  jQuery('.close-one').click(function () {
    jQuery("#chooseVideo").css("display", "none");
  });

  jQuery('.cat_toggle i').click(function () {
    jQuery('#cart_animate').toggle('slow');
  });


  jQuery(window).on('scroll', function (e) {
    if (jQuery("#counter-sec").offset() != undefined) {

      if (jQuery(window).scrollTop() >= (jQuery("#counter-sec").offset().top - (jQuery(window).height()))) {
        if (!jQuery("#counter-sec").hasClass("animated")) {
          jQuery('#counter-sec .counter1-up').each(function () {
            jQuery(this).prop('Counter', 0).animate({
              Counter: jQuery(this).text()
            }, {
              duration: 10000,
              easing: 'swing',
              step: function (now) {
                jQuery(this).text(Math.ceil(now));
              }
            });
          });
          jQuery("#triggered").addClass("show");
          jQuery("#counter-sec").addClass("animated");
        }
      }
    }
  });

  // jQuery(document).ready(function() {
  //     jQuery('.counter1-up').each(function () {
  //       jQuery(this).prop('Counter', 0).animate({
  //           Counter: jQuery(this).text()
  //       }, {
  //           duration: 4000,
  //           easing: 'swing',
  //           step: function (now) {
  //               jQuery(this).text(Math.ceil(now));
  //           }
  //       });
  //   });
  //
  // });


  var owl = jQuery('#pests-problem .owl-carousel');
  owl.owlCarousel({
    margin: 10,
    nav: false,
    dots: true,
    autoplay: false,
    // lazyLoad: true,
    dotsEach: 3,
    items: 1,
    autoplayTimeout: 4000,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      500: {
        items: 1
      },
      600: {
        items: 1
      },
      700: {
        items: 2
      },
      900: {
        items: 3
      },
      1000: {
        items: 4
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });


  var owl = jQuery('#professional-services .owl-carousel');
  owl.owlCarousel({
    margin: 20,
    nav: false,
    dots: true,
    autoplay: false,
    // lazyLoad: true,
    dotsEach: 3,
    items: 1,
    autoplayTimeout: 4000,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      500: {
        items: 2
      },
      600: {
        items: 1
      },
      700: {
        items: 2
      },
      900: {
        items: 3
      },
      1200: {
        items: 4
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });


  var owl = jQuery('#professionals-team .owl-carousel');
  owl.owlCarousel({
    margin: 10,
    nav: false,
    dots: true,
    autoplay: false,
    // lazyLoad: true,
    dotsEach: 3,
    items: 1,
    autoplayTimeout: 4000,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      500: {
        items: 2
      },
      600: {
        items: 1
      },
      700: {
        items: 2
      },
      900: {
        items: 3
      },
      1000: {
        items: 4
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });


  jQuery('#our-client .slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    dots: false,
    asNavFor: '.slider-nav',
    responsive: [
      {
        breakpoint: 767,
        settings: {
          dots: true,
        }
      }
    ]
  });
  jQuery('#our-client .slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    arrow: false,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          dots: false,
        }
      }
    ]
  });




  var owl = jQuery('#blog-news .owl-carousel');
  owl.owlCarousel({
    margin: 25,
    nav: false,
    dots: false,
    autoplay: false,
    // lazyLoad: true,
    autoplayTimeout: 4000,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      500: {
        items: 1
      },
      600: {
        items: 1
      },
      700: {
        items: 2
      },
      900: {
        items: 2
      },
      1000: {
        items: 2
      },
      1300: {
        items: 3
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });


  var owl = jQuery('#partner .owl-carousel');
  if (owl.length > 0) {
    owl.owlCarousel({
      margin: 25,
      nav: false,
      autoplay: true,
      lazyLoad: true,
      autoplayTimeout: 3000,
      dots: false,
      loop: true,
      navText: ['<i class="fas fa-arrow-left" aria-hidden="true"></i>', '<i class="fas fa-arrow-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 2,
        },
        575: {
          items: 2,
        },
        576: {
          items: 3,
        },
        768: {
          items: 4
        },
        1000: {
          items: 4
        },
        1366: {
          items: 5
        }
      },
      autoplayHoverPause: true,
      mouseDrag: true
    });
  }

  jQuery('.image-popup-vertical-fit').magnificPopup({
    type: 'image',
    mainClass: 'mfp-with-zoom',
    gallery: {
      enabled: true
    },

    zoom: {
      enabled: true,

      duration: 300, // duration of the effect, in milliseconds
      easing: 'ease-in-out', // CSS transition easing function

      opener: function (openerElement) {

        return openerElement.is('img') ? openerElement : openerElement.find('img');
      }
    }

  });

  jQuery('a.accordion-toggle').click(function () {
    jQuery("i", this).toggleClass("fas fa-plus fas fa-times");
  });
  var interval = null;
  function show_loading_box() {
    jQuery(".eco-box").css("display", "none");
    clearInterval(interval);
  }

  // offer section

  jQuery('document').ready(function () {

    interval = setInterval(show_loading_box, 1000);
  });

  //  offer section
  interval = setInterval(show_loading_box, 1000);

  function flashcountdown($timer, mydate) {
    // Set the date we're counting down to
    var countDownDate = new Date(mydate).getTime();
    // Update the count down every 1 second
    var x = setInterval(function () {
      // Get todays date and time
      var now = new Date().getTime();
      // Find the distance between now an the count down date
      var distance = countDownDate - now;
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      // Output the result in an element with id="timer"
      // console.log($timer.html())
      $timer.html("<div class='numbers'><div class='timer_days'>" + days + "</div><div class='nofont'>Day</div>" + "</div>" + "   " + "<div class='numbers'><div class='timer_days'>" + hours + "</div><div class='nofont'>Hrs</div>" + "</div>" + "   " + "<div class='numbers'><div class='timer_days'>" + minutes + "</div><div class='nofont'>Min</div>" + "</div>" + "   " + "<div class='numbers'><div class='timer_days'>" + seconds + "</div><div class='nofont'>Sec</div>" + "</div>");

      // If the count down is over, write some text
      if (distance < 0) {
        clearInterval(x);
        $timer.html("Timer Up -EVENT EXPIRED");
      }
    }, 1000);
  }

  var mydate = jQuery('.date2').val();
  jQuery(".countdown2").each(function () {
    flashcountdown(jQuery(this), mydate);
  });


});




/* Counter */
jQuery(document).ready(function () {

  // ------------ Scroll Top ---------------

  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
      jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
      jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
  });
  jQuery('#return-to-top').click(function () {      // When arrow is clicked
    jQuery('body,html').animate({
      scrollTop: 0                       // Scroll to top of body
    }, 2000);
  });



});

jQuery(function ($) {
  $(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > 100) {
      $('.right_menu').addClass('scrolled');
    } else {
      $('.right_menu').removeClass('scrolled');
    }
    $('.main-header').css('background-position', 'center ' + (scrollTop / 2) + 'px');
  });

});

//At the document ready event
jQuery(function () {
  new WOW().init();
});

//also at the window load event
jQuery(window).on('load', function () {

  new WOW().init();
});


jQuery('body').on('added_to_cart', function (e, fragments, cart_hash, button) {
  var product = '';
  var img = '';
  var title = '';
  var url = '';

  if (vw_stock_images_pro_customscripts_obj.is_home == "1") {
    var product = jQuery(button).closest('.product-main-wrap');
    var img = product.find('img').attr('src');
    var title = product.find('.product-title a').text();
    var url = product.find('.woocommerce-loop-product__link').attr('href');
  } else {
    var product = jQuery(button).closest('.popular-pro-box');
    var img = product.find('img').attr('src');
    var title = product.find('.product-title a').text();
    var url = product.find('.product-title a').attr('href');
  }
  if (product != '') {
    jQuery.notify({
      icon: img,
      title: title,
      message: "Product has been added to your cart.",
      url: url
    }, {
      type: 'minimalist',
      delay: "3000",
      icon_type: 'image',
      template: '  <div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
        '<div class="d-flex gap-2 align-items-center">' +
        '<div>' +
        '<img data-notify="icon" class="img-circle pull-left">' +
        '</div>' +
        '<div>' +
        '<span class="prod-title" data-notify="title">{1}</span>' +
        '<div class="prod-messg" data-notify="message">{2}</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>'
    });
  }

});


function run_isotope() {
  var $grid = jQuery('.grid').isotope({
    itemSelector: '.grid-item',
    layoutMode: 'masonry'
  });
  // Filter items on button click
  jQuery('#filters').on('click', 'button', function () {
    var filterValue = jQuery(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });
  jQuery('.filter-button').on('click', function () {
    jQuery('.filter-button').removeClass('active');
    jQuery(this).addClass('active');
  });
  // Function to add new items
  function addItems(newItems) {
    // Append new items to the grid
    $grid.append(newItems)
      // Layout new items
      .isotope('appended', newItems);
  }

}
jQuery(document).ready(function ($) {
  run_isotope();
});




// Define the function to handle the modal message display
function handleButtonClick(type, className) {
  let message = '';

  if (type === 'login') {
    message = 'You need to log in to download images. <a href="' + vw_stock_images_pro_customscripts_obj.loginUrl + '">Log in here</a>';
  } else if (type === 'premium') {
    message = 'You need a premium membership to download this image. <a href="upgrade_link">Upgrade here</a>';
  } else if (type === 'like') {
    message = 'You need to log in to like images. <a href="' + vw_stock_images_pro_customscripts_obj.loginUrl + '">Log in here</a>';
  } else {
    window.location.href = className.href;
    return;
  }

  // Inject message into modal and show it
  document.querySelector('#notificationModal .modal-body').innerHTML = message;
  const modal = new bootstrap.Modal(document.getElementById('notificationModal'));
  modal.show();
}
document.addEventListener('DOMContentLoaded', function () {
  // Use event delegation to handle click events on dynamically added elements
  document.body.addEventListener('click', function (event) {
    if (event.target.matches('.download-button')) {
      const button = event.target;
      const type = button.getAttribute('data-type');
      event.preventDefault();
      event.stopPropagation();

      // Call the function with the type and button element
      handleButtonClick(type, button);
    }
  });
});
jQuery(document).ready(function ($) {
  // Use event delegation by attaching to a parent element like body or a specific wrapper
  jQuery('body').on('click', '.save-post-button', function (evt) {
    // evt.preventDefault();
    evt.stopPropagation();

    var button = jQuery(this);
    const type = button.attr('data-type'); // Access attribute with .attr()
    var postId = button.data('post-id');
    var action = button.hasClass('save') ? 'save_post' : '';

    if (vw_stock_images_pro_customscripts_obj.isUserLoggedIn === 'yes') {
      jQuery.post(vw_stock_images_pro_customscripts_obj.ajax_url, {
        action: action,
        post_id: postId,
      }, function (response) {
        if (response.success) {
          if (action === 'save_post') {
            button.addClass('saved').removeClass('save');
            // Update the button's href to the saved page URL
            button.attr('href', vw_stock_images_pro_customscripts_obj.liked_posts_page_url); // Replace with your actual saved page URL
          } else {
            button.addClass('save').removeClass('saved');
            // Optionally, reset the href or do something else
          }
        }
      });
    } else {
      // Call the handleButtonClick function if the user is not logged in
      handleButtonClick(type, button[0]); // Pass the button element as a DOM node
    }
  });
});
// Handle product image click
jQuery(document).on('click', '.product-image', function (e) {
  e.preventDefault();
  var postID = jQuery(this).data('post-id');

  // Close the current modal (if it is open)
  jQuery('#myNewModal').fadeOut(function () {
    // After the modal has faded out, make the AJAX request for the new post
    jQuery.ajax({
      url: vw_stock_images_pro_customscripts_obj.ajaxurl,
      type: 'POST',
      data: {
        action: 'load_post_content',
        post_id: postID,
      },
      success: function (response) {
        // Display the new post content inside the modal
        jQuery("#myNewModal").fadeIn();
        jQuery('#myNewModal .modal-data').html(response);

        // Reinitialize Isotope for the new content
        var $grid = jQuery('#myNewModal .grid').isotope({
          itemSelector: '.grid-item',
          layoutMode: 'masonry'
        });

        // Handle filter buttons in the new content
        jQuery('#myNewModal #filters').on('click', 'button', function () {
          var filterValue = jQuery(this).attr('data-filter');
          $grid.isotope({ filter: filterValue });
        });

        jQuery('#myNewModal .filter-button').on('click', function () {
          jQuery('#myNewModal .filter-button').removeClass('active');
          jQuery(this).addClass('active');
        });
      },
      error: function () {
        alert('An error occurred while loading the content.');
      }
    });
  });
});

// Closing the post content modal
jQuery(document).on('click', '.close-one', function () {
  jQuery("#myNewModal").fadeOut();
});

// Handle collection button click
jQuery(document).on('click', '.collection-btn', function (e) {
  e.preventDefault();
  e.stopPropagation(); // Ensure the click does not propagate to other handlers
 // Log the value to check if the post ID is captured correctly
 var postId = jQuery(this).attr('data-post-id');
 console.log("Post ID sdsdsd: ", postId);
 
 if (!postId) {
   alert("Post ID is missing.");
   return;
 }
 
  // Send an AJAX request to load the collection content
  jQuery.ajax({
    url: vw_stock_images_pro_customscripts_obj.ajaxurl,
    type: 'POST',
    data: {
      action: 'load_collections_content', // New action for collections
      post_id: postId, 
    },
    success: function (response) {
      // Display the new modal on top of the current post modal
      jQuery("#collectionModal").fadeIn(); // Open the collection modal

      // Populate the collection modal with the AJAX response (template content)
      jQuery('#collectionModal .modal-data').html(response);
    },
    error: function () {
      alert('An error occurred while loading the collections.');
    }
  });
});

// Close modal when clicking on the close button (separate handler)
jQuery(document).on('click', '.close-btn', function () {
  jQuery(this).closest('.modal').fadeOut();
});

// Close modal when clicking outside the modal content (separate handler)
jQuery(document).on('click', '.modal', function (e) {
  if (e.target === this) {
    jQuery(this).fadeOut();
  }
});



jQuery(document).ready(function($) {
  // Use event delegation for Add Collection Form submission
  $(document).on('submit', '#add-collection-form', function(e) {
      e.preventDefault(); // Prevent default form submission

      var formData = $(this).serialize(); // Serialize form data
      // console.log('Form Data:', formData); // Debug form data

      $.ajax({
          url: vw_stock_images_pro_customscripts_obj.ajax_url, // Ensure this is correct
          type: 'POST',
          data: {
              action: 'add_collection',
              collection_name: $('input[name="collection_name"]').val()
          },
          success: function(response) {
              console.log('Response:', response); // Debug AJAX response
              if (response.success) {
                  alert(response.data); // Success message
                  $('#add-collection-form')[0].reset(); // Reset the form
                  updateCollectionSelect(); // Optionally update the select options
              } else {
                  alert(response.data); // Error message
              }
          },
          error: function(xhr, status, error) {
              console.log('AJAX Error:', status, error); // Debug AJAX error
              alert('An error occurred while adding the collection.');
          }
      });
  });

  // Use event delegation for Remove Collection Form submission
  $(document).on('submit', '#remove-collection-form', function(e) {
      e.preventDefault(); // Prevent default form submission

      var formData = $(this).serialize(); // Serialize form data
      console.log('Form Data:', formData); // Debug form data

      $.ajax({
          url: vw_stock_images_pro_customscripts_obj.ajax_url, // Ensure this is correct
          type: 'POST',
          data: {
              action: 'remove_collection',
              collection_id: $('select[name="collection_id"]').val()
          },
          success: function(response) {
              console.log('Response:', response); // Debug AJAX response
              if (response.success) {
                  alert(response.data); // Success message
                  updateCollectionSelect(); // Optionally update the select options
              } else {
                  alert(response.data); // Error message
              }
          },
          error: function(xhr, status, error) {
              console.log('AJAX Error:', status, error); // Debug AJAX error
              alert('An error occurred while removing the collection.');
          }
      });
  });

  // Use event delegation for Add Post to Collection Form submission
  $(document).on('submit', '#add-post-to-collection-form', function(e) {
      e.preventDefault(); // Prevent default form submission

      var formData = $(this).serialize(); // Serialize form data
      console.log('Form Data:', formData); // Debug form data

      $.ajax({
          url: vw_stock_images_pro_customscripts_obj.ajax_url, // Ensure this is correct
          type: 'POST',
          data: {
              action: 'add_post_to_collection',
              post_id: $('input[name="post_id"]').val(),
              collection_id: $('select[name="post_collection_id"]').val()
          },
          success: function(response) {
              console.log('Response:', response); // Debug AJAX response
              if (response.success) {
                  alert(response.data); // Success message
                  $('#add-post-to-collection-form')[0].reset(); // Reset the form
              } else {
                  alert(response.data); // Error message
              }
          },
          error: function(xhr, status, error) {
              console.log('AJAX Error:', status, error); // Debug AJAX error
              alert('An error occurred while adding the post to the collection.');
          }
      });
  });
});


// remove collection button in single collections page 


jQuery(document).ready(function($) {
  // Handle the delete collection button click event
  $('.delete-collection-btn').on('click', function(e) {
      e.preventDefault();

      var collectionId = $(this).data('collection-id'); // Get the collection ID

      if (confirm('Are you sure you want to delete this collection?')) {
          $.ajax({
              url: vw_stock_images_pro_customscripts_obj.ajax_url,
              type: 'POST',
              data: {
                  action: 'remove_collection', // Hooked to our remove function
                  collection_id: collectionId,
              },
              success: function(response) {
                  if (response.success) {
                      alert('Collection removed successfully');
                      location.reload(); // Reload the page to reflect changes
                  } else {
                      alert('Error: ' + response.data);
                  }
              },
              error: function() {
                  alert('There was an error processing your request.');
              }
          });
      }
  });
});

// remove from collection 

jQuery(document).on('click', '.remove-post-from-collection-btn', function(e) {
  e.preventDefault();
  e.stopPropagation();

  var collectionID = jQuery(this).data('collection-id');
  var postID = jQuery(this).data('post-id');

  jQuery.ajax({
      url: vw_stock_images_pro_customscripts_obj.ajax_url, // This is typically defined by WordPress in the frontend
      type: 'POST',
      dataType: 'json',
      data: {
          action: 'remove_post_from_collection',
          collection_id: collectionID,
          post_id: postID,
          // nonce: manage_collection_nonce // Ensure you pass your nonce for security
      },
      success: function(response) {
          if (response.success) {
              alert(response.data.message);

              // Optionally: Remove the post visually from the UI or refresh the collection
              jQuery('.product-image[data-post-id="' + postID + '"]').parent('.grid-item').fadeOut(function() {
                  jQuery(this).remove(); // Remove the element from the DOM after fadeOut
                  run_isotope();
              });
          } else {
              alert(response.data.message);
          }
      },
      error: function() {
          alert('There was an error processing your request.');
      }
  });
});


// remove liked posts


jQuery(document).on('click', '.remove-liked-post-btn', function(e) {
  e.preventDefault();
  e.stopPropagation();
  var postID = jQuery(this).data('post-id');

  jQuery.ajax({
      url: vw_stock_images_pro_customscripts_obj.ajax_url, // Make sure this variable is set in your scripts
      type: 'POST',
      dataType: 'json',
      data: {
          action: 'remove_saved_post',
          post_id: postID,
          // nonce: manage_saved_posts_nonce // Add nonce if needed for security
      },
      success: function(response) {
          if (response.success) {
              // alert('Post removed from your saved posts.');
              jQuery('.product-image[data-post-id="' + postID + '"]').parent('.grid-item').fadeOut(function() {
                jQuery(this).remove(); // Remove the element from the DOM after fadeOut
                run_isotope();
            });
          } else {
              alert(response.data.message);
          }
      },
      error: function(xhr, status, error) {
          console.error('AJAX Error:', status, error);
          alert('An error occurred while removing the post.');
      }
  });
});

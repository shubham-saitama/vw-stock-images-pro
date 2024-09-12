jQuery(document).ready(function($){
    var mediaUploader;
    
    // Open the media uploader when the button is clicked
    $('#image_cat_image_btn').click(function(e) {
        e.preventDefault();
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#image_cat_image').val(attachment.url);
            $('#image_cat_image_preview').html('<img src="' + attachment.url + '" style="max-width:150px;"/>');
        });
        mediaUploader.open();
    });
  });
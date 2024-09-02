/**
 * Exoplanet Custom JS
 *
 * @package Exoplanet
 *
 * Distributed under the MIT license - http://opensource.org/licenses/MIT
 */

 var stickyon=jQuery('#sticky-onoff').text().trim();
   var a1=stickyon.length;
   window.onscroll = function() {
     if(a1==3)
     {
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
jQuery(function($){

    jQuery('.search-icon > i').click(function(){
        jQuery(".serach_outer").slideDown(700);
    });

    jQuery('.closepop i').click(function(){
        jQuery(".serach_outer").slideUp(700);
    });
});

var menu_width="";

var menu_width="";
/* Mobile responsive Menu*/
jQuery(function($){
  jQuery('#open_nav').click(function(){
    jQuery('#sidebar1').css({"width": "250px", "display":"block"})
  })
  jQuery('#close_nav').click(function(){
    jQuery('#sidebar1').css({"width": "0", "display":"none"})
  })
});

jQuery(document).ready(function(){
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

  const categoriesParam = params.get('products_categories');

  const search_value = params.get('search_value');

  jQuery(`input[name="products_search"]`).val(search_value);

  if (categoriesParam) {

    const categoryIds = categoriesParam.split(',');

    categoryIds.forEach(categoryId => {

      const categoryCheckbox = jQuery(`input[name="products_categories"][value="${categoryId}"]`);

      if (categoryCheckbox.length) {
        categoryCheckbox.prop('checked', true);
      }
    });
  }
}

function vw_stock_images_pro_filters(page) {
  var data_obj = {};

  data_obj['values'] = jQuery('#product-price-slider').slider( "values" );
  data_obj['search_value'] = jQuery('[name="products_search"]').val();

  jQuery('.shop-page-filters [type="checkbox"]:checked').each(function(index, element) {
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

  jQuery.post(vw_stock_images_pro_customscripts_obj.ajaxurl, {
    'action': 'get_shop_page_filter',
    'data':   data_obj
  },
  function(response) {
    jQuery('.products.columns-3').html(response.html)
    jQuery('.woocommerce-pagination').html(response.pagination);
  });
}

jQuery(document).ready(function($){

  checkCategoryCheckboxFromURL()

  // vw_stock_images_pro_filters();

  jQuery('.archive .product a.added').removeClass("loading");

  const get_woocommerce_currency_symbol = vw_stock_images_pro_customscripts_obj.get_woocommerce_currency_symbol;
  const finalAmount = get_woocommerce_currency_symbol + parseInt(vw_stock_images_pro_customscripts_obj.product_max_price);
  const StartAmountProduct = get_woocommerce_currency_symbol + 0;


  jQuery( "#product-amount-final" ).text(finalAmount);
  jQuery( "#product-amount-start" ).text(StartAmountProduct);

  jQuery('.shop-page-filters [type="checkbox"]').on('change', function(event) {
    vw_stock_images_pro_filters();
  });


  jQuery('[name="products_search"').on('input',function(event){
    vw_stock_images_pro_filters();
  });

  if ($("#product-price-slider").length) {
      jQuery( "#product-price-slider" ).slider({
        range: true,
        min: 0,
        max: parseInt(vw_stock_images_pro_customscripts_obj.product_max_price),
        values: [ 0, parseInt(vw_stock_images_pro_customscripts_obj.product_max_price) ],
        change: function( event, ui ) {

          if (event.originalEvent) {
            vw_stock_images_pro_filters();
          }
        },
        slide: function( event, ui ) {

          jQuery( "#product-amount-start" ).text(
            get_woocommerce_currency_symbol + ui.values[ 0 ]
          );
          jQuery( "#product-amount-end" ).text(
            get_woocommerce_currency_symbol + ui.values[ 1 ]
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
          if ( response.status == 200 ) {
            jQuery('.wishlist-counter.count').text(response.wishlist_count);
          }
      }
    });
  }, 1000);
}


jQuery('document').ready(function(){

  jQuery('#videoBtn').click(function()
  {
  jQuery("#chooseVideo").css("display","block");
  });
  jQuery('.close-one').click(function()
  {
  jQuery("#chooseVideo").css("display","none");
  });

  jQuery('.cat_toggle i').click(function() {
  jQuery('#cart_animate').toggle('slow');
  });


  jQuery(window).on('scroll', function(e) {
    if ( jQuery("#counter-sec").offset() != undefined ) {

     if (jQuery(window).scrollTop() >= (jQuery("#counter-sec").offset().top - (jQuery(window).height()))) {
       if (!jQuery("#counter-sec").hasClass("animated")) {
         jQuery('#counter-sec .counter1-up').each(function() {
           jQuery(this).prop('Counter', 0).animate({
             Counter: jQuery(this).text()
           }, {
             duration: 10000,
             easing: 'swing',
             step: function(now) {
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
   nav:false,
   dots:true,
   autoplay :false,
   // lazyLoad: true,
   dotsEach:3,
   items:1,
   autoplayTimeout: 4000,
   navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
   loop: true,
   responsive: {
       0: {
         items: 1
       },
       500: {
         items:1
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
   autoplayHoverPause : true,
   mouseDrag: true
 });


   var owl = jQuery('#professional-services .owl-carousel');
  owl.owlCarousel({
    margin: 20,
    nav:false,
    dots:true,
    autoplay :false,
    // lazyLoad: true,
    dotsEach:3,
    items:1,
    autoplayTimeout: 4000,
    navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    loop: true,
    responsive: {
        0: {
          items: 1
        },
        500: {
          items:2
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
    autoplayHoverPause : true,
    mouseDrag: true
  });


 var owl = jQuery('#professionals-team .owl-carousel');
  owl.owlCarousel({
    margin: 10,
    nav:false,
    dots:true,
    autoplay :false,
    // lazyLoad: true,
    dotsEach:3,
    items:1,
    autoplayTimeout: 4000,
    navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    loop: true,
    responsive: {
        0: {
          items: 1
        },
        500: {
          items:2
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
    autoplayHoverPause : true,
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
    arrow:false,
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
     nav:false,
     dots:false,
     autoplay :false,
     // lazyLoad: true,
     autoplayTimeout: 4000,
     navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
     loop: true,
     responsive: {
         0: {
           items: 1
         },
         500: {
           items:1
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
     autoplayHoverPause : true,
     mouseDrag: true
   });


   var owl = jQuery('#partner .owl-carousel');
 if(owl.length > 0){
   owl.owlCarousel({
     margin: 25,
     nav: false,
     autoplay : true,
     lazyLoad: true,
     autoplayTimeout: 3000,
       dots: false,
     loop: true,
     navText : ['<i class="fas fa-arrow-left" aria-hidden="true"></i>','<i class="fas fa-arrow-right" aria-hidden="true"></i>'],
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
     autoplayHoverPause : true,
     mouseDrag: true
 });
 }

 jQuery('.image-popup-vertical-fit').magnificPopup({
  type: 'image',
  mainClass: 'mfp-with-zoom',
  gallery:{
      enabled:true
    },

  zoom: {
    enabled: true,

    duration: 300, // duration of the effect, in milliseconds
    easing: 'ease-in-out', // CSS transition easing function

    opener: function(openerElement) {

      return openerElement.is('img') ? openerElement : openerElement.find('img');
  }
}

});

    jQuery('a.accordion-toggle').click(function() {
        jQuery("i", this).toggleClass("fas fa-plus fas fa-times");
    });
    var interval=null;
    function show_loading_box()
    {
      jQuery(".eco-box").css("display","none");
      clearInterval(interval);
    }

    // offer section

    jQuery('document').ready(function(){

      interval = setInterval(show_loading_box,1000);
    });

    //  offer section
    interval = setInterval(show_loading_box,1000);

  function flashcountdown($timer,mydate){
    // Set the date we're counting down to
    var countDownDate = new Date(mydate).getTime();
    // Update the count down every 1 second
    var x = setInterval(function() {
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
        $timer.html( "<div class='numbers'><div class='timer_days'>" + days + "</div><div class='nofont'>Day</div>" + "</div>" + "   " +"<div class='numbers'><div class='timer_days'>" + hours + "</div><div class='nofont'>Hrs</div>" + "</div>" + "   " + "<div class='numbers'><div class='timer_days'>" + minutes + "</div><div class='nofont'>Min</div>" + "</div>" + "   " + "<div class='numbers'><div class='timer_days'>" + seconds + "</div><div class='nofont'>Sec</div>" + "</div>");

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            $timer.html("Timer Up -EVENT EXPIRED");
        }
    }, 1000);
  }

    var mydate =jQuery('.date2').val();
    jQuery(".countdown2").each(function(){
        flashcountdown(jQuery(this),mydate);
    });


});




/* Counter */
jQuery(document).ready(function(){

   // ------------ Scroll Top ---------------

  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
      jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
      jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
  });
  jQuery('#return-to-top').click(function() {      // When arrow is clicked
    jQuery('body,html').animate({
      scrollTop : 0                       // Scroll to top of body
    }, 2000);
  });



});

jQuery(function($){
    $(window).scroll(function(){
      var scrollTop = $(window).scrollTop();
      if( scrollTop > 100 ){
        $('.right_menu').addClass('scrolled');
      }else{
        $('.right_menu').removeClass('scrolled');
      }
        $('.main-header').css('background-position', 'center ' + (scrollTop / 2) + 'px');
    });

 });

  //At the document ready event
jQuery(function(){
  new WOW().init();
});

//also at the window load event
jQuery(window).on('load', function(){

     new WOW().init();
});


jQuery('body').on('added_to_cart', function(e, fragments, cart_hash, button) {
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
      if ( product != '' ) {
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
              '<div class="d-flex gap-2 align-items-center">'+
              '<div>'+
                '<img data-notify="icon" class="img-circle pull-left">' +
              '</div>'+
              '<div>'+
                '<span class="prod-title" data-notify="title">{1}</span>' +
                '<div class="prod-messg" data-notify="message">{2}</div>' +
              '</div>'+
            '</div>'+
            '</div>'+
            '</div>'
        });
      }

    });

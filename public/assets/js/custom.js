(function($) {
    var base_url = $('#url').val();
    "use strict";
    var bed_room = localStorage.getItem('bed_room');
    var bath_room = localStorage.getItem('bath_room');
    var stories = localStorage.getItem('stories');
    var price_min = localStorage.getItem('price_min');
    var price_max = localStorage.getItem('price_max');
    var sq_area = localStorage.getItem('sq_area');
    var searchStats = localStorage.getItem('searchStats');
    //Begin Loading Handler=
    $(window).load(function() {
        // var bed_room = sessionStorage.getItem('bed_room');
        // var bath_room = sessionStorage.getItem('bath_room');
        // var stories = sessionStorage.getItem('stories');
        // var price_min = sessionStorage.getItem('price_min');
        // var price_max = sessionStorage.getItem('price_max');
        $("#loader").delay(800).fadeOut();
        $("#cover").delay(1200).fadeOut("slow");
        $('#bed_room').val(bed_room);
        $('#bath_room').val(bath_room);
        $('#stories').val(stories);
        $('#sq_area').val(sq_area);
        if(price_min != null && price_max != null){
            $('.price_min').val(price_min);
            $('.price_max').val(price_max);
        }

        if(localStorage.getItem('text_contact') != ''){
            $('textarea#message').val(localStorage.getItem('text_contact'))
        }

        if(searchStats){
           var bed_room_text = bed_room > 1 && bed_room != "" ? ( bed_room == 6 ?  "+5 bedrooms," :  bed_room+" bedrooms,") : (bed_room != "" ? bed_room+" bedroom," : '');
           var  bath_room_text = bath_room > 1  && bath_room != "" ? ( bath_room == 6 ?  "+5 bathrooms," :  bath_room+" bathrooms,") : (bath_room != "" ? bath_room+" bathroom," : '');
           var  stories_text = stories > 1 && stories != "" ? ( stories == 6 ?  "+5 stories," :  stories+" stories,") : (stories != "" ? stories+" story," : '');
           var  sq_area_text = sq_area > 1 && sq_area != "" ? ( sq_area == 6 ?  "+5 Sq. Meters," :  sq_area+" Sq. Meters,") : (sq_area != "" ? sq_area+" Sq. Meter," : '');
            $( ".search_text_area" ).append('<span class="text_results">Result of '+bed_room_text+' '+bath_room_text+' '+stories_text+' '+sq_area_text+' &nbsp;<a href="javascript:void(0);" id="clearSearch" style="text-decoration: underline;color:blue">Remove Search</a></span>');
        }
        var check_url = window.location.href;
        $('.search_text_area').on('click','#clearSearch',function(e){
            e.preventDefault();
    
            window.location.href = base_url+"/projects";
        })
        if(check_url == base_url+"/projects"){
            localStorage.removeItem('bed_room');
            localStorage.removeItem('bath_room');
            localStorage.removeItem('stories');
            localStorage.removeItem('price_min');
            localStorage.removeItem('price_max');
            localStorage.removeItem('sq_area');
            localStorage.removeItem('searchStats');
         
            $('#bed_room').val("");
            $('#bath_room').val("");
            $('#stories').val("");
            $('#sq_area').val("");

            $('.text_results').remove();
         }
    });

    // Go to the page top
    var backToTop = $(".back-to-top").hide();
    $(window).scroll(function(){
        if ( $(this).scrollTop()>100 ){
            backToTop.fadeIn(1300);
        } else {
            backToTop.fadeOut(1300);
        }
    });

    //back to top
    backToTop.on("click", function (){
        $('body,html').animate({scrollTop:0},800);
        return false;
    });

    // For Menu
    $(window).resize(function() {
        if( $(this).width() > 991 ) {
            $('ul.sub-nav').attr('style', '');
        }
    });

    //Main slider (OWL) Home Page
    $('#main-slider.carousel').carousel({
        interval: 8000,
        singleItem : true,
        transitionStyle : "goDown"
    });
    
    // Dream Type Style
     $(".typed-from-js").typed({
        strings: ["Dream", "Edifice", "Nest"],
        cursorChar: " ",
        typeSpeed: 100,
        loop: true,
        loopCount: true,
    });


     // SLIDER WIDTH THUMBNAIL or, SHOWCASE FEATURE SLIDER AREA 
    function syncPosition(el) {
        var current = this.currentItem;
        var showcase_thumb_slider  = $("#showcase-thumb-slider");
        showcase_thumb_slider
            .find(".owl-item")
            .removeClass("served")
            .eq(current)
            .addClass("served");
        if (showcase_thumb_slider.data("owlCarousel") !== undefined) {
            center(current)
        }
        el.find('.owl-wrapper').css({
            width: '',
            transform: ''
        });
    }
    function center(number) {
        var showcase_thumb_slider  = $("#showcase-thumb-slider");
        var thumbnail_slidervisible = showcase_thumb_slider.data("owlCarousel").owl.visibleItems;
        var num                     = number;
        var found                   = false;
        for (var i in thumbnail_slidervisible) {
            if (num === thumbnail_slidervisible[i]) {
                var found = true;
            }
        }

        if (found === false) {
            if (num > thumbnail_slidervisible[thumbnail_slidervisible.length - 1]) {
                showcase_thumb_slider.trigger("owl.goTo", num - thumbnail_slidervisible.length + 2)
            } else {
                if (num - 1 === -1) {
                    num = 0;
                }
                showcase_thumb_slider.trigger("owl.goTo", num);
            }
        } else if (num === thumbnail_slidervisible[thumbnail_slidervisible.length - 1]) {
            showcase_thumb_slider.trigger("owl.goTo", thumbnail_slidervisible[1])
        } else if (num === thumbnail_slidervisible[0]) {
            showcase_thumb_slider.trigger("owl.goTo", num - 1)
        }

    }

    var showCaseSlider = $("#showcase-main-thumb-slider-section");
    if ( showCaseSlider.length > 0 ) {

        var showcase_main_image_slider = $("#showcase-main-area-slider"),
            showcase_thumb_slider  = $("#showcase-thumb-slider");

        showCaseSlider.find('.items').each(function(){
            var imgContainer = $(this).find('.img-pot');
            imgContainer.css('background-image', 'url(' + imgContainer.data('bg-img') + ')');
        });

        showcase_main_image_slider.owlCarousel({
            addClassActive:        !0,
            singleItem:            true,
            slideSpeed:            1000,
            navigation:            false,
            pagination:            false,
            autoPlay:              true,
            afterAction:           syncPosition,
            responsiveRefreshRate: 200,
        });

        showcase_thumb_slider.owlCarousel({
            items:                 3,
            itemsDesktop:          [1199, 3],
            itemsDesktopSmall:     [991, 3],
            itemsTablet:           [768, 3],
            itemsMobile:           [479, 3],
            pagination:            false,
            responsiveRefreshRate: 100,
            afterInit:             function (el) {
                el.find(".owl-item").eq(0).addClass("served");
            }
        });

        showcase_thumb_slider.on("click", ".owl-item", function (e) {
            e.preventDefault();
            if( $(this).hasClass('served') ) {
                return;
            }
            var number = $(this).data("owlItem");
            showcase_main_image_slider.trigger("owl.goTo", number);
        });

    }
    
    
    // carousel to mobile tuchabale
    $('.carousel').each(function() {
        var el = $(this);
        el.swiperight(function() {  
            el.carousel('prev');  
        }); 
        el.swipeleft(function() {  
            el.carousel('next');  
        }); 
    }); 



    // Property Search Area
    $(".more-options").on("click", function (){
        $(".more-options").toggleClass("show-element");
        $(".property-content").toggleClass("remove-margin");
    });

    $('.property-search-form .more-options').on('click', function (e) {
        e.preventDefault();
        if ($(this).siblings('.advanced-search-sec').length > 0) {
            $(this).siblings('.advanced-search-sec').slideToggle(function () {
                $(window).trigger('resize.px.parallax');
            });
            $(this).parents('.property-search-form').toggleClass('opened');
        } else {
            $(this).parents('.main-search-sec').siblings('.advanced-search-sec').slideToggle(function () {
                $(window).trigger('resize.px.parallax');
            });
            $(this).parents('.property-search-form').toggleClass('opened');
        }

    });
    var priceMin = 0;
    var priceMax = 0;

        var base_url = $('#url').val();
        var   pathUrl         = base_url+"/price",
        method            	 = "POST",
        dtype 	             = "json";
  
        $.ajax({
           type: method,  
           url: pathUrl,
           dataType: dtype,
           async: false,
           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
           success: function(response){  
                 if(response.status == "SUCCESS"){
                    priceMin =  response.data.priceMin 
                    priceMax =  response.data.priceMax
                 }else{
                    alert(response.message);
                 }
              },
        });
    //Setup price slider (Price Range)
    var priceSlider = $(".priceSlider");
    if( priceSlider.length> 0 ) {
        var Link = $.noUiSlider.Link;
        var priceMinRage,priceMaxRage;
        if(price_min != null && price_max != null){
            var finalPriceMin = price_min.replace(/\s*(,|$)\s*/g, '');
            var finalPriceMax = price_max.replace(/\s*(,|$)\s*/g, '');
            priceMinRage = finalPriceMin;
            priceMaxRage = finalPriceMax;
        }else{
            priceMinRage = priceMin;
            priceMaxRage = priceMax;
        }
        priceSlider.noUiSlider({
            range: {
             'min': parseInt(priceMin),
             'max': parseInt(priceMax),
           },
           start: [priceMinRage, priceMaxRage],
           step: 1000,
           margin: 0,
           connect: true,
           direction: 'ltr',
           orientation: 'horizontal',
           behaviour: 'tap-drag',
           serialization: {
               lower: [
                   new Link({
                       target: $("#price-min")
                   })
               ],
               upper: [
                   new Link({
                       target: $("#price-max")
                   })
               ],
               format: {
               // Set formatting
                   decimals: 0,
                   thousand: ',',
                   prefix: '₱'
               }
           }
       });
    }

    // WoW Js
    new WOW().init();

})(jQuery);




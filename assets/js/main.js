jQuery(function () {

    $(function () {
        $('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 500);
                    return false;
                }
            }
        });
    });

    var reference_infos_maxH = 0;

    $('.first-p').each(function(i, obj) {
        if (reference_infos_maxH <= $(this).height()) 	
            reference_infos_maxH = $(this).height();
    });
 
    var uber_uns = $('#uber-uns').offset().top - 1;
    var referenzen = $('#referenzen').offset().top - 1;
    var kontakt = $('#kontakt').offset().top - (reference_infos_maxH + 150);

    $(window).scroll(function () {

        var scroll_height = $(window).scrollTop();

        if ((scroll_height >= uber_uns) && (scroll_height <= referenzen)) {
            $('a[href$="uber-uns"]').addClass("tmp");
        } else {
            $('a[href$="uber-uns"]').removeClass("tmp");
        }
        if ((scroll_height >= referenzen) && (scroll_height <= kontakt)) {
            $('a[href$="referenzen"]').addClass("tmp");
        } else {
            $('a[href$="referenzen"]').removeClass("tmp");
        }
        if ((scroll_height >= kontakt)) {
            $('a[href$="kontakt"]').addClass("tmp");
        } else {
            $('a[href$="kontakt"]').removeClass("tmp");
        }

    });


    $('input').each(function () {
        $(this).on('focus', function () {
            $(this).parent('.css').addClass('active');
        });

        $(this).on('blur', function () {
            if ($(this).val().length == 0) {
                $(this).parent('.css').removeClass('active');
            }
        });

        if ($(this).val() != '') $(this).parent('.css').addClass('active');
    });

    $('textarea').each(function () {
        $(this).on('focus', function () {
            $(this).parent('.css').addClass('active');
        });

        $(this).on('blur', function () {
            if ($(this).val().length == 0) {
                $(this).parent('.css').removeClass('active');
            }
        });

        if ($(this).val() != '') $(this).parent('.css').addClass('active');
    }); 

    var header = $('.home-menu');
    var upToTop = $('#up-to-top');
    var content_start = $('#content_start').offset().top - 90;

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= content_start) {
            header.addClass("menu-scroll");
            upToTop.addClass("show-up-to-top");

        } else {
            header.removeClass('menu-scroll');
            upToTop.removeClass("show-up-to-top");
        }
    });


    /**
     * referenzen more infos
     */
    $('.first-p').hide();   
    $( "div.first" ).click(function() {
        if ( $(this).next().is( ":hidden" ) ) {
            $(this).next().slideDown( "slow" );
            $( this).find("img").addClass("akk");  
        } else {
            $(this).next().slideUp( "slow" );
            $( this).find("img").removeClass("akk");  
        }
    });

    //function map() 
    var mapOptions = {
        zoom: 14,
        center: new google.maps.LatLng(49.530429, 8.351846),
        streetViewControl: false,
        mapTypeControl: false,
        scrollwheel: false
        //,styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
    };
    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);
    var image = {
        url: templateUrl + "/assets/img/map-marker.svg",
        scaledSize: new google.maps.Size(50, 50)
    };
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(49.530429, 8.351846),
        map: map,
        icon: image,
        clickable: false
    });

});
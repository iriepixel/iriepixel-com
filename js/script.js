( function( $ ) {

    $(window).load(function() {
        var wow = new WOW({
            animateClass: 'animated'
        });
        wow.init();
    });


    $(document).ready(function() {

        if ( $( ".page-template-page-homepage" ).length  > 0) {

            /* ---- particles.js config ---- */
            particlesJS("irie-particles", {
                "particles": {
                    "number": {
                        "value": 30,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "edge",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 3
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 1,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 180,
                        "color": "#ffffff",
                        "opacity": 1,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2.5,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onresize": {
                            enable: true,
                            density_auto: true,
                            density_area: 400 // nb_particles = particles.nb * (canvas width *  canvas height / 1000) / density_area
                          },
                      "onhover": {
                        "enable": true,
                        "mode": "grab"
                      },
                      "onclick": {
                        "enable": true,
                        "mode": "repulse"
                      },
                      "resize": true
                    },
                    "modes": {
                      "grab": {
                        "distance": 400,
                        "line_linked": {
                          "opacity": 1
                        }
                      },
                      "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                      },
                      "repulse": {
                        "distance": 200,
                        "duration": 0.4
                      },
                      "push": {
                        "particles_nb": 4
                      },
                      "remove": {
                        "particles_nb": 2
                      }
                    }
                  },
                "retina_detect": true
            });

            /* ---- stats.js config ---- */

        }

        /*$('body').addClass('loaded');*/
        
        // Touch Device Detection
    	var isTouchDevice = 'ontouchstart' in document.documentElement;
    	if( isTouchDevice ) {
    		$('body').addClass('touch');
    	}

        /*======== menu button animation part*/
        "use strict";

        var toggles = document.querySelectorAll(".c-hamburger");

        for (var i = toggles.length - 1; i >= 0; i--) {
            var toggle = toggles[i];
            toggleHandler(toggle);
        }

        function toggleHandler(toggle) {
            toggle.addEventListener( "click", function(e) {
                $( "header" ).fadeToggle(400);
                $( "header" ).toggleClass("opened");
                e.preventDefault();
                (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
            });
        }
        /*========= menu button animation part ends*/

        /*fade pages on load and load out*/
        // $('.link-fade-activation a, button-fade-activation, .project-item-url').click(function(){
        //     var href= $(this).attr('href');
        //     console.log(href);
        //     $('#page').fadeOut( 500, function(){
        //         window.location=href;
        //     });
        //     return false;
        // });

        /* back to top */
        $('.back-to-top').click(function() {
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });

        /* scroll homepage intro down */
        $('#irie-particles').after().click(function() {
            var tag = $('.homepage-intro-row');
            $('html,body').animate({scrollTop: tag.offset().top},'slow');
        });

        // about read more
        $('.read-more-about').click(function() {
            $('.about-description-bottom').slideToggle( 'slow');
            $('.read-more-about').html($('.read-more-about').text() == 'read more' ? 'read less' : 'read more');
        });

        /*testimonials*/
        if ( $('.page-template-page-about').length ) {
            $('.about-testimonial-list').masonry({
                itemSelector: '.about-testimonial-item',
            });
        }

        /*footer contact webform slide*/
        $('.footer-contact-form-button').click(function() {
            $(this).toggleClass('opened');
            $('.contact-form-row').slideToggle( 'slow', function() {
                // Animation complete.
                $('html,body').animate({scrollTop: $(".footer-contact-form-title-row").offset().top},'slow', function() {});
                $('.footer-contact-form-title-row').toggleClass('opened');
            });
        });

        // wrap every 2 services on About page in divs
        var divs = $(".about-service-item");
        for(var i = 0; i < divs.length; i+=2) {
          divs.slice(i, i+2).wrapAll("<div class='about-service-row'></div>");
        }
    });

} )( jQuery );

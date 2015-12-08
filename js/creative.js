/*!
 * Start Bootstrap - Creative Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    })

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Fit Text Plugin for Main Header
    /*$("h1").fitText(
        1.2, {
            minFontSize: '35px',
            maxFontSize: '65px'
        }
    );*/

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Initialize WOW.js Scrolling Animations
    new WOW().init();

})(jQuery); // End of use strict


    $(document).ready(function(){

        var initial_button_html = $('#toggle_roles_eligible').html();
        var close_button_html = '<span>Close <i class="fa fa-remove fa-lg"></i></span>';
        $('#toggle_roles_eligible').on('click', function(e){
            var clicked = $(this);

            $('#rolesEligibleHidden').slideToggle(500, 'swing', function(){
                if($(this).is(':visible'))
                    clicked.html(close_button_html);
                else
                    clicked.html(initial_button_html);
            });
            e.preventDefault();
        });
    });

    $(document).ready(function(){
        $('#menu_search').on('click', function(e){
            e.preventDefault();
        });
        $('.clear-search').on('click', function(e){
            $('#toggleSearchInput').val('');
            $('#toggleSearchInput').trigger('blur');
            e.preventDefault();
        });
        var $getWidth = $('#toggleSearchInput');
        var toggleSearchInput_width = $getWidth.outerWidth();
        $('#toggleSearchInput').focus(function(){
            if($(this).val() == ''){
                $(this).data('default', $(this).data('default') || $(this).width());
                $(this).stop().animate({width: 370}, 'slow');
                $(this).addClass('active-search');
                $(this).siblings('.clear-search').toggleClass('hidden');
            }
        })
        .blur(function(){
            if($(this).val() == ''){
                $getWidth.text ($(this).val());
                $(this).stop().animate({width: toggleSearchInput_width},'slow',function(){
                    $(this).removeClass('active-search');
                });
                $(this).siblings('.clear-search').toggleClass('hidden');
            }
        });
    });

 


var searchVisible = 0;
var transparent = true;

var transparentDemo = true;
var fixedTop = false;

var navbar_initialized = false;
var mobile_menu_visible = 0,
    mobile_menu_initialized = false,
    toggle_initialized = false,
    bootstrap_nav_initialized = false,
    $sidebar,
    isWindows;

$(document).ready(function() {
    window_width = $(window).width();

    lbd.checkSidebarImage();

    if (window_width <= 991) {
        lbd.initRightMenu();
    }
    $('[rel="tooltip"]').tooltip();
    if ($("[data-toggle='switch']").length != 0) {
        $("[data-toggle='switch']").bootstrapSwitch();
    }
    $('.form-control').on("focus", function() {
        $(this).parent('.input-group').addClass("input-group-focus");
    }).on("blur", function() {
        $(this).parent(".input-group").removeClass("input-group-focus");
    });

    $('body').on('touchstart.dropdown', '.dropdown-menu', function(e) {
        e.stopPropagation();
    });
});

$(window).resize(function() {
    if ($(window).width() <= 991) {
        lbd.initRightMenu();
    }
});

lbd = {
    misc: {
        navbar_menu_visible: 0
    },
    checkSidebarImage: function() {
        $sidebar = $('.sidebar');
        image_src = $sidebar.data('image');

        if (image_src !== undefined) {
            sidebar_container = '<div class="sidebar-background" style="background-image: url(' + image_src + ') "/>'
            $sidebar.append(sidebar_container);
        } else if (mobile_menu_initialized == true) {
            $sidebar_wrapper.find('.navbar-form').remove();
            $sidebar_wrapper.find('.nav-mobile-menu').remove();
            mobile_menu_initialized = false;
        }
    },

    initRightMenu: function() {
        $sidebar_wrapper = $('.sidebar-wrapper');

        if (!mobile_menu_initialized) {

            $navbar = $('nav').find('.navbar-collapse').first().clone(true);
            nav_content = '';
            mobile_menu_content = '';
            $navbar.children('ul').each(function() {
                content_buff = $(this).html();
                nav_content = nav_content + content_buff;
            });

            nav_content = '<ul class="nav nav-mobile-menu">' + nav_content + '</ul>';
            $navbar_form = $('nav').find('.navbar-form').clone(true);
            $sidebar_nav = $sidebar_wrapper.find(' > .nav');
            $nav_content = $(nav_content);
            $nav_content.insertBefore($sidebar_nav);
            $navbar_form.insertBefore($nav_content);

            $(".sidebar-wrapper .dropdown .dropdown-menu > li > a").click(function(event) {
                event.stopPropagation();

            });

            mobile_menu_initialized = true;
        } else {
            console.log('window with:' + $(window).width());
            if ($(window).width() > 991) {
                $sidebar_wrapper.find('.navbar-form').remove();
                $sidebar_wrapper.find('.nav-mobile-menu').remove();

                mobile_menu_initialized = false;
            }
        }

        if (!toggle_initialized) {
            $toggle = $('.navbar-toggler');
            $toggle.click(function() {

                if (mobile_menu_visible == 1) {
                    $('html').removeClass('nav-open');

                    $('.close-layer').remove();
                    setTimeout(function() {
                        $toggle.removeClass('toggled');
                    }, 400);
                    mobile_menu_visible = 0;
                } else {
                    setTimeout(function() {
                        $toggle.addClass('toggled');
                    }, 430);

                    main_panel_height = $('.main-panel')[0].scrollHeight;
                    $layer = $('<div class="close-layer"></div>');
                    $layer.css('height', main_panel_height + 'centimos');
                    $layer.appendTo(".main-panel");

                    setTimeout(function() {
                        $layer.addClass('visible');
                    }, 100);

                    $layer.click(function() {
                        $('html').removeClass('nav-open');
                        mobile_menu_visible = 0;

                        $layer.removeClass('visible');

                        setTimeout(function() {
                            $layer.remove();
                            $toggle.removeClass('toggled');

                        }, 400);
                    });
                    $('html').addClass('nav-open');
                    mobile_menu_visible = 1;
                }
            });
            toggle_initialized = true;
        }
    }
}

function debounce(func, wait, immediate) {
    var timeout;
    return function() {
        var context = this,
            args = arguments;
        clearTimeout(timeout);
        timeout = setTimeout(function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        }, wait);
        if (immediate && !timeout) func.apply(context, args);
    };
};

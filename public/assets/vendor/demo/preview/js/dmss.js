// Swticher Cookie Base
/**
 * Styleswitch stylesheet switcher built on jQuery
 * Under an Attribution, Share Alike License
 * By Kelvin Luck ( http://www.kelvinluck.com/ )
 * Thanks for permission!
 **/
(function($) {
    $(document).ready(function() {
        $('.styleswitch').click(function() {
            switchStylestyle(this.getAttribute("rel"));
            return false;
        });
        var c = readCookie('style');
        if (c) switchStylestyle(c);
    });

    function switchStylestyle(styleName) {
        $('link[rel*=style][title]').each(function(i) {
            this.disabled = true;
            if (this.getAttribute('title') == styleName) this.disabled = false;
        });
        createCookie('style', styleName, 365);
    }
})(jQuery);

function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    } else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "", -1);
}

// DEMO Swticher Base
jQuery('.demo_changer .demo-icon').click(function() {

    if (jQuery('.demo_changer').hasClass("active")) {
        jQuery('.demo_changer').animate({
            "left": "-400px"
        }, function() {
            jQuery('.demo_changer').toggleClass("active");
        });
    } else {
        jQuery('.demo_changer').animate({
            "left": "0px"
        }, function() {
            jQuery('.demo_changer').toggleClass("active");
        });
    }
});

// Selector (MODULE #4)
$(window).on('load', function() {
    $('.selectpicker').selectpicker({
        'selectedText': 'cat'
    });
});

// Selector (MODULE #2)
jQuery('.demo_changer .pattern_changer a').click(function() {
    var backgroundImage = jQuery(this).attr('href');
    jQuery('.demo_changer .pattern_changer a').removeClass('current');
    jQuery('body').css({
        backgroundColor: '#ffffff'
    });
    jQuery('#wrapper').css({
        backgroundColor: 'rgba(0, 0, 0, 0)'
    });
    jQuery(this).addClass('current');
    jQuery('body').css({
        backgroundImage: 'url(' + backgroundImage + ')'
    });
    if (jQuery(this).hasClass('bg_t')) {
        jQuery('body').css({
            backgroundRepeat: 'repeat',
            backgroundPosition: '50% 0',
            backgroundAttachment: 'scroll'
        });
    } else {
        jQuery('body').css({
            backgroundRepeat: 'repeat',
            backgroundPosition: '50% 0',
            backgroundAttachment: 'scroll'
        });
    }
    return false;
});

// Selector (MODULE #5 and #6)
/*
   evol.colorpicker 2.2
   (c) 2014 Olivier Giulieri
*/
$(document).ready(function() {
    $('#cp1').colorpicker({
            color: '#ffffff'
        })
        .on('change.color', function(evt, color) {
            $('body').attr('style', 'background-color:' + color);
            $('#wrapper').attr('style', 'background-color:rgba(0, 0, 0, 0)');
        });
    $('#cp2').colorpicker({
            color: '#656565'
        })
        .on('change.color', function(evt, color) {
            $('body').attr('style', 'color:' + color);
        })
});
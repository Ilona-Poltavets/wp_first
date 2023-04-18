jQuery(document).ready(function () {
    window.addEventListener('resize', (e) => {
        if (jQuery(window).width() <= '998' && !jQuery('#mob-btn').length) {
            var li = '<a href="#" id="mob-btn">Towing service</a>';
            jQuery(".menu__items").append(li);
        }
        if (jQuery(window).width() > '998' && jQuery('#mob-btn').length) {
            jQuery('#mob-btn').remove();
        }
    });
    if (jQuery(window).width() <= '998') {
        var li = '<a href="#" id="mob-btn">Towing service</a>';
        jQuery(".menu__items").append(li);
    } else if (jQuery('#mob-btn').length) {
        jQuery('#mob-btn').remove();
    }
});
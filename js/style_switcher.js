var ajax_mode = 'on';

// Style Switcher
//=======================================
jQuery(document).ready(function() {
	jQuery('#navigation > li ').toggle(function() {
		jQuery('span,#panel',jQuery(this)).stop().animate({'marginLeft':'-145px'},300);
	},function(){
		jQuery('span,#panel',jQuery(this)).stop().animate({'marginLeft':'0px'},300);
	});
});

jQuery(document).ready(function() {
	jQuery('<style type="text/css" id="style_switcher" />').appendTo('head');
});

jQuery('.premade').click( function() {
	if (jQuery('.tmq_toggle_bar .tmq_toggle_switch').hasClass('active') ) {
		jQuery('.tmq_toggle_bar .tmq_toggle_content').animate({'height': 'hide', 'padding': 'hide'}, function() {
			jQuery('.tmq_toggle_bar').css({'z-index': '0'});
		});
		jQuery('.tmq_toggle_bar .tmq_toggle_switch').removeClass('active');
	} else {
		jQuery('.tmq_toggle_bar').animate({'z-index': '10000'}, function() {
		jQuery('.tmq_toggle_bar .tmq_toggle_content').animate({'height': 'show', 'padding': 'show'});
		jQuery('.tmq_toggle_bar .tmq_toggle_switch').addClass('active');
		});
	}
});

jQuery('.ajaxon').click(function() {
	ajax_mode = 'on';
});
jQuery('.ajaxoff').click(function() {
	ajax_mode = 'off';
});

jQuery('.style_corporate').click(function() {
	jQuery('head').append('<link rel="stylesheet" href="http://preview.themique.com/vertikal/vertikal-corporate/wp-content/themes/vertikal-corporate/dynamic.css?ver=1.0" type="text/css" />');
});
jQuery('.style_cars').click(function() {
	jQuery('head').append('<link rel="stylesheet" href="http://preview.themique.com/vertikal/vertikal-cars/wp-content/themes/vertikal-cars/dynamic.css?ver=1.0" type="text/css" />');
});
jQuery('.style_food').click(function() {
		jQuery('head').append('<link rel="stylesheet" href="http://preview.themique.com/vertikal/vertikal-food/wp-content/themes/vertikal-food/dynamic.css?ver=1.0" type="text/css" />');
});
jQuery('.style_medical').click(function() {
		jQuery('head').append('<link rel="stylesheet" href="http://preview.themique.com/vertikal/vertikal-medical/wp-content/themes/vertikal-medical/dynamic.css?ver=1.0" type="text/css" />');
});
jQuery('.style_charity').click(function() {
		jQuery('head').append('<link rel="stylesheet" href="http://preview.themique.com/vertikal/vertikal-charity/wp-content/themes/vertikal-charity/dynamic.css?ver=1.0" type="text/css" />');
});
jQuery('.style_equestrain').click(function() {
		jQuery('head').append('<link rel="stylesheet" href="http://preview.themique.com/vertikal/vertikal-equestrain/wp-content/themes/vertikal-equestrain/dynamic.css?ver=1.0" type="text/css" />');
});
jQuery('.style_furniture').click(function() {
		jQuery('head').append('<link rel="stylesheet" href="http://preview.themique.com/vertikal/vertikal-furniture/wp-content/themes/vertikal-furniture/dynamic.css?ver=1.0" type="text/css" />');
});
jQuery('.style_photography').click(function() {
		jQuery('head').append('<link rel="stylesheet" href="http://preview.themique.com/vertikal/vertikal-photography/wp-content/themes/vertikal-photography/dynamic.css?ver=1.0" type="text/css" />');
});
jQuery('.style_magazine').click(function() {
		jQuery('head').append('<link rel="stylesheet" href="http://preview.themique.com/vertikal/vertikal-magazine/wp-content/themes/vertikal-magazine/dynamic.css?ver=1.0" type="text/css" />');
});
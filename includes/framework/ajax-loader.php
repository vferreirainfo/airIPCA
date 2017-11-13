<?php
/**************************************************
 Ajax Loader for Theme
**************************************************/

/**
 *	Loading the required js files and assing required php variable to js variable.
 */
function tmq_aws_load_scripts() {
	wp_enqueue_script('history-js', get_template_directory_uri() . '/js/history.js', array('jquery'));
	wp_enqueue_script('ajaxify-js',  get_template_directory_uri() . '/js/ajaxify.js', array('jquery'));
	
	$ids_arr = explode(',', get_option('no-ajax-ids'));
	foreach( $ids_arr as $key => $id ) {
		if ( trim($id) == '' )
			unset($ids_arr[$key]);
		else
			$ids_arr[$key] =  '#' . trim($id) . ' a';
	}
	$ids = implode(',', $ids_arr);
	
	if ( function_exists('ot_get_option') ) {
		$tmq_ajax_footer = ot_get_option('tmq_ajax_footer');
		$tmq_ajax_paginations = ot_get_option('tmq_ajax_paginations');
		$tmq_ajax_blog_posts = ot_get_option('tmq_ajax_blog_posts');
		$tmq_ajax_portfolio = ot_get_option('tmq_ajax_portfolio');
		$tmq_ajax_breadcrumb = ot_get_option('tmq_ajax_breadcrumb');
		$tmq_ajax_scroll = ot_get_option('tmq_ajax_scroll');
	} else {
		$tmq_ajax_footer = 'off';
		$tmq_ajax_paginations = 'off';
		$tmq_ajax_blog_posts = 'off';
		$tmq_ajax_portfolio = 'off';
		$tmq_ajax_breadcrumb = 'off';	
		$tmq_ajax_scroll = 'off';	
	}
	
	$tmq_ajax_data = array(
		'tmq_ajax_footer' 		=> $tmq_ajax_footer,
		'tmq_ajax_paginations' 	=> $tmq_ajax_paginations,
		'tmq_ajax_blog_posts'	=> $tmq_ajax_blog_posts,
		'tmq_ajax_portfolio'	=> $tmq_ajax_portfolio,
		'tmq_ajax_breadcrumb'	=> $tmq_ajax_breadcrumb,
		'tmq_ajax_scroll'		=> $tmq_ajax_scroll
	);
	wp_localize_script('ajaxify-js', 'tmq_ajax_data', $tmq_ajax_data);
}
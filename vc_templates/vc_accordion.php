<?php
wp_enqueue_script('jquery-ui-accordion');
$output = $title = $interval = $el_class = $collapsible = $active_tab = '';
//
extract(shortcode_atts(array(
    'title' => '',
    'interval' => 0,
    'el_class' => '',
    'collapsible' => 'no',
    'active_tab' => ''
), $atts));

$el_class = $this->getExtraClass($el_class);
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_accordion wpb_content_element '.$el_class.' not-column-inherit', $this->settings['base']);

$random_id = time().'-accordions-'.rand(0, 100);

$output .= '<div class="accord-tab-box">';
$output .= ( !empty( $title ) ? "\n\t" . '<h3>'. $title .'</h3>' : '' );
$output .= "\n\t\t" . '<div class="accordion-box" id="'. $random_id .'">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t\t".'</div> '.$this->endBlockComment('.wpb_wrapper');
$output .= "\n\t".'</div> '.$this->endBlockComment('.wpb_accordion');						

if ( $active_tab != 'false' ) {
	if ( is_numeric( $active_tab ) ) {
		$active_tab = $active_tab - 1;
	} else {
		$active_tab = 0;
	}
	
	$output .= "\n\t" . '<script>';
	$output .= "\n\t\t" . 'jQuery(\'#' . $random_id . '\').each( function() {';
	$output .= "\n\t\t\t" . 'jQuery(this).find(\'.accord-content:eq(' . $active_tab . ')\').slideDown(400, function(){});';
	$output .= "\n\t\t\t" . 'jQuery(this).find(\'.accord-elem:eq(' . $active_tab . ')\').addClass(\'active\');';
	$output .= "\n\t\t" . '});';
	$output .= "\n\t" . '</script>';
}

echo $output;
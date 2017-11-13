<?php
$output = $title = '';

extract(shortcode_atts(array(
	'icon'	=> 'fa-question',
	'title' => 'Section',
), $atts));

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_accordion_section group', $this->settings['base']);

$output .= '<div class="accord-elem">';
$output .= '	<div class="accord-title">';
$output .= '		<h5><i class="fa' . ( empty( $icon ) ? ' fa-question' : ' ' . $icon ) . '"></i>' . $title . '</h5>';
$output .= '		<a class="accord-link" href="#"></a>';
$output .= '	</div>';
$output .= '	<div class="accord-content">';
$output .= 	( $content == '' || $content == ' ') ?'Empty section.' : "\n\t\t\t\t" . wpb_js_remove_wpautop( $content );
$output .= '	</div>';
$output .= '</div>';

echo $output;
<?php
$output = $title = $interval = $el_class = '';
extract(shortcode_atts(array(
    'title' 	=> '',
    'icons' 	=> '1',
    'nav' 		=> 'bottom',
    'interval' 	=> 0,
    'el_class' 	=> ''
), $atts));

$el_class = $this->getExtraClass($el_class);

$element = 'wpb_tabs';

// Extract tab titles
// preg_match_all( '/tmq_tab title="([^\"]+)"(\stab_id\=\"([^\"]+)\"){0,1}/i', $content, $matches, PREG_OFFSET_CAPTURE );
preg_match_all( '/\[tmq_tab[\s]*title="([^\"]+)"[\s]*tab_id="([^\"]+)"[\s]*tab_icon="([^\"]+)"\]/i', $content, $matches, PREG_SET_ORDER );
$tab_titles = array();

/**
 * vc_tabs
 *
 */
if ( isset($matches[0]) ) { 
	$tab_titles = $matches[0]; 
	$tabs_count = count( $matches );
} else {
	$tabs_count = 1;
}
$tab_width = 100 / $tabs_count;
$tabs_starter = '';
$tabs_nav = '';
$tabs_starter .= '<div class="tab-box">';
if ( $nav == 'top' ) {
	$tabs_nav .= '<ul class="tab-links tab-top-nav">';
} else {
	$tabs_nav .= '<ul class="tab-links">';
}
$tab_counter = 0;
foreach ( $matches as $tab ) {
	$tab_counter++;
    if( isset( $tab[0] ) ) {
        $tabs_nav .= '<li style="width: ' . $tab_width . '%"><a class="tab-link' . $tab_counter . ' ' . ( $tab_counter == 1 ? ' active' : '' ) . '" href="#tab-'. ( isset( $tab[2] ) ? $tab[2] : sanitize_title( $tab[1] ) ) .'">' . ( $icons == '1' ? '<i class="fa '. $tab[3] .'"></i>' : '' ) . '<span>' . $tab[1] . '</span>' . '</a></li>';

    }
}
$tabs_nav .= '</ul>'."\n";

$css_class =  apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, trim($element.' wpb_content_element '.$el_class), $this->settings['base']);

if ( $nav == 'top' ) {
	$output .= "\n\t\t\t".$tabs_nav;
}

$output .= "\n\t".'<div class="tabs iconned-tabs"><div class="tab-box">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t\t".'</div>';

if ( $nav != 'top' ) {
	$output .= "\n\t\t\t".$tabs_nav;
}

// $output .= wpb_widget_title(array('title' => $title, 'extraclass' => $element.'_heading'));
$output .= "\n\t".'</div> '.$this->endBlockComment($element);

echo $output;
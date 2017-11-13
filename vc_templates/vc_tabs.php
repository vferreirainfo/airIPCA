<?php
$output = $title = $interval = $el_class = '';
extract(shortcode_atts(array(
    'title' => '',
    'interval' => 0,
    'el_class' => ''
), $atts));

$el_class = $this->getExtraClass($el_class);

$element = 'wpb_tabs';
if ( 'vc_tour' == $this->shortcode) $element = 'wpb_tour';

// Extract tab titles
preg_match_all( '/vc_tab title="([^\"]+)"(\stab_id\=\"([^\"]+)\"){0,1}/i', $content, $matches, PREG_OFFSET_CAPTURE );
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

$tabs_nav = '';
$tabs_nav .= '<ul class="tab-links">';
$tab_counter = 0;
foreach ( $tab_titles as $tab ) {
	$tab_counter++;
    preg_match('/title="([^\"]+)"(\stab_id\=\"([^\"]+)\"){0,1}/i', $tab[0], $tab_matches, PREG_OFFSET_CAPTURE );
    if(isset($tab_matches[1][0])) {
        $tabs_nav .= '<li style="width: ' . $tab_width . '%"><a class="tab-link' . $tab_counter . ' ' . ( $tab_counter == 1 ? ' active' : '' ) . '" href="#tab-'. (isset($tab_matches[3][0]) ? $tab_matches[3][0] : sanitize_title( $tab_matches[1][0] ) ) .'">' . $tab_matches[1][0] . '</a></li>';
        // $tabs_nav .= '<li><a class="tab-link1' . ( $tab_counter == 1 ? ' active' : '' ) . '" href="#"> ' . $tab_matches[1][0] . '</a></li>';
    }
}
$tabs_nav .= '</ul>'."\n";

$css_class =  apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, trim($element.' wpb_content_element '.$el_class), $this->settings['base']);

$output .= "\n\t".'<div class="tabs tabs-widget widget">';
// $output .= "\n\t\t".'<div class="wpb_wrapper wpb_tour_tabs_wrapper ui-tabs clearfix">';
// $output .= wpb_widget_title(array('title' => $title, 'extraclass' => $element.'_heading'));
$output .= "\n\t\t\t".$tabs_nav;
$output .= "\n\t".'<div class="tab-box">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div><!-- End Tab Box -->';
// if ( 'vc_tour' == $this->shortcode) {
    // $output .= "\n\t\t\t" . '<div class="wpb_tour_next_prev_nav clearfix"> <span class="wpb_prev_slide"><a href="#prev" title="'.__('Previous slide', 'js_composer').'">'.__('Previous slide', 'js_composer').'</a></span> <span class="wpb_next_slide"><a href="#next" title="'.__('Next slide', 'js_composer').'">'.__('Next slide', 'js_composer').'</a></span></div>';
// }
// $output .= "\n\t\t".'</div> '.$this->endBlockComment('.wpb_wrapper');
$output .= "\n\t".'</div><!-- End Tabs -->'.$this->endBlockComment($element);

echo $output;
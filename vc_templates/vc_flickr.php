<?php
$output = '';
extract(shortcode_atts(array(
    'el_class' => '',
    'title' => '',
    'flickr_id' => '95572727@N00',
    'count' => '6',
    'type' => 'user',
    'display' => 'latest'
), $atts));

$el_class = $this->getExtraClass( $el_class );
$css_class =  apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_flickr_widget wpb_content_element'.$el_class, $this->settings['base']);

$output .= "\n\t".'<div class="'.$css_class.'">';
$output .= "\n\t\t".'<div class="wpb_wrapper">';
$output .= ( empty( $title ) ? '' : "\n\t\t\t".'<h3>' . $title . '</h3>' );
$output .= "\n\t\t\t".'<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count='. $count . '&amp;display='. $display .'&amp;size=s&amp;layout=x&amp;source='. $type .'&amp;'. $type .'='. $flickr_id .'"></script>';
$output .= "\n\t\t".'</div>'.$this->endBlockComment('.wpb_wrapper');
$output .= "\n\t".'</div>'.$this->endBlockComment('.wpb_flickr_widget')."\n";

echo $output;

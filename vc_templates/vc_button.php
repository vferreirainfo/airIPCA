<?php
$output = $color = $size = $icon = $target = $href = $el_class = $title = $align = '';
extract(shortcode_atts(array(
    'color' => 'default',
    'size' => '',
    'icon' => '',
    'target' => '_self',
    'href' => '',
    'title' => 'Click!',
	'icon_mode' => 'enable',
	'align' => 'left'
), $atts));
$a_class = '';

if ( $align == 'right' ) {
	$align = ' pull-right';
} else {
	$align = ' pull-left';
}

if ( $target == 'same' || $target == '_self' ) { $target = ''; }
$target = ( $target != '' ) ? ' target="'.$target.'"' : '';

$color = ( $color != '' ) ? ' '.$color : '';
$size = ( $size != '' && $size != 'wpb_regularsize' ) ? ' tmq_'.$size : ' '.$size;
$icon = ( $icon != '' && $icon != 'none' ) ? ' '.$icon : '';
$i_icon = ( $icon != '' ) ? ' <i class="icon"> </i>' : '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'tmq_button'.$color.$size.$align, $this->settings['base']);

if ( $icon_mode == 'enable' ) {
    $output = '<a class="'.$css_class.'" title="'.$title.'" href="'.$href.'"'.$target.'><i class="fa' . $icon . '"></i><span>' . $title . '</span></a>';
} else {
    $output = '<a class="'.$css_class.'" title="'.$title.'" href="'.$href.'"'.$target.'>' . $title . '</a>';
}

echo $output . $this->endBlockComment('button') . "\n";
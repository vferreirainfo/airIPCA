<?php

	// Read Our Favorite Google Fonts from Option Tree
	function googlefontfamily( $param, $option_name = null ) {
		$googlefontcode = 'pt_sans_narrow';
		if ( function_exists( 'ot_get_option' ) ) {
			// Get option name. May be we are choosing Google fonts more than one place.
			if ( empty( $option_name ) ) {
				$tmq_font_array_name = 'tmq_google_webfont';
			} else {
				$tmq_font_array_name = $option_name;
			}
			
			$googlefontarray = ot_get_option( $tmq_font_array_name );
			$googlefontcode = ( isset( $googlefontarray['font-family'] ) && 'font-family' != $googlefontarray['font-family'] ) ? $googlefontarray['font-family'] : '';
		}	
		switch ( $googlefontcode ) {
			case 'pt_sans_narrow':
				$googlefontfamily = 'PT+Sans+Narrow:400,700';
				break;
			case 'open_sans_condensed':
				$googlefontfamily = 'Open+Sans+Condensed:300';
				break;
			case 'abel':
				$googlefontfamily = 'Abel';
				break;
			case 'source_sans_pro':
				$googlefontfamily = 'Source+Sans+Pro';
				break;
			case 'open_sans':
				$googlefontfamily = 'Open+Sans:400,300,600,700,800';
				break;
			case 'pt_sans':
				$googlefontfamily = 'PT+Sans:400,700,400italic';
				break;
			case 'merriweather_sans':
				$googlefontfamily = 'Merriweather+Sans:300,400,700';
				break;
			case 'alef':
				$googlefontfamily = 'Alef:400,700';
				break;
			case 'dosis':
				$googlefontfamily = 'Dosis:400,700';
				break;
			case 'archivo_narrow':
				$googlefontfamily = 'Archivo+Narrow';
				break;
			case 'roboto':
				$googlefontfamily = 'Roboto:300,400,700';
				break;
			case 'roboto_condensed':
				$googlefontfamily = 'Roboto+Condensed:300,400';
				break;
			case 'roboto_slab':
				$googlefontfamily = 'Roboto+Slab:400,100,300,700';
				break;
			case 'raleway':
				$googlefontfamily = 'Raleway:300,400,700';
				break;
			case 'montserrat':
				$googlefontfamily = 'Montserrat:400,700';
				break;
			case 'droid_sans':
				$googlefontfamily = 'Droid+Sans';
				break;
			case 'oswald':
				$googlefontfamily = 'Oswald:300,400';
				break;
			case 'ubuntu':
				$googlefontfamily = 'Ubuntu:300,400';
				break;
			case 'lato':
				$googlefontfamily = 'Lato:300,400';
				break;
			case 'lora':
				$googlefontfamily = 'Lora';
				break;
			case 'ubuntu_condensed':
				$googlefontfamily = 'Ubuntu+Condensed';
				break;
			case 'rationale':
				$googlefontfamily = 'Rationale';
				break;
			case 'benchnine':
				$googlefontfamily = 'BenchNine:300,400';
				break;
			case 'yanone_kaffeesatz':
				$googlefontfamily = 'Yanone+Kaffeesatz:300,400';
				break;
			case 'economica':
				$googlefontfamily = 'Economica';
				break;
			case 'cuprum':
				$googlefontfamily = 'Cuprum';
				break;
			case 'nobile':
				$googlefontfamily = 'Nobile';
				break;
			case 'nunito':
				$googlefontfamily = 'Nunito';
				break;
			case 'questrial':
				$googlefontfamily = 'Questrial';
				break;
			case 'muli':
				$googlefontfamily = 'Muli';
				break;
			default:
				$googlefontfamily = 'PT+Sans+Narrow:400,700';
				break;
		}
		if ( $param == 'style' ) {
			return $googlefontfamily;
		} elseif ( $param == 'name' ) {
			$googlefontname = explode( '_', $googlefontcode );
			$googlefontname = implode( ' ', $googlefontname ); 
			return $googlefontname;
		}
	}
?>
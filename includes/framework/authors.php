<?php
 /*===================================================================================
 * Add Author Links
 * =================================================================================*/
function add_to_author_profile( $contactmethods ) {
	$contactmethods['google_profile'] = __('Google Profile URL', 'vertikal');
	$contactmethods['twitter_profile'] = __('Twitter Profile URL', 'vertikal');
	$contactmethods['facebook_profile'] = __('Facebook Profile URL', 'vertikal');
	$contactmethods['linkedin_profile'] = __('Linkedin Profile URL', 'vertikal');
	return $contactmethods;
}
add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);  
?>
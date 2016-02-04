<?php

/*
 * Plugin Name: Easy Social Share Buttons for WordPress - Automatic Update Patch
 * Description: Fix issues with automatic updates after version 3.4. Use it only if you have version 3.4 or 3.4.x or it may prevent future automatic updates
 * Plugin URI: http://codecanyon.net/item/easy-social-share-buttons-for-wordpress/6394476?ref=appscreo
 * Version: 1.0
 * Author: CreoApps
 * Author URI: http://codecanyon.net/user/appscreo/portfolio?ref=appscreo
 */

if (!function_exists('essb_update_patch')) {
	add_action( 'init', 'essb_update_patch', 8);
	
	/**
	 * essb_update_patch
	 * 
	 * Initialize plugin options before plugin run to ensure automatic updates will work.
	 * @package EasySocialShareButtons
	 * @see ESSB_Manager
	 * @since 3.4
	 * 
	 */
	function essb_update_patch() {
		global $essb_manager;
		
		if ($essb_manager) {
			$essb_manager->settings = get_option(ESSB3_OPTIONS_NAME);

			$essb_manager->setIsInTheme(true);
		}
		
	}
}

<?php

/*
 * Proper way to enqueue scripts and styles
 */
	function wpdocs_theme_name_scripts() {
		wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css');
		wp_enqueue_style( 'Unslider', get_template_directory_uri() . '/css/unslider.css');
		wp_enqueue_style( 'Unslider dots', get_template_directory_uri() . '/css/unslider-dots.css');
		wp_enqueue_style( 'style-name', get_stylesheet_uri() );
		wp_enqueue_script( 'Modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', array('jquery') );
		wp_enqueue_script( 'Unslider', get_template_directory_uri() . '/js/unslider-min.js' );
		wp_enqueue_script( 'Magic', get_template_directory_uri() . '/js/magic.js' );
	}
	add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


/* Add Options Page */
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page();
	}


/* Allow .SVG */
	function cc_mime_types($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');


/*
 *  Hide Menu Items for Editors
 */

	function hide_menu() {
		global $current_user;
		$user_id = get_current_user_id();
		// echo "user:".$user_id;   // Use this to find your user id quickly

		if($user_id != '1') {

			// remove_menu_page( 'index.php' );                  	//Dashboard
			remove_menu_page( 'edit.php' );                  	//Posts
			remove_menu_page( 'upload.php' );                 	//Media
			remove_menu_page( 'edit-comments.php' );          	//Comments
			remove_menu_page( 'plugins.php' );                	//Plugins
				remove_submenu_page( 'themes.php', 'themes.php' );
				remove_submenu_page( 'themes.php', 'theme-editor.php' );
				remove_submenu_page( 'themes.php', 'customize.php' );
			remove_menu_page( 'nav-menus.php' );              	//Editar Menus
			// remove_menu_page( 'users.php' );                  	Users
			remove_menu_page( 'tools.php' );                  	//Tools
			remove_menu_page( 'options-general.php' );        	//Settings
			remove_menu_page( 'edit.php?post_type=acf' );     	//Advanced Custom Fields
			remove_menu_page( 'admin.php?page=cpt_main_menu' );	//Custom Post Types
			remove_menu_page( 'themes.php' );     			//Custom Fields
		}
	}

	add_action('admin_head', 'hide_menu');

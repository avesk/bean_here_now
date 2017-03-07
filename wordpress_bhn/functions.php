<?php 

	function add_main_js_script(){

		wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array('jquery'), '1.1', true); 

	}

	function add_post_thumbnail_support(){

		add_theme_support( 'post-thumbnails' ); 
	}

	add_action('add_main_js_script', 'add_main_js_script');
	add_action('add_post_thumbnail_support', 'add_post_thumbnail_support');

?>
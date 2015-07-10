<?php
	 //Support custom menus
	function register_my_menus(){
		register_nav_menus(
			array(
					'side-menu' =>__('Side Menu'), 
					'mobile-menu' =>__('Mobile Menu')
				)
			);
	}
	add_action('init', 'register_my_menus');

	// Support featured image in posts
	add_theme_support('post-thumbnails');

	// Set post thumbnail sizes
	set_post_thumbnail_size();

	//Register first sidebar for text widget
	function arphabet_widgets_init(){
		register_sidebar(array(
				'name'=>__('Side Text', 'arp'),
				'id'=>'side-text',
				'description' => 'The Side Text widget is meant for editing the text present under the profile image',
				'class' =>'blurb',
				'before_widget' =>'<p class="blurb">',
				'after_widget' =>'</p>',
				'before_title' =>'',
				'after_title' =>'',
			));

	//Register second sidebar for image widget
		register_sidebar(array(
				'name'=>__('Profile Image', 'arp'),
				'id'=>'profile-image',
				'description' => 'The Profile Image widget is meant for changing the profile image in the side bar.',
				'class' =>'author-img',
				'before_widget' =>'<div class="author-img">',
				'after_widget' =>'</div>',
				'before_title' =>'',
				'after_title' =>'',
			));
	//Register third sidebar for extras
		register_sidebar(array(
				'name'=>__('Extra', 'arp'),
				'id'=>'extra',
				'description' => 'The Extra widget is meant for plugin you would like to add to the sidebar.',
				'class' =>'',
				'before_widget' =>'',
				'after_widget' =>'',
				'before_title' =>'',
				'after_title' =>'',
			));
	}
	add_action('widgets_init', 'arphabet_widgets_init');
?>
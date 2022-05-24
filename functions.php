<?php
/*
 * Register sidebars
 */
function register_ai_child_starter_theme_sidebars()  {
	
	register_sidebar(array( 
	   'name' => 'My Custom Sidebar',
	   'id'=>'my-custom-sidebar',
	   'before_widget' => '',
	   'after_widget' => '',
	   'before_title' => '',
	   'after_title' => ''
    ));

   

    register_sidebar(array( 
       'name' => 'Hp Slideshow',
       'id'=>'hp-slideshow',
       'before_widget' => '',
	   'after_widget' => '',
	   'before_title' => '',
	   'after_title' => ''
	 ));

    register_sidebar(array( 
       'name' => 'Hp Welcome',
       'id'=>'hp-welcome',
       'before_widget' => '',
	   'after_widget' => '',
	   'before_title' => '',
	   'after_title' => ''
	 ));

    register_sidebar(array( 
       'name' => 'Hp Team',
       'id'=>'hp-team',
       'before_widget' => '',
	   'after_widget' => '',
	   'before_title' => '',
	   'after_title' => ''
	 ));

    register_sidebar(array( 
       'name' => 'Hp Properties',
       'id'=>'hp-properties',
       'before_widget' => '',
	   'after_widget' => '',
	   'before_title' => '',
	   'after_title' => ''
	 ));

    register_sidebar(array( 
       'name' => 'Hp Sales',
       'id'=>'hp-sales',
       'before_widget' => '',
	   'after_widget' => '',
	   'before_title' => '',
	   'after_title' => ''
	 ));

    register_sidebar(array( 
       'name' => 'Hp Testimonials',
       'id'=>'hp-testimonials',
       'before_widget' => '',
	   'after_widget' => '',
	   'before_title' => '',
	   'after_title' => ''
	 ));

    register_sidebar(array( 
       'name' => 'Hp News',
       'id'=>'hp-news',
       'before_widget' => '',
	   'after_widget' => '',
	   'before_title' => '',
	   'after_title' => ''
	 ));

    register_sidebar(array( 
       'name' => 'Hp Media',
       'id'=>'hp-media',
       'before_widget' => '',
	   'after_widget' => '',
	   'before_title' => '',
	   'after_title' => ''
	 ));

    register_sidebar(array( 
       'name' => 'Hp Contact',
       'id'=>'hp-contact',
       'before_widget' => '',
	   'after_widget' => '',
	   'before_title' => '',
	   'after_title' => ''
	 ));


	
	
}

add_action( 'widgets_init', 'register_ai_child_starter_theme_sidebars', 11 );

/*
 * Enqueue theme styles and scripts
 */
function ai_starter_theme_enqueue_child_assets()  {

	wp_enqueue_style('fonts-Roboto','https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap');
	wp_enqueue_style('fonts-Italiana','https://fonts.googleapis.com/css2?family=Italiana&display=swap');
	wp_enqueue_style('fonts-Kumbh Sans','https://fonts.googleapis.com/css2?family=Italiana&family=Kumbh+Sans:wght@300;400;500;600;700;800;900&display=swap');
	
	/* Enqueue my scripts */
	wp_enqueue_script('aios-starter-theme-child-script', get_stylesheet_directory_uri(). '/js/scripts.js');
	
}

add_action( 'wp_enqueue_scripts', 'ai_starter_theme_enqueue_child_assets', 11 );

/*
 * Add custom data attributes to menu items
 */
function ai_starter_theme_add_menu_link_attributes( $atts, $item, $args )  {
	$atts['data-title'] = $item->title;
	return $atts;
}

add_filter( 'nav_menu_link_attributes', 'ai_starter_theme_add_menu_link_attributes', 10, 3 );

/*
 * Add image sizes
 */
//add_image_size('cyclone-slide', 1024, 768, true);
 
/*
 * Define content width
 */
if ( ! isset( $content_width ) )  {
	$content_width = 960;
}

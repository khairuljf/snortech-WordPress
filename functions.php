<?php 
add_theme_support( 'title-tag' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );




register_nav_menus(array(
    'header-menu' => 'Header Menu',
    'top-right-menu' => 'Top small menu',
    'footer-menu' => 'Footer Menu',
));




/* default menu when menu not register  */
function default_menu() {
    echo '<ul class="nav navbar-nav navbar-right">';
    if (is_user_logged_in()) {
        echo '<li><a href="' . home_url() . '/wp-admin/nav-menus.php">Create a menu</a></li>';
    } else {
        echo '<li><a href="' . home_url() . '">Home</a></li>';
    }
    echo '</ul>';
}




/* customizer */
function mycustomize($customize) {
    $customize->add_section('heading-section', array(
        'title' => 'Header Option',
        'priority' => '10',
    ));
   
    $customize->add_setting('logo_upload', array(
        'default' => get_template_directory_uri(). '/img/site-logo.png',
        'transport' => 'refresh',
    ));
    $customize->add_control(
            new WP_Customize_Image_Control($customize, 'logo_upload', array(
        'section' => 'heading-section',
        'label' => 'Upload Logo',
        'settings' => 'logo_upload',
            ))
    );

    $customize->add_setting('logo_txt_sup', array(
        'default' => 'Biss',
        'transport' => 'refresh',
    ));
    $customize->add_control('logo_txt_sup', array(
        'section' => 'heading-section',
        'label' => 'Copyright Text',
        'type' => 'text',
    ));
    $customize->add_setting('logo_txt_sub', array(
        'default' => 'Corporate HTML Template',
        'transport' => 'refresh',
    ));
    $customize->add_control('logo_txt_sub', array(
        'section' => 'heading-section',
        'label' => 'Copyright Text',
        'type' => 'text',
    ));


    $customize->add_setting('phone', array(
        'default' => '202-314-1583',
        'transport' => 'refresh',
    ));
    $customize->add_control('phone', array(
        'section' => 'heading-section',
        'label' => 'Phone ',
        'type' => 'text',
    ));
    $customize->add_setting('mail', array(
        'default' => 'support@biss.com',
        'transport' => 'refresh',
    ));
    $customize->add_control('mail', array(
        'section' => 'heading-section',
        'label' => 'Contact Mail',
        'type' => 'text',
    ));


 $customize->add_section('social-section', array(
        'title' => 'Social Profile',
        'priority' => '11',
    ));

    $customize->add_setting('fb', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $customize->add_control('fb', array(
        'section' => 'social-section',
        'label' => 'Facebook',
        'type' => 'text',
    ));

    $customize->add_setting('twr', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $customize->add_control('twr', array(
        'section' => 'social-section',
        'label' => 'Twitter',
        'type' => 'text',
    ));

     $customize->add_setting('behance', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $customize->add_control('behance', array(
        'section' => 'social-section',
        'label' => 'Behance',
        'type' => 'text',
    ));

    $customize->add_setting('linke', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $customize->add_control('linke', array(
        'section' => 'social-section',
        'label' => 'Linkedin',
        'type' => 'text',
    ));

    $customize->add_setting('gplus', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $customize->add_control('gplus', array(
        'section' => 'social-section',
        'label' => 'Google Plus',
        'type' => 'text',
    ));

    $customize->add_setting('rss', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $customize->add_control('rss', array(
        'section' => 'social-section',
        'label' => 'Rss ',
        'type' => 'text',
    ));





$customize->add_section('footer-section', array(
        'title' => 'Footer Option',
        'priority' => '120',
    ));
    $customize->add_setting('copyright', array(
        'default' => '© 2014 Envato Pty Ltd. Trademarks and brands are the property of their respective owners.',
        'transport' => 'refresh',
    ));
    $customize->add_control('copyright', array(
        'section' => 'footer-section',
        'label' => 'Copyright Text',
        'type' => 'text',
    ));






    $customize->add_section('contact-section', array(
        'title' => 'Contac Page Option',
        'priority' => '21',
    ));
    $customize->add_setting('mheader', array(
        'default' => 'WHERE TO FIND US',
        'transport' => 'refresh',
    ));
    $customize->add_control('mheader', array(
        'section' => 'contact-section',
        'label' => 'Map Header',
        'type' => 'text',
    ));


     $customize->add_setting('mcontent', array(
        'default' => 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam sit amet ligula tempor tellus laoreet tincidunt.',
        'transport' => 'refresh',
    ));
    $customize->add_control('mcontent', array(
        'section' => 'contact-section',
        'label' => 'Map Content',
        'type' => 'text',
    ));

    $customize->add_setting('mlink', array(
        'default' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805908.7426403406!2d144.58056309623987!3d-37.90516876350429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC%2C+Australia!5e0!3m2!1sen!2sbd!4v1509187191183',
        'transport' => 'refresh',
    ));
    $customize->add_control('mlink', array(
        'section' => 'contact-section',
        'label' => 'Map LInk',
        'type' => 'text',
        'desc'=>'Please link without Heigh & width',
    ));



    $customize->add_setting('cheader', array(
        'default' => 'GET IN TOUCH',
        'transport' => 'refresh',
    ));
    $customize->add_control('cheader', array(
        'section' => 'contact-section',
        'label' => 'Contact Option Header',
        'type' => 'text',
    ));


     $customize->add_setting('ccontent', array(
        'default' => 'Donec congue euismod orci quis sodales. Quisque imperdiet iaculis tempor.
',
        'transport' => 'refresh',
    ));
    $customize->add_control('ccontent', array(
        'section' => 'contact-section',
        'label' => 'Contact Content',
        'type' => 'text',
    ));

    $customize->add_setting('clocation', array(
        'default' => '4192 Carriage Court, Twentynine Palms, CA 92277',
        'transport' => 'refresh',
    ));
    $customize->add_control('clocation', array(
        'section' => 'contact-section',
        'label' => 'Address',
        'type' => 'text',
    
    ));

    $customize->add_setting('cphone', array(
        'default' => '760-368-5957',
        'transport' => 'refresh',
    ));
    $customize->add_control('cphone', array(
        'section' => 'contact-section',
        'label' => 'Phone',
        'type' => 'text',
    
    ));


  
}
add_action('customize_register', 'mycustomize');




/* Include CMB2 meta box */
include 'metabox/init.php';
include 'metabox/functions.php';
// inlcuding shortcode
include 'inc/shortcode.php';

// Include Custom widget 
include 'inc/custom-widget.php';


/*Custom Post register*/

 register_post_type('slider', array(
        'labels' => array(
            'name' => 'Slider',
            'all_items'=>'All Slider'
        ),
        'public' => true,
        'supports' => array('thumbnail', 'title','editor'),
        'menu_icon'=>'dashicons-slides',
            )
    );



 register_post_type('home-service', array(
        'labels' => array(
            'name' => 'Home-Service',
            'all_items'=>'All Services'
        ),
        'public' => true,
        'supports' => array('thumbnail', 'title','editor'),
        'menu_icon'=>'dashicons-slides',
            )
    );


  register_post_type('advantages', array(
        'labels' => array(
            'name' => 'Advantages',
            'all_items'=>'Advantages list'
        ),
        'public' => true,
        'supports' => array('thumbnail', 'title','editor'),
        'menu_icon'=>'dashicons-slides',
            )
    );

  register_post_type('home-testimonials', array(
        'labels' => array(
            'name' => 'Testimonials ',
            'all_items'=>'All Testimonials '
        ),
        'public' => true,
        'supports' => array( 'title','editor'),
        'menu_icon'=>'dashicons-slides',
            )
    );
  register_post_type('ab-compay', array(
        'labels' => array(
            'name' => 'About Company ',
        ),
        'public' => true,
        'supports' => array( 'title','thumbnail','editor'),
        'menu_icon'=>'dashicons-slides',
            )
    );

  register_post_type('our-skill', array(
        'labels' => array(
            'name' => 'Our Skills',
            'all_items'=>'All Skills '
        ),
        'public' => true,
        'supports' => array( 'title'),
        'menu_icon'=>'dashicons-slides',
            )
    );

  register_post_type('project', array(
        'labels' => array(
            'name' => 'Word Category',
            'all_items'=>'All Project '
        ),
        'public' => true,
        'supports' => array( 'title','editor'),
        'menu_icon'=>'dashicons-slides',
            )
    );


     register_taxonomy( 'team_member', 'project', array(
    'labels'=>array(
        'name'=>'Category',
        'add_new_item'=>'Add New Category',
    ),
    'public'=>true,
    'hierarchical'=>true,
) );


   register_post_type('professional', array(
    'labels' => array(
        'name' => 'Our Professional',
        'all_items'=>'All Members '
    ),
    'public' => true,
    'supports' => array( 'title','editor','thumbnail'),
    'menu_icon'=>'dashicons-slides',
        )
);

     register_post_type('pertners', array(
    'labels' => array(
        'name' => 'Our Partners',
        'all_items'=>'All Partners '
    ),
    'public' => true,
    'supports' => array( 'title','thumbnail'),
    'menu_icon'=>'dashicons-slides',
        )
);


    register_post_type('ab_client', array(
    'labels' => array(
        'name' => 'Client Say',
        'all_items'=>'All Report '
    ),
    'public' => true,
    'supports' => array( 'title','thumbnail','editor'),
    'menu_icon'=>'dashicons-slides',
        )
);

      register_post_type('service-list', array(
    'labels' => array(
        'name' => 'Service List',
        'all_items'=>'All Services '
    ),
    'public' => true,
    'supports' => array( 'title','thumbnail','editor'),
    'menu_icon'=>'dashicons-slides',
        )
);

    register_post_type('service-advantage', array(
    'labels' => array(
        'name' => 'Service advantage',

    ),
    'public' => true,
    'supports' => array( 'title','thumbnail','editor'),
    'menu_icon'=>'dashicons-slides',
        )
);

register_post_type('service-advantage', array(
    'labels' => array(
        'name' => 'Service advantage',

    ),
    'public' => true,
    'supports' => array( 'title','thumbnail','editor'),
    'menu_icon'=>'dashicons-slides',
        )
);

register_post_type('projectlist', array(
    'labels' => array(
        'name' => 'Project Blog',
        'all_items'=>'Project List'

    ),
    'public' => true,
    'supports' => array( 'title','thumbnail','editor','comments'),
    'menu_icon'=>'dashicons-slides',
        )
);
    register_taxonomy( 'project_cat', 'projectlist', array(
    'labels'=>array(
        'name'=>'Category',
        'add_new_item'=>'Add New Category',

    ),
    'public'=>true,
    'hierarchical'=>true,
) );


  /* sidebar Registration */

  function footer_widget() {

    register_sidebar( array(
        'name'          => 'Footer Left Widget',
        'id'            => 'footer-widget1',
        'before_widget' => '<aside class="widget">',
        'after_widget'  => '</div></aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2><div class="widget-content">',
    ) );
    register_sidebar( array(
        'name'          => 'Footer Middle Widget',
        'id'            => 'footer-widget2',
        'before_widget' => '<aside class="widget widget-links">',
        'after_widget'  => '</div></div></aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2><div class="widget-content"><div class="wrap-1">',
    ) );


    register_sidebar( array(
        'name'          => 'Footer Right Widget',
        'id'            => 'footer-widget3',
        'before_widget' => '<aside class="widget widget-contacts">',
        'after_widget'  => '</div></aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2><div class="widget-content">',
    ) );


    register_sidebar( array(
        'name'          => 'Footer Right Widget',
        'id'            => 'footer-widget3',
        'before_widget' => '<aside class="widget widget-contacts">',
        'after_widget'  => '</div></aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2><div class="widget-content">',
    ) );




       register_sidebar( array(
        'name'          => 'Project Sidebar ',
        'id'            => 'psearch',
        'before_widget' => '<aside class="widget widget-search">',
        'after_widget'  => '</div></aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2><div class="widget-content">',
    ) );









}
add_action( 'widgets_init', 'footer_widget' );



/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

        
        
        
        
  
 

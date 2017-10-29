<?php

function slider($atts) {
    extract(shortcode_atts(array(
        'count' => '',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'slider', 'orderby' => 'menu_order', 'order' => 'ASC')
    );
   
    $list = '<section class="padding-top-0 padding-bottom-0">

            <div id="layerslider" class="width-100 float-left layer-slider">';


$style=3;
    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $bg = get_post_meta(get_the_ID(), $prefix . 'backgorund', true);
        $label = get_post_meta(get_the_ID(), $prefix . 'label', true);
        $tlink = get_post_meta(get_the_ID(), $prefix . 'targetlink', true);


if($style%2==1){

     $list .= '<div class="ls-layer" style="transition3d: 3,9,18;">

                    <img class="ls-bg" src="'.$bg.'" alt="layer1-background">

                    <div class="ls-s2 slide-description" style="top: 50px; left: 75px; slidedirection: fade; scalein: 2; transition2d: all; slidedelay: 6000; delayin: 1000; delayout: 1000; durationin: 1000; easingin: easeOutExpo;">

                        <p class="subtitle">'.$label.'</p>

                        <div class="cl"></div>

                        <p class="title">'.get_the_title().'</p>

                        <p class="description">'.get_the_content().'</p>

                        <p><a href="'.$tlink.'" class="biss-btn biss-btn-border-primary">discover more</a>

                    </div>

                    <img class="ls-s1" src="'.get_the_post_thumbnail_url().'" alt="" style="top: 0px; left: 600px; transition2d: all; slidedelay: 6000; durationin: 1000; easingin: easeOutExpo;">

                </div>';


}

else{

     $list .= '<div class="ls-layer" style="transition3d: 1,5,15;">

                    <img class="ls-bg" src="'.$bg.'" alt="layer1-background">

                    <div class="ls-s2 slide-description align-right" style="top: 50px; left: 350px; slidedirection: fade; scalein: 2; transition2d: all; slidedelay: 6000; durationin: 1000; delayin: 1000; delayout: 1000; easingin: easeOutExpo;">

                        <p class="subtitle">'.$label.'</p>

                        <div class="cl"></div>

                        <p class="title">'.get_the_title().'</p>

                        <p class="description">'.get_the_content().'</p>

                        <p><a href="" class="biss-btn biss-btn-border-primary">discover more</a>

                    </div>

                    <img class="ls-s1" src="'.get_the_post_thumbnail_url().'" alt="" style="top: 0px; left: 30px; transition2d: all; slidedelay: 6000; durationin: 1000; easingin: easeOutExpo;">

                </div>';
    
}


$style++;
    endwhile;
    $list .= '</div>

        </section>';
    wp_reset_query();
    return $list;
}

add_shortcode('slider', 'slider');



function CHOOSE_BISS($atts) {
    extract(shortcode_atts(array(
        'title' => 'choose <span class="primary-color">biss</span> multipurpose html template',
        'subtitle' => 'Donec faucibus et risus non vehicula. Integer ante lectus, faucibus et arcu eget, tempus dictum lacus.',
        'purchasebtn' => 'purchase now!',
        'purchaselink' => '#',
        'learnbtn' => 'learn more...',
        'learnlink' => '#',
                    ), $atts));

  
   
    $list = '<section>

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="action-block-1">

                            <div class="width-66 float-left">

                                <p class="h">'.$title.'</p>

                                <p>'.$subtitle.'</p>

                            </div>

                            <div class="width-33 float-right">

                                <a href="'.$purchaselink.'" class="biss-btn biss-btn-primary width-50 float-left sm-width-100 md-width-100">'.$purchasebtn.'</a>

                                <a href="'.$learnlink.'" class="biss-btn biss-btn-secondary width-50 float-right sm-width-100 md-width-100">'.$learnbtn.'</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>';

    wp_reset_query();
    return $list;
}

add_shortcode('home-choose-biss', 'CHOOSE_BISS');




function home_services($atts) {
    extract(shortcode_atts(array(
        'count' => '',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'home-service',  'order' => 'DASC')
    );
   
    $list = '<section class="transparent-bg-secondary bg-img bg-img-dark padding-bottom-30">

            <div class="container">

                <div class="row">';



    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $icon = get_post_meta(get_the_ID(), $prefix . 'icon', true);
        $btn='more';
      




     $list .= '<div class="col-lg-4 col-md-4">

                        <article class="services-1">

                            <span class="icon"><i class="'. $icon.'"></i></span>

                            <div class="inner">

                                <!-- Service title //-->

                                <p class="h">'.get_the_title().'</p>

                                <!-- Service description //-->

                                <p>'.get_the_content().'</p>

                                <!-- Service button //-->

                                <p class="b"><a href="" class="biss-btn biss-btn-border-primary">'.$btn.'</a></p>

                            </div>

                            <div class="color-bg"></div>

                        </article>

                    </div>';







    endwhile;
    $list .= '</div>

            </div>

        </section>';
    wp_reset_query();
    return $list;
}

add_shortcode('home-service', 'home_services');



function home_advantages($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        'uptitle' => 'discover our',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'advantages',  'order' => 'ASC')
    );
   
    $list = '<section class="border-bottom-1 padding-bottom-0">

            <div class="container">

                <div class="row">

                    ';



    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $icon = get_post_meta(get_the_ID(), $prefix . 'icon', true);
        $btn='more';

$list .='<div class="col-lg-12">

                        <p class="section-subtitle">'.$uptitle.'</p>

                        <h2 class="section-title">'.get_the_title().'</h2>

                        <p>'.get_the_content().' </p>

                        <p>&nbsp;</p>

                    </div>

                    <div class="col-lg-3">

                        <figure class="margin-bottom-70"><img src="'.get_the_post_thumbnail_url().'" alt=""></figure>

                    </div>

                    <div class="col-lg-9">

                        <div class="row">';


$entries = get_post_meta( get_the_ID(), $prefix.'my_group', true );
                $clear=1;

                foreach ( (array) $entries as $key => $entry ) {

                    $ion = $title = $desc = '';

                    if ( isset( $entry['icon'] ) ) {
                        $ion = esc_html( $entry['icon'] );
                    }

                     if ( isset( $entry['title'] ) ) {
                        $title = ( $entry['title'] );
                        
                    }

                    if ( isset( $entry['desc'] ) ) {
                        $desc = ( $entry['desc'] );
                        
                    }

                    if($clear==4){
                        $list .='<div class="cl"></div>';

                         $clear=1;
                    }

                $list .= '<div class="col-lg-4">

                            <div class="service-2">

                                <i class="'.$ion.'"></i>

                                <p class="title">'.$title.'</p>

                                <p>'.$desc.'</p>

                            </div>

                        </div>';

                        $clear++;


                }
      


    endwhile;
    $list .= '</div>

                    </div>

                </div>

            </div>

        </section>';
    wp_reset_query();
    return $list;
}

add_shortcode('home-advantages', 'home_advantages');





function home_testimonials($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        'subtitle' => 'what people say about us',
        'title' => 'clients testimonials',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'home-testimonials',  'order' => 'DASC')
    );
   
    $list = '<section class="align-center transparent-bg-secondary bg-img bg-img-6">
        <div class="transparent-bg-secondary-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="section-subtitle">'.$subtitle.'</p>
                        <h2 class="section-title">'.$title.'</h2>
                        <div class="plugin-container" id="testimonials">';



    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $desc = get_post_meta(get_the_ID(), $prefix . 'jobdesc', true);

      




     $list .= '<div class="rivaCarouselItem" style="padding-left: 0px; width: 406px">
                <article class="testimonials-3-item">
                    <div class="content">
                        "'.get_the_content().'"
                    </div>
                    <div class="author">'.get_the_title().'<br>
                        <small>'.$desc.'</small>
                    </div>
                </article>
            </div>';







    endwhile;
    $list .= '<div class="rivaCarouselNavBullets width-100 margin-top-20 nav-st-4">
                                <a href="#" class="" data-step="0">1</a>
                                <a href="#" class="" data-step="1">2</a>
                                <a href="#" class="" data-step="2">3</a>
                                <a href="#" class="active" data-step="3">4</a>
                                <a href="#" class="" data-step="4">5</a>
                            </div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="transparent-bg-secondary-layer">
        </div>
    </section>';
    wp_reset_query();
    return $list;
}

add_shortcode('home-testimo', 'home_testimonials');




function home_purchage($atts) {
    extract(shortcode_atts(array(
        'title' => 'purchase <span class="primary-color">biss html</span> on themeforest',
        'subtitle' => 'Do you like how it looks?',
        'btn' => 'purchase now!',
        'btnlink' => '#',
        'bgcolor' => '#ecedf1',
        'color' => '#ECEDF1',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'home-testimonials',  'order' => 'DASC')
    );
   
    $list = '
    <section class="secondary-bg-lighten" style="background-color:'.$bgcolor.';">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="action-block-2">

                            <p>'.$subtitle.'</p>

                            <p class="main">'.$title.'</p>

                            <p><a href="'.$btnlink.'" class="biss-btn biss-btn-border-primary">'.$btn.'</a></p>

                        </div>

                    </div>

                </div>

            </div>

        </section>';


     $list .= '';


    $list .= '';
    wp_reset_query();
    return $list;
}

add_shortcode('home-purchage', 'home_purchage');





function about_purchage($atts) {
    extract(shortcode_atts(array(
        'title' => 'like biss template? purchase it!',
      
        'btn' => 'purchase now!',
        'btnlink' => '#',
        'bgcolor' => '#ecedf1',
        'color' => '#ECEDF1',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'home-testimonials',  'order' => 'DASC')
    );
   
    $list = '
    <section class="primary-bg">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="action-block-2">

                                <p class="main margin-top-0">'.$title.'</p>

                                <p><a href="'.$btnlink.'" class="biss-btn biss-btn-border-white">'.$btn.'</a></p>

                            </div>

                        </div>

                    </div>

                </div>

            </section>';


     $list .= '';


    $list .= '';
    wp_reset_query();
    return $list;
}

add_shortcode('abut-purchage', 'about_purchage');



function slide_thumb($atts) {
    extract(shortcode_atts(array(
        'title' => 'purchase <span class="primary-color">biss html</span> on themeforest',
        'subtitle' => 'Do you like how it looks?',
        'btn' => 'purchase now!',
        'btnlink' => '#',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'home-testimonials',  'order' => 'DASC')
    );

    $prefix = 'clean_';
        $title = get_post_meta(get_the_ID(), $prefix . 'title', true);
        $subtitle = get_post_meta(get_the_ID(), $prefix . 'subtitle', true);
   
    $list = '<section class="title-bar bg-img-7 transparent-bg-secondary" style="background-image:url('.get_the_post_thumbnail_url().')">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">

                        <h1>'.$title.'</h1>

                        <p>'.$subtitle.'</p>

                    </div>

                </div>

            </div>

        </section>';


     $list .= '';

    $list .= '';
    wp_reset_query();
    return $list;
}

add_shortcode('page-slide-thumb', 'slide_thumb');





function service_download($atts) {
    extract(shortcode_atts(array(
        'title' => 'download our brochure',
        'desc' => 'Curabitur molestie ante eu ipsum vulputate, a euismod sem tempus. Proin aliquam fermentum metus, vel suscipit magna suscipit nec. Donec eget convallis ex. Cras mollis magna nec maximus mollis. Sed fermentum, arcu sit amet hendrerit imperdiet, mauris leo elementum turpis, ut aliquet tellus diam eu dui.',
        'download' => '#',
        'filename'=>'BissTemplateBrochure_1.0.pdf (18.6 Mb)',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'home-testimonials',  'order' => 'DASC')
    );

    $prefix = 'clean_';
        $title = get_post_meta(get_the_ID(), $prefix . 'title', true);
        $subtitle = get_post_meta(get_the_ID(), $prefix . 'subtitle', true);
   
    $list = '<section class="primary-bg align-center">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <h2 class="margin-top-0">'.$title.'</h2>

                            <p>'.$desc.'</p>

                            <p><a href="'.$download.'" class="download-brochure"><i class="fa fa-download"></i><br> '.$filename.'</a></p>

                        </div>

                    </div>

                </div>

            </section>';




    $list .= '';
    wp_reset_query();
    return $list;
}

add_shortcode('service-download', 'service_download');






function about_company($atts) {
    extract(shortcode_atts(array(
        'count' => 1,
        'subtitle' => 'what people say about us',
        'content_title' => 'Vivamus euismod lectus sed ligula mollis cursus. Suspendisse mattis ligula at leo commodo aliquet. Curabitur at rhoncus justo.',
        'btnlink' => '#',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'ab-compay',  'order' => 'DASC')
    );
   
    $list = '<section class="border-bottom-1">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 align-center">';



    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $desc = get_post_meta(get_the_ID(), $prefix . 'jobdesc', true);


     $list .= '<p class="section-subtitle">learn more</p>

                            <h2 class="section-title">'.get_the_title().'</h2>

                        </div>

                        <div class="col-lg-6">

                            <figure class="margin-top-0">

                                <img src="'.get_the_post_thumbnail_url().'" alt="">

                            </figure>
                            
                        </div>

                        <div class="col-lg-6">

                            <p class="margin-top-0 font-bold">'.$content_title.'</p>

                            <p>'.get_the_content().'</p>
                            
                            <ul class="style-1">';

$entries = get_post_meta( get_the_ID(), $prefix.'my_groups', true );
               
                foreach ( (array) $entries as $key => $entry ) {

                    $item ='';

                    if ( isset( $entry['list'] ) ) {
                        $item = esc_html( $entry['list'] );
                    }

  
                $list .= '
                                <li><i class="fa fa-arrow-circle-right primary-color"></i> '. $item.'</li>';

                }


     $list .= '</ul>

                            <p class="margin-top-40"><a href="'.$btnlink.'" class="biss-btn biss-btn-primary">get in touch now!</a></p>

                        </div>';


    endwhile;
    $list .= '</div>

                </div>

            </section>';
    wp_reset_query();
    return $list;
}

add_shortcode('about-company', 'about_company');




function skill_details($atts) {
    extract(shortcode_atts(array(
        'count' => 1,
        'subtitle' => 'what people say about us',
        'title' => 'clients testimonials',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'our-skill',  'order' => 'DASC')
    );
   
    $list = '<section>

                <div class="container">

                    <div class="row">';




    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $desc = get_post_meta(get_the_ID(), $prefix . 'jobdesc', true);



      


$list .= '<div class="col-lg-6">

                            <h2 class="margin-top-0">our skills</h2>';

$s = new WP_Query(
            array('posts_per_page' => -1, 'post_type' => 'our-skill',  'order' => 'DASC')
    );
while ($s->have_posts()) : $s->the_post();
     $prefix = 'clean_';
        $progress = get_post_meta(get_the_ID(), $prefix . 'Progress', true);
        $animate = get_post_meta(get_the_ID(), $prefix . 'animate', true);

        
        if($animate=="custom"){
            $animate=0;
        }
        else{
            $animate=1;
        }

        $list .= '<div class="biss-skill" data-name="'.get_the_title().'" data-value="'.$progress.'" data-animated="'.$animate.'"></div>';

 endwhile;
 $list .= '</div>';





 $list .= '<div class="col-lg-6">

                            <h2 class="margin-top-0">fast details</h2>

                            <div class="biss-accordion" data-active="3">';

$p = new WP_Query(
            array('posts_per_page' => 3, 'post_type' => 'project',  'order' => 'DASC')
    );
while ($p->have_posts()) : $p->the_post();
     $prefix = 'clean_';
        $progress = get_post_meta(get_the_ID(), $prefix . 'Progress', true);
        $animate = get_post_meta(get_the_ID(), $prefix . 'animate', true);

  

        $list .= '<div class="item">

                                    <header>'.get_the_title().' <i class="toggle fa fa-plus"></i></header>

                                    <div class="content">

                                        <p>'.get_the_content().'</p>
                                        
                                    </div>

                                </div>';

 endwhile;
 $list .= '</div>

                        </div>';










    endwhile;
    $list .= '</div>

                </div>

            </section>
';
    wp_reset_query();
    return $list;
}

add_shortcode('skill-details', 'skill_details');




function our_professional($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        'subtitle' => 'meet our team',
        'title' => 'our professionals',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'professional',  'order' => 'DASC')
    );
   
    $list = '<section class="secondary-bg-lighten align-center">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <p class="section-subtitle">'.$subtitle.'</p>

                            <h2 class="section-title">'.$title.'</h2>

                            <div class="plugin-container" id="team">';



    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $position = get_post_meta(get_the_ID(), $prefix . 'position', true);
        $mail = get_post_meta(get_the_ID(), $prefix . 'mailaddr', true);
        $fb = get_post_meta(get_the_ID(), $prefix . 'facebook', true);
        $twr = get_post_meta(get_the_ID(), $prefix . 'twitter', true);
        $linke = get_post_meta(get_the_ID(), $prefix . 'linkedin', true);
        


     $list .= '<div class="team-member">

                                    <figure>

                                        <div class="hover">

                                            <a href="'.$fb.'"><i class="fa fa-facebook"></i></a>

                                            <a href="'.$twr.'"><i class="fa fa-twitter"></i></a>

                                            <a href="'.$linke.'"><i class="fa fa-linkedin"></i></a>

                                            <a href="'.$mail.'"><i class="fa fa-envelope"></i></a>

                                        </div>

                                        <img src="'.get_the_post_thumbnail_url().'" alt="">

                                    </figure>

                                    <p class="title">'.get_the_title().'</p>

                                    <p class="position">'. $position.'</p>

                                    <p>'.get_the_content().'</p>

                                </div>';

    endwhile;
    $list .= ' <div class="riva-insert-menu-here"></div> </div>

                        </div>

                    </div>

                </div>

            </section>';
    wp_reset_query();
    return $list;
}

add_shortcode('our-professional', 'our_professional');







function partner_client($atts) {
    extract(shortcode_atts(array(
        'count' => 1,
        'subtitle' => 'what people say about us',
        'title' => 'clients testimonials',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'pertners',  'order' => 'DASC')
    );
   
    $list = '<section>

                <div class="container">

                    <div class="row">';




    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $desc = get_post_meta(get_the_ID(), $prefix . 'jobdesc', true);



$list .= '<div class="col-lg-6">

                            <p class="section-subtitle">our respective</p>

                            <h2 class="section-title">partners</h2>

                            <div class="logo-group sm-margin-bottom-70 md-margin-bottom-70" id="logo-group">';

$s = new WP_Query(
            array('posts_per_page' => -1, 'post_type' => 'pertners',  'order' => 'DASC')
    );
while ($s->have_posts()) : $s->the_post();
     $prefix = 'clean_';
        $progress = get_post_meta(get_the_ID(), $prefix . 'Progress', true);
        $animate = get_post_meta(get_the_ID(), $prefix . 'animate', true);

        

        $list .= '<div class="logo-group-item"><span class="helper"></span><img src="'.get_the_post_thumbnail_url().'" alt=""></div>';

 endwhile;
 $list .= '</div>
                                
                        </div>';





 $list .= '<div class="col-lg-6">

                            <p class="section-subtitle">find out what</p>

                            <h2 class="section-title">clients say</h2>

                            <div class="plugin-wrapper" id="testimonials">';

$p = new WP_Query(
            array('posts_per_page' => -1, 'post_type' => 'ab_client',  'order' => 'DASC')
    );
while ($p->have_posts()) : $p->the_post();
     $prefix = 'clean_';
      
        $position = get_post_meta(get_the_ID(), $prefix . 'position', true);

  

        $list .= '<article class="testimonials-1-item">

                                    <!-- Testimonial content start //-->

                                    <div class="content">

                                        <i class="fa fa-quote-left q"></i>

                                        '.get_the_content().'
                                    </div>


                                    <div class="author">

                                        <figure>

                                            <img src="'.get_the_post_thumbnail_url().'" alt="">

                                        </figure>

                                        <p class="name">Nanette C. Harvey</p>

                                        <p class="position">'.$$position .'</p>

                                    </div>

                                    <!-- Testimonial author end //-->

                                </article>';

 endwhile;
 $list .= '<div class="riva-insert-menu-here"></div>

                            </div>
                            
                        </div>';





    endwhile;
    $list .= '</div>

                </div>

            </section>';
    wp_reset_query();
    return $list;
}

add_shortcode('parrner-clientsay', 'partner_client');




function carrier_tab($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        'subtitle' => 'meet our team',
        'title' => 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam sit amet ligula tempor tellus laoreet tincidunt. Proin ut elit maximus, pretium mauris in, feugiat dolor. Donec congue euismod orci quis sodales. Quisque imperdiet iaculis tempor. Nulla facilisi.',
                    ), $atts));




    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'project',  'order' => 'DASC')
    );
   
    $list = '<div class="col-lg-7 col-md-7 sm-margin-bottom-70 md-margin-bottom-70">




                            <p class="margin-top-0">'.$title.'</p>

                            <!-- FAQ Sorting //-->

                            <div class="plugin-container riva-sorting margin-top-50" id="faq-sorting">

                                <!-- Filter //-->

                                <div class="filters align-left">

                                    <span data-value="*" class="active">show all</span>

                                    <span data-value="web">web</span>

                                    <span data-value="development">development</span>

                                    <span data-value="html5">html5</span>

                                    <span data-value="css3">css3</span>

                                    <span data-value="design">design</span>

                                    <span data-value="photoshop">photoshop</span>

                                </div>

                                <div class="listing">

                                    <div class="biss-accordion" data-active="2">';


    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $cates = get_the_terms(get_the_ID(), 'team_member');
        $prefix = 'clean_';
   
      
        

  foreach ($cates as $cate) {



    $list .= '<div class="item '.$cate->name.'">

                    <header>'.get_the_title().'<i class="toggle fa fa-plus"></i></header>

                    <div class="content">

                        <p>'.get_the_content().'</p>
                        
                    </div>

                </div>';


  }




    endwhile;
    $list .= '</div>
                    </div>
                            </div>

                        </div>';
    wp_reset_query();
    return $list;
}

add_shortcode('carrier-category', 'carrier_tab');







function carrier_sidebar($atts) {
    extract(shortcode_atts(array(
        'count' => '1',
        'subtitle' => 'meet our team',
        'title' => 'feel free to contact us',
        'phone' => '8-800-401-290-4771',
        'phone2' => '8-800-508-326-6368',
        'desc' => 'Proin vestibulum ullamcorper ultrices. Ut ullamcorper, enim a ultrices volutpat, nibh velit malesuada sapien, non pulvinar nulla risus sit amet dolor. Etiam varius in sem nec porttitor.',
                    ), $atts));




    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'advantages',  'order' => 'ASC')
    );
   
    $list = '<div class="col-lg-5 col-md-5">

                            <h3 class="margin-top-0">'.$title.'</h3>

                            <div class="call-us">

                                <p>Tall free:</p>

                                <p class="phone">'.$phone.'</p>

                                <p class="phone">'.$phone.'</p>

                                <p class="margin-top-20"><a href="" class="biss-btn biss-btn-white">drop us a line</a></p>

                            </div>

                            <div class="clearfix"></div>

                            <p>'.$desc.' </p>

                            <p>&nbsp;</p>';


    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $cates = get_the_terms(get_the_ID(), 'team_member');
        $prefix = 'clean_';
        $sasdf = get_post_meta(get_the_ID(), $prefix . 'position', true);

            $post_con=1;
    $entries = get_post_meta( get_the_ID(), $prefix.'my_group', true );
                $clear=1;

                foreach ( (array) $entries as $key => $entry ) {

                    $ion = $title = $desc = '';

                    if ( isset( $entry['icon'] ) ) {
                        $ion = esc_html( $entry['icon'] );
                    }

                     if ( isset( $entry['title'] ) ) {
                        $title = ( $entry['title'] );
                        
                    }

                    if ( isset( $entry['desc'] ) ) {
                        $desc = ( $entry['desc'] );
                        
                    }



                 
                    if($post_con<=3){
                        $list .= '<div class="service-2">

                                <i class="'.$ion.'"></i>

                                <p class="title">'.$title.'</p>

                                <p>'.$desc.'.</p>

                            </div>';

                    }
                

                       

                            $post_con++;
                }


    endwhile;
    $list .= '</div>';
    wp_reset_query();
    return $list;
}

add_shortcode('carrier-rightbar', 'carrier_sidebar');




function service_list($atts) {
    extract(shortcode_atts(array(
        'count' => '1',
        'subtitle' => 'meet our team',

                    ), $atts));


    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'service-list',  'order' => 'ASC')
    );
   
    $list = '<section class="padding-bottom-40 border-bottom-1">

                <div class="container">

                    <div class="row">

                        ';


    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $cates = get_the_terms(get_the_ID(), 'team_member');
        $prefix = 'clean_';
        $sasdf = get_post_meta(get_the_ID(), $prefix . 'position', true);


        $list .='<div class="col-lg-12">

                            <p class="margin-top-0 font-bold">'.get_the_title().'</p>

                            <p class="margin-bottom-50">'.get_the_content().'</p>

                        </div>';

            $post_con=1;
    $entries = get_post_meta( get_the_ID(), $prefix.'my_group', true );
                $clear=1;

                foreach ( (array) $entries as $key => $entry ) {

                    $ion = $title = $desc = '';

                    if ( isset( $entry['icon'] ) ) {
                        $ion = esc_html( $entry['icon'] );
                    }

                     if ( isset( $entry['title'] ) ) {
                        $title = ( $entry['title'] );
                        
                    }

                    if ( isset( $entry['desc'] ) ) {
                        $desc = ( $entry['desc'] );
                        
                    }



                 
                    
                        $list .= '<div class="col-lg-3">

                            <!-- Service start //-->

                            <article class="service-4">

                                <i class="'.$ion.'"></i>

                                <h3>'.$title.'</h3>

                                <p>'.$desc.'</p>

                            </article>

                            <!-- Service end //-->

                        </div>';

                 
                

                       

                       
                }


    endwhile;
    $list .= '
                    </div>

                </div>

            </section>';
    wp_reset_query();
    return $list;
}

add_shortcode('service-list', 'service_list');










function service_advantages($atts) {
    extract(shortcode_atts(array(
        'count' => '1',
        'subtitle' => 'meet our team',
        'btn' => 'more',

                    ), $atts));


    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'service-advantage',  'order' => 'ASC')
    );
   
    $list = '<section class="align-center">

                <div class="container">

                    <div class="row">';


    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $cates = get_the_terms(get_the_ID(), 'team_member');
        $prefix = 'clean_';
        $sasdf = get_post_meta(get_the_ID(), $prefix . 'position', true);


        $list .='<div class="col-lg-12">

                            <p class="section-subtitle">'.get_the_content().'</p>

                            <h2 class="section-title">'.get_the_title().'</h2>

                        </div>';

            $post_con=1;
    $entries = get_post_meta( get_the_ID(), $prefix.'my_group', true );
                $clear=1;

                foreach ( (array) $entries as $key => $entry ) {

                    $ion = $title = $desc = '';

                    if ( isset( $entry['icon'] ) ) {
                        $ion = esc_html( $entry['icon'] );
                    }

                     if ( isset( $entry['title'] ) ) {
                        $title = ( $entry['title'] );
                        
                    }

                    if ( isset( $entry['desc'] ) ) {
                        $desc = ( $entry['desc'] );
                        
                    }

                    
                        $list .= '<div class="col-lg-3">

                            <div class="service-3">

                                <div class="inner">

                                    <i class="'.$ion.'"></i>

                                    <h2>'.$title.'</h2>

                                    <div class="cl"></div><div class="line"></div><div class="cl"></div>

                                    <p>'.$desc.'</p>

                                    <p><a href="" class="biss-btn biss-btn-secondary">'.$btn.'</a></p>

                                </div>

                            </div>

                        </div>';

                 
                

                       

                       
                }


    endwhile;
    $list .= '</div>

                </div>

            </section>';
    wp_reset_query();
    return $list;
}

add_shortcode('service-advantages', 'service_advantages');





function service_advantages3($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        'uptitle' => 'discover our',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'advantages',  'order' => 'ASC')
    );
   
    $list = '<section class="bg-img bg-img-dark padding-bottom-0 transparent-bg-white">

                <div class="container">

                    <div class="row">

                    ';



    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $icon = get_post_meta(get_the_ID(), $prefix . 'icon', true);
        $btn='more';




$entries = get_post_meta( get_the_ID(), $prefix.'my_group', true );
                $clear=1;

                foreach ( (array) $entries as $key => $entry ) {

                    $ion = $title = $desc = '';

                    if ( isset( $entry['icon'] ) ) {
                        $ion = esc_html( $entry['icon'] );
                    }

                     if ( isset( $entry['title'] ) ) {
                        $title = ( $entry['title'] );
                        
                    }

                    if ( isset( $entry['desc'] ) ) {
                        $desc = ( $entry['desc'] );
                        
                    }

              

            $list .='
                        <div class="col-lg-4">

                            <div class="service-2">

                                <i class="'.$ion.'"></i>

                                <p class="title">'.$title.'</p>

                                <p>'.$desc.'</p>

                            </div>

                        </div>';
                  


                }
      


    endwhile;
    $list .= '</div>

                </div>

            </section>';
    wp_reset_query();
    return $list;
}

add_shortcode('service-advantages-home', 'service_advantages3');









function Project_blogs($atts) {
    extract(shortcode_atts(array(
        'count' => '',
        'desc' => 'Fusce accumsan augue nisl, in volutpat nisi tempus nec. Pellentesque nec congue urna. Proin tellus libero, ullamcorper sit amet aliquam a, euismod et dolor. Pellentesque a erat volutpat, ullamcorper mauris et, porta augue. Aenean iaculis accumsan leo. Integer sed metus eros. Pellentesque imperdiet hendrerit augue eget viverra. Nunc nec fringilla neque.',

        'title' => 'Aenean dapibus egestas est sit amet efficitur. Donec sit amet semper ex, ac scelerisque orci. Duis eget dolor et dolor condimentum luctus.',
                    ), $atts));

    $q = new WP_Query(
            array('posts_per_page' => $count, 'post_type' => 'projectlist',  'order' => 'DASC')
    );
   
    $list = '<div class="clearfix hidden-md hidden-lg"></div>

                        <div class="col-lg-8 col-md-8 col-lg-offset-1 sm-margin-top-70 md-margin-top-70">
                            


                            <p class="margin-top-0 font-bold text-uppercase heading-color">'.$title.'</p>

                            <p>'.$desc.' </p><div class="plugin-container riva-sorting margin-top-50" id="project-sorting">

                                <!-- Filter //-->

                                <div class="filters align-left">

                                </div>

                                <div class="listing">';



    while ($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $prefix = 'clean_';
        $desc = get_post_meta(get_the_ID(), $prefix . 'jobdesc', true);

      




     $list .= '<article class="project-item web">

                                        <!-- Post image //-->

                                        <figure>

                                            <img src="'.get_the_post_thumbnail_url().'" alt="">

                                            <figcaption>

                                                <a href="'.get_the_post_thumbnail_url().'" class="zoom"><i class="fa fa-search"></i></a>

                                                <a href="single-project.html" class="title">'.get_the_title().'</a>

                                            </figcaption>           

                                        </figure>

                                        <!-- Project image //-->

                                    </article>';







    endwhile;
         $list .= '</div>

                            </div>';

          the_posts_pagination( array(
                   
                ) );

    $list .= '</div>';
    wp_reset_query();
    return $list;
}

add_shortcode('project-blog', 'Project_blogs');
























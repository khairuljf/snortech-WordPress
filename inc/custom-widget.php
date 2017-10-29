<?php


class  new_widget extends WP_Widget{
    
    public function __construct() {
        parent:: __construct('new_widget','a new widget',array(
            'description'=>'This is new widget for test'
        ));
    }
    
    public function widget($args,$instance){
        $title_data= $instance['widget_title'];
        

        echo '<div class="widget widget-categories">
                        <h2 class="widget-title">'.$title_data.'</h2>
                        <div class="widget-content">
                            <ul>';
        $q = new WP_Query(
            array('posts_per_page' => -1, 'post_type' => 'projectlist','order' => 'DASC')
    );


$Design= $photoshop = $development = $css3 = $html5 = 0; 
         while ($q->have_posts()) : $q->the_post();
         $cate = get_the_terms(get_the_ID(), 'project_cat');
         

 foreach ($cate as $cat) {
	$url = get_term_link($cat->slug, 'project_cat');
 


 	if($Design==0){

 		echo '<li><i class="fa fa-angle-right"></i> <a href="'.$url.'">'.$cat->name.'</a> <span class="qty">( '.$cat->count.' )</span></li>';

 		$Design++;
 	}
 	elseif ($photoshop==0) {

 		echo '<li><i class="fa fa-angle-right"></i> <a href="'.$url.'">'.$cat->name.'</a> <span class="qty">( '.$cat->count.' )</span></li>';

 		$photoshop++;
 		
 	}elseif ($development==0) {
 		echo '<li><i class="fa fa-angle-right"></i> <a href="'.$url.'">'.$cat->name.'</a> <span class="qty">( '.$cat->count.' )</span></li>';

 		$development++;
 		# code...
 	}elseif ($css3==0) {
 		echo '<li><i class="fa fa-angle-right"></i> <a href="'.$url.'">'.$cat->name.'</a> <span class="qty">( '.$cat->count.' )</span></li>';

 		$css3++;
 		# code...
 	}elseif ($html5==0) {
 		echo '<li><i class="fa fa-angle-right"></i> <a href="'.$url.'">'.$cat->name.'</a> <span class="qty">( '.$cat->count.' )</span></li>';

 		$html5++;
 		# code...
 	}

    


  }

        endwhile;

                    echo '  </ul>
                        </div>
                    </div>';
    }
    
    public function form($instance){
        $title_data= $instance['widget_title'];
        ?>


<label for="<?php echo $this->get_field_id('widget_title'); ?>">Title</label>
    
    <input type="text" name="<?php echo $this->get_field_name('widget_title'); ?>" id="<?php echo $this->get_field_id('widget_title'); ?>" value="<?php echo $title_data ?>">
        
    
   <?php  }
    
}
function register_new_widget(){
    register_widget('new_widget');
    
}
add_action('widgets_init','register_new_widget');




class  post_tab extends WP_Widget{
    
    public function __construct() {
        parent:: __construct('post_tab','Project Post Tab',array(
            'description'=>'Project Tab Widget'
        ));
    }
    
    public function widget($args,$instance){
        $title_data= $instance['widget_title'];
        

       echo '<aside class="widget">
						<div class="biss-tabs-2" data-active="1">

						
							<header>
								<span>Recent</span>
								<span>Popular</span>
								<span>Comments</span>
							</header>';


       echo '<div class="item">';


$q = new WP_Query(
            array('posts_per_page' => 4, 'post_type' => 'projectlist',  'order' => 'DASC')
    );
while ($q->have_posts()) : $q->the_post();
			echo'<div class="related-post">
					<figure>
	<a href="'.get_the_permalink().'"><img src="'.get_the_post_thumbnail_url().'"></a>
					</figure>
					<p class="title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></p>
					<p class="meta">'.get_the_time('d M Y').', '.get_comments_number($post->ID). ' Comment</p>
				</div>';

endwhile;
		echo'</div>';




		  echo '<div class="item">';


$q = new WP_Query(
            array('posts_per_page' => 4, 'post_type' => 'projectlist',  'order' => 'DESC', meta_key=>'post_views_count', 'orderby'=>'meta_value_num')
    );
while ($q->have_posts()) : $q->the_post();
			echo'<div class="related-post">
					<figure>
	<a href="'.get_the_permalink().'"><img src="'.get_the_post_thumbnail_url().'"></a>
					</figure>
					<p class="title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></p>
					<p class="meta">'.get_the_time('d M Y').', '.get_comments_number($post->ID). ' Comment</p>
				</div>';

endwhile;
		echo'</div>';

       




echo '<div class="item">';

$q = new WP_Query(
            array('posts_per_page' => 1, 'post_type' => 'projectlist',  'order' => 'DESC', meta_key=>'post_views_count', 'orderby'=>'meta_value_num')
    );
while ($q->have_posts()) : $q->the_post();

$args = array (
'status' => 'approve',
'number' => '5'
);
$comments = get_comments( $args );
foreach( $comments as $comment ){

echo '<div class="related-comment">
				<div class="content">
					'.$comment->comment_content.'
					<span class="arrow"></span>
				</div>
				<p class="meta">Posted by <a href="">'.$comment->comment_author.'</a> on <a href="">'.$comment->comment_date.'</a></p>
			</div>
							
							';


}
       
endwhile;

echo '</div>';


       echo '</div>
					</aside>';
  
    }
    
    public function form($instance){
        $title_data= $instance['widget_title'];
        ?>


<label for="<?php echo $this->get_field_id('widget_title'); ?>">Title</label>
    
    <input type="text" name="<?php echo $this->get_field_name('widget_title'); ?>" id="<?php echo $this->get_field_id('widget_title'); ?>" value="<?php echo $title_data ?>">
        
    
   <?php  }
    
}
function register_post_tab_widget(){
    register_widget('post_tab');
    
}
add_action('widgets_init','register_post_tab_widget');




















 ?>
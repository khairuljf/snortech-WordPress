<?php 






function sno_slider() {
	$prefix = 'clean_';

	
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'slider',
		'title'         => esc_html__( 'Slider More Options' ),
		'object_types' => array( 'slider', ), // post type
	
	) );
$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Backgorund Image', 'cmb2' ),

				'id'         => $prefix . 'backgorund',
				'type' => 'file',
			) );
		
		$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Label Text ', 'cmb2' ),

				'id'         => $prefix . 'label',
				'type' => 'text',
			) );
		$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Target Link', 'cmb2' ),

				'id'         => $prefix . 'targetlink',
				'type' => 'text',
			) );
		
	
	

}

add_action( 'cmb2_admin_init', 'sno_slider' );


function home_service() {
	$prefix = 'clean_';

	
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'home-service',
		'title'         => esc_html__( 'Service Font-awesome Icon' ),
		'object_types' => array( 'home-service', ), // post type
	
	) );
$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Font-awesome Class', 'cmb2' ),

				'id'         => $prefix . 'icon',
				'type' => 'text',
			) );
	

}

add_action( 'cmb2_admin_init', 'home_service' );


function snortech_advantages() {
	$prefix = 'clean_';

	/**
	 * Repeatable Field Groups
	 */
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Repeating Field Group', 'cmb2' ),
		'object_types' => array( 'advantages', 'service-list', 'service-advantage'),
	) );

$group_field_id = $cmb->add_field( array(
		'id'          => $prefix .'my_group',
		'type'        => 'group',
		'options'     => array(
			'group_title'   => 'Advantages Item list', 
			'add_button'    => 'Add More Item', 
			'remove_button' => 'Remove Item', 
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Font-awesome Class',
	'id'   => 'icon',
	'type' => 'text_medium',
) );



$cmb->add_group_field( $group_field_id, array(
	'name' => 'Title',
	'id'   => 'title',
	'type' => 'text',
) );



$cmb->add_group_field( $group_field_id, array(
	'name' => 'Description',
	'id'   => 'desc',
	'type' => 'textarea_small',
) );


	

	
}

add_action( 'cmb2_admin_init', 'snortech_advantages' );


function home_testimonial() {
	$prefix = 'clean_';

	
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'home-testimoni',
		'title'         => esc_html__( 'Client Option' ),
		'object_types' => array( 'home-testimonials', ), // post type
	
	) );
$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Job Desc', 'cmb2' ),
				'id'         => $prefix . 'jobdesc',
				'type' => 'textarea_small',
			) );
	

}

add_action( 'cmb2_admin_init', 'home_testimonial' );


function page_thumb() {
	$prefix = 'clean_';

	
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'pheader',
		'title'         => esc_html__( 'Slider Content' ),
		'object_types' => array( 'page', ), // post type
	
	) );
$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Title', 'cmb2' ),
				'id'         => $prefix . 'title',
				'type' => 'text',
			) );
$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Subtitle', 'cmb2' ),
				'id'         => $prefix . 'subtitle',
				'type' => 'textarea_small',
			) );
	

}

add_action( 'cmb2_admin_init', 'page_thumb' );




function ab_list() {
	$prefix = 'clean_';


	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metaboxs',
		'title'        => esc_html__( 'Repeating Field Group', 'cmb2' ),
		'object_types' => array( 'ab-compay', ),
	) );

$group_field_id = $cmb->add_field( array(
		'id'          => $prefix .'my_groups',
		'type'        => 'group',
		'options'     => array(
			'group_title'   => 'Item list', 
			'add_button'    => 'Add More Item', 
			'remove_button' => 'Remove Item', 
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );


$cmb->add_group_field( $group_field_id, array(
	'name' => 'Item name',
	'id'   => 'list',
	'type' => 'text',
) );

	
}

add_action( 'cmb2_admin_init', 'ab_list' );



function skills() {
	$prefix = 'clean_';

	
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'skill',
		'title'         => esc_html__( 'Skill' ),
		'object_types' => array( 'our-skill', ), // post type
	
	) );
$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Progress', 'cmb2' ),
				'id'         => $prefix . 'Progress',
				'type' => 'text',
				'desc' =>'Type Progress in percentage min=0% & Max = 100%'
			) );
$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Will be animated ?', 'cmb2' ),
				'id'         => $prefix . 'animate',
				'type'             => 'radio',
				'default'          => 'standard',
				'options'          => array(
				'standard' => 'Animated on', 
				'custom'   => 'Animated off', 
				
			),
			) );
	

}

add_action( 'cmb2_admin_init', 'skills' );


function member_pos() {
	$prefix = 'clean_';

	
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'profess',
		'title'         => esc_html__( 'Our Member Option' ),
		'object_types' => array( 'professional', ), // post type
	
	) );
$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Position', 'cmb2' ),
				'id'         => $prefix . 'position',
				'type' => 'text',
				
			) );
$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Mail Address', 'cmb2' ),
				'id'         => $prefix . 'mailaddr',
				'type' => 'text',
				
			) );


$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Facebook Url', 'cmb2' ),
				'id'         => $prefix . 'facebook',
				'type' => 'text',
				
			) );
$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Twitter Url', 'cmb2' ),
				'id'         => $prefix . 'twitter',
				'type' => 'text',
				
			) );
$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Linkedin Url', 'cmb2' ),
				'id'         => $prefix . 'linkedin',
				'type' => 'text',
				
			) );


	

}

add_action( 'cmb2_admin_init', 'member_pos' );



function client_say() {
	$prefix = 'clean_';

	
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'client_say',
		'title'         => esc_html__( 'Our Member Option' ),
		'object_types' => array( 'ab_client', ), // post type
	
	) );
$cmb_demo->add_field( array(
				'name'       => esc_html__( 'Position', 'cmb2' ),
				'id'         => $prefix . 'position',
				'type' => 'text',
				
			) );


}

add_action( 'cmb2_admin_init', 'client_say' );







function project_skill() {
	$prefix = 'clean_';

	/**
	 * Repeatable Field Groups
	 */
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metaboxp',
		'title'        => esc_html__( 'Skill & Developer Grpup', 'cmb2' ),
		'object_types' => array( 'projectlist'),
	) );

$group_field_id = $cmb->add_field( array(
		'id'          => $prefix .'my_group1',
		'type'        => 'group',
		'options'     => array(
			'group_title'   => 'Project Skills', 
			'add_button'    => 'Add More Skill', 
			'remove_button' => 'Remove Item', 
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Developer Name',
	'id'   => 'developer',
	'type' => 'text_medium',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Skill',
	'id'   => 'skil',
	'type' => 'text_medium',
) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Skill  Progress',
	'id'   => 'skilprg',
	'type' => 'text_medium',
) );

	
}

add_action( 'cmb2_admin_init', 'project_skill' );



function project_slider() {
	$prefix = 'clean_';

	/**
	 * Repeatable Field Groups
	 */
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'metaboxss',
		'title'        => esc_html__( 'Slider Image Grpup', 'cmb2' ),
		'object_types' => array( 'projectlist'),
	) );

$group_field_id = $cmb->add_field( array(
		'id'          => $prefix .'my_group3',
		'type'        => 'group',
		'options'     => array(
			'group_title'   => 'Slider Items ', 
			'add_button'    => 'Add More Image for slider', 
			'remove_button' => 'Remove Item', 
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

$cmb->add_group_field( $group_field_id, array(
	'name' => 'Slider Image',
	'id'   => 'slidersimg',
	'type' => 'file',
) );



	
}

add_action( 'cmb2_admin_init', 'project_slider' );








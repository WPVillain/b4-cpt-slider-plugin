<?php

/*
*
* http://willthemoor.github.io/cmb2-metabox-generator/
* CMB2 Custom fields to load a header, sub header and CTA. 
* FYI: Text can be loaded from the Custom Post's regular WYIWYG Field
*
*/

add_action( 'cmb2_init', 'filathlos_add_carousel_metabox' );
function filathlos_add_carousel_metabox() {

	$prefix = '_filathlos_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'carousel_fields',
		'title'        => __( 'Carousel Fields', 'filathlos' ),
		'object_types' => array( 'slider' ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

	$cmb->add_field( array(
		'name' => __( 'Carousel Header', 'filathlos' ),
		'id' => $prefix . 'carousel_title',
		'type' => 'text',
		'default' => 'title',
		'desc' => __( 'Carousel Header', 'filathlos' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Carousel Sub Header', 'filathlos' ),
		'id' => $prefix . 'carousel_sub_header',
		'type' => 'text',
		'default' => 'sub header',
		'desc' => __( 'Carousel Sub Header', 'filathlos' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Call to Action Button', 'filathlos' ),
		'id' => $prefix . 'carousel_cta',
		'type' => 'text',
		'default' => 'cta',
		'desc' => __( 'Call to Action Button', 'filathlos' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'The Call To Action url or link', 'filathlos' ),
		'id' => $prefix . 'carousel_cta_url',
		'type' => 'text',
		'default' => 'https:/imagewize.com',
		'desc' => __( 'The Call To Action url or link', 'filathlos' ),
	) );

}

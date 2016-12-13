<?php 
add_action( 'cmb2_admin_init', 'wpbootscore_register_wpt_service_metabox' );

function wpbootscore_register_wpt_service_metabox() {
	$prefix = 'wpt_';

	$cmb_wpt_service = new_cmb2_box( array(
		'id'            => $prefix . 'wpt_service_metabox',
		'title'         => __( 'Additional informations', 'cmb2' ),
		'object_types'  => array( 'wpt_service', ), // wpt_service type
	) );

	$cmb_wpt_service->add_field( array(
		'name'       => __( 'Service Icon', 'cmb2' ),
		'desc'       => __( 'Service icon here', 'cmb2' ),
		'id'         => $prefix . 'service_icon',
		'type'       => 'text',
	) );

}
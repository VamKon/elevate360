<?php 
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
	wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css', array('zerif_bootstrap_style'));
}
function elevate360_customize_register( $wp_customize ) {
/* test */
	$wp_customize->add_setting( 'zerif_bigtitle_subtitle', array('sanitize_callback' => 'zerif_sanitize_text','default' => __('fdgdddd','zerif-lite')));
	$wp_customize->add_control( 'zerif_bigtitle_subtitle', array(
			'label'    => __( 'SubTitle', 'zerif-lite' ),
	      	'section'  => 'zerif_bigtitle_section',
	      	'settings' => 'zerif_bigtitle_subtitle',
			'priority'    => 3,
	));
}
add_action( 'customize_register', 'elevate360_customize_register' );
?>
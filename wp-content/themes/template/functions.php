<?php

//chargement dans le front-end
function lemac_scripts(){

	//chargement des styles
	wp_enqueue_style('lemac_custom', get_template_directory_uri() .'style.css', array('lemac_bootstrap-core'),'1.0.0','all');
	wp_enqueue_style('lemac_bootstrap-core', get_template_directory_uri() .'/css/bootstrap.min.css', array(),'1.0.0','all');
	wp_enqueue_style('lemac_font-awesome', get_template_directory_uri() .'/font-awesome/css/font-awesome.min.css', array(),'1.0.0','all');

	//chargement des scripts
	wp_enqueue_script('lemac_admin_script', get_template_directory_uri() .'/js/template.js', array(),'1.0.0',false);
	/*wp_enqueue_script('lemac_script', get_template_directory_uri() .'/js/jquery.min.js', array(),'1.0.0',true);
	wp_enqueue_script('lemac_script', get_template_directory_uri() .'js/jquery.backTop.min.js', array(),'1.0.0',true);
	*/
}

add_action('wp_enqueue_scripts','lemac_scripts');
	
	//chargement dans l'admin

function lemac_admin_scripts(){
	//chargement des styles
	wp_enqueue_style('bootstrap-adm-core', get_template_directory_uri(). '/css/bootstrap.min.css', array(), '1.0.0');
	
}

add_action('admin_init','lemac_admin_scripts');

	//==================================================================================================
	//==============							utilitaires
	//==================================================================================================

function lemac_setup() {

	//support des vignettes
	add_theme_support('post-thumbnails');//image a la une

}

add_action('after_setup_theme','lemac_setup');
?>
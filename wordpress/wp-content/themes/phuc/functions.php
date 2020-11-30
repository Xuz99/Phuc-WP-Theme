<?php


# Adds main stylesheet
function phuc_resources() {
	wp_enqueue_style('phuc_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'phuc_resources');

# Adds second stylesheet
function phuc_responsive_stylesheet() {
	wp_register_style('phuc_res_styles', get_template_directory_uri() .'/phuc_res_styles.css');
	wp_enqueue_style('phuc_res_styles');
}
add_action('wp_enqueue_scripts', 'phuc_responsive_stylesheet');

function phuc_features() {
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'phuc_features');

?>
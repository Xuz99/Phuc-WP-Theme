<?php

function phuc_resources() {
	wp_enqueue_style('phuc_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'phuc_resources');
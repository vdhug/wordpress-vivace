<?php

// Registrar scripts e css



// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


// Habilitar Menus
add_theme_support('menus');

// Registrar Menu
function register_my_menu() {
  register_nav_menu('menu-principal',__( 'Menu Principal' ));
}
add_action( 'init', 'register_my_menu' );

// Adicionar tamanhos de imagens
function my_custom_sizes() {
  add_image_size( 'large', 1400, 380, true );
  add_image_size( 'medium', 768, 260, true );
}
add_action( 'after_setup_theme', 'my_custom_sizes' );



// Custom Post Type

function custom_post_type_servicos() {
	register_post_type('servicos', array(
		'label' => 'Serviços',
		'description' => 'Serviços',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'servicos', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Serviços',
			'singular_name' => 'Serviço',
			'menu_name' => 'Serviços',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Serviço',
			'edit' => 'Editar',
			'edit_item' => 'Editar Serviço',
			'new_item' => 'Novo Serviço',
			'view' => 'Ver Serviço',
			'view_item' => 'Ver Serviço',
			'search_items' => 'Procurar Serviços',
			'not_found' => 'Nenhum Serviço Encontrado',
			'not_found_in_trash' => 'Nenhum Serviço Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_servicos');


?>

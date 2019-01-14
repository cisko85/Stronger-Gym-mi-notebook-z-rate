<?php


//acá está por separado lo que iría en functions.php
// Register Custom Post Type entrenadores
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Entrenador', 'Post Type General Name', 'strongergym' ),
		'singular_name'         => _x( 'Entrenador', 'Post Type Singular Name', 'strongergym' ),
		'menu_name'             => __( 'Entrenadores', 'strongergym' ),
		'name_admin_bar'        => __( 'Entrenador', 'strongergym' ),
		'archives'              => __( 'Item Archives', 'strongergym' ),
		'attributes'            => __( 'Item Attributes', 'strongergym' ),
		'parent_item_colon'     => __( 'Parent Item:', 'strongergym' ),
		'all_items'             => __( 'Todos los entrenadores', 'strongergym' ),
		'add_new_item'          => __( 'Agregar un nuevo entrenador', 'strongergym' ),
		'add_new'               => __( 'Agregar nuevo', 'strongergym' ),
		'new_item'              => __( 'New Item', 'strongergym' ),
		'edit_item'             => __( 'Edit Item', 'strongergym' ),
		'update_item'           => __( 'Update Item', 'strongergym' ),
		'view_item'             => __( 'View Item', 'strongergym' ),
		'view_items'            => __( 'View Items', 'strongergym' ),
		'search_items'          => __( 'Search Item', 'strongergym' ),
		'not_found'             => __( 'Not found', 'strongergym' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'strongergym' ),
		'featured_image'        => __( 'Featured Image', 'strongergym' ),
		'set_featured_image'    => __( 'Set featured image', 'strongergym' ),
		'remove_featured_image' => __( 'Remove featured image', 'strongergym' ),
		'use_featured_image'    => __( 'Use as featured image', 'strongergym' ),
		'insert_into_item'      => __( 'Insert into item', 'strongergym' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'strongergym' ),
		'items_list'            => __( 'Items list', 'strongergym' ),
		'items_list_navigation' => __( 'Items list navigation', 'strongergym' ),
		'filter_items_list'     => __( 'Filter items list', 'strongergym' ),
	);
	$args = array(
		'label'                 => __( 'Post Type', 'strongergym' ),
		'description'           => __( 'Post Type Description', 'strongergym' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'slug','thumbnail'),
		//'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'entrenador', $args );

}
add_action( 'init', 'custom_post_type', 0 );


// ------------ TAXONOMÏA para ENTRENADORES ------------------

// TAXONOMÏA para ENTRENADORES single-entrenador.php  usé de base https://generatewp.com/taxonomy/?clone=music-genre-taxonomy
function especialidad_entrenador() {

	$labels = array(
		'name'                       => _x( 'Especialidades', 'Taxonomy General Name', 'strongergym' ),
		'singular_name'              => _x( 'Especialidad', 'Taxonomy Singular Name', 'strongergym' ),
		'menu_name'                  => __( 'Especialidad', 'strongergym' ),
		'all_items'                  => __( 'All Genres', 'strongergym' ),
		'parent_item'                => __( 'Parent especialidad', 'strongergym' ),
		'parent_item_colon'          => __( 'Parent especialidad:', 'strongergym' ),
		'new_item_name'              => __( 'Nueva Especialidad', 'strongergym' ),
		'add_new_item'               => __( 'Agregar Especialidad', 'strongergym' ),
		'edit_item'                  => __( 'Editar Especialidad', 'strongergym' ),
		'update_item'                => __( 'Update Genre', 'strongergym' ),
		'view_item'                  => __( 'View Item', 'strongergym' ),
		'separate_items_with_commas' => __( 'Separate genres with commas', 'strongergym' ),
		'add_or_remove_items'        => __( 'Add or remove genres', 'strongergym' ),
		'choose_from_most_used'      => __( 'Choose from the most used genres', 'strongergym' ),
		'popular_items'              => __( 'Popular Items', 'strongergym' ),
		'search_items'               => __( 'Search genres', 'strongergym' ),
		'not_found'                  => __( 'Not Found', 'strongergym' ),
		'no_terms'                   => __( 'No items', 'strongergym' ),
		'items_list'                 => __( 'Items list', 'strongergym' ),
		'items_list_navigation'      => __( 'Items list navigation', 'strongergym' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		//'show_tagcloud'              => true,
	);
	register_taxonomy( 'especialidad', array( 'entrenador' ), $args );//en el array indique que lo aplicaré a entrenador

}
add_action( 'init', 'especialidad_entrenador', 0 );



?>
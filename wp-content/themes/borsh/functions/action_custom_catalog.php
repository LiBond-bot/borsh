<?php

function wptp_register_taxonomy_character() {
	register_taxonomy( 'product_cat', 'product',
	  array(
		'labels' => array(
		  'name'              => 'Категории',
		  'singular_name'     => 'Категория',
		  'search_items'      => 'Найти категорию',
		  'all_items'         => 'Все категории',
		  'edit_item'         => 'Редактировать категории',
		  'update_item'       => 'Обновить категорию',
		  'add_new_item'      => 'Добавить категорию',
		  'new_item_name'     => 'Имя новой категории',
		  'menu_name'         => 'Категории',
		  ),
		'hierarchical' => true,
		'sort' => true,
		'args' => array( 'orderby' => 'term_order' ),
		'show_admin_column' => true,
		)
	  );
  }
add_action( 'init', 'wptp_register_taxonomy_character' );

// Создание постов врачиов
add_action( 'init', 'register_post_catalog' );
function register_post_catalog(){
    
	register_post_type( 'product', [
        'labels' => [
            'name'               => 'Продукты', // основное название для типа записи
            'singular_name'      => 'Продукт', // название для одной записи этого типа
            'add_new'            => 'Добавить продукт', // для добавления новой записи
            'add_new_item'       => 'Добавление продукта', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование продукта', // для редактирования типа записи
            'new_item'           => 'Новый продукт', // текст новой записи
            'view_item'          => 'Смотреть продукт', // для просмотра записи этого типа.
            'search_items'       => 'Искать продукт', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'menu_name'          => 'Продукты', // название меню
        ],
        'public'              => true,
        'menu_position'       => 12,
        'menu_icon'           => 'dashicons-cart',
        'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'has_archive'         => true,
        'rewrite' => ['slug' => 'products'],
        'taxonomies' => array('product'),
    ]);

}
<?php

// Создание типа поста: Акции
add_action( 'init', 'register_post_sales' );
function register_post_sales(){
    
	register_post_type( 'sale', [
        'labels' => [
            'name'               => 'Акции', // основное название для типа записи
            'singular_name'      => 'Акция', // название для одной записи этого типа
            'add_new'            => 'Добавить акцию', // для добавления новой записи
            'add_new_item'       => 'Добавление акции', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование акции', // для редактирования типа записи
            'new_item'           => 'Новая акция', // текст новой записи
            'view_item'          => 'Смотреть акцию', // для просмотра записи этого типа.
            'search_items'       => 'Искать акцию', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'menu_name'          => 'Акции', // название меню
        ],
        'public'              => true,
        'menu_position'       => 12,
        'menu_icon'           => 'dashicons-megaphone',
        'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'has_archive'         => false,
        'rewrite' => ['slug' => 'sales'],
    ]);

}
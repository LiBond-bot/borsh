<?php

// Создание постов Проектыов
add_action( 'init', 'register_post_cases' );
function register_post_cases(){
    
	register_post_type( 'case', [
        'labels' => [
            'name'               => 'Проекты', // основное название для типа записи
            'singular_name'      => 'Проект', // название для одной записи этого типа
            'add_new'            => 'Добавить проект', // для добавления новой записи
            'add_new_item'       => 'Добавление проекта', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование проекта', // для редактирования типа записи
            'new_item'           => 'Новый проект', // текст новой записи
            'view_item'          => 'Смотреть проект', // для просмотра записи этого типа.
            'search_items'       => 'Искать проект', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'menu_name'          => 'Проекты', // название меню
        ],
        'public'              => true,
        'menu_position'       => 12,
        'menu_icon'           => 'dashicons-portfolio',
        'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'has_archive'         => true,
        'rewrite' => ['slug' => 'cases'],
    ]);

}
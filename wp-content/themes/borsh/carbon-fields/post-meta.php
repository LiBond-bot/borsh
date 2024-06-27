<?php

if(!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Дополнительные поля на разделе проектов
// Container::make( 'post_meta', __( 'Поля проекта' ))
// ->show_on_post_type('case')
// ->add_tab( 'Доп.поля', array(
//     Field::make( 'text', 'project_city', 'Город')->set_width(25),
//     Field::make( 'text', 'project_date', 'Дата проекта')->set_width(25),
//     Field::make( 'text', 'project_client', 'Имя клиента')->set_width(25),
//     Field::make( 'image', 'project_logo', 'Логотип клиента')->set_width(25),
//     Field::make( 'media_gallery', 'project_gallery', 'Галерея проекта'),
// ));

// Дополнительные поля на разделе продуктов
// Container::make( 'post_meta', __( 'Поля продукта' ))
// ->show_on_post_type('product')
// ->add_tab( 'Доп.поля', array(
//     Field::make( 'media_gallery', 'product_gallery', 'Галерея продукта'),
// ));

Container::make( 'post_meta', __( 'Доп.поля' ))
->show_on_page(13)
->add_tab( 'Оффер', array(
    Field::make( 'rich_text', 'offer_title', 'Заголовок' )->set_width( 25 ),
    Field::make( 'rich_text', 'offer_subtitle', 'Подзаголовок' )->set_width( 25 ),
    Field::make( 'image', 'offer_img_1', 'Фото Первое блюдо' )->set_width( 25 ),
    Field::make( 'image', 'offer_img_2', 'Фото Второе блюдо' )->set_width( 25 ),
    Field::make( 'text', 'offer_button_1_text', 'Текст кнопки 1' )->set_width( 25 ),
    Field::make( 'text', 'offer_button_1_link', 'Ссылка кнопки 1' )->set_width( 25 ),
    Field::make( 'text', 'offer_button_2_text', 'Текст кнопки 2' )->set_width( 25 ),
    Field::make( 'text', 'offer_button_2_link', 'Ссылка кнопки 2' )->set_width( 25 ),
));


Container::make( 'post_meta', __( 'Доп.поля' ))
->show_on_page(15)
->add_tab( 'Оффер', array(
    Field::make( 'rich_text', 'offer_title', 'Заголовок' )->set_width( 25 ),
    Field::make( 'rich_text', 'offer_subtitle', 'Подзаголовок' )->set_width( 25 ),
    Field::make( 'image', 'offer_img_1', 'Фото Первое блюдо' )->set_width( 25 ),
    Field::make( 'image', 'offer_img_2', 'Фото Второе блюдо' )->set_width( 25 ),
    Field::make( 'text', 'offer_button_1_text', 'Текст кнопки 1' )->set_width( 25 ),
    Field::make( 'text', 'offer_button_1_link', 'Ссылка кнопки 1' )->set_width( 25 ),
    Field::make( 'text', 'offer_button_2_text', 'Текст кнопки 2' )->set_width( 25 ),
    Field::make( 'text', 'offer_button_2_link', 'Ссылка кнопки 2' )->set_width( 25 ),
));

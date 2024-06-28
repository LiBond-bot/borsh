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


// Доп.поля на оффере
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


// Дополнительные поля на разделе акций
Container::make( 'post_meta', 'Доп. поля')
->show_on_post_type('sale')
->add_tab( 'Доп.поля', array(
    Field::make( 'rich_text', 'sale_title', 'Заголовок для отображения' )->set_width( 50 ),
    Field::make( 'text', 'sale_date', 'Дата окончания акции' )->set_width( 50 ),
));

Container::make( 'post_meta', 'Доп. поля')
->show_on_post_type('addon')
->add_tab( 'Доп.поля', array(
    Field::make( 'text', 'addon_price', 'Цена' ),
));

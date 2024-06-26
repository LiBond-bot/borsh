<?php

if(!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Дополнительные поля на разделе проектов
Container::make( 'post_meta', __( 'Поля проекта' ))
->show_on_post_type('case')
->add_tab( 'Доп.поля', array(
    Field::make( 'text', 'project_city', 'Город')->set_width(25),
    Field::make( 'text', 'project_date', 'Дата проекта')->set_width(25),
    Field::make( 'text', 'project_client', 'Имя клиента')->set_width(25),
    Field::make( 'image', 'project_logo', 'Логотип клиента')->set_width(25),
    Field::make( 'media_gallery', 'project_gallery', 'Галерея проекта'),
));

// Дополнительные поля на разделе продуктов
Container::make( 'post_meta', __( 'Поля продукта' ))
->show_on_post_type('product')
->add_tab( 'Доп.поля', array(
    Field::make( 'media_gallery', 'product_gallery', 'Галерея продукта'),
));

Container::make( 'post_meta', __( 'Поля продукта' ))
->show_on_page(8)
->add_tab( 'Слайдер', array(
    Field::make( 'complex', 'offer_slider', __( 'Слайдер' ) )
    ->add_fields( array(
        Field::make( 'rich_text', 'offer_title', 'Заголовок' )->set_width( 50 ),
        Field::make( 'rich_text', 'offer_subtitle', 'Подзаголовок' )->set_width( 50 ),
        Field::make( 'text', 'offer_button_text', 'Текст кнопки' )->set_width( 33 ),
        Field::make( 'text', 'offer_button_link', 'Ссылка кнопки' )->set_width( 33 ),
        Field::make( 'text', 'offer_button_class', 'Класс кнопки' )->set_width( 33 ),
        Field::make( 'image', 'offer_img', 'Фоновое изображение' )->set_width( 33 ),
    ))
))
->add_tab( 'Услуги', array(
    Field::make( 'complex', 'servies', __( 'Услуга' ) )
    ->add_fields( array(
        Field::make( 'rich_text', 'service_tab_title', 'Название таба' )->set_width( 50 ),
        Field::make( 'rich_text', 'service_tab_icon', 'Иконка таба' )->set_width( 50 ),
        Field::make( 'rich_text', 'service_title', 'Заголовок услуги' )->set_width( 33 ),
        Field::make( 'rich_text', 'service_text', 'Текст услуги' )->set_width( 33 ),
        Field::make( 'image', 'service_img', 'Картинка' )->set_width( 33 ),
    ))
))
->add_tab( 'Документы', array(
    Field::make( 'complex', 'documents', __( 'Документ' ) )
    ->add_fields( array(
        Field::make( 'text', 'document_title', 'Заголовок документа' )->set_width( 33 ),
        Field::make( 'text', 'document_text', 'Текст документа' )->set_width( 33 ),
        Field::make( 'file', 'document_file', 'Файл доумента' )->set_width( 33 ),
    ))
))
->add_tab( 'Клиенты', array(
    Field::make( 'complex', 'clients', __( 'Клиент' ) )
    ->add_fields( array(
        Field::make( 'image', 'clients_img_1', 'Однотонный логотип' )->set_width( 33 ),
        Field::make( 'image', 'clients_img_2', 'Цветной логотип' )->set_width( 33 ),
    ))
));

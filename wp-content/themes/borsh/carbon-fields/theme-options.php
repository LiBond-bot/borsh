<?php

if(!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __( 'Настроки сайта' ) )
->add_tab( 'Общие настройки', array(
  Field::make( 'image ', 'site_logo_full', 'Основной логотип' )
  ->set_width(33),  
  Field::make( 'image ', 'site_favicon', 'favicon' )
  ->set_width(33),
  Field::make( 'rich_text', 'footer_text', 'Подпись о правах' )->set_width(33),
))
->add_tab( 'Контакты', array(
  Field::make( 'text', 'site_phone', 'Телефон' )->set_width(25),
  Field::make( 'text', 'site_phone_digits', 'Телефон без пробелов (в формате +79999999999)' )->set_width(25),
  Field::make( 'text', 'site_phone_2', 'Телефон 2' )->set_width(25),
  Field::make( 'text', 'site_phone_digits_2', 'Телефон без пробелов (в формате +79999999999)' )->set_width(25),

  Field::make( 'text', 'site_email', 'Email' )->set_width(33),
  Field::make( 'text', 'site_whatsapp', 'Whatsapp' )->set_width(33),
  Field::make( 'text', 'site_telegram', 'Telegram' )->set_width(33),

  
  Field::make( 'rich_text', 'site_map', 'Карта' )->set_width(50),
  Field::make( 'rich_text', 'site_adress', 'Адрес' )->set_width(50),
))
->add_tab( 'Основное меню', array(
  Field::make( 'media_gallery', 'main_menu', 'Основное меню' )
))
->add_tab( 'Фото кухни', array(
  Field::make( 'media_gallery', 'kitchen_gallery', 'Фото кухни' )
))

->add_tab( 'Сертификаты', array(
  Field::make( 'complex', 'certificates', 'Сертификаты' )
    ->add_fields( array(
        Field::make( 'image', 'certificates_thumb', 'Миниатюра сертификата' )->set_width(50),
        Field::make( 'file', 'certificates_file', 'Файл сертификата' )->set_width(50),
    ) )
))
;
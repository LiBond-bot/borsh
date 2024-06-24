<?php

// Просмотр массив в удобном виде
function dd($array) {
	echo '<style>';
	echo '.preloader {display: none;}';
	echo '</style>';
	echo '<pre>';
	print_r($array);
	echo '</pre>';
	exit();
}

// --------СКРИПТЫ И СТИЛИ--------

// версия стилей и скриптов
$version = "0.0.0.0";

// Убираем ненужные стили и скрипты с head
require_once 'functions/remove_actions.php';

// Подключение стилей
require_once 'functions/action_styles.php';

// Подключение скриптов
require_once 'functions/action_scripts.php';


// Регистрация Меню
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'menu_main_header', 'Меню в шапке' );
	register_nav_menu( 'menu_main_footer', 'Меню в подвале' );
    add_theme_support('post-thumbnails');
}

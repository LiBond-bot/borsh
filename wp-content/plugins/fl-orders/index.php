<?php
/**
 * Plugin Name: Clients orders
 * Description: Плагин для просмотра полученных заказов с сайта
 * Plugin URI:  
 * Author URI:  https://flamingo.expert/
 * Author:      Flamingo [Development and Marketing]
 * Version:     1.0
 *
 * Text Domain: -
 * Domain Path: -
 *
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Network:    -
 */

//Выполнение действий при активации плагина
function fl_food_menu_activation(){

    // Создание таблицы для заказов розницы
    function fl_create_table_retail_orders() {
        global $wpdb;

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        $table_name = $wpdb->get_blog_prefix() . 'fl_retail_orders';
        $charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

        $sql = "CREATE TABLE {$table_name} (
            id  bigint(20) unsigned NOT NULL auto_increment,
            name varchar(255) NOT NULL default '',
            phone varchar(255) NOT NULL default '',
            count_launch varchar(255) NOT NULL default '',
            adress varchar(255) NOT NULL default '',
            url_page varchar(255) NOT NULL default '',
            name_form varchar(255) NOT NULL default '',
            utm_source varchar(255) NOT NULL default '',
            utm_medium varchar(255) NOT NULL default '',
            utm_term varchar(255) NOT NULL default '',
            utm_content varchar(255) NOT NULL default '',
            utm_campaign varchar(255) NOT NULL default '',
            date DATETIME NOT NULL default '0000-00-00 00:00:00',
            PRIMARY KEY (id)
        )
        {$charset_collate};";
        
        dbDelta($sql);
    }

    // Создание таблицы для корпоративных заказов
    function fl_create_table_corporate_orders () {
        global $wpdb;

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        $table_name = $wpdb->get_blog_prefix() . 'fl_corporate_orders';
        $charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

        $sql = "CREATE TABLE {$table_name} (
            id  bigint(20) unsigned NOT NULL auto_increment,
            name varchar(255) NOT NULL default '',
            name_company varchar(255) NOT NULL default '',
            phone varchar(255) NOT NULL default '',
            count_launch varchar(255) NOT NULL default '',
            adress varchar(255) NOT NULL default '',
            url_page varchar(255) NOT NULL default '',
            name_form varchar(255) NOT NULL default '',
            utm_source varchar(255) NOT NULL default '',
            utm_medium varchar(255) NOT NULL default '',
            utm_term varchar(255) NOT NULL default '',
            utm_content varchar(255) NOT NULL default '',
            utm_campaign varchar(255) NOT NULL default '',
            date DATETIME NOT NULL default '0000-00-00 00:00:00',
            PRIMARY KEY (id)
        )
        {$charset_collate};";
        
        dbDelta($sql);
    }

    // Создание таблицы для обратного звонка
    function fl_create_table_callback () {
        global $wpdb;

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        $table_name = $wpdb->get_blog_prefix() . 'fl_callback';
        $charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

        $sql = "CREATE TABLE {$table_name} (
            id  bigint(20) unsigned NOT NULL auto_increment,
            name varchar(255) NOT NULL default '',
            phone varchar(255) NOT NULL default '',
            url_page varchar(255) NOT NULL default '',
            name_form varchar(255) NOT NULL default '',
            utm_source varchar(255) NOT NULL default '',
            utm_medium varchar(255) NOT NULL default '',
            utm_term varchar(255) NOT NULL default '',
            utm_content varchar(255) NOT NULL default '',
            utm_campaign varchar(255) NOT NULL default '',
            date DATETIME NOT NULL default '0000-00-00 00:00:00',
            PRIMARY KEY (id)
        )
        {$charset_collate};";
        
        dbDelta($sql);
    }

    // Создание таблицы для партнерских заявок
    function fl_create_table_partners () {
        global $wpdb;

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        $table_name = $wpdb->get_blog_prefix() . 'fl_partners';
        $charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

        $sql = "CREATE TABLE {$table_name} (
            id  bigint(20) unsigned NOT NULL auto_increment,
            name varchar(255) NOT NULL default '',
            phone varchar(255) NOT NULL default '',
            url_page varchar(255) NOT NULL default '',
            name_form varchar(255) NOT NULL default '',
            utm_source varchar(255) NOT NULL default '',
            utm_medium varchar(255) NOT NULL default '',
            utm_term varchar(255) NOT NULL default '',
            utm_content varchar(255) NOT NULL default '',
            utm_campaign varchar(255) NOT NULL default '',
            date DATETIME NOT NULL default '0000-00-00 00:00:00',
            PRIMARY KEY (id)
        )
        {$charset_collate};";
        
        dbDelta($sql);
    }


    fl_create_table_retail_orders();
    fl_create_table_corporate_orders();
    fl_create_table_callback();
    fl_create_table_partners();
}

register_activation_hook( __FILE__, 'fl_food_menu_activation');

// Выполнение действий при загрузки wp
function fl_food_menu_action_wp_load() {

    if (is_admin() && current_user_can('manage_options')) require_once('admin/index.php'); else require_once('public/index.php'); 
    
}

add_action( 'wp_loaded', 'fl_food_menu_action_wp_load' );
<?php

// --------- ЗАЯВКИ РОЗНИЦА

function fl_get_retail_orders_count() {
    global $wpdb; 
    $fl_retail_orders = $wpdb->get_results( "SELECT COUNT(*) as count FROM ".$wpdb->get_blog_prefix()."fl_retail_orders");
    return $fl_retail_orders;
}

function fl_get_retail_orders() {
    global $wpdb; 
    $limit = 50;   
    $number_page = 1; if (isset($_GET['number_page'])) $number_page = $_GET['number_page'];

    if ($number_page == 1) $start = 0; else $start = $limit * ($number_page - 1); echo $start;

    $fl_retail_orders = $wpdb->get_results( "SELECT * FROM ".$wpdb->get_blog_prefix()."fl_retail_orders ORDER BY id DESC LIMIT ".$start.",".$limit, OBJECT_K);

    return $fl_retail_orders;
}

function fl_delete_retail_order(){
    global $wpdb; 
    $result_delete = '';

    $id_callback;
    // фунция удаления заказа
    if (isset($_GET['delete'])){
        
        $id_callback = $_GET['delete'];

        $sql_delete = $wpdb->delete( $wpdb->get_blog_prefix()."fl_retail_orders", [ 'ID' => $id_callback ] );

        $result_delete = $sql_delete;
    };

    return $result_delete;
}

// --------- ЗАЯВКИ КОРПОРАТИВ

function fl_get_corporate_orders_count() {
    global $wpdb; 
    $fl_corporate_orders = $wpdb->get_results( "SELECT COUNT(*) as count FROM ".$wpdb->get_blog_prefix()."fl_corporate_orders");
    return $fl_corporate_orders;
}

function fl_get_corporate_orders() {
    global $wpdb; 
    $limit = 50;   
    $number_page = 1; if (isset($_GET['number_page'])) $number_page = $_GET['number_page'];

    if ($number_page == 1) $start = 0; else $start = $limit * ($number_page - 1); echo $start;

    $fl_corporate_orders = $wpdb->get_results( "SELECT * FROM ".$wpdb->get_blog_prefix()."fl_corporate_orders ORDER BY id DESC LIMIT ".$start.",".$limit, OBJECT_K);

    return $fl_corporate_orders;
}

function fl_delete_corporate_order(){
    global $wpdb; 
    $result_delete = '';

    $id_callback;
    // фунция удаления заказа
    if (isset($_GET['delete'])){
        
        $id_callback = $_GET['delete'];

        $sql_delete = $wpdb->delete( $wpdb->get_blog_prefix()."fl_corporate_orders", [ 'ID' => $id_callback ] );

        $result_delete = $sql_delete;
    };

    return $result_delete;
}


// --------- ОБРАТНЫЕ ЗВОНКИ

function fl_get_callback_count() {
    global $wpdb; 
    $fl_callback = $wpdb->get_results( "SELECT COUNT(*) as count FROM ".$wpdb->get_blog_prefix()."fl_callback");
    return $fl_callback;
}

function fl_get_callback() {
    global $wpdb; 
    $limit = 50;   
    $number_page = 1; if (isset($_GET['number_page'])) $number_page = $_GET['number_page'];

    if ($number_page == 1) $start = 0; else $start = $limit * ($number_page - 1); echo $start;

    $fl_callback = $wpdb->get_results( "SELECT * FROM ".$wpdb->get_blog_prefix()."fl_callback ORDER BY id DESC LIMIT ".$start.",".$limit, OBJECT_K);

    return $fl_callback;
}

function fl_delete_callback(){
    global $wpdb; 
    $result_delete = '';

    $id_callback;
    // фунция удаления заказа
    if (isset($_GET['delete'])){
        
        $id_callback = $_GET['delete'];

        $sql_delete = $wpdb->delete( $wpdb->get_blog_prefix()."fl_callback", [ 'ID' => $id_callback ] );

        $result_delete = $sql_delete;
    };

    return $result_delete;
}


// --------- ОБРАТНЫЕ ЗВОНКИ

function fl_get_partners_count() {
    global $wpdb; 
    $fl_partners = $wpdb->get_results( "SELECT COUNT(*) as count FROM ".$wpdb->get_blog_prefix()."fl_partners");
    return $fl_partners;
}

function fl_get_partners() {
    global $wpdb; 
    $limit = 50;   
    $number_page = 1; if (isset($_GET['number_page'])) $number_page = $_GET['number_page'];

    if ($number_page == 1) $start = 0; else $start = $limit * ($number_page - 1); echo $start;

    $fl_partners = $wpdb->get_results( "SELECT * FROM ".$wpdb->get_blog_prefix()."fl_partners ORDER BY id DESC LIMIT ".$start.",".$limit, OBJECT_K);

    return $fl_partners;
}

function fl_delete_partner(){
    global $wpdb; 
    $result_delete = '';

    $id_callback;
    // фунция удаления заказа
    if (isset($_GET['delete'])){
        
        $id_callback = $_GET['delete'];

        $sql_delete = $wpdb->delete( $wpdb->get_blog_prefix()."fl_partners", [ 'ID' => $id_callback ] );

        $result_delete = $sql_delete;
    };

    return $result_delete;
}


// Добавление меню
function fl_add_page_menu() {
    add_menu_page(
        'Заявки на сайте', // имя в меню
        'Заявки на сайте', // title страницы
        'manage_options', // уровень доступа
        'fl-retail-orders', // slug страницы
        'fl_render_menu', // функция, отображающая собственно страницу
        'dashicons-phone', // иконка
        '120' // позиция в меню
    );
}

function fl_add_page_menu_change() {
	add_submenu_page( 
		'fl-retail-orders',
		'Заявки - Заказы розница',
		'Заказы розница',
		'manage_options',
		'fl-retail-orders',
		''
    );
    add_submenu_page( 
		'fl-retail-orders',
		'Меню - Корпоративные заказы',
		'Корпоративные заказы',
		'manage_options',
		'fl-corporate-orders',
		'fl_render_corporate_orders'
	);
    add_submenu_page( 
		'fl-retail-orders',
		'Меню - Обратные звонки',
		'Обратные звонки',
		'manage_options',
		'fl-callback',
		'fl_render_menu_callback'
	);
    add_submenu_page( 
		'fl-retail-orders',
		'Меню - Партнёрские заявки',
		'Партнёрские заявки',
		'manage_options',
		'fl-partners',
		'fl_render_menu_partners'
	);
}

function fl_render_menu () {
    $retail_orders_count = fl_get_retail_orders_count()['0']->count;
    $fl_retail_orders = fl_get_retail_orders();
    $fl_delete_retail_order = fl_delete_retail_order();
    require_once('templates/admin-page-retail-orders.php');
}

function fl_render_corporate_orders () {
    $corporate_orders_count = fl_get_corporate_orders_count()['0']->count;
    $fl_corporate_orders = fl_get_corporate_orders();
    $fl_delete_corporate_order = fl_delete_corporate_order();
    require_once('templates/admin-page-corporate-orders.php');
}

function fl_render_menu_callback() {
    $fl_callbacks_count = fl_get_callback_count()['0']->count;
    $fl_callbacks = fl_get_callback();
    $fl_delete_callback = fl_delete_callback();
    
    require_once('templates/admin-page-callbacks.php');
}

function fl_render_menu_partners() {
    $fl_partners_count = fl_get_partners_count()['0']->count;
    $fl_partners = fl_get_partners();
    $fl_delete_partner = fl_delete_partner();
    
    require_once('templates/admin-page-partners.php');
} 


add_action('admin_menu', 'fl_add_page_menu');
add_action('admin_menu', 'fl_add_page_menu_change');


<?php

include( ABSPATH . 'wp-includes/PHPMailer/PHPMailer.php'); 
include( ABSPATH . 'wp-includes/PHPMailer/SMTP.php'); 
include( ABSPATH . 'wp-includes/PHPMailer/Exception.php'); 

use PHPMailer\PHPMailer\PHPMailer;

global $order_email;
$order_email = "borsch-rostov@yandex.ru";


// Функция отправки на почту
function fl_send_mail($subject,$message, $email = false) {
    
    if (!$email) return false;
   
    // Настройки
    $mail = new PHPMailer;
    $mail->CharSet = "UTF-8";
    //$mail->isSMTP(); 
    $mail->Host = "smtp.yandex.ru";
    $mail->SMTPAuth = true;
    $mail->Username = "good-food-elama@yandex.ru"; // Ваш логин в Яндексе. Именно логин, без @yandex.ru
    $mail->Password = "good-food2011"; // Ваш пароль
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;
    $mail->setFrom("good-food-elama@yandex.ru"); // Ваш Email
    $mail->addAddress($email); // Email получателя

    // Письмо
    $mail->Subject = $subject;
    $mail->MsgHTML($message);

    // Результат
    if($mail->send()) return true; else return false;

}


function fl_send_database($data){

    $utm_source = $data['utm']['utm_source'] ? $data['utm']['utm_source'] : '';
    $utm_medium = $data['utm']['utm_medium'] ? $data['utm']['utm_medium'] : '';
    $utm_term = $data['utm']['utm_term'] ? $data['utm']['utm_term'] : '';
    $utm_content = $data['utm']['utm_content'] ? $data['utm']['utm_content'] : '';
    $utm_campaign = $data['utm']['utm_campaign'] ? $data['utm']['utm_campaign'] : '';

    global $wpdb;

    if($data['typeForm'] == 'retail') {

        $wpdb->insert(
            'wp_fl_retail_orders',
            array( 
                'name' => $data['name'],
                'phone' => $data['phone'],
                'count_launch' => $data['countLunch'],
                'adress' => $data['adress'],
                'url_page' => $data['url_page'],
                'name_form' => $data['WhereForm'],
                'utm_source' => $utm_source,
                'utm_medium' => $utm_medium,
                'utm_term' => $utm_term,
                'utm_content' => $utm_content,
                'utm_campaign' =>  $utm_campaign,
                'date' => current_time('Y-m-d H:i:s'),
            ),
            array( '%s', '%s', '%s', '%s')
        );
    }

    if($data['typeForm'] == 'corporate') {
        $name_company = !$data['name_company'] ? '' : $data['name_company'];
        $wpdb->insert(
            'wp_fl_corporate_orders',
            array( 
                'name' => $data['name'],
                'name_company' => $name_company,
                'phone' => $data['phone'],
                'count_launch' => $data['countLunch'],
                'adress' => $data['adress'],
                'url_page' => $data['url_page'],
                'name_form' => $data['WhereForm'],
                'utm_source' => $utm_source,
                'utm_medium' => $utm_medium,
                'utm_term' => $utm_term,
                'utm_content' => $utm_content,
                'utm_campaign' =>  $utm_campaign,
                'date' => current_time('Y-m-d H:i:s'),
            ),
            array( '%s', '%s', '%s', '%s', '%s')
        );
    }

    if($data['typeForm'] == 'callback') {
        $wpdb->insert(
            'wp_fl_callback',
            array( 
                'name' => $data['name'],
                'phone' => $data['phone'],
                'url_page' => $data['url_page'],
                'name_form' => $data['WhereForm'],
                'utm_source' => $utm_source,
                'utm_medium' => $utm_medium,
                'utm_term' => $utm_term,
                'utm_content' => $utm_content,
                'utm_campaign' =>  $utm_campaign,
                'date' => current_time('Y-m-d H:i:s'),
            ),
            array( '%s', '%s')
        );
    }

    if($data['typeForm'] == 'partners') {
        $wpdb->insert(
            'wp_fl_partners',
            array( 
                'name' => $data['name'],
                'phone' => $data['phone'],
                'url_page' => $data['url_page'],
                'name_form' => $data['WhereForm'],
                'utm_source' => $utm_source,
                'utm_medium' => $utm_medium,
                'utm_term' => $utm_term,
                'utm_content' => $utm_content,
                'utm_campaign' =>  $utm_campaign,
                'date' => current_time('Y-m-d H:i:s'),
            ),
            array( '%s', '%s')
        );
    }

    
}


// Функция валидация и формирования письма
add_action('wp_ajax_valid_send_mail', 'fl_valid_send');
add_action('wp_ajax_nopriv_valid_send_mail', 'fl_valid_send');

function fl_valid_send($data) {

    global $order_email;

    $data = $_POST['data'];

    $subject = $data['title'];

    $message = "Телефон: ".$data['phone']."<br>";
    $message .= "Имя: ".$data['name']."<br>";

    if ($data['countLunch']) {
        $message .= "Количество обедов: ".$data['countLunch']."<br>";
    }
    
    if ($data['adress']) {
        $message .= "Адрес: ".$data['adress']."<br>";
    }

    if ($data['name_company']) {
        $message .= "Название компании: ".$data['name_company']."<br>";
    }

    $message .= "Url-страницы формы заказа: ".$data['url_page']."<br>";
    $message .= "Форма: ".$data['WhereForm']."<br>";

    if ($data['utm']['utm_campaign']) {
        $message .= "utm_campaign: ".$data['utm']['utm_campaign']."<br>";
    }

    if ($data['utm']['utm_content']) {
        $message .= "utm_content: ".$data['utm']['utm_content']."<br>";
    }

    if ($data['utm']['utm_medium']) {
        $message .= "utm_medium: ".$data['utm']['utm_medium']."<br>";
    }

    if ($data['utm']['utm_source']) {
        $message .= "utm_source: ".$data['utm']['utm_source']."<br>";
    }

    if ($data['utm']['utm_term']) {
        $message .= "utm_term: ".$data['utm']['utm_term']."<br>";
    }

    $send_mail = fl_send_mail($subject, $message, $order_email);
    
    fl_send_database($_POST['data']);

    if ($send_mail) {
        echo json_encode([
            'status' => true,
            'message' => 'Письмо отправлено'
        ]);
    } else {
        echo json_encode([
            'status' => false,
            'message' => 'Письмо не отправлено. Попробуйте позже.'
        ]);
    }

	wp_die();
}





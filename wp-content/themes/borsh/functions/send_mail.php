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
        $message .= "Название компании: ".$data['adress']."<br>";
    }

    $send_mail = fl_send_mail($subject, $message, $order_email);

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





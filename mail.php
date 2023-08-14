<?php
// Кому отправляем
// $to = 'tal@flatrateremodeling.com';

$to = 'dmytroivanovichn@gmail.com';

// Тема письма
$subject = 'Flatrateremodeling website!';
   
// Загружаем только ядро WordPress
define( 'WP_USE_THEMES', false );
require( 'wp-load.php' );


 //Тело письма
 $body = '<h1>Flatrateremodeling website!</h1>';

 //------------------------------------------------------//
 //Пример name="popupUserName"
 $yourName = trim(!empty($_POST['yourName']));
 if($yourName) {
    $body.='<p><strong>User Name:</strong> '.$_POST['yourName'].'</p>';
 }
 
 $yourEmail = trim(!empty($_POST['yourEmail']));
 if($yourEmail){
  $body.='<p><strong>E-mail:</strong> '.$_POST['yourEmail'].'</p>';
 }

 $yourPhone = trim(!empty($_POST['yourPhone']));
 if($yourPhone){
    $body.='<p><strong>Phone:</strong> '.$_POST['yourPhone'].'</p>';
 }
 
 $yourMessage = trim(!empty($_POST['yourMessage']));
 if($yourMessage){
     $body.='<p><strong>Message:</strong> '.$_POST['yourMessage'].'</p>';
 }

 //------------------------------------------------------//


   
// Отправляем письмо
$sent_message = wp_mail( $to, $subject, $body );

$message = '';

if ( $sent_message ) {
    // Если сообщение успешно отправилось
    // echo 'Всё чётко настроил, бро!';
    $message = 'Data sent!';
} else {
    // Ошибки при отправке
    // echo 'Где-то ты лоханулся знатно!';
    $message = 'Error';
}

//Ответ
$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
?>
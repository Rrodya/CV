<?php
    $email = $_POST['email'];
    $message = $_POST['message'];

    // $error = '';

    // if($email == ''){
    //     $error = 'Введите email';
    // } else if(trim($message) == ''){
    //     $error = 'Введите сообщение';
    // } else if(strlen($message) < 10){
    //     $error = 'Сообщение должно быть не менее 10 символов';
    // }

    // if($error != ''){
    //     echo $error;
    //     exit;
    // }

    $subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=uft-8\r\n";

    mail('rodjaolast002@gmail.com', $subject, $message, $headers);

    header("Location: /index.php");
?>
<?php

@include 'helper.php';

if (isset($_POST['Send']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name =  htmlspecialchars($_POST['name']);
    $phoneNumber = null;
    if (strlen($_POST['phone']) <= 13 && strlen($_POST['phone']) >= 6) {
        $phoneNumber = htmlspecialchars($_POST['phone']);
    }
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $seveMessage = seveMessage($name, $phoneNumber, $email, $message);
    if ($seveMessage == 1) {
        redirect('../');
    } else {
        redirect('../?Message=NotSent');
    }
}

/*
Developed by Hero Expert 
Telegram channel: @HeroExpert_ir 
*/
?>
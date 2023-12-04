<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

if($_POST["message"]){
    mail("swillerer14@gmail.com", "Here is the subject line",
    
    $S_POST["insert your message here"]."From: $email");
}
?>
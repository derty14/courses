<?php

$recepient = "ufa.courses@gmail.com"; 
$sitename = "Заявка на курсы"; 

$news = trim($_POST["news"]); 
$tel = trim($_POST["tel"]); 
$name = trim($_POST["name"]); 
$cours = trim($_POST["cours"]); 
$text = trim($_POST["text"]); 
$message =  "Обучение по программам профессиональной переподготовки и повышения квалификации дополнительного профессионального образования "; 

$pagetitle = "Новая заявка с сайта \"$sitename\"";  
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>
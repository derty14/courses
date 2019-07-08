<?php

$recepient = "ufa.courses@gmail.com"; 
$sitename = "Кнопка 2"; 

$news = trim($_POST["news"]); 
$tel = trim($_POST["tel"]); 
$name = trim($_POST["name"]); 
$cours = trim($_POST["cours"]); 
$text = trim($_POST["text"]); 
$message =  " Обучение по дополнительным общеразвивающим программам дополнительного образования детей и взрослых "; 

$pagetitle = "Новая заявка с сайта \"$sitename\"";  
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>
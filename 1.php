<?php

$recepient = "ufa.courses@gmail.com"; 
$sitename = "Кнопка 1"; 

$news = trim($_POST["news"]); 
$tel = trim($_POST["tel"]); 
$name = trim($_POST["name"]); 
$cours = trim($_POST["cours"]); 
$text = trim($_POST["text"]); 
$message =  " ПРОФЕССИОНАЛЬНОЕ ОБУЧЕНИЕ ПО ПРОГРАММЕ ПРОФ. ПОДГОТОВКИ, ПЕРЕПОДГОТОВКИ И ПОВЫШЕНИЯ КВАЛИФИКАЦИИ РАБОЧИХ КАДРОВ "; 

$pagetitle = "Новая заявка с сайта \"$sitename\"";  
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>
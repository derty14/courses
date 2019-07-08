<?php

$recepient = "ufa.courses@gmail.com"; 
$sitename = "Заявка на курсы"; 

$news = trim($_POST["news"]); 
$tel = trim($_POST["tel"]); 
$name = trim($_POST["name"]); 
$cours = trim($_POST["cours"]); 
$text = trim($_POST["text"]); 
$message =  "Имя: $name \nТелефон: $tel \nКурс: $cours "; 

$pagetitle = "Новая заявка с сайта \"$sitename\"";  
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>

<?php

$recepient = "ufa.courses@gmail.com"; 
$sitename = "Толстовка Тундра"; 

$news = trim($_POST["news"]); 
$tel = trim($_POST["tel"]); 
$lox = trim($_POST["lox"]); 
$cours = trim($_POST["cours"]); 
$text = trim($_POST["text"]); 
$message =  "Имя: $lox \nТелефон: $tel \nКурс: $cours "; 

$pagetitle = "Новая заявка с сайта \"$sitename\"";  
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>
</body>
</html>
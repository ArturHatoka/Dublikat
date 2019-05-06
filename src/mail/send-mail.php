<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$main_request = $_POST['main_request'];

$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);
$main_request = htmlspecialchars($main_request);

$name = urldecode($name);
$tel = urldecode($tel);
$main_request = htmlspecialchars($main_request);

$name = trim($name);
$tel = trim($tel);
$main_request = htmlspecialchars($main_request);

if (mail("asmoday2011666@mail.ru",
    "Заявка с сайта",
    "Заявка на: ".$main_request."\nИмя: ".$name. "\nТелефон: ".$tel ))
{
    header("Location: /#endthx");
} else {
    echo "при отправке сообщения возникли ошибки";
}
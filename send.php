<?php
$image_url = $_GET['image'];
$fio = $_GET['fio'];
$email = $_GET['email'];


if (mail("photoshopdemo2@gmail.com", "Заказ с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: bednyakov99@gmail.com \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
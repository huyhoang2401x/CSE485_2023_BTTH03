<?php
require 'vendor/autoload.php';
require 'Utils/MyEmailServer.php';
require 'Utils/EmailSender.php';



$emailServer = new MyEmailServer();
$emailSender = new EmailSender($emailServer);
$emailSender->send("luciferkid0@gmail.com", "Điểm danh", "Vũ Huy Hoàng điểm danh ạ !");


?>
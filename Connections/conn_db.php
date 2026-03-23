<?php
// PDO SQL資料庫連線程式
$dsn = "mysql:host=localhost;dbname=fonelle;charset=utf8";
$user = "sales";
$password = "123456";
$link=new PDO($dsn, $user, $password);
date_default_timezone_set("Asia/Taipei");
?>
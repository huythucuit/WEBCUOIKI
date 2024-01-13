<?php
$connect = new mysqli("localhost", "root","","web");
if($connect->connect_error) {
die("Error" . $connect->connect_error);
}
$connect->set_charset("utf8");
?> 
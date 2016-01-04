<?php
error_reporting(0);
$dbc=mysqli_connect('localhost','root','','ecommerce')
OR die("Sorry We are having Connectiong issues");
mysqli_set_charset($dbc,'utf-8');
?>
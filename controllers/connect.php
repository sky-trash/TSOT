<?php
error_reporting(0);
session_start();

$mysql=mysqli_connect("localhost","root","","TSOT");
mysqli_set_charset($mysql, 'utf8mb4');
return $mysql;

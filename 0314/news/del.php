<?php 
header('content-type:text/html;charset=utf-8');
include 'DB.php';
$id = $_GET['id'];
(new DB())->del($id);
?>
<?php 
include "connect.php";

$id = $_GET['getId'];
$sql = "DELETE from tblnews where id = '".$id."';";
$conn->query($sql);
header('Location: /BOOTSTRAP/php/admin.php');
?>
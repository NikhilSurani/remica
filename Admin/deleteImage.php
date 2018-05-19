<?php

require_once "config.php";

$id = $_GET['id'];
$status = $_GET['status'];
$isActive = $status == 0 ? 1 : 0;

$updateProduct = mysql_query("UPDATE products SET status = '$isActive' WHERE id = '$id'");
if ($updateProduct) {
  header("location: list.php");
} else {
    echo "<script>alert('Error While active or inactive product');</script>";
    header("location: list.php");
}

?>
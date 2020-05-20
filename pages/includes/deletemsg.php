<?php
include_once './connection.php';

$sql = "DELETE FROM message WHERE id='" . $_GET["del_id"] . "'";
$query = mysqli_query($conn, $sql) or die($sql);
header("Location: ../read.php");
?>
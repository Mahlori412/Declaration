<?php
include_once './connection.php';
$sql = "DELETE FROM users WHERE stud_num='" . $_GET["del_id"] . "'";
$query = mysqli_query($conn, $sql) or die($sql);
header("Location: ../viewUsers.php");
?>
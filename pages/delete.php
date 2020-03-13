<?php
include_once 'connection.php';
$sql = "DELETE FROM roles WHERE studno='" . $_GET["studno"] . "'";
if (mysqli_query($conn, $sql)) {
   header("location: viewUsers.php");
   exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
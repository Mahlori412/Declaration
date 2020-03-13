<?php
include_once 'connection.php';
$sql = "DELETE FROM items WHERE itemId='" . $_GET["itemId"] . "'";
if (mysqli_query($conn, $sql)) {
   header("location: viewItems.php");
   exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
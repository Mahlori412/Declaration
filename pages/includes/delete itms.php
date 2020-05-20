<?php
include_once './connection.php';

$sql = "DELETE FROM items WHERE itemId='" . $_GET["itemId"] . "'";
if (mysqli_query($conn, $sql)) {
   echo "<script>alert('You Have Deleted Successfull An Item !!!');window.location='../viewItems.php'</script>";
   exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
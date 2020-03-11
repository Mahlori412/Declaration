<?php
$conn = mysqli("localhost","root","","crud");

if($conn->connect_error)
    die("could not connect to the database".$conn->connect_error)
?>
<?php
require ('iconnect.php');

if(isset($_POST['Declare'])){

$studNo =$_POST['studNo'];
$serialNo =$_POST['serialNo'];
$itemName = $_POST['itemName'];
$itemDesc = $_POST['itemDesc'];
//$idNo = $_POST['idNo'];



$sql = "INSERT INTO `items`(`studNo`, `serialNo`, `itemName`, `itemDesc`)
 VALUES ('$studNo','$serialNo','$itemName','$itemDesc')";
		

     if ($conn->query($sql) === True)
       {echo "<script>alert('User declared successfull!!! Go to login button')</script>";}
         else
		 {echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;}
	 
$conn->close();
        
}


<?php
require ('./connection.php');
session_start();
$student = $_SESSION['stud_num'];

if(isset($_POST['submit'])){

$serial_num =$_POST['serial_num'];
$item_nam = $_POST['item_nam'];
$description = $_POST['description'];
//$idNo = $_POST['idNo'];

$sql1 = "SELECT * FROM items WHERE serial_num ='".$_POST["serial_num"]."' ";
                  // $encrypted_password = md5($uPass);
                  $result = $conn->query($sql1);
                  if ($result->num_rows > 0) {
                      echo "<script>alert('Sorry, item already exist!!!');window.location='../adminDeclareItem.php'</script>";
                      
                 }
                  else{

                    $sql = "INSERT INTO items (stud_num,serial_num, item_nam, description)
                    VALUES ('" . $_POST["stud_num"] . "','" . $_POST["serial_num"] . "','" . $_POST["item_nam"] . "','" . $_POST["description"] . "','" . $_POST["lost"] . "')";
                        

                        if ($conn->query($sql) === TRUE)
                    {

                        echo "<script>alert('Item declared successfull!!! ');window.location='../viewItems.php'</script>";
                       
                    }
                    else
                    {
                        echo "<script>alert('There was an Error');window.location='../adminDeclareItem.php'<script>" . $sql . "<br>" . $conn->error;

                    }


                  }
            
          
	 
$conn->close();
        
}
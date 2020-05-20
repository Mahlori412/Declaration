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
                    $msg = "INSERT INTO message (stud_num,message,serial_num)
                    VALUES ('$student','was trying to declare someone else items or lost item','" . $_POST["serial_num"] . "')";
                        
                    if ($conn->query($msg) === TRUE)
                    {

                        echo "<script>alert('Sorry, item already exist!!!. Message was sent to the admin he or she will contact you for help');window.location='../itemDeclare.php'</script>";
                       
                    }
                    else
                    {
                        echo "<script>alert('There was an Error');window.location='../itemDeclare.php'<script>" . $msg . "<br>" . $conn->error;
                        exit;
                    }
                 }
                  else{

                    $sql = "INSERT INTO items (serial_num, item_nam, description,stud_num,lost)
                    VALUES ('" . $_POST["serial_num"] . "','" . $_POST["item_nam"] . "','" . $_POST["description"] . "','$student','" . $_POST["lost"] . "')";
                        

                        if ($conn->query($sql) === TRUE)
                    {

                        echo "<script>alert('Item declared successfull!!! ');window.location='../viewUserItems.php'</script>";
                       
                    }
                    else
                    {
                        echo "<script>alert('There was an Error');window.location='../itemDeclare.php'<script>" . $sql . "<br>" . $conn->error;

                    }


                  }
            
          
	 
$conn->close();
        
}
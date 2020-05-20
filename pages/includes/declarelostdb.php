<?php
require ('./connection.php');

 

if(isset($_POST['submit'])){

$serial_num =$_POST['serial_num'];
$item_nam = $_POST['item_nam'];
$description = $_POST['description'];
//$idNo = $_POST['idNo'];

$sql1 = "SELECT * FROM items WHERE serial_num ='".$_POST["serial_num"]."' ";
                  // $encrypted_password = md5($uPass);
                  $result = $conn->query($sql1);
                  if ($result->num_rows > 0) {
                      echo "<script>alert('Sorry, item already exist, The admin will notify you if your item is found!!!');window.location='../lostItem.php'</script>";
                      
                 }
                  else{

                    $sql = "INSERT INTO items (stud_num,serial_num, item_nam, description,lost)
                    VALUES ('" . $_POST["stud_num"] . "','" . $_POST["serial_num"] . "','" . $_POST["item_nam"] . "','" . $_POST["description"] . "','" . $_POST["lost"] . "')";
                        

                    if ($conn->query($sql) === TRUE)
                    {

                        echo "<script>alert('Item declared successfull!!! ');window.location='../viewlostitems.php'</script>";
                       
                    }
                    else
                    {
                        echo "<script>alert('There was an Error');window.location='../viewlostitems.php'<script>" . $sql . "<br>" . $conn->error;
                        exit;
                    }


                  }
            
          
	 
$conn->close();
        
}
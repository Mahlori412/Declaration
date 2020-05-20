<?php

session_start();

if(isset($_SESSION['stud_num'])){

    session_destroy();
    
    echo "<script>location.href='./login.php'</script>";
   }
   else{
    echo "<script>location.href='./login.php'</script>";
   }


?>
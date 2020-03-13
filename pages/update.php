<?php
// Include database connection file
require_once "connection.php";

    if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE roles set  name='" . $_POST['name'] . "', studno='" . $_POST['studno'] . "' ,mobile='" . $_POST['mobile'] . "' ,email='" . $_POST['email'] . "' WHERE studno='" . $_POST['studno'] . "'");
     
     header("location: index.php");
     exit();
    }
    $result = mysqli_query($conn,"SELECT * FROM roles WHERE studno='" . $_GET['studno'] . "'");
    $row= mysqli_fetch_array($result);
  


  
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <?php include "head.php"; ?>
</head>
<body>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                    <div class="row jumbotron bg-dark">
                         <div class="col-xs-12 bg-dark">
                                 <h2>Update Record</h2>
                        </div>
                    </div>
                    </div>
                   
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        
                        <div class="form-group ">
                            <label>Student Number</label>
                            <input type="number" readonly name="studno" class="form-control" value="<?php echo $row["studno"]; ?>" maxlength="30" required="">
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>" maxlength="50" required="">
                            
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" name="mobile" class="form-control" value="<?php echo $row["mobile"]; ?>" maxlength="10"required="">
                        </div>
                            <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>" maxlength="30" required="">
                        </div>
                        <input type="hidden" name="studno" value="<?php echo $row["studno"]; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="table.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>  
        </div>
</body>
</html>
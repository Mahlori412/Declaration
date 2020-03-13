<?php
// Include database connection file
require_once "connection.php";

    if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE items set  stud_num='" . $_POST['stud_num'] . "', itemN='" . $_POST['itemN'] . "' ,des='" . $_POST['des'] . "' ,serNum='" . $_POST['serNum'] . "' WHERE itemId='" . $_POST['itemId'] . "'");
     
     header("location: view items.php");
     exit();
    }
    $result = mysqli_query($conn,"SELECT * FROM items WHERE itemId='" . $_GET['itemId'] . "'");
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
                            <input type="number" readonly name="stud_num" class="form-control" value="<?php echo $row["stud_num"]; ?>" maxlength="30" required="">
                        </div>
                        <div class="form-group">
                            <label>Item Name</label>
                            <input type="text" name="itemN" class="form-control" value="<?php echo $row["itemN"]; ?>" maxlength="50" required="">
                            
                        </div>
                        <div class="form-group">
                            <label>description</label>
                            <input type="text" name="des" class="form-control" value="<?php echo $row["des"]; ?>" maxlength="100"required="">
                        </div>
                            <div class="form-group">
                            <label>Serial Number</label>
                            <input type="text" name="serNum" class="form-control" value="<?php echo $row["serNum"]; ?>" maxlength="100" required="">
                        </div>
                        <input type="hidden" name="itemId" value="<?php echo $row["itemId"]; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="view items.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>  
        </div>
</body>
</html>
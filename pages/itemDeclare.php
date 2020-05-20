<?php

session_start();

 if(isset($_SESSION['stud_num'])){

 }
 else
 {
     echo "<script>location.href='./login.php'</script>";
 }

?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    User Declare Item 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboardd.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="user-profile"  >

  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a  class="simple-text logo-normal">
          Student Declaration
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./userdashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Student Dashboard</p>
            </a>
          </li>
		  
	  
          <li>
            <a href="./editProfile.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
         
          <li class = "active">
            <a href="./itemDeclare.php">
              <i class="now-ui-icons design-2_ruler-pencil"></i>
              <p>Declare Item</p>
            </a>
          </li>
          <li >
            <a href="./viewUserlostItems.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Lost Items Table List</p>
            </a>
          </li>
          <li>
            <a href="./viewUserItems.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Items Table List</p>
            </a>
          </li>
         
		  
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Declare Item</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <ul class="navbar-nav">
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="now-ui-icons users_single-02"></i><?php echo $_SESSION['stud_num']; ?>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#"><?php echo $_SESSION['stud_num']; ?>
                  <a class="dropdown-item" href="./logout.php">Logout</a>
                </div>
              </li>
          </ul>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Declare Item</h5>
              </div>
              <div class="card-body">
                <form action="includes/declaredb.php" method="post" style="margin-left:200">
                  

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Serial Number</label>
                        <input type="text" class="form-control" name="serial_num" placeholder="e.g S45DS551STEWDC" value="" required>
                      </div>
                    </div>
                 </div>
				  
				  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Name of Item</label>
                        <input type="text" class="form-control" name="item_nam" placeholder="e.g laptop" value="" required>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Item Description</label>
                        <textarea rows="4" cols="80" class="form-control" name="description" placeholder="Here can be your description" value="text"></textarea>
                      </div>
                    </div>
                  </div>
<!-- 
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Student Number</label>
                        <input type="text" class="form-control" name="stud_num" placeholder="e.g S45DS551STEWDC" value="" required>
                      </div>
                    </div>
                 </div> -->

                 <input type="hidden" name="lost" value = "0">
				  
				<button type="Submit" class="btn btn-secondary" name="submit">Submit</button>
				
                </form>
              </div>
            </div>
          </div>
         
        </div>
      </div>
      
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>



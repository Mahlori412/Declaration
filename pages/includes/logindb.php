<?php
 require('./connection.php');

 session_start();

 if(isset($_POST["signin-btn"])){
		$encrypted_password = md5($_POST["uPass"]);
		$sql= "SELECT * FROM users WHERE stud_num = '" . $_POST["stud_num"]."' AND uPass= '$encrypted_password'";
		
		
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_array($result);
		$email = $data['email'];
		$date = $data['date'];
		$date = strtotime($date);
		$date = date('M d Y',$date);

		if ($data['usertype']=="admin") {
			
			$_SESSION["stud_num"]= $_POST["stud_num"];
			//$_SESSION['userstatus']= "yes";
			echo "<script style='color:green;'>alert('You have successfull login !!!');window.location = '../dashboard.php'</script>";
					
			}else if ($data['usertype']=="user" ){
				if ($data['verified']==1){
					$_SESSION["stud_num"]= $_POST["stud_num"];
					//$_SESSION['userstatus']= "yes";
					echo "<script style='color:green;'>alert('You have successfull login !!!');window.location = '../userdashboard.php'</script>";
				}else{
					echo "<script>alert('You accound has not yet been verified. An email was sent to $email on $date !!!');window.location = '../login.php'</script>";
				}
			} else {
				echo "<script>alert('Invalid username or password !!!');window.location = '../login.php'</script>";
		}
	$conn->close();
}

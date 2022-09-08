<?php
include("db_connect.php");
include("header.php");
?>
<?php
session_start();
        include("db_connect.php");
		include("header.php");
        

	if (isset($_POST["submitbtn"])) {
		$email = htmlspecialchars(stripslashes(trim($_POST["email"])));
        $password= htmlspecialchars(stripslashes(trim($_POST["password"])));
	 
		$hash = sha1($password);
		 
		  
	 	$sql = mysqli_query ($conn,"SELECT * FROM  registers WHERE email='$email' AND password='$hash'");
		 
        $sqli= mysqli_fetch_assoc($sql);
	 	$sqli["email"];
	 	$sqli["password"];
	
        if ($email===$sqli["email"] && $hash===$sqli["password"]) {
         
			header("location:");
     
		}else{
				echo "wrong login";
				header('refresh:5,url=../login.php');
		}
			
		
		
		
		} 	
		
	




?>


<!DOCTYPE html>

<html lang="en">
<head>
	<title>Oatek</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="login/width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100"style="background-image:url('login/images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="login.php" method="post" >


			<span class="login100-form-title p-b-37">
					Ali baba petroleum industry
				</span>
			
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="email" name="email" placeholder="username or email" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password" required>
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<input class="login100-form-btn" type='submit' name="submitbtn">
				</div>

				

				<div class="text-center">
					<a href="register.php" class="txt2 hov1">
						registered
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>

</body>
</html>
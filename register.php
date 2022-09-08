<?php
include("db_connect.php");
include("header.php");
?>
<?php
  
 //create connection
 $conn = new mysqli("localhost","root","root","attendant_system");
 
 //check conection
 if (!$conn) {
      die("connection failed:".mysqli_connect_error());
 }
 
 echo "connection is successfully";

//form submission
 if(isset($_POST['submitbtn']))
{

  if (empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['password'])) { 
      echo "all fields are required";
   }else {
//collection of data ,data should be validated with a function



$first_name = htmlspecialchars(trim($_POST['first_name']));
$last_name = htmlspecialchars(trim($_POST['last_name']));
$email = htmlspecialchars(trim($_POST['email']));
$phone = htmlspecialchars(trim($_POST['phone']));
$password = htmlspecialchars(trim($_POST['password']));
$hash = sha1($password);




$sqli= mysqli_query($conn, "SELECT * FROM registers WHERE email='$email'");
     
     

if (mysqli_num_rows($sqli)>=1) {
  
    $error= "email already exist, use another email address";
 exit;

}else{
 
  $sql = 'INSERT INTO registers (first_name, last_name,email,phone,password)
  VALUES  ("'. $first_name. '", "' . $last_name. '", "' . $email .'","' . $phone .'","' . $hash .'")';

    $message= "successfully inserted";
 header("location:app/dashboards.php");
}



//create sql connection





         if(mysqli_query($conn, $sql)) 
         {
          echo "you have successfully registered !";
         } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }

      }  
  //close connection
      mysqli_close($conn);

}

?>

<?php
include("db_connect.php");
include("header.php");
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
			<form class="login100-form validate-form" action="" method="post" >


			<span class="login100-form-title p-b-37">
					Ali baba petroleum industry
				</span>
			
				<span class="login100-form-title p-b-37">
					REGISTER
				</span>
                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter firstname">
					<input class="input100" type="firstname" name="first_name" placeholder="firstname" required>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter lastname">
					<input class="input100" type="lastname" name="last_name" placeholder="lastname" required>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter email">
					<input class="input100" type="email" name="email" placeholder="email" required>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter phone">
					<input class="input100" type="phone" name="phone" placeholder="phone" required>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter password">
					<input class="input100" type="password" name="password" placeholder="password" required>
					<span class="focus-input100"></span>
				</div>
            
                <div class="container-login100-form-btn">
					<input class="login100-form-btn" type='submit' name="submitbtn">
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



	
	


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
				header('refresh:5,url=../index.php');
		}
			
		
		
		
		} 	
		
	




?>



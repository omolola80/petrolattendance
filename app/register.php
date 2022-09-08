


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
   header("location:dashboards.php");
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

















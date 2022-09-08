<?php
        
        include("header.php");
        include('db_connect.php');
        
?>

<?php

   
   $conn = new mysqli("localhost","root","root","attendant_system");
   
   //check conection
   if (!$conn) {
        die("connection failed:".mysqli_connect_error());
   }

   if(isset($_POST['submitbtn']))
{

    if (empty($_POST['name'])) { 
       echo "choose fields are required";
     }else {
  //collection of data ,data should be validated with a function

  $name = htmlspecialchars(trim($_POST['name']));

  // echo "$name";
  
  //create sql connection
    $sql = "INSERT INTO roles (`name`)
      VALUES  ('$name')";



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


<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Station</title>
  </head>
  <body>

<div class="container my-5">
        <form action="" method="post">
                        <label class="control-label col-md-2" for="type"></label>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4 col-md-6">ROLE</label>
                                    <select class="form-control" name="name">
                                        <option value="adminstrator">Adminstrator</option>
                                        <option value="cashier">Cashier</option>
                                        
                                    </select>
                           </div>    
                 <input type="submit" name="submitbtn" class="form-control"/>
        </form>         
</div>



    
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <label>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>









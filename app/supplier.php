<?php
        
        include("header.php");
        
        
?>

<?php
 
   
   //create connection
   $conn = new mysqli("localhost","root","root","attendant_system");
   
   //check conection
   if (!$conn) {
        die("connection failed:".mysqli_connect_error());
   }
   
  //  echo "connection is successfully";

//form submission
   if(isset($_POST['submitbtn']))
{

    if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['email'])){ 
        echo "all fields are required";
     }else {
  //collection of data ,data should be validated with a function



  $name = htmlspecialchars(trim($_POST['name']));
  $address = htmlspecialchars(trim($_POST['address']));
  $phone = htmlspecialchars(trim($_POST['phone']));
  $email = htmlspecialchars(trim($_POST['email']));

  
 
 

  //create sql connection

$sql = 'INSERT INTO suppliers (`name`,`address`,`phone`,`email`)
  VALUES  ("'. $name. '", "' . $address. '", "' . $phone. '", "' . $email .'")';



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
          <div class="mb-3">
            <form action="" method="post">
                <label for="" class="form-label">NAME</label>
              <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="title post">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">ADDRESS</label>
            <textarea class="form-control" name="address"  id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
           

          <div class="mb-3">
             <label for="" class="form-label">PHONE</label>
             <textarea class="form-control" name="phone" type="number" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">EMAIL</label>
            <textarea class="form-control" name="email"  id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

        <input type="submit" name="submitbtn"/>
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
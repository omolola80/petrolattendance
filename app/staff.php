

<?php
    include("header.php");
    include("db_connect.php");
?>
<?php
$conn = new mysqli("localhost","root","root","attendant_system");
   
//check conection
if (!$conn) {
     die("connection failed:".mysqli_connect_error());
}
   
   if(isset($_POST['submitbtn']))
   {
   
       if (empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['address'])) { 
           echo "all fields are required";
        }else {
     //collection of data ,data should be validated with a function
   
   
   
     $first_name = htmlspecialchars(trim($_POST['first_name']));
     $last_name = htmlspecialchars(trim($_POST['last_name']));
     $phone = htmlspecialchars(trim($_POST['phone']));
     $email = htmlspecialchars(trim($_POST['email']));
     $address = htmlspecialchars(trim($_POST['address']));
     
    
    
   
     //create sql connection
   
   $sql = 'INSERT INTO staffs (first_name,last_name,phone,email,address)
     VALUES  ("'. $first_name. '", "' . $last_name. '", "' . $phone. '", "' . $email .'" ,"' . $address. '")';
   
   
   
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
<form action="" method="POST">
            <br>
    <div class="container">
        <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 stle="text-align:center">STAFF PROFILE</h5>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Firstname</label>
                        <input type="text" name="first_name"class="form-control" id="inputEmail4" placeholder="Email"required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Lastname</label>
                        <input type="text" name="last_name" class="form-control" id="inputEmail4" placeholder="lastname"required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="text" name="email" class="form-control" id="inputEmail4" placeholder="email"required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Phone</label>
                        <input type="number" name="phone" class="form-control" id="inputEmail4" placeholder="phonenumber"required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Address</label>
                        <input type="text" name="address" class="form-control" id="inputEmail4" placeholder="password"required>
                    </div>
                   
                    <input type="submit" name="submitbtn" class="form-control"/>
                   
                               
                
                                
                      
                    
        </div>                
    </div>

<?php
    include("footer.php");
?>
         

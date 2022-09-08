<?php
    include("header.php");
    include("db_connect.php");
?>

<?php
    if (isset($_POST["submit"])){
        $oldpassword= htmlspecialchars(stripslashes(trim($_POST["oldpassword"])));
        $newpassword= htmlspecialchars(stripslashes(trim($_POST["newpassword"]))); 
        $confirmpassword= htmlspecialchars(stripslashes(trim($_POST["confirmpassword"])));               
		
        $staff_id= $_POST["staff_id"];
        
 
        $error = "";
 
        $sql= "INSERT INTO (`oldpassword`,`newpassword`,`confirmpassword`) VALUES ('$oldpassword','$newpassword','$confirmpassword')";
       // echo $sql;
        $result =mysqli_query($conn, $sql);
        if ($result) {
            echo "";
        } else {
            echo "";
        }
        
     }
	
?>

<form action="" method="POST">
    <br>
    <div class="container">
        <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 stle="text-align:center">UPDATE PASSWORD</h5>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Oldpassword</label>
                        <input type="oldpassword" name="oldpassword"class="form-control" id="inputEmail4" placeholder="oldpassword"required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Newpassword</label>
                        <input type="newpassword" name="newpassword"class="form-control" id="inputEmail4" placeholder="newpassword"required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">confirmpassword</label>
                        <input type="confirmpassword" name="confirmpassword"class="form-control" id="inputEmail4" placeholder="confirmpassword"required>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary pull-right">
        </div>
    </div>
</form>




<?php
    include("footer.php");
?>




<?php
 session_start();

 include ("db_connect.php");
 

 $id= $_GET['staff_id'];
 
 $sql="SELECT * FROM staffs WHERE `id`='$id' ";

 
 
 $result=mysqli_query($conn,$sql);

 


 if(isset($_POST['submitbtn']))
    {
    if (empty($_POST['customers'])) {
        return false;
    }else {
        $id=$_POST['staff_id'];
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
       

       $sql = "INSERT INTO customers (`staff_id`,`name`,`phone`,`email`)
           VALUES ('$id','$name','$phone','$email')";

       $output=mysqli_query($conn,$sql);
      if ($output==true) {
          echo" data inserted successfully";
      }else {
          echo "error".mysqli_error($conn);
      }
    }
          
    
    }
    $query= "SELECT * FROM customers INNER JOIN staffs";
    $re=mysqli_query($conn,$query);


?>
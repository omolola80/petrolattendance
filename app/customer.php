<?php
        
        include("header.php");
        include('db_connect.php');
        
?>

<?php

session_start();

 include ("db_connect.php");
 
 
 
 $sql="SELECT * FROM staffs";
 
 $result=mysqli_query($conn,$sql);

 


 if(isset($_POST['submitbtn']))
 {

        $sid=htmlspecialchars(trim($_POST['staff_id']));
        $name  =htmlspecialchars(trim($_POST['name']));
        $phone =htmlspecialchars(trim($_POST['phone']));
        $email  =htmlspecialchars(trim($_POST['email']));
        $date= date("Y/m/d");

       $sql = "INSERT INTO customers (`staff_id`,`name`,`phone`,`email`,`date_time`)
           VALUES ('$sid','$name','$phone','$email','$date')";
            
          

       $output=mysqli_query($conn,$sql);
      if ($output==true) {
          echo" data inserted successfully";
      }else {
          echo "error".mysqli_error($conn);
      }
    
           
    
    }


?>









<form action="" method="POST">
            <br>
    <div class="container">
        <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 stle="text-align:center">CUSTOMER PROFILE</h5>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Staff Name</label>
                        <select name="staff_id">
                            <option value="">select staff</option>

                            <?php 
                            while ($row = mysqli_fetch_assoc($result)) {?>
                             
                            <option value="<?php echo $row['id']?>"><?php echo $row['first_name'];?></option>
                           <?php }?>

                            
                        </select>
                    </div>
                 
    
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input type="text" name="name"class="form-control" id="inputEmail4" placeholder="Email"required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Phone</label>
                        <input type="number" name="phone" class="form-control" id="inputEmail4" placeholder="phonenumber"required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="text" name="email" class="form-control" id="inputEmail4" placeholder="email"required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Date</label>
                        <input type="date" name="date_time" class="form-control" id="inputEmail4" placeholder="email"required>
                    </div>
                   
                  
                   
                    <input type="submit" name="submitbtn" class="form-control"/>
                                                
                    
        </div>                
    </div>
</form>

<?php
    include("footer.php");
?>
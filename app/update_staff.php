<?php

    session_start();
    include("header.php");


?>

<div class="col-md-10">
               
               <?php if(isset($_GET['message']) && $_GET['message'] != '' ) {
                    if($_GET['message'] =="200"){
                       echo
                       
                       "  
                       <html>
                        <div class='form-group'>
                            <div class='col-sm-10 col-sm-offset-2'>
                                <div class=alert alert-success'>Your Record has been Saved Successfully</div>  
                            </div>
                        </div>
                        </html>";
                    }else if($_GET['message'] =="300"){
                        "<html>
                         <div class='alert alert-danger'>failed!. Please try again later</div>
                         </html>";
                    }
                
                }
                
                ?>

              <?php
               include("db_connect.php");
               $firstname= "";
               $lastname= "";
               $phone= "";
               $email= "";
               $address= "";
               
               
                     if(isset($_GET['staff_id'])){
                         $id= $_GET['staff_id'];
                       
                         
                         $sql= "SELECT * FROM `staffs` WHERE  `id` ='$id' ";
                        
                         $result = mysqli_query($conn, $sql);
                         
                         if ($result) {
                            // output data of each row
                           // $output="";
                           $row = mysqli_fetch_assoc($result);
      
                            $firstname=$row['first_name'];
                            $lastname=$row['last_name'];
                            $phone=$row['phone'];
                            $email=$row['email'];
                            $address=$row['address'];
                            
                         }
                     }
                       
              ?>

    <div class="form-group w-50 mx-auto  my-5 text-blue">


        <form action="" method="GET">
        <a href="staff.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New Staff</a>
            <label for="usr"><?php echo $_SESSION["first_name"];?></label>
  
            <input type="hidden" value="<?php echo $_GET["staff_id"];?>" class="form-control" id="usr" name="id">
            </div>
            <div class="form-group w-50 mx-auto my-5 text-blue">
            <label for="comment">FIRSTNAME</label>
            <input class="form-control" rows="10" id="comment" name="first_name" value= <?php echo $firstname;?>>
            </div>

            <div class="form-group w-50 mx-auto my-5 text-blue">
            <label for="comment">LASTNAME</label>
            <input class="form-control" rows="10" id="comment" name="last_name"value= <?php echo $lastname;?>> 
            </div>

            <div class="form-group w-50 mx-auto my-5 text-blue">
            <label for="comment">PHONE</label>
            <input class="form-control" rows="10" id="comment" name="phone" value=<?php echo $phone;?>> 
            </div>

            <div class="form-group w-50 mx-auto my-5 text-blue">
            <label for="comment">EMAIL</label>
            <input class="form-control" rows="10" id="comment" name="email" value=<?php echo $email;?>> 
            </div>

            <div class="form-group w-50 mx-auto my-5 text-blue">
            <label for="comment">ADDRESS</label>
            <input class="form-control" rows="10" id="comment" name="address" value= <?php echo $address;?>>
            </div>  
            
            <input type="submit" name="submitbtn" class="form-control"/>
            
        </form>

       
       

</div>

<?php
     if (isset($_GET['submitbtn'])){
        $id = $_GET['id'];
        $newfirstname  = $_GET['first_name'];
        $newlastname = $_GET['last_name'];
        $newphone = $_GET['phone'];
        $newemail = $_GET['email'];
        $newaddress = $_GET['address'];

         
        $sql = " UPDATE `staffs` SET `first_name` = '$newfirstname', `last_name` = '$newlastname', `phone` = '$newphone',`email` = '$newemail',`address` = '$newaddress' WHERE `id` = '$id'";
         echo $sql;
        $result = mysqli_query($conn, $sql);
            

         if (!$result) {
           echo("Error staff: " . mysqli_error($conn));
         }
         else {
            header("location:staff.php");
             
         }
         
    }
   

    
?>



<?php
    include("footer.php")

?>
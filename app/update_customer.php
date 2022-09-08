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
               $name= "";
               $phone= "";
               $email= "";
              
               
               
                     if(isset($_GET['customer_id'])){
                         $id= $_GET['customer_id'];
                       
                         
                         $sql= "SELECT * FROM `customers` WHERE  `id` ='$id' ";
                        
                         $result = mysqli_query($conn, $sql);
                         
                         if ($result) {
                            // output data of each row
                           // $output="";
                           $row = mysqli_fetch_assoc($result);
      
                    
                            $name=$row['name'];
                            $phone=$row['phone'];
                            $email=$row['email'];
                           
                            
                         }
                     }
                       
              ?>

    <div class="form-group w-50 mx-auto  my-5 text-blue">


        <form action="" method="GET">
        <a href="staff.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New Customer</a>
            <label for="usr"><?php echo $_SESSION["first_name"];?></label>
  
            <input type="hidden" value="<?php echo $_GET["customer_id"];?>" class="form-control" id="usr" name="id">
            </div>
            <div class="form-group w-50 mx-auto my-5 text-blue">
            <label for="comment">NAME</label>
            <input class="form-control" rows="10" id="comment" name="name" value= <?php echo $name;?>>
            </div>

            

            <div class="form-group w-50 mx-auto my-5 text-blue">
            <label for="comment">PHONE</label>
            <input class="form-control" rows="10" id="comment" name="phone" value=<?php echo $phone;?>> 
            </div>

            <div class="form-group w-50 mx-auto my-5 text-blue">
            <label for="comment">EMAIL</label>
            <input class="form-control" rows="10" id="comment" name="email" value=<?php echo $email;?>> 
            </div>

             
            
            <input type="submit" name="submitbtn" class="form-control"/>
            
        </form>

       
       

</div>

<?php
     if (isset($_GET['submitbtn'])){
        $id = $_GET['id'];
        $newname  = $_GET['name'];
        $newphone = $_GET['phone'];
        $newemail = $_GET['email'];
    

         
        $sql = " UPDATE `customers` SET `name` = '$newname', `phone` = '$newphone',`email` = '$newemail' WHERE `id` = '$id'";
        //  echo $sql;
        $result = mysqli_query($conn, $sql);
            

         if (!$result) {
           echo("Error staff: " . mysqli_error($conn));
         }
         else {
            header("location:customertbl.php");
             
         }
         
    }
   

    
?>



<?php
    include("footer.php")

?>
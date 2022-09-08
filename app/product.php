<?php
        
        include("header.php");
        include('db_connect.php');
        
?>


<?php
 
 session_start();
   //create connection
   include ("db_connect.php");
   
   //check conection

 
 
  $sql= "SELECT * FROM product_categories";
  $sqlSupplier= "SELECT * FROM suppliers";
  $sqlStaff= "SELECT * FROM staffs";

 $result=mysqli_query($conn,$sql);
 $resultSupplier=mysqli_query($conn,$sqlSupplier);
 $resultStaff=mysqli_query($conn,$sqlStaff);

 

 if(isset($_POST['submitbtn']))
  {
   
        $pcid=htmlspecialchars(trim($_POST['product_categories_id']));
        $sid=htmlspecialchars(trim($_POST['supplier_id']));
        $sid=htmlspecialchars(trim($_POST['staff_id']));
        $price=htmlspecialchars(trim($_POST['price']));
        $quantity=htmlspecialchars(trim($_POST['quantity']));
        

       $sql = "INSERT INTO products (`product_categories_id`,`price`,`quantity`,`supplier_id`,`staff_id`)
           VALUES ('$pcid','$price','$quantity','$sid','$sid')";

 


       $output=mysqli_query($conn,$sql);
      if ($output==true) {
          echo" data inserted successfully";
      }else {
          echo "error".mysqli_error($conn);
      }
    
    
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

  <form action="" method="POST">
            <br>
    <div class="container">
        <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 stle="text-align:center">PRODUCT</h5>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">PRODUCT CATEGORIES</label>
                        <select name="product_categories_id" class="form-control">
                            <option value="">select product categories</option>
                            

                            <?php 
                            while ($row = mysqli_fetch_assoc($result)) {?>
                            <option style="color:red;" value="<?php echo $row['id']?>"><?php echo $row['name'];?></option>
                           <?php }?>

                            
                        </select>
                    </div>
                                  <input type="hidden" value="<?php echo $_GET["staff_id"];?>" class="form-control" id="usr" name="id"> 
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">PRICE</label>
                        <input type="text" name="price" class="form-control" id="inputEmail4" placeholder="price"required>
                    </div>
                   
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">QUANTITY</label>
                        <input type="text" name="quantity" class="form-control" id="inputEmail4" placeholder="quantity"required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputEmail4">SUPPLIER</label>
                        <select name="supplier_id" class="form-control">
                            <option value="">select supplier</option>
                            

                            <?php 
                            while ($row = mysqli_fetch_assoc($resultSupplier)) {?>
                             
                            <option value="<?php echo $row['id']?>"><?php echo $row['name'];?></option>
                           <?php }?>

                            
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Staff Name</label>
                        <select name="staff_id" class="form-control">
                            <option value="">select staff</option>
                            

                            <?php 
                            while ($row = mysqli_fetch_assoc($resultStaff)) {?>
                             
                            <option value="<?php echo $row['id']?>"><?php echo $row['first_name'];?></option>
                           <?php }?>

                            
                        </select>
                    </div>

    
                   
                  
                   
                    <input type="submit" name="submitbtn" class="form-control"/>
                                                
                    
        </div>                
    </div>
  </form>



    
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
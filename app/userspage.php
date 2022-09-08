<?php
        include("header.php");
        include('db_connect.php');
        
    ?>

     <?php
    //  $name = $_POST['Full Name'];
    //  $email = $_POST['email'];
    //      mysql_connect("localhost", "****", "****");
    //      mysql_select_db("connect.php");       

    // $stmt = "INSERT INTO employee (FullName, email) VALUES ('$fullname', '$email')";
    //  $result = mysql_query($stmt);
    //      if($result){
    //     echo("success!");
    //      }else{
    //  echo("failed!");
    //      }

    ?>
    <!-- <body>

            <form id="add-emp" method="POST" action="add_employee.php">
                <input type="text" id="name" name="name" placeholder="Full Name" />
                <input type="text" id="email" name="email" placeholder="Email" />

                <input type="submit" value="Register Employee" class="button"  onClick="fun();"/>
            </form>
    </body> -->

        <!--<div id="result"></div>-->
         <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="section">
                    <div class="card">
					<div class="card-header">
						<span><b>Users Page</b></span>
                        <button class="btn btn-primary btn-sm btn-block col-md-3 float-right" type="button" id="new_emp_btn"><span class="fa fa-plus"></span> Add Employee</button>
					</div>
					<div class="card-body">
					    <table id="table" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Employee No</th>
									<th>Firstname</th>
									<th>Middlename</th>
									<th>Lastname</th>
									<th>Department</th>
                                    <th>Phonenumber</th>
                                    <th>action</th>
								</tr>
							</thead>
                             <tbody>
        <?php
           //echo $report;

          //function select ($id){
                       
                 //echo $id = $_SESSION["id"];
                    $sql="SELECT * FROM staff_id";
                  
                            
                    $result = mysqli_query($conn, $sql);
                    
                   
                    
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                           // $output="";
                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
        <tr>
            <td>

                <?php echo $row['Employee No'];?>
                <input type="hidden" value="<?php echo $row ['id']; ?>" name="id">
             </td>
                
            <td>

                <?php echo $row ['Firstname']; ?>
                <input type="hidden" value="<?php echo $row ['id']; ?>" name="id">

            </td>
            <td>

                <?php echo $row ['Middlename']; ?>
                <input type="hidden" value="<?php echo $row ['id']; ?>" name="id">

            </td>
            <td>

            <?php echo $row ['Lastname']; ?>
            <input type="hidden" value="<?php echo $row ['id']; ?>" name="id">

            </td>
            <td>

            <?php echo $row ['Department']; ?>
            <input type="hidden" value="<?php echo $row ['id']; ?>" name="id">

            </td>
            <td>
            <?php echo $row ['Phonenumber']; ?>
            <input type="hidden" value="<?php echo $row ['id']; ?>" name="id">

            </td>
            <td>


                <h3 class='text-info text-sm' type="">
                    <?php
                                                if ($row['approval'] == 1) {
                                                    echo "Approved";
                                                } else {
                                                    echo "Pending";
                                                }
                                                
                                             ?>
                </h3>

            </td>
            <td>
                <?php echo $row['date'];?>
            </td>
            <td>
                <?php
                     if($row['approval']== 0){
                        ?>
                <a href="update_users.php?id=<?php echo $row['id'];?>" class="btn btn-info btn-sm" type="submit">
                    update</a> &nbsp;
                <?php
                                       ?>
                <a class="btn btn-danger btn-sm" href="delete_users.php?id=<?php echo $row['id']; ?>">Delete</a>
                <?php
                        }
                        ?>


            </td>

        </tr>
        <?php

                            }
            }
            // $report=select($_SESSION["id"]);
          ?>
    </tbody>

                        </table>
                    </div>
            </div>
        </div>
    </div>
		    
           
            
    <?php
    include("footer.php");
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
                <label for="" class="form-label">FIRSTNAME</label>
                <input type="text" class="form-control" name="first_name" id="exampleFormControlInput1" placeholder="title post">
            </div>

            <div class="mb-3">
            <label for="" class="form-label">LASTNAME</label>
            <textarea class="form-control" name="last_name"  id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
           

            <div class="mb-3">
             <label for="" class="form-label">EMAIL</label>
             <textarea class="form-control" name="email"  id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="mb-3">
             <label for="" class="form-label">PHONE</label>
             <textarea class="form-control" name="phone"  id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="mb-3">
             <label for="" class="form-label">PASSWORD</label>
             <input class="form-control" type="password" placeholder="Enter Password" name="password" rows="3" required>

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
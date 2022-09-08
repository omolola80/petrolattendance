    <?php
        include("header.php");
        include('db_connect.php');
        
    ?>

     <?php

    ?>
  
         
    <div class="content">
        <div class="container-fluid">
            <div class="section">
                <div class="card">
					<div class="card-header">
						<span><b>Staff List</b></span>
                        <button class="btn btn-primary btn-sm btn-block col-md-3 float-right" type="button" id="new_emp_btn"><span class="fa fa-plus"></span> Add Employee</button>
					</div>
					<div class="card-body">
					    <table id="table" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Firstname</th>
									<th>Lastname</th>
                                    <th>Email</th>
                                    <th>Phonenumber</th>
                                    <th>Address</th>
                                    <th>action</th>
								</tr>
							</thead>
                             <tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php
           //echo $report;

          //function select ($id){
                       
                 //echo $id = $_SESSION["id"];
                    $sql="SELECT * FROM id"; 
                    $result = mysqli_query($conn, $sql);
                    
                        if (mysqli_num_rows($result) > 0) {
                          
                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
        <tr>
            <td>

                <?php echo $row['id'];?>
              
             </td>
                
            <td>
                <?php echo $row ['first_name']; ?>
            </td>
            <td>
                <?php echo $row ['last_name']; ?>
            </td>
            <td>
                <?php echo $row ['email']; ?>
            </td>
            <td>
                    <?php echo $row ['Phone']; ?>
            </td>
            <td>
                    <?php echo $row ['address']; ?>
            </td>

        </tr>
        <?php

                            }
            }
            // $report=select($_SESSION["id"]);
          ?>
    </tbody>

		    
           
            
    <?php
    include("footer.php");
    ?>



<?php
        $query=mysqli_query($conn,"SELECT * FROM attendance WHERE staff_id='$staff_id'");     
        $result=mysqli_fetch_array($query);
        if (!mysqli_num_rows($query)>=1) {
            
            $sqli = mysqli_query($conn," INSERT INTO  `attendance` (`staff_id`,`status`,`date`) VALUES('$staff_id','$status','$date')");
           }


      if (isset($_GET['staff_id'])) {
      $staff_id = $_GET['staff_id'];
      $status  =0;
      $date= date("Y/m/d");
   

    $result = mysqli_query($conn," INSERT INTO  `attendance` (`staff_id`,`status`,`date`) VALUES('$staff_id','$status','$date')");
    

    if (!$result) {
      echo("Error description: " . mysqli_error($conn));
    }
    else {
       header("location:attendance.php");
        }    
      
    
      if($sqli==TRUE){
            $message= "successfully inserted";
      }
      //   else{
      //       $error = $conn->error;
      // }
        
        else{
            $error= "absent already exist, cannot insert twice";
        
        }
        

        mysqli_close($conn);
    }

?>

<?php
session_start();
    include("header.php");
    include("db_connect.php");
   

?>
<?php  
  


?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span><b>History</b></span>
                    <!-- <button class="btn btn-primary btn-sm btn-block col-md-3 float-right" type="button"
                        id="new_emp_btn"><span class="fa fa-plus"></span></button> -->
                </div>
                <div class="card-body">
                    <table id="table" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <th>DESCRIPTION</th>
                            <th>AMOUNT</th>
                            <th>DATE</th>
                            <th>ACTION</th>
                            
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<tbody>
<tbody>
        <?php
           //echo $report;

          //function select ($id){
                       
                //  echo $id = $_SESSION["id"];
                    // $sql="SELECT * FROM record_deduction WHERE id= $id ORDER BY 'date' DESC ";
                  
                    // print_r ($sql);
                            
                    $result = mysqli_query($conn, $sql);
                    
                   
                    // print_r ($result);
                         if (mysqli_num_rows($result) > 0) {
                            
                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
        <tr>
            <td>

                <?php echo $row['description'];?>
                <input type="hidden" value="<?php echo $row ['id']; ?>" name="id">
                
            <td>

                <?php echo $row ['amount']; ?>
                <input type="hidden" value="<?php echo $row ['id']; ?>" name="id">

            </td>
            <td>


                <!-- <h3 class='text-info text-sm' type="">
                    <?php
                                                // if ($row['approval'] == 1) {
                                                //     echo "Approved";
                                                // } else {
                                                //     echo "Pending";
                                                // }
                      ?>
                </h3> -->
            </td>
            <td>
                <?php echo $row['date'];?>
            </td>
            <td>
                <?php
                    //  if($row['approval']== 0){
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
            // }
            
          ?>
    </tbody>
      
          

        </tr>
        <?php
                 
            
            // $report=select($_SESSION["id"]);
          ?>
    
       
</tbody> 

</table>
</div>



<?php
    include("footer.php");
?>






<?php
        
        include("header.php");
        include('db_connect.php');
        
?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span><b>Customer List</b></span>
                        <a href="customer.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New Customer</a>
                </div>
                <div class="card-body">
                    <table id="table" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <th>Staff Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                            <?php
                            $sql="SELECT * FROM customers"; 
                                
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0)  {
                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
                            <tr>
                                <td>
                                    <?php echo $row['staff_id']?>
                                </td>

                                <td>
                                    <?php echo $row['name']?>
                                </td>
                                <td>
                                    <?php echo $row['phone']?>
                                </td>
                                <td>
                                    <?php echo $row['email']?>
                                </td>   
                                <td>
                                    <?php echo $row['date_time']?>
                                </td>
                                <td>
                                    <a class="btn btn-primary p-2"
                                        href="update_customer.php?customer_id=<?php echo $row['id']?>">edit</a>
                                    <a class="btn btn-danger"
                                        href="delete_customer.php?customer_id=<?php echo $row['id']?>">delete</a>
                                </td>

                            </tr>
                            <?php } } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
        include("footer.php");
?>
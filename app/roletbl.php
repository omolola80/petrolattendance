<?php
        
        include("header.php");
        include('db_connect.php');
        
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


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span><b>Staff List</b></span>
                        <a href="supplier.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New Supplier</a>
                </div>
                <div class="card-body">
                    <table id="table" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <th>NAME</th>
                        </thead>

                        <tbody>
                            <?php
                            $sql="SELECT * FROM roles"; 
                                
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0)  {
                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
                            <tr>
                                <td>
                                    <?php echo $row['name']?>
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
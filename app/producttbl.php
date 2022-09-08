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
                    <span><b>Product List</b></span>
                        <a href="product.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New Product</a>
                </div>
                <div class="card-body">
                    <table id="table" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <th>Product Categories Id</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Supplier Id</th>
                            <th>Staff Id</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                            <?php
                            $sql="SELECT * FROM products"; 
                                
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0)  {
                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
                            <tr>
                                <td>
                                    <?php echo $row['product_categories_id']?>
                                </td>

                                <td>
                                    <?php echo $row['price']?>
                                </td>
                                <td>
                                    <?php echo $row['quantity']?>
                                </td>
                                <td>
                                    <?php echo $row['supplier_id']?>
                                </td>   
                                <td>
                                    <?php echo $row['staff_id']?>
                                </td>
                                <td>
                                    <a class="btn btn-primary p-2"
                                        href="update_product.php?product_id=<?php echo $row['id']?>">edit</a>
                                    <a class="btn btn-danger"
                                        href="delete_product.php?product_id=<?php echo $row['id']?>">delete</a>
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
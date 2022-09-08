<?php
      include("db_connect.php");

      if (isset($_GET['product_id'])) {
            $id = $_GET['product_id'];

            $delete = "DELETE FROM `products` WHERE `id`= $id";

            $result = mysqli_query($conn, $delete);
            if ($result == true) {
                  echo "record deleted";
               echo "<script>confirm('do you want to delete');</scrip>.";
            }

      }

?>




<?php
      include("db_connect.php");

      if (isset($_GET['customer_id'])) {
            $id = $_GET['customer_id'];

            $delete = "DELETE FROM `customers` WHERE `id`= $id";

            $result = mysqli_query($conn, $delete);
            if ($result == true) {
                  echo "record deleted";
               echo "<script>confirm('do you want to delete');</scrip>.";
            }

      }

?>




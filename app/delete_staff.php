<?php
      include("db_connect.php");

      if (isset($_GET['staff_id'])) {
            $id = $_GET['staff_id'];

            $delete = "DELETE FROM `staffs` WHERE `id`= $id";

            $result = mysqli_query($conn, $delete);
            if ($result == true) {
                  echo "record deleted";
               echo "<script>confirm('do you want to delete');</scrip>.";
            }

      }

?>
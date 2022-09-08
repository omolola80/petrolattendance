<?php
      include("header.php");
      include("db_connect.php");
?>
    

    <?php
    if (isset($_GET["edit"])){
                      
        $staff_id = $_GET["staff_id"];
        $error = "";

       // echo $sql;
        $result =mysqli_query($conn, $sql);
        if ($result) {
            echo "";
        } else {
            echo "";
        }
        
     }
	
?> 

<?php
      include("footer.php");
?>
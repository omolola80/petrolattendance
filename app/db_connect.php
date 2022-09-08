<?php

        $severname = "localhost";
        $username  = "root";
        $password =  "root";
        $db_name  = "attendant_system";

        $conn = mysqli_connect($severname,$username,$password,$db_name); 

            if (!$conn) {
                echo "it can not connect to the database";
                mysqli_close($conn);
            }
            
?>






 <?php
    include("header.php");
    include('db_connect.php');

      
  ?>
         <!-- End Navbar -->
         <div class="content">
             <div class="container-fluid">
                 <div class="section">
                    <div class="card">
					    <div class="card-header">
                                <h1 style="text-align:center">WELCOME!</h1>
                                <p style>welome back<p>
				
                              <?php
                              echo" Welcome back";
                              ?>  
                         </div>
                    </div>
                </div>
             </div>
        </div>
           
  <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
   </script>       
    <?php
    include("footer.php");
    ?>
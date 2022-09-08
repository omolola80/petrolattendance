<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>PETROL ATTENDANT</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <style>
        a {
            text-decoration: none !important;
            font-family: Helvetica;
        }

        .sidebar-wrapper nav.left-nav899ii=0---=p {            /* background-color: #f5f5f5 */
        }

        .sidebar-wrapper nav.left-nav ul {
            margin-left: 0;
            padding-left: 0
        }

        .sidebar-wrapper nav.left-nav ul li {
            /* border-bottom: 2px solid #fff; */
            /* font-size: 1.75rem/ */
        }

        .image-container {
            /* background: #000 !important; */
            text-align: center;
            /* padding: 1rem 0;/ */
        }

        .sidebar-wrapper nav.left-nav ul li.nolistHighlight {
            background-color: #17629e;
            color: #fff;
            text-decoration: none
        }

        .sidebar-wrapper nav.left-nav ul li.nolistHighlight a {
            color: #fff
        }

        .sidebar-wrapper nav.left-nav ul li a {
            /* color: #010100;
            font-weight: 400; */
            display: block;
            /* padding: 1.6rem;
            padding-left: 1.5rem; */
            font-size: 1.25rem;
        }

        .sidebar-wrapper nav.left-nav ul li a:hover {
            color: #fff;
            /* background-color: #17629e; */
            text-decoration: none
        }

        .sidebar-wrapper nav.left-nav ul li ul {
            display: none;
            /* background-color: #d7d7d7 */
        }

        .sidebar-wrapper nav.left-nav ul li ul li a {
            font-size: 13px;
            font-weight: 100;
            padding-left: 5.5rem;
            color: #fff;
        }

        .sidebar-wrapper nav.left-nav ul li ul li a.active {
            /* background-color: initial; */
            color: #17629e;
            /* padding-bottom: initial/ */
        }

        .sidebar-wrapper nav.left-nav ul li ul li a:hover {
            color: #fff;
            /* background-color: #17629e */
        }
        div.wrapper {
            position: absolute;
        }
    </style>

</head>


<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--             
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag -->


            <div class="sidebar-wrapper">
                <div class="logo">
                    <!-- <a href="javascript:;" class="simple-text"> -->
                    <img src="../assets/img/oateklogo.png" width="150">

                </div>
                <nav class="left-nav hidden-xs hidden-sm hidden-md">
                    <ul class="nolist nav hidden-xs hidden-sm hidden-md">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboards.php">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">dashboards</span>
                        </a>
                    </li>
                      
                        <li>
                            <a class="nav-link" href="#">
                                <!-- <i class="nc-icon nc-bell-55"></i> -->
                                <p>staff</p>
                            </a>
                            <ul class="nolist"> 
                                <li>
                                    <a href="staff.php">create staff</a>
                                </li> 
                                <li>
                                    <a href="stafftbl.php">view staff</a>
                                </li>
                                
                               
                            </ul>
                        </li>
                        <li>
                            <a class="nav-link" href="#">
                                <!-- <i class="nc-icon nc-bell-55"></i> -->
                                <p>Customer</p>
                            </a>
                            <ul class="nolist">
                                <li>
                                    <a href="customer.php">Customer</a>
                                </li>
                                <li>
                                    <a href="customertbl.php">view customer</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-link" href="#">
                                <!-- <i class="nc-icon nc-bell-55"></i> -->
                                <p>Product</p>
                            </a>
                            <ul class="nolist">
                                <li>
                                    <a href="product.php">Product</a>
                                </li>
                                <li>
                                    <a href="producttbl.php">view product</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-link" href="#">
                                <!-- <i class="nc-icon nc-bell-55"></i> -->
                                <p>Product Categories</p>
                            </a>
                            <ul class="nolist">
                                <li>
                                    <a href="product_categories.php">Product Categories</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-link" href="#">
                                <!-- <i class="nc-icon nc-bell-55"></i> -->
                                <p>Store</p>
                            </a>
                            <ul class="nolist">
                                <li>
                                    <a href="Store.php">Store</a>
                                </li>
                                <li>
                                    <a href="create leave.php">Create leave</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-link" href="#">
                                <!-- <i class="nc-icon nc-chart-pie-35"></i> -->
                                <p>Supplier</p>
                            </a>
                            <ul class="nolist">
                            <li>
                                    <a href="supplier.php">Create Supplier</a>
                                </li>
                                <li>
                                    <a href="suppliertbl.php">View Supplier</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a class="nav-link" href="#">
                                <!-- <i class="nc-icon nc-bell-55"></i> -->
                                <p>Role</p>
                            </a>
                            <ul class="nolist">
                                <li>
                                    <a href="role.php">Create Role</a>
                                </li>
                                <li>
                                    <a href="roletbl.php">View Role</a>
                                </li>
                            </ul>
                        </li> 
                      
                        <li>
                            <a class="nav-link" href="#">
                                <!-- <i class="nc-icon nc-bell-55"></i> -->
                                <p>Transaction</p>
                            </a>
                            <ul class="nolist">
                                <li>
                                    <a href="transaction.php">Create Transaction</a>
                                </li>
                            </ul>
                        </li>
                      
                        
                        
                        <!-- <li>
                            <a class="nav-link" href="#">
                                <!-- <i class="nc-icon nc-bell-55"></i> -->
                                <!-- <p>users</p>
                            </a>
                            
                            <ul class="nolist">
                                <li>
                                    <!-- <a href="users.php">users</a> -->
                                </li>
                                <li>
                                    <!-- <a href="createusers.php">create users</a> -->
                                </li>
                               
                            </ul>
                        </li>  

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#pablo">Template</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button> -->
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                <i class="nc-icon nc-palette"></i>
                                <span class="d-lg-none">Dashboard</span>
                            </a>
                        </li>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nc-icon nc-zoom-split"></i>
                                <span class="d-lg-block">&nbsp;Search</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <span class="no-icon">Account</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">
                                <span class="no-icon">Log out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
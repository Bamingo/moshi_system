<?php
session_start();
if (empty($_SESSION['email'])) {
    header("location:login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Add News</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="css/slick.css"/>
        <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <!-- HEADER -->
        <header>
            <!-- TOP HEADER -->
            <div id="top-header">
                <div class="container">
                    <ul class="header-links pull-left">
                        <li><a href="#"><i class="fa fa-envelope-o"></i> WELCOME <strong><?php echo $_SESSION['email'] ?></strong></a></li>
                        <li><a href="my_account.php"><i class="fa fa-pencil"></i> POST TANGAZO</a></li>
                    </ul>
                    <ul class="header-links pull-right">

                        <li><a href="logout.php"><i class="fa fa-user-o"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <!-- /TOP HEADER -->

            <!-- MAIN HEADER -->
            <div id="header">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- LOGO -->
                        <div class="col-md-3">
                            <div class="header-logo">
                                <a href="#" class="logo">
                                    <img src="./img/logo.png" alt="">
                                </a>
                            </div>

                        </div>
                        <!-- /LOGO -->

                        <!-- SEARCH BAR -->
                        <div class="col-md-6">
                            <div class="header-search">
                                <form>
                                    <select class="input-select">
                                        <option value="0">All Categories</option>
                                        <option value="1">Category 01</option>
                                        <option value="1">Category 02</option>
                                    </select>
                                    <input class="input" placeholder="Search here">
                                    <button class="search-btn">Search</button>
                                </form>
                            </div>
                        </div>
                        <!-- /SEARCH BAR -->

                        <!-- ACCOUNT -->
                        <div class="col-md-3 clearfix">
                            <div class="header-ctn">
                                <!-- Wishlist -->

                                <!-- /Wishlist -->

                                <!-- Cart -->
                                
                                <!-- /Cart -->

                                <!-- Menu Toogle -->
                                <div class="menu-toggle">
                                    <a href="#">
                                        <i class="fa fa-bars"></i>
                                        <span>Menu</span>
                                    </a>
                                </div>
                                <!-- /Menu Toogle -->
                            </div>
                        </div>
                        <!-- /ACCOUNT -->
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- /MAIN HEADER -->
        </header>
        <!-- /HEADER -->

        <!-- NAVIGATION -->
        <nav id="navigation">
            <!-- container -->
            <div class="container">
                <!-- responsive-nav -->
                <div id="responsive-nav">
                    <!-- NAV -->
                    <ul class="main-nav nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="#">Hot News</a></li>
                        <li><a href="#">Employments</a></li>
                        <li><a href="#">New sales</a></li>
                        <li><a href="#">Social</a></li>
                        <li><a href="#">Moshi Tv</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>
        <!-- /NAVIGATION -->

        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container" style="display: block;">
                <section id="services">
                    <div class="container">
                        <div class="col-lg-6">
                            <center>
                                <?php
                                include 'db_connect.php';
                                
                                if (isset($_POST['btn'])) {
                                    $job_title = $_POST['job_title'];
                                    $company_name = $_POST['company_name'];
                                    $name = $_FILES['file']['name'];
                                    $deadline = $_POST['deadline'];
                                    $details = $_POST['details'];                                
                                    $destination = "product_img/";             
                                    $tmp_name = $_FILES['file']['tmp_name'];
                                    $type = $_FILES['file']['type'];
                                    $extension = strtolower(substr($name, strpos($name, '.') + 1));
                                    //$file_size = $_FILES['fie']['file_size'];
                                    //$max_size = 5000000;


                                    if (!empty($job_title) && !empty($company_name) && !empty($deadline) && !empty($details)) {
                                        if (($extension == 'jpg' || $extension == 'jpeg') && $type == 'image/jpeg') {
                                            if (move_uploaded_file($tmp_name, $destination . $name)) {
                                                $sql = "INSERT INTO job_adverts(job_title, company_name, name, deadline, details, user_id) VALUES('$job_title', '$company_name','$name','$deadline', '$details', '" . $_SESSION['user_id'] . "')";
                                                if (mysqli_query($link, $sql)) {
                                                    echo 'uploaded';
                                                } else {
                                                    echo 'failed ' . mysqli_error($link);
                                                }
                                            }
                                        } else {
                                            echo 'PLEASE CHOOSE CORRECT FORMAT';
                                        }
                                    } else {
                                        echo 'PLEASE FILL ALL THE FIELD'. mysqli_error($link);
                                    }
                                }

                               
                                ?>
                                <form action="job_adverts.php" class="form-group-sm" method="post" style="text-align: left" enctype="multipart/form-data">
                                    <h3 style="text-align: center; padding: 15px 20px;">POST TANGAZO LAKO LA KAZI HAPA</h3>
                                    <div class="form-group">
                                        <label for="email">Jina La Kazi:</label>
                                        <input type="title" class="form-control" id="email" name="job_title">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Jina la kampuni:</label>
                                        <input type="text" class="form-control" id="email" name="company_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Weka File:</label>
                                        <input type="file" class="form-control" id="file" name="file">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Weka Deadline:</label>
                                        <input type="date" class="form-control" id="file" name="deadline">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Weka Maelezo:</label>
                                        <textarea name="details" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="btn">Submit</button>
                                </form> 
                            </center>



                        </div>
                    </div>
                </section>
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->

        <!-- NEWSLETTER -->

        <!-- /NEWSLETTER -->

        <!-- FOOTER -->
        <footer id="footer">
            <!-- top footer -->
            <div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">About Us</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                                <ul class="footer-links">

                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Categories</h3>
                                <ul class="footer-links">
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="clearfix visible-xs"></div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Information</h3>
                                <ul class="footer-links">
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Service</h3>
                                <ul class="footer-links">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">View Cart</a></li>
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /top footer -->

            <!-- bottom footer -->
            <div id="bottom-footer" class="section">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="footer-payments">
                                
                            </ul>
                            <span class="copyright">
                                
                            </span>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /bottom footer -->
        </footer>
        <!-- /FOOTER -->

        <!-- jQuery Plugins -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/nouislider.min.js"></script>
        <script src="js/jquery.zoom.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>

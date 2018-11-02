<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Welcome</title>

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
                        <?php
                        if (isset($_SESSION['email'])) {
                            echo '<li><a href="#"><i class="fa fa-envelope-o"></i> WELCOME <strong>'.$_SESSION['email'].'</strong></a></li>'.'<li><a href="logout.php"><i class="fa fa-user-o"></i> Logout</a></li>';
                        } else {
                            echo '<li><a href="login.php"><i class="fa fa-sign-in"></i> Login</a></li><li><a href="register.php"><i class="fa fa-pencil"></i> Register</a></li>';
                        }
                        ?>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Hot News</a></li>
                        <li><a href="#">Employments</a></li>
                        <li><a href="#">New sales</a></li>
                        <li><a href="#">Social</a></li>
                        <li><a href="#">Moshi Tv</a></li>
                    </ul>
                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>
        <!-- /NAVIGATION -->

        <!-- BREADCRUMB -->
        
        <!-- /BREADCRUMB -->

        <!-- SECTION -->
        <div class="section">
            <!-- container -->

            <div class="container">
                <!-- row -->

                <div class="row">

                    <?php
                    include 'db_connect.php';

                    $sql = "SELECT * FROM adverts WHERE id = '" . $_GET['id'] . "'";
                    $results = mysqli_query($link, $sql) or die(mysqli_error($link));
                    if ($results) {

                        while ($row = mysqli_fetch_array($results)) {
                            echo ' <div class="col-md-5 col-md-push-2">
                        <div id="product-main-img">
                            <div class="product-preview">
                                <img src="product_img/' . $row['name'] . '" alt="">
                            </div>

                            <div class="product-preview">
                                <img src="product_img/' . $row['name'] . '" alt="" >
                            </div>

                            <div class="product-preview">
                                <img src="product_img/' . $row['name'] . '" alt="" >
                            </div>

                            <div class="product-preview">
                                <img src="product_img/' . $row['name'] . '" alt="" >
                            </div>
                        </div>
                    </div>
                    <!-- Product main img -->

                    <!-- /Product main img -->

                    <!-- Product thumb imgs -->
                    <div class="col-md-2  col-md-pull-5">
                        <div id="product-imgs">
                            <div class="product-preview">
                                 <img src="product_img/' . $row['name'] . '" alt="" >
                            </div>

                            <div class="product-preview">
                                 <img src="product_img/' . $row['name'] . '" alt="" >
                            </div>

                            <div class="product-preview">
                                 <img src="product_img/' . $row['name'] . '" alt="" >
                            </div>

                            <div class="product-preview">
                                 <img src="product_img/' . $row['name'] . '" alt="" >
                            </div>
                        </div>
                    </div>
                    <!-- /Product thumb imgs -->

                    <!-- Product details -->
                    <div class="col-md-5">
                        <div class="product-details">
                            <h2 class="product-name">Jina la Bidhaa: '.$row['product_name'].'</h2>
                            <div>
                            <h3 class="product-price" sytle="color:black;">Bei ya Bidhaa: TZS  '.$row['product_price'].' </h3> <br>
                                <h3 class="product-price">Ctegory:  '.$row['category'].' </h3>
                                
                            </div>
                            <h3>Maelezo:</h3>
                            <p>'.$row['descriptions'].'</p>
                            <div class="add-to-cart">
                            <h3>Piga Simu</h3>
                                <button class="btn btn-primary"><i class="fa fa-phone"></i> '.$row['phone'].'</button>
                            </div>
                        </div>
                    </div>';
                        }
                    }
                    ?>
                    <!-- /Product details -->

                    <!-- Product tab -->
                    
                    <!-- /product tab -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->

        <!-- Section -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3 class="title">Related Products</h3>
                        </div>
                    </div>

                    <!-- product -->
                    <div class="col-md-3 col-xs-6">
                          <?php
                                     /*   include 'db_connect.php';

                                        $sql = "SELECT * FROM adverts";
                                        if ($result = mysqli_query($link, $sql)) {
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo '<div class="product">
                                            <div class="product-img">
                                                <img src="product_img/' . $row['name'] . '" alt="" height="250">
                                                <div class="product-label">
                                                    <span class="sale">-30%</span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">' . $row['category'] . '</p>
                                                <h3 class="product-name"><a href="#">' . $row['product_name'] . '</a></h3>
                                                <h4 class="product-price">TZS ' . $row['product_price'] . '</h4>
                                                <div class="product-btns">
                                                    <a href="view_product.php?id=' . $row['id'] . '" class="btn btn-primary">VIew Product</a>
                                                </div>
                                            </div>
                                          
                                        </div>'
                                            }
                                        }*/
                                        ?>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    
                    <!-- /product -->

                    <div class="clearfix visible-sm visible-xs"></div>

                    <!-- product -->
                   
                    <!-- /product -->

                    <!-- product -->
                 
                    <!-- /product -->

                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /Section -->

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
                            <p>.</p>
                            <ul class="footer-links">

                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Links</h3>
                            <ul class="footer-links">

                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Sambaza</h3>
                            <ul class="footer-links">
                                <li><a href="https://api.whatsapp.com/send?phone=whatsappphonenumber&text=urlencodedtext"><i class="fa fa-whatsapp"></i> Whatsapp</a></li>
                                <li><a href="w-inline-block social-share-btn fb" href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><i class="fa fa-facebook-official"></i> Facebook</a></li>
                                <li><a href="https://twitter.com/intent/tweet?" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=%20Check%20up%20this%20awesome%20content' + encodeURIComponent(document.title) + ':%20 ' + encodeURIComponent(document.URL)); return false;" 
                                       target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Huduma zetu</h3>
                            <ul class="footer-links">

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

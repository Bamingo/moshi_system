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

        <title>Welcome Moshi</title>

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
        <style>
            h3{
                text-transform: uppercase;
                padding-top: 15px;


            }
            .details{
                padding: 15px;
                
                text-align: left;
                
            }
        </style>

    </head>
    <body>
        <!-- HEADER -->
        <header>
            <!-- TOP HEADER -->
            <div id="top-header">
                <div class="container">
                    <ul class="header-links pull-left">

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
                    </ul>
                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>
        <!-- /NAVIGATION -->



        <!-- /SECTION -->

        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="details">
                <div class="row">
                    <div class="col-md-4">
                        <?php
                        include 'db_connect.php';

                        $sql = "SELECT * FROM adverts WHERE id = '" . $_GET['id'] . "'";
                        $results = mysqli_query($link, $sql) or die(mysqli_error($link));
                        if ($results) {

                            while ($row = mysqli_fetch_array($results)) {
                                echo '<img src="product_img/' . $row['name'] . '" height="350" width="450" class="img img-thumbnail">';
                                echo '<h3>' . $row['product_name'] . '</h3>';
                                echo '<h4>AINA YA BIDHAA</h4>';
                                echo '<p>' . $row['category'] . '</p>';
                                echo '<h4>BEI YA BIDHAA</h4>';
                                echo '<p>TZS: ' . $row['product_price'] . '</p>';
                                echo '<h4>IDADI YA BIDHAA</h4>';
                                echo '<p>' . $row['quantity'] . '</p>';
                                echo '<h4>MAELEZO YA BIDHAA</h4>';
                                echo '<p>' . $row['descriptions'] . '</p>';
                                echo '<h4>NAMBA YAKO YA SIMU</h4>';
                                echo '<a href="" class="btn btn-primary">' . $row['phone'] . '</a>';
                            }
                        }
                        ?>
                    </div>
                    <div class="col-md-6">
                        hhjj
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <!-- row -->

                <div class="row">

                    <div class="col-lg-8">
                        <table class="table table-bordered table-responsive">

                            <?php
                            /* include 'db_connect.php';

                              $sql = "SELECT * FROM adverts WHERE id = '" . $_GET['id'] . "'";
                              $results = mysqli_query($link, $sql) or die(mysqli_error($link));
                              if ($results) {

                              while ($row = mysqli_fetch_array($results)) {
                              echo '<tr>';
                              echo '<td colspan="2">' . '<img src="product_img/' . $row['name'] . '" height="300" width="350" class="img img-thumnail">' . '</td>';
                              echo '</tr>';
                              echo '<tr>';
                              echo '<td style= "font-weight:bold;">PRODUCT NAME</td>';
                              echo '<td>' . $row['product_name'] . '</td>';
                              echo '</tr>';
                              echo '<tr>';
                              echo '<tr>';
                              echo '<td style= "font-weight:bold;">PRODUCT CATEGORY</td>';
                              echo '<td>' . $row['category'] . '</td>';
                              echo '</tr>';
                              echo '<tr>';
                              echo '<tr>';
                              echo '<td style= "font-weight:bold;">PRODUCT QUANTITY</td>';
                              echo '<td>' . $row['quantity'] . '</td>';
                              echo '</tr>';
                              echo '<tr>';
                              echo '<td style= "font-weight:bold;">PRODUCT PRICE</td>';
                              echo '<td>' . 'TZS ' . $row['product_price'] . '</td>';
                              echo '</tr>';
                              echo '<tr>';
                              echo '<tr>';
                              echo '<td style= "font-weight:bold; text-align:center;" colspan="2">PRODUCT DETAILS</td>';
                              echo '</tr>';
                              echo '<tr>';
                              echo '<td colspan="2">' . $row['descriptions'] . '</td>';
                              echo '</tr>';
                              echo '<tr>';
                              echo '<td colspan="2">' . '<h2>PIGA SIMU: <a href="#"><i class="fa fa-phone"></i> ' . $row['phone'] . '</a></h2>' . '</td>';
                              echo '<tr>';
                              }
                              } */
                            ?>
                        </table>
                    </div>

                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->

        <!-- NEWSLETTER -->
        <div id="newsletter" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->

                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
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


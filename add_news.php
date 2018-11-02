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
                        
                        <li><a href="jobs.php">Employments</a></li>
                        <li><a href="store.php">Matangazo</a></li>
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
                                    $title = $_POST['title'];
                                    $author = $_POST['author'];
                                    $descriptions = $_POST['descriptions'];
                                    $destination = "news_img/";
                                    $name = $_FILES['file']['name'];
                                    $tmp_name = $_FILES['file']['tmp_name'];

                                    if (move_uploaded_file($tmp_name, $destination . $name)) {
                                        $sql = "INSERT INTO news(title, author, name, user_id, descriptions) VALUES('$title','$author','$name','" . $_SESSION['user_id'] . "', '$descriptions')";
                                        if (mysqli_query($link, $sql)) {
                                            echo 'uploaded';
                                        } else {
                                            echo 'failed ' . mysqli_error($link);
                                        }
                                    }
                                }
                                ?>
                                <form action="add_news.php" class="form-group-sm" method="post" style="text-align: left" enctype="multipart/form-data">
                                    <h3 style="text-align: center; padding: 15px 20px;">PLEASE YOUR NEWS HERE</h3>
                                    <div class="form-group">
                                        <label for="email">News Title:</label>
                                        <input type="title" class="form-control" id="email" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Author:</label>
                                        <input type="text" class="form-control" id="email" name="author">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Upload Photo:</label>
                                        <input type="file" class="form-control" id="file" name="file">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="descriptions" class="form-control">!</textarea>
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

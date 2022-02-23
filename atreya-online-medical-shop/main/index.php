<?Php
session_start();
$search_query = '';
if(isset($_GET["query"])){
  $search_query = $_GET["query"];
}

$page_no = 1;
if(isset($_GET["pageno"])){
  $page_no = $_GET["pageno"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Medical Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">



</head>

<body>

    <div class="site-wrap">
        <header class="site-navbar">
            <div class="site-navbar-top">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-6 col-md-4 order-2 order-md-1">
                            <form action="shop.php" class="site-block-top-search">
                                <input type="text" name="query" class="form-control border-0" placeholder="Search"
                                    value="<?php echo $search_query;?>">
                            </form>
                        </div>

                        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                            <div class="site-logo">
                                <a href="index.php" class="js-logo-clone">Atreya Online Medical Store</a>
                            </div>
                        </div>

                        <div class="text-right col-6 col-md-4 order-3 order-md-3">
                            <div class="site-top-icons">
                                <ul>
                                    <li><a href="signup.php"><button type="button"
                                                class="btn btn-outline-secondary">Account</button></a></li>
                                    <li><a href="cart.php" class="site-cart"><button type="button"
                                                class="btn btn-outline-secondary">Cart</button></a></li>
                                    <li><a href="logout.php"><button type="button"
                                                class="btn btn-outline-secondary">Logout</button></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <nav class="site-navigation text-md-center" role="navigation">
                <div class="container">
                    <ul class="site-menu">
                        <li class="active"><a href="index.php"><button type="button"
                                    class="btn btn-primary">Home</button></a></li>
                        <li><a href="shop.php"><button type="button" class="btn btn-primary">Store</button></a></li>
                        <li><a href="about.php"><button type="button" class="btn btn-primary">About us</button></a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="site-blocks-cover" style="background-image: url(images/doctor.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="mb-2">Buy Prescribed Medications Online</h1>
                        <p class="mb-4">When it comes to your prescribed medications, Atreya Online Medical Shop is
                            devoted to offering the best possible service. </p>
                        <p>
                            <a href="shop.php" class="btn btn-sm btn-primary">Buy Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>



        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 site-section-heading text-center pt-3">
                        <h2>Learn More About Our Medical Professionals</h2>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <img src="images/nurse-in-mask.png" class="img-fluid rounded">
                    </div>
                    <div class="col-md-12 col-lg-5 justify-content-center">
                        <p>Atreya's On-line Medical Clinic Individualized treatment is what sets shop pharmacists apart
                            from other types of pharmacists. Additionally, all of our pharmacists are licenced to
                            provide vaccines in accordance with the state's standards. Our pharmacists' everyday
                            encounters with you, our clients, sets them unique from the others. At Atreya Medical, we're
                            here to help.</p>
                        <p><a href="about.php" class="btn btn-primary btn-sm">Know more</a></p>
                    </div>
                </div>
            </div>
        </div>

        <section class="features-icons">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="features-icons-item mx-auto mb-5">
                            <div class="features-icons-icon d-flex">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                            </div>
                            <h3>Free Shipping for Everyone</h3>
                            <p>We offer free Shipping 24 hours. Just order the product from the shop.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="features-icons-item mx-auto mb-5">
                            <div class="features-icons-icon d-flex">
                                <i class="fa fa-address-book"></i>
                            </div>
                            <h3>Customer Support</h3>
                            <p>Get answers from a pharmacist now. Contact us on 9876543210.
                                We're committed to offering you, our customers, personalized online pharmacy care and
                                resources, whenever and wherever you need it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                    </script>
                </p>
            </div>
        </footer>
    </div>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>

</body>

</html>
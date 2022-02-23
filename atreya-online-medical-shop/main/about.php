<?Php
session_start();
$search_query = '';
if (isset($_GET["query"])) {
  $search_query = $_GET["query"];
}

$page_no = 1;
if (isset($_GET["pageno"])) {
  $page_no = $_GET["pageno"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pharmacy</title>
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
                                    value="<?php echo $search_query; ?>">
                            </form>
                        </div>

                        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                            <div class="site-logo">
                                <a href="index.php" class="js-logo-clone">Atreya Online Medical Shop</a>
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
                                    </a>
                                    </li>
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

        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong
                            class="text-black">About</strong></div>
                </div>
            </div>
        </div>

        <div class="site-section block-8">
            <div class="container">
                <div class="row justify-content-center  mb-5">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>Learn more about our pharmacists</h2>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-12 col-lg-5 pl-md-5">
                        <p>Pharmacists at Atreya Medical Shop do a lot more than just fill prescriptions. Our pharmacist
                            can assist your and your family in maintaining good health.</p>
                        <button class="accordion">Answering your queries:</button>
                        <div class="panel">
                            <p>Your pharmacist can assist you with any questions you may have about your drugs or one of
                                the numerous services we provide. They are always willing and ready to help you.</p>
                        </div>

                        <button class="accordion">Provide Immunizations: </button>
                        <div class="panel">
                            <p>Our pharmacists are specifically educated and certified to give a wide range of vaccines.
                                There is no need to make an appointment, and most insurance plans are accepted. FREE
                                Immunization Evaluation and speak with your pharmacist today.</p>
                        </div>

                        <button class="accordion">Helping you save money: </button>
                        <div class="panel">
                            <p>Your pharmacist can answer any questions you have concerning your medication insurance,
                                including medical beneficiaries.</p>
                        </div>

                        <button class="accordion">Work with your doctor: </button>
                        <div class="panel">
                            <p>When your doctor has questions or concerns regarding the meds you're taking, your
                                pharmacist will contact them immediately. They retain a complete history of the
                                prescriptions you take to ensure you are at the lowest risk for overdosing and harmful
                                drug reactions.</p>
                        </div>


                        <h4>So make an appointment with your Atreya Medical Shop's pharmacist right now. They will be
                            able to better service you and your requirements if they have a deeper understanding of you.
                        </h4>
                    </div>
                </div>
            </div>
        </div>


        <footer class="site-footer border-top">
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
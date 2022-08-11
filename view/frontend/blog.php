<?php

use function PHPSTORM_META\type;

require_once('../../data/dbhelp.php');
$dataList = executeResult('select * from blog');

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <link rel="stylesheet" href="../../css/blog.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <script src="https://kit.fontawesome.com/d953ad999c.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="icon" type="image/png" href="../../images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../../images/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">

</head>

<body>

    <!-- header -->

    <header class="container-fluid menu-header">
        <div class="row">
            <nav class="menu-bar">
                <ul>
                    <img src="../../images/resources/logo-2.png">
                    <li><a href="../../index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                    <li><a href="doctor.php"><i class="fa fa-user-doctor"></i>Doctor</a></li>
                    <li><a href="#"><i class="fa fa-user-check"></i>Service</a>
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="checkup.php">Check Ups</a></li>
                                <li><a href="dental_bridge.php">Dental Bridges</a></li>
                                <li><a href="dental_implant.php">Dental Implants</a></li>
                                <li><a href="filling.php">Fillings</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="price.php"><i class="las la-file-invoice"></i>Price</a></li>  
                    <li  class="active"><a href="blog.php"><i class="fa fa-blog"></i>Blog</a></li>
                    <div>
                        <span class="las la-search"></span>
                        <input type="text" class="search" placeholder="Search">
                    </div>
                </ul>
            </nav>
        </div>
    </header>

    <!-- end header -->

    <!-- body -->
    
    <div class="body-3">
        <div class="price">
            <div class="price-items">
                <div class="row">
                    
                     <?php
                        foreach($dataList as $item) {
                            echo '
                                <div>
                                    <a href="">
                                        <div class="service-card">
                                            <div class="row">
                                                <div class="thumbnail col col-md-3">
                                                    <img src="'.$item['image'].'" alt="">
                                                </div>
                                                <div class="card-items col col-md-9 ">
                                                    <div class="card-title">
                                                        <h3>'.$item['name'].'</h3>
                                                    </div>
                                                    <div class="card-content">  
                                                        <div class="checkups">
                                                            '.$item['content'].'
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            ';
                        };
                    ?>
                </div>
            </div>
        </div>
    </div>


    <!-- end body -->

    <!-- footer -->
    <footer class="container-fluid">
        <div class="row">
            <div class="col-3">
                <img src="../../images/resources/logo-2.png" sizes="32x32" class="logo">
                <p>Dento Viet Nam was started in the year of 2021 as a small private dental clinic in Le Thanh Nghi, Ha Noi, Viet Nam. Looking for affordable dental care?</p>
                <p class="bottom-text">To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain.</p>
            </div>
            <div class="col-2">
                 <h3>Link</h3>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="doctor.php">Doctor</a></li>
                <li><a href="chekup.php">Service</a></li>
                <li><a href="price.php">Price</a></li>
                <li><a href="blog.php">Blog</a></li>
            </div>
            <div class="col-4">
                <h3>Opening Hour</h3>
                <div>
                    <ul class="opening-hours">
                        <li>Monday <span class="float-right">8.30am–6.30pm</span></li>
                        <li>Tuesday <span class="float-right">10.00am–8.00pm</span></li>
                        <li>Wednesday <span class="float-right">8.30am–6.30pm</span></li>
                        <li>Thursday <span class="float-right">8.30am–7.00pm</span></li>
                        <li>Friday <span class="float-right">8.30am–3.00pm</span></li>
                        <li>Saturday <span class="float-right">8.30am–2.00pm</span></li>
                        <li>Sunday <span class="float-right color-red">Closed</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-3">
                <div class="information col-8">
                    <li><i class="far fa-solid fa-envelope"></i>suport@example.com
                    </li>
                    <li><i class="far fa-solid fa-phone"></i>+84 123456789
                    </li>
                    <li><i class="far fa-address-card"></i> 54 Le Thanh Nghi, Hai Ba Trung
                    </li>
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></i></a>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright by Team 4 C2110L © 2022</p>
    </footer>
    <!-- end footer -->


    <script type="text/javascript">
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 5000);
    </script>
</body>

</html>
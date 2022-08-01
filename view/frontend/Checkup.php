<?php 

require_once('../../data/dbhelp.php');
$fullname = $age = $email = $address = $service_content = $service = $Creat_at = $Update_at = '';
    if (!empty($_POST)) {
        $fullname = $_POST['fullname'];
        $birth = $_POST['birth'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $service = $_POST['service'];
        $content = $_POST['content'];
        // $Creat_at = $_POST['Creat_at'];
        // $update_at = $_POST['update_at'];

        $sql = "insert into service_orders(Fullname,Birth,Email,Address,Service,Content) values ('$fullname','$birth','$email','$address','$service','$content')";
        execute($sql);
        header('Location: product.php');
    }

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>

    <link rel="stylesheet" href="../../css/service.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <script src="https://kit.fontawesome.com/d953ad999c.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="icon" type="image/png" href="../images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../images/favicon/favicon-16x16.png" sizes="16x16">
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
                    <img src="../images/resources/logo-2.png">
                    <li><a href="../index.html"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="about_us.html">About Us</a></li>
                    <li><a href="#"><i class="fa fa-user-doctor"></i>Doctor</a></li>
                    <li class="active"><a href="#"><i class="fa fa-user-check"></i>Service</a>
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="checkup.php">Check Ups</a></li>
                                <li><a href="dental_bridge.php">Dental Bridges</a></li>
                                <li><a href="dental_implant.php">Dental Implants</a></li>
                                <li><a href="filling.php">Fillings</a></li>
                                <!-- <li><a href="#">Treating Gum Disease</a></li>
                                <li><a href="#">Tooth Extraction & Removal</a></li>
                                <li><a href="#">Cosmetic Dentistry</a></li>
                                <li><a href="#">Dental Crowns</a></li>
                                <li><a href="#">Emergency Dental Care</a></li>
                                <li><a href="#">Oral Surgery</a></li>
                                <li><a href="#">Root Canal</a></li> -->
                            </ul>
                        </div>
                    </li>
                    <li><a href="product.html"><i class="las la-shopping-cart"></i>Product</a></li>
                    <li><a href="#"><i class="fa fa-blog"></i>Blog</a></li>
                    <div>
                        <span class="las la-search"></span>
                        <input type="text" class="search" placeholder="Search">
                    </div>
                </ul>
            </nav>
        </div>
    </header>
    </div>
    <!-- end header -->

    <div class="container service-content">
        <ol class="listup">
            <li><a href="../index.html">Home</a></li>
            <li>></li>
            <li>Service</li>
            <li>></li>
            <li>Check Ups</li>
        </ol>
    </div>
    <!-- body -->
    <div class="container" style="margin-bottom: 20px;">
        <div class="row">
            <div class="col-sm-9">
                <h1>Dental Check Ups</h1>
                <p>Great oral health starts here, with a free dental exam for patients without insurance (some limitations apply*). Based on this initial exam, your dentist will create your customized dental treatment plan, which will be a guide for you
                    and your dental team going forward in order to give you a healthy mouth. </p>
                <p>While the services you’ll receive may vary, here’s what you can expect at your first dental checkup: </p>
                <ol style="list-style: none; list-style-type: circle;">
                    <li>
                        <p><b>A review of your medical history. </b>Tell your dentist about your diet or medications as these may impact your treatment and oral health</p>
                    </li>
                    <li>
                        <p><b>A conversation with your dentist </b>about any concerns you have regarding your teeth, mouth, or overall oral health — we encourage you to ask questions </p>
                    </li>
                    <li>
                        <p>An oral exam, including a <b>visual gum tissue check and visual oral cancer scan </b></p>
                    </li>
                    <li>
                        <p><b>X-rays</b>, if necessary, to see your teeth below the gum line </p>
                    </li>
                    <li>
                        <p><b>A comprehensive treatment plan</b>, with recommended treatment and ongoing care from your dentist</p>
                    </li>
                </ol>
                <p>Your dentist will tailor your comprehensive treatment plan, including your hygiene appointments, based on your initial exam. Treatment could begin as soon as the day following your initial exam.</p>

                <img src="../images/service_html/checkup/1.jpg" alt="" style="width: 45%;">
                <img src="../images/service_html/checkup/2.jpeg" alt="" style="width: 45%;">
            </div>
            
            <div class="col-sm-3" st>
                <form method="POST">
                <div class="service-frame">
                    <div class="form-group">
                        <label>Full name:</label>
                        <input required="true" type="text" name="fullname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Birth</label>
                        <input required="true" type="date" name="birth" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input required="true" type="text" name="email" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <input required="true" type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Services:</label>
                        <select class="form-control"  name="service">   
                            <option >Select</option>
                            <option >Check Up</option>
                            <option >Dental Bridge</option>
                            <option  >Dental Implant</option>
                            <option >Filling</option> 
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Content:</label>
                        <textarea class="form-control" rows="5" name="content"></textarea>
                    </div>
                   
                    <div class="form-group">
                        <button class="btn btn-success">Book</button>
                    </div>
                </div>
           
            </form>
             </div>
        </div>
    </div>

    <!-- end body -->


    <!-- footer -->
    <footer>
        <div class="row">
            <div class="col-3">
                <img src="../images/resources/logo-2.png" sizes="32x32" class="logo">
                <p>Dento was started in the year 1995 as a small private dental clinic in Binghamton, NY, USA. Looking for affordable dental care?</p>
                <p class="bottom-text">To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain.</p>
            </div>
            <div class="col-2">
                <h3>Link</h3>
                <li><a href="../index.html">Home</a></li>
                <li><a href="about_us.html">About Us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="product.html">Product</a></li>
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
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin"></i>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright by Team 4 C2110L © 2022</p>
    </footer>
    <!-- end footer -->
</body>

</html>
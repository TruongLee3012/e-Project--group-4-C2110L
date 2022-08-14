<?php 

require_once('../../data/dbhelp.php');
$fullname = $age = $email = $address = $service_content = $service = '';
    if (!empty($_POST)) {
        $fullname = $_POST['fullname'];       
        $email = $_POST['email'];
        $phone = $_POST['phone'];
       
        $service = $_POST['service'];
        $content = $_POST['content'];
       
      
        $sql = "insert into service_orders(Fullname,Email,Phone,Service,Content) values ('$fullname','$email','$phone','$service','$content')";
        execute($sql);
        header('Location: price.php');
    }

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Implants</title>

    <link rel="stylesheet" href="../../css/service.css">

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
                    <div>
                        <h2><span class="las la-tooth"></span><span>Belleville</span></h2>
                    </div>
                    <li><a href="../../index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                    <li><a href="doctor.php"><i class="fa fa-user-doctor"></i>Doctor</a></li>
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
                    <li><a href="price.php"><i class="las la-shopping-cart"></i>Price</a></li>
                    <li><a href="blog.php"><i class="fa fa-blog"></i>Blog</a></li>
                    <div>
                        <span class="las la-search"></span>
                        <input type="text" class="search" placeholder="Search">
                    </div>
                </ul>
            </nav>
        </div>
    </header>
    <!-- end header -->
    <div class="container service-content">
        <ol class="listup">
            <li><a href="../../index.php">Home</a></li>
            <li>></li>
            <li>Service</li>
            <li>></li>
            <li>Dental Implant</li>
        </ol>
    </div>
    <!-- body -->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h1>Discover all the life changing possibilities with dental implants</h1>
                <p>Want a long-term solution for a smile that’s been missing, or a bite that’s been off? Aspen Dental implants are a great way to bring back love, laughter and living life at its best. They fit, feel and function just like your own natural
                    teeth, and with proper care, they can last you for years to come. And when you choose Aspen Dental for your implants you can be assured peace of mind that we’ll make everything right to your satisfaction.</p>
                <div class="implants">
                    <table>
                        <tr>
                            <td colspan="2">
                                <h2>Understanding your new implants</h2>
                                <p>The best long-term solution to missing teeth is dental implants. That’s because they become a fixed part of your mouth and allow you to go about your everyday life naturally—no one will know unless you tell them. Here’s
                                    how they work:</p>
                            </td>
                            <td rowspan="2">
                                <img src="../../images/Service_html/dental_implant/1.jpg" style="height: 400px;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row" style="list-style: none;">
                                    <p class="col-3" id="implant1">1</p>
                                    <p class="col-9" style="font-size: 32px">Crown</p>
                                    <div>
                                        <p>This is the tooth portion of your implant, designed to blend in and work as hard as your natural teeth.</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row" style="list-style: none;">
                                    <p class="col-3" id="implant1">2</p>
                                    <p class="col-9" style="font-size: 32px">Implant</p>
                                    <div>
                                        <p>This anchor piece fits naturally and securely into your jaw like your natural tooth root, creating a strong bond that improves bone health.</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

                <div id="implant2">
                    <table border="1px">
                        <tr>
                            <th>Dental Implants</th>
                            <th>Dentures</th>
                        </tr>
                        <tr>
                            <td>Preserve and maintain facial struture (keeps you looking young)</td>
                            <td>Decreasing jawbone quality can lead to further deterioation of facial structure</td>
                        </tr>
                        <tr>
                            <td>Feel and function like natural teeth</td>
                            <td>Can feel unnatural, with restrictd chewing capacity</td>
                        </tr>
                        <tr>
                            <td>No need for creams or adhesives</td>
                            <td>Likely require creams and adhesives</td>
                        </tr>
                        <tr>
                            <td>Long-lasting solution</td>
                            <td>Eventually need to be remade or relined</td>
                        </tr>
                        <tr>
                            <td>Easy care and cleaning</td>
                            <td>Need to be removed regularly for cleaning</td>
                        </tr>
                    </table>
                </div>
                <div class="container" style="text-align:center;margin-top: 20px; margin-bottom: 20px;">
                    <h1 style="color:#002d55 ; font-family:Messina Sans bold; font-size:48px">A smile made just for you</h1>
                    <p>You like options. So, let’s work together to find the right custom smile implant solution for you.</p>
                </div>
                <div class="row" style="margin-left: 0px;">
                    <div class="col-4" id="implant3">
                        <div style="background-image: url( ../../images/Service_html/dental_implant/2.jpg ); height: 150px;"> </div>
                        <h3>Implant-supported single tooth</h3>
                        <p>When a patient needs one or more teeth replaced and wants the healthiest option with maximum stability, single implants are the best choice.</p>
                    </div>
                    <div class="col-4" id="implant3">
                        <div style="background-image: url( ../../images/Service_html/dental_implant/3.jpg ); height: 150px;"> </div>
                        <h3>Implant-supported bridges</h3>
                        <p>When a patient has multiple teeth that need replacing, a bridge that prevents significant shifting may be best</p>
                    </div>
                    <div class="col-4" id="implant3">
                        <div style="background-image: url( ../../images/Service_html/dental_implant/4.jpg ); height: 150px;"> </div>
                        <h3>Implant-supported dentures</h3>
                        <p>When a patient needs an entirely new row of upper or lower teeth, an implant-supported denture is the most secure denture solution.</p>
                    </div>

                </div>

            </div>

            <div class="col-sm-3">
               <form method="post">
                <div class="service-frame">
                    <div class="form-group">
                        <label>Full name:</label>
                        <input required="true" type="text" name="fullname" class="form-control" >
                    </div>

                     <div class="form-group">
                        <label>Email:</label>
                        <input required="true" type="email" name="email" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Phone Number:</label>
                        <input required="true" type="number" name="phone" class="form-control" >
                    </div>
                  
                    <div class="form-group">
                        <label>Services:</label>
                        <select class="form-control"  name="service">   
                            <option>Select</option>
                            <option>Check Up</option>
                            <option>Dental Bridge</option>
                            <option>Dental Implant</option>
                            <option>Filling</option> 
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Content:</label>
                        <textarea class="form-control" name="content" rows="5"></textarea>
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
                <div>
                    <h2><span class="las la-tooth"></span><span>Belleville</span></h2>
                </div>
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
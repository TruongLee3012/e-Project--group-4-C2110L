<?php 

require_once('../../data/dbhelp.php');
$fullname = $age = $email = $address = $service_content = $service = '';
    if (!empty($_POST)) {
        $fullname = $_POST['fullname'];
        $birth = $_POST['birth'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $service = $_POST['service'];
        $content = $_POST['content'];
       
      
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
    <title>Filling</title>

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
                    <img src="../../images/resources/logo-2.png">
                    <li><a href="../../index.html"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="about_us.php">About Us</a></li>
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
                    <li><a href="product.php"><i class="las la-shopping-cart"></i>Product</a></li>
                    <li><a href="#"><i class="fa fa-blog"></i>Blog</a></li>
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
            <li><a href="../../index.html">Home</a></li>
            <li>></li>
            <li>Service</li>
            <li>></li>
            <li>Fillings</li>
        </ol>
    </div>
    <!-- body -->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h1 style="color:#0070b9">Tooth Fillings & Dental Filling Procedures</h1>
                <p>Most people need at least one tooth filling in their lifetime. Dental filling procedures are most commonly used to treat cavities, but they’re also used to repair cracked or broken teeth, or teeth that have been worn down over time.</p>
                <p>Most dental filling procedures feature the following: </p>
                <ol style="list-style: none; list-style-type: circle;">
                    <li>Topical anesthetic to numb the area of treatment</li>
                    <li>Decay removal from the affected teeth</li>
                    <li>Tooth restoration using a composite or amalgam filling</li>
                    <li>Bite check to make sure your teeth align comfortably</li>
                </ol>
                <p>The team at your Aspen Dental practice will ensure you are comfortable before, during, and after your procedure, and will happily to answer any questions you may have. In addition, here are useful tips for <b>overcoming dental anxiety.</b>                    </p>
                <h4>Cracked Tooth</h4>
                <p>A tooth that is cracked can be painful. It also can lead to disease of the tooth.</p>
                <p>How do you know if you have a cracked tooth? Look for these signs:</p>
                <ul>
                    <li>sharp pain when biting down that quickly disappears</li>
                    <li>pain that comes and goes</li>
                    <li>pain when eating or drinking</li>
                    <li>feeling that something is stuck between your teeth</li>
                </ul>
                <p>Or you may have no signs at all.</p>
                <h4>How Can You Tell if a Tooth is Cracked?</h4>
                <p>It can be hard for you to tell if a tooth is cracked. If you have pain, you may not be able to tell which tooth hurts or whether the pain is from an upper or a lower tooth. Cracks sometimes are invisible to the eye and may not show up
                    on an x-ray. And sometimes you won’t have any pain or sensitivity at all; your dentist will discover it during your exam.</p>
                <p>If you are having symptoms, you can help your dentist find the cracked tooth by sharing some information:</p>
                <ul>
                    <li>the things that cause you tooth pain (such as heat, cold or foods that are sweet, sour or sticky)</li>
                    <li>the area of the pain</li>
                </ul>

                <h4>Why Does a Tooth Crack?</h4>
                <p>A tooth may crack for many reasons, such as the following:</p>
                <ul>
                    <li>chewing on hard objects or foods such as pencils, ice, nuts or hard candy</li>
                    <li>an accident, such as a blow to the mouth</li>
                    <li>grinding or clenching of teeth</li>
                    <li>uneven chewing pressure, especially if a nearby tooth is lost</li>
                    <li>loss of tooth structure through wear</li>
                    <li>loss of tooth structure due to large fillings or other restorations</li>
                    <li>exposure of tooth enamel to extreme hot and cold temperatures</li>
                </ul>

                <h4>Why Does a Cracked Tooth Hurt?</h4>
                <p>Sometimes, a crack in the enamel travels through to the nerve pulp. This type of cracked tooth may hurt when you bite down or when you stop biting. The crack may be too small to see, but when it opens, the pulp inside the tooth may become
                    irritated. The pulp is soft tissue inside the center of the tooth that contains the nerves and blood vessels. If the crack extends into the pulp, the tooth may become sensitive to extreme heat and cold.</p>
                <p>The pulp also can be affected as a result of the crack. If this happens, endodontic (root canal) treatment may be needed to save the tooth.</p>

                <div class="row">
                    <div class="col-sm-6">
                        <p><img src="../../images/Service_html/Filling/1.png" style="width: 100%;height: 300px;"></p>
                        <p style="color: skyblue; text-align: center;">A small crack in the tooth</p>
                    </div>
                    <div class="col-sm-6">
                        <p><img src="../../images/Service_html/Filling/2.png" style="width: 100%;height: 300px;"></p>
                        <p style="color: skyblue; text-align: center;">Crack widens when teeth bite down</p>
                    </div>
                </div>

                <h4>How is a Cracked Tooth Treated?</h4>
                <p>Treatment depends on the size, location and direction of the crack, as well as your symptoms. Your dentist will talk with you about the treatment that is best for your tooth. It is possible that your dentist will recommend no treatment
                    at all, since tiny cracks are common and usually do not cause problems.</p>
                <p>Types of treatment include the following:</p>
                <ul>
                    <li>repairing the tooth with a filling material</li>
                    <li>placing a crown (cap) on the tooth to protect it from further damage</li>
                    <li>endodontic (root canal) treatment if the pulp is involved</li>
                    <li>extracting the tooth if it is severely cracked and cannot be saved</li>
                </ul>
                <p>Regular dental checkups are important, because they let your dentist diagnose and treat problems at an early stage. A cracked tooth can become a bigger problem if left untreated. If you think you may have a cracked tooth, visit your dentist.
                </p>
            </div>

            <div class="col-sm-3">
                <form method="post">
                <div class="service-frame">
                    <div class="form-group">
                        <label>Full name:</label>
                        <input required="true" type="text" name="fullname" class="form-control" >
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
                        <input required="true" type="text" name="address" class="form-control" >
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
                <img src="../../images/resources/logo-2.png" sizes="32x32" class="logo">
                <p>Dento was started in the year 1995 as a small private dental clinic in Binghamton, NY, USA. Looking for affordable dental care?</p>
                <p class="bottom-text">To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain.</p>
            </div>
            <div class="col-2">
                <h3>Link</h3>
                <li><a href="../../index.html">Home</a></li>
                <li><a href="about_us.php">About Us</a></li>
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
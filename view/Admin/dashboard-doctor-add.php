<?php
session_start();

if(!isset($_SESSION['user'])) {
    header('Location: login.php');
    die();
}

require_once('../../data/dbhelp.php');


if(!empty($_POST)) {
   

    $fullname = $_POST['fullname'];
    $position = $_POST['position'];
    $infomation = $_POST['infomation'];
    $qualification = $_POST['qualification'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $image = $_POST['image'];
    // $update_at = $create_at = date('Y-m-d H:i:s');

 $sql = "insert into doctor(Fullname,position, infomation, qualification,Phone,Email,Image) values ('$fullname','$position', '$infomation', '$qualification','$phone','$email','$image' )";
    execute($sql);
    header('Location:dashboard-doctor.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Page</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../css/dashboard-account.css">
    <link rel="icon" type="image/png" href="../../images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../../images/favicon/favicon-16x16.png" sizes="16x16">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <script src="https://kit.fontawesome.com/d953ad999c.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-tooth"></span><span>Dento</span></h2>
        </div>
        <div class="sidebar-menu">
           <ul>
                <li class="not-hover">
                    <a href="dashboard.php" ><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                 <li>
                    <a href="dashboard-customers.php"><span class="las la-users-cog"></span>
                    <span>Customer</span></a>
                </li>
                <li>
                    <a href="dashboard-service-order.php" ><span class="las la-shopping-bag"></span>
                    <span>Service order</span></a>
                </li>
                <li>
                    <a href="dashboard-doctor.php" class="active" ><span class="las la-users-cog"></span>
                    <span>Doctor</span></a>
                </li>
                <li>
                    <a href="dashboard-blog.php"><span class="las la-clipboard-list"></span>
                    <span>List Blog</span></a>
                </li>
                
               
                 <li>
                    <a href="logout.php"><span class="las la-sign-out-alt"></span>
                    <span>Log out</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                        <span class="las la-bars"></span>
                </label> Dashboard
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search">
            </div>
            <div class="user-wrapper">
                <img src="../../images/test-admin.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Truong Lee</h4>
                    <small>Admin</small>
                </div>
            </div>
        </header>

        <main>
            <div class="container table-responsive-sm">
                <form method="post">
                    <div class="form-group">
                     <label>Fullname:</label>
                    <input required type="text" name="fullname" placeholder="Enter fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Position:</label>
                        <select class="form-control" name="position">
                            <option>Select</option>
                            <option>Dentist</option>
                            <option>Orthodontist</option>
                            <option>Dental Clinic</option>
                            <option>Assistant</option>
                            <option>Hygienist</option>
                            <option>Nurse</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <label>Infomation: </label>
                    <input required type="text" name="infomation" placeholder="Enter infomation" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Qualification: </label>
                    <input required type="text"  name="qualification" placeholder="Enter qualification" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Phone: </label>
                    <input  required type="number"  name="phone" placeholder="Enter phone" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Email: </label>
                    <input required type="email"  name="email" placeholder="Enter email" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Image: </label>
                    <input required type="text"  name="image" placeholder="Enter Image" class="form-control">
                    <a href="dashboard-doctor.php" ><p style="margin-top: 20px;">Back to doctor list</p></a>

                    <div class="form-group">
                        <button class="btn btn-success">Add</button>
                    </div>

                </form>
            </div>
        </main>
    </div>
    <style type="text/css">
    .table-responsive-sm p{
        padding-bottom: 5px;
    }
</style>
</body>

</html>
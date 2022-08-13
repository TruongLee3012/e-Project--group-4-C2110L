<?php
require_once('../../data/dbhelp.php');
session_start();

if(!isset($_SESSION['user'])) {
    header('Location: login.php');
    die();
}

if(!empty($_POST)) {
	$id = $_POST['id'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $content = $_POST['content'];
       

	$sql = "update service_orders set fullname = '$fullname', phone = '$phone', email = '$email', service = '$service',content = '$content' where id = $id";
	execute($sql);

    header('Location: dashboard-service-order.php');
	die();
}

$id = $_GET['id'];
$item = executeResult("select * from service_orders where id = $id", true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
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
            <h2><span class="las la-tooth"></span><span>Belleville</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php" ><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                 <li>
                    <a href="dashboard-customers.php"><span class="las la-users-cog"></span>
                    <span>Customer</span></a>
                </li>
                <li class="not-hover">
                    <a href="dashboard-service-order.php" class="active" ><span class="las la-shopping-bag"></span>
                    <span>Service order</span></a>
                </li>
                <li>
                    <a href="dashboard-doctor.php" ><span class="las la-users-cog"></span>
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
            <div class="container">
                <form method="post">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <div class="form-group">
                        <label>Full name:</label>
                        <input type="text" name="fullname" class="form-control" value="<?=$item['fullname']?>">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?=$item['email']?>">
                    </div>
                    <div class="form-group">
                        <label>Phone:</label>
                        <input type="number" name="phone" class="form-control" value="<?=$item['phone']?>">
                    </div>
                   
                    <div class="form-group">
                        <label>Services:</label>
                        <select class="form-control"  name="service" > 
                            <option <?=$item['service']?>>Select</option>
                            <option <?=$item['service']?>>Check Up</option>
                            <option <?=$item['service']?>>Dental Bridge</option>
                            <option <?=$item['service']?>>Dental Implant</option>
                            <option <?=$item['service']?>>Filling</option> 
                    </select>
                    </div>


                    <div class="form-group">
                        <label>Content:</label>
                        <textarea class="form-control" name="content" rows="5"><?=$item['content']?></textarea>
                    </div>
                      <p><a href="dashboard-service-order.php">Back to list</a></p>
                    <div class="form-group">
                        <button class="btn btn-success">Update</button>
                    </div>


                </form>
            </div>
        </main>
    </div>

</body>

</html>
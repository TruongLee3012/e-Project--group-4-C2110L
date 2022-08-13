
<?php 
session_start();

if(!isset($_SESSION['user'])) {
    header('Location: login.php');
    die();
}

require_once('../../data/dbhelp.php');




 $sql="select * from doctor";
        $list = executeResult($sql);

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service order Page</title>
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
                <li>
                    <a href="dashboard-service-order.php" ><span class="las la-shopping-bag"></span>
                    <span>Service order</span></a>
                </li>
                <li class="not-hover">
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
  
        <div>
            <div class="container" style="margin-bottom: 20px">
                <a href="dashboard-doctor-add.php"><button class="btn btn-primary">Add</button></a>
            </div> 
        <div class="container">
            <table  class="table table-bordered">
            <thead>
                <tr class="table-primary"  style="text-align: center;">
                    <th style="width:30px">No</th>
                    <th style="width:175px">Fullname</th>
                    <th style="width:175px">Position</th>
                    <th style="width:300px">Information</th>
                    <th style="width:240px">Qualification</th>
                        
                    <th style="width:175px">Phone</th>
                    <th style="width:200px">Email</th>
                    <th style="width:150px">Image</th>
                    <th style="width: 50px"></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php
                $index = 0;
                foreach ($list as $item) {
                    echo "<tr>
                        <td >".++$index."</td>
                        <td>".$item['fullname']."</td>
                        <td>".$item['position']."</td>
                        <td>".$item['infomation']."</td> 
                        <td>".$item['qualification']."</td>
                        
                        <td>".$item['phone']."</td>
                        <td>".$item['email']."</td>
                        <td><img width=150px src=".$item['image']."></td>

                        
                        <td><a href='dashboard-doctor-edit.php?id=".$item['id']."'><button class='btn btn-warning'>Edit</button></a></td>
                        <td><a onclick='submit(".$item['id'].")'><button class='btn btn-danger'>Delete</button></a></td>
                        </tr>";
                }
                ?>
                
            </tbody>
            </table>
        </div>
    
        </div>
        </main>
    </div>

</body>
<script type="text/javascript">
    
  function submit(id) {
    let text;
    if (confirm("Do you want to delete ?") == true) {
      window.location.replace("dashboard-doctor-delete.php?id="+id);
    } 
 
  }
 
</script>

</html>
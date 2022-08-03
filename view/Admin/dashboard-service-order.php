
<?php 
session_start();

if(!isset($_SESSION['user'])) {
    header('Location: login.php');
    die();
}

require_once('../../data/dbhelp.php');




 $sql="select * from service_orders";
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
            <h2><span class="las la-tooth"></span><span>Dento</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="dashboard-add.php"><span class="las la-plus-circle"></span>
                    <span>Add</span></a>
                </li>
                <li>
                    <a href="dashboard-list.php"><span class="las la-clipboard-list"></span>
                    <span>List</span></a>
                </li>
                <li class="not-hover">
                    <a href="dashboard-service-order.php" class="active"><span class="las la-shopping-bag"></span>
                    <span>Service order</span></a>
                </li>
                <li>
                    <a href="dashboard-account.php"><span class="las la-users-cog"></span>
                    <span>Account</span></a>
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

        <table  class="table table-bordered">
        <thead>
            <tr class="table-primary"  style="text-align: center;">
                <th style="width:30px">No</th>
                <th style="width:150px">Fullname</th>
                <th style="width:200px">Birthday</th>
                <th style="width:200px">Email</th>
                <th>Address</th>
                <th style="width:200px">Service</th>
                <th style="width:300px">Content</th>
                <th style="width: 100px"></th>
                <th style="width: 100px" ></th>
            </tr>
        </thead>
        <tbody>

            <?php
            $index = 0;
            foreach ($list as $item) {
                echo "<tr>
                    <td >".++$index."</td>
                    <td>".$item['fullname']."</td>
                    <td>".$item['birth']."</td> 
                    <td>".$item['email']."</td>
                    <td>".$item['address']."</td>
                    <td>".$item['service']."</td>
                    <td>".$item['content']."</td>

                    
                    <td><a href='dashboard-service-order-edit.php?id=".$item['id']."'><button class='btn btn-warning'>Edit</button></a></td>
                    <td><a onclick='submit(".$item['id'].")'><button class='btn btn-danger'>Delete</button></a></td>
                    </tr>";
            }
            ?>
        </tbody>
        </table>

        </div>
        
        </main>
    </div>

</body>
<script type="text/javascript">
    
  function submit(id) {
    let text;
    if (confirm("Do you want to delete ?") == true) {
      window.location.replace("dashboard-service-order-delete.php?id="+id);
    } 
 
  }
 
</script>

</html>
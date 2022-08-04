<?php
session_start();

if(!isset($_SESSION['user'])) {
    header('Location: login.php');
    die();
}
require_once('../../data/dbhelp.php');



$dataList = executeResult('select * from blog');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Page</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="icon" type="image/png" href="../../images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../../images/favicon/favicon-16x16.png" sizes="16x16">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <script src="https://kit.fontawesome.com/d953ad999c.js"></script>
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
                <li class="not-hover">
                    <a href="dashboard-list.php" class="active"><span class="las la-clipboard-list"></span>
                    <span>List</span></a>
                </li>
                <li>
                    <a href="dashboard-service-order.php"><span class="las la-shopping-bag"></span>
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
                    <table border="1">
                        <thead>
                            <tr class="table-primary"  style="text-align: center;">
                                <th style="width:30px">No</th>
                                <th style="width:250px">Title</th>
                                <th style="width:400px">Thumbnail</th>
                                <th style="width:300px">Content</th>
                                <th style="width: 200px">Update At</th>
                                <th style="width: 100px"></th>
                                <th style="width: 100px"></th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                $index = 0;
                foreach($dataList as $item) {
                    echo '<tr>
                            <td>'.++$index.'</td>
                            <td>'.$item['name'].'</td>
                            <td><img src="'.$item['image'].'" style="width: 120px"/></td>
                            <td>'.$item['content'].'</td>
                            <td>'.$item['update_at'].'</td>
                            <td>
                                <a href="dashboard-edit.php?id='.$item['id'].'"><button>Edit</button></a>
                            </td>
                            <td>
                               <button type="button" name="button" onclick = "deleteblog('.$item['id'].');">Delete</button>
                            </td>
                        </tr>';
                }
                ?>
                        </tbody>
                    </table>
                </div>
            </main>
            <script type="text/javascript">
            // Function
            function deleteblog(id){
                $(document).ready(function(){
                $.ajax({
                    // Action
                    url: 'delete.php',
                    // Method
                    type: 'POST',
                    data: {
                    // Get value
                    id: id,
                    action: "delete"
                    },
                    success:function(response){
                    // Response is the output of action file
                    if(response == 0){
                        alert("Data Deleted Successfully");
                        document.getElementById(id).style.display = "none";
                    }
                    else if(response == 1){
                        alert("Data Cannot Be Deleted");
                    }
                    }
                });
                });
            }
            </script>
    </div>

</body>

</html>
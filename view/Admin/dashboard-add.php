<?php
session_start();

if(!isset($_SESSION['user'])) {
    header('Location: login.php');
    die();
}

require_once('../../data/dbhelp.php');


if(!empty($_POST)) {
   

    $name = $_POST['name'];
    $image = $_POST['image'];
    $content = $_POST['content'];
    $update_at = $create_at = date('Y-m-d H:i:s');

    $sql = "insert into blog(name, image, content, create_at, update_at) values ('$name', '$image', '$content', '$create_at', '$update_at')";
    execute($sql);
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
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="icon" type="image/png" href="../../images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../../images/favicon/favicon-16x16.png" sizes="16x16">
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
                <li class="not-hover">
                    <a href="dashboard-add.php" class="active"><span class="las la-plus-circle"></span>
                    <span>Add</span></a>
                </li>
                <li>
                    <a href="dashboard-list.php"><span class="las la-clipboard-list"></span>
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
                <form method="post">
                    <p>Title: </p>  
                    <input type="text" style="width: 96%" name="name" placeholder="Enter title">
                    <p>Thumbnail: </p>
                    <input type="text" style="width: 96%" name="image" placeholder="Enter thumbnail">
                    <p>Price: </p>
                    <input type="number" style="width: 96%" name="price" placeholder="Enter price">
                    <p>Content: </p>
                    <textarea rows="5" style="width: 96%" name="content"></textarea>
                    <p><a href="dashboard-list.php">Back to list</a></p>
                    <button>Add</button>
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
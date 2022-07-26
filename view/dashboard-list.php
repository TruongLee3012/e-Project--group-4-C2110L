<?php
require_once('../data/dbhelp.php');
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
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="icon" type="image/png" href="../images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../images/favicon/favicon-16x16.png" sizes="16x16">
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
                <img src="../images/test-admin.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Truong Lee</h4>
                    <small>Admin</small>
                </div>
            </div>
        </header>

        <main>
            <div class="cards">
                <a href="dashboard-add.php"><button>Add Blog</button></a>
                    <table border="1" style="width: 100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Thumbnail</th>
                                <th>Content</th>
                                <th>Update At</th>
                                <th></th>
                                <th></th>
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
                                <a href="dashboard-delete.php?id='.$item['id'].'"><button>Delete</button></a>
                            </td>
                        </tr>';
                }
                ?>
                        </tbody>
                    </table>
                </div>
            </main>
    </div>

</body>

</html>
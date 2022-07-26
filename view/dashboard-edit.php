<?php
require_once('../data/dbhelp.php');

if(!empty($_POST)) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$image = $_POST['image'];
	$content = $_POST['content'];
	$update_at = $create_at = date('Y-m-d H:i:s');

	$sql = "update blog set name = '$name', image = '$image', content = '$content', update_at = '$update_at' where id = $id";
	execute($sql);

    header('Location: dashboard-list.php');
	die();
}

$id = $_GET['id'];
$item = executeResult("select * from blog where id = $id", true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
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
                <form method="post">
                <p>Title: </p>
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="text" name="name" placeholder="Enter title" value="<?=$item['name']?>">
                <p>Thumbnail: </p>
                <input type="text" name="image" placeholder="Enter thumbnail" value="<?=$item['image']?>">
                <p>Content: </p>
                <textarea rows="5" style="width: 96%" name="content"><?=$item['content']?></textarea>
                <p><a href="dashboard-list.php">Back to list</a></p>
                <button>Update</button></a>
                </form>
            </div>
        </main>
    </div>

</body>

</html>
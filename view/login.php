<?php
session_start();

if(isset($_SESSION['user'])) {
	header('Location: dashboard.php');
	die();
}

require_once('../data/dbhelp.php');

$email = $pwd = $msg = "";

if(!empty($_POST)) {
	// $email = $_POST['email'];
	$email = getPost('email');
	// $pwd = $_POST['pwd'];
	$pwd = getPost('pwd');
	$pwd = getMD5Security($pwd);

	// Them du lieu vao database
	$sql = "select * from users where email = '$email' and password = '$pwd'";
	// echo $sql;die();
	$data = executeResult($sql, true);

	if($data != null) {
		//Dang nhap thanh cong
		$_SESSION['user'] = $data;
		die();
	} else {
		//Dang nhap that bai
		$msg = 'Login failed';
	}

    if($_SESSION['user'] != null) {
        header('Location: dashboard.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div id="login-form-wrap">
        <h2>Login</h2>
        <form id="login-form">
            <p>
                <input type="email" id="email" name="email" placeholder="Email Address" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="password" id="pwd" name="pwd" placeholder="Password" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="submit" id="login" value="Login">
            </p>
        </form>
        <div id="create-account-wrap">
            <p>Not a member? <a href="register.php">Create Account</a>
                <p>
        </div>
        <!--create-account-wrap-->
    </div>
    <!--login-form-wrap-->
    <!-- partial -->

</body>

</html>
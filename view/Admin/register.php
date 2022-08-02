<?php
session_start();

if(isset($_SESSION['user'])) {
	header('Location: dashboard.php');
	die();
}

require_once('../data/dbhelp.php');

$fullname = $email = $pwd = $phone = $address = $msg = "";

if(!empty($_POST)) {
	// $fullname = $_POST['fullname'];
	// $email = $_POST['email'];
	// $pwd = $_POST['pwd'];
	$fullname = getPost('fullname');
	$email = getPost('email');
	$pwd = getPost('pwd');
	$pwd = getMD5Security($pwd);
    $phone = getPost('phone');
    $address = getPost('address');

	// Them du lieu vao database
	$sql = "select * from users where email = '$email'";
	$data = executeResult($sql, true);

	if($data != null) {
		//Tai khoan da ton tai
		$msg = "Email existed";
	} else {
		$sql = "insert into users (fullname, email, password, phone, address) values ('$fullname', '$email', '$pwd' ,'$phone', '$address')";
		execute($sql);
		$fullname = $email = $pwd = $phone = $address = $msg = "";
        header('Location:login.php');
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div id="login-form-wrap">
        <h2>Register</h2>
        <form id="login-form" method="post">
            <p>
                <input type="text" id="fullname" name="fullname" placeholder="Fullname" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="email" id="email" name="email" placeholder="Email Address" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="password" id="pwd" name="pwd" placeholder="Password" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="text" id="phone" name="phone" placeholder="Phone" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="text" id="address" name="address" placeholder="Address" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="submit" id="register" value="register">
            </p>
        </form>
        <div id="create-account-wrap">
            <p>Have an account? <a href="login.php">Login</a>
                <p>
        </div>
        <!--create-account-wrap-->
    </div>
    <!--login-form-wrap-->
    <!-- partial -->

</body>

</html>
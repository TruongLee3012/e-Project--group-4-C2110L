<?php
session_start();

if(isset($_SESSION['user'])) {
    header('Location: dashboard.php');
    die();
}

require_once('../../data/dbhelp.php');

$email = $pwd = $msg = "";

if(!empty($_POST)) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];


    $sql = "select * from users where email = '$email' and password = '$pwd'";
    $data = executeResult($sql, true);
    if($data != null) {
        $_SESSION['user'] = $data;
        header('Location: dashboard.php');
        die();
    } else {
  
        $msg = 'Login failed';
        
    }

    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../../css/login.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div id="login-form-wrap">
        <h2>Login</h2>
        <h3><?=$msg?></h3>
        <form id="login-form" method="post">
            <p>
                <input type="email" name="email" placeholder="Email Address" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="password" name="pwd" placeholder="Password" required><i class="validation"><span></span><span></span></i>
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
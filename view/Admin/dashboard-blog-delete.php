<?php
require_once('../../data/dbhelp.php');


    $id = $_GET['id'];

    $sql = "delete from blog where id = $id";
    execute($sql);

    header('Location: dashboard-blog.php');
    die();

    

?>
<?php
require_once('../../data/dbhelp.php');


    $id = $_GET['id'];

    $sql = "delete from doctor where id = $id";
    execute($sql);

    header('Location: dashboard-doctor.php');
    die();

    

?>
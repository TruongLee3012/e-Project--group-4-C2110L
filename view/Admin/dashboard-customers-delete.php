<?php
require_once('../../data/dbhelp.php');


	$id = $_GET['id'];

	$sql = "delete from customers where id = $id";
	execute($sql);

	header('Location: dashboard-customers.php');
	die();

    

?>
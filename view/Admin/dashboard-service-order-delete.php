<?php
require_once('../../data/dbhelp.php');


	$id = $_GET['id'];

	$sql = "delete from service_orders where id = $id";
	execute($sql);

	header('Location: dashboard-service-order.php');
	die();

    

?>

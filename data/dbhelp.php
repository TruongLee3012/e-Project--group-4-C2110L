<?php
require_once('config.php');

function execute($sql) {
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');
	mysqli_query($conn, $sql);
	mysqli_close($conn);
}

function executeResult($sql, $isSingle = false) {
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');
	$resultset = mysqli_query($conn, $sql);

	if($isSingle) {
		$data = mysqli_fetch_array($resultset, 1);
	} else {
		$data = [];
		while(($row = mysqli_fetch_array($resultset, 1)) != null) {
			$data[] = $row;
		}
	}
	mysqli_close($conn);

	return $data;
}

function getPost($key) {
	$value = '';
	if(isset($_POST[$key])) {
		$value = $_POST[$key];
		$value = fix_sql_injection($value);
	}

	return $value;
}

function getGet($key) {
	$value = '';
	if(isset($_GET[$key])) {
		$value = $_GET[$key];
		$value = fix_sql_injection($value);
	}

	return $value;
}

function fix_sql_injection($str, $replace = "'") {
	return str_replace("'", "\\'", $str);
}

function getMD5Security($pwd) {
	//&^384jdsgfJFFas826^%6523j -> go la j cung dc
	return md5(md5($pwd).'&^384jdsgfJFFas826^%6523j');
}
<?php
	error_reporting(0);
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sqlserver = 'localhost';
	$sqlname = 'kt';
	$sqlpwa = '123123';
	$dbname = 'music';
	$conn = mysqli_connect($sqlserver,$sqlname,$sqlpwa,$dbname);
	if($conn->connect_error){
		die("数据库连接失败");
	}

	$sql = "select * from login where username = '$username'";
	$quer = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($quer);
	if(!empty($row)){
		echo 0;
	}else{
		$sql = "INSERT INTO login(username,password) VALUES ('$username','$password')";
		$conn->query($sql);
		echo 1;
	}
?>
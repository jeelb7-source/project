<?php
	include '../connection.php';
	if(isset($_GET['id']))
	{
		$sid=$_GET['id'];
		$sql="delete from service where cid='".$sid."'";
		mysqli_query($conn,$sql);
		header('location:service_tables.php');
	}
?>
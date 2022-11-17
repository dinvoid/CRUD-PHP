<?php
include 'connect.php';
if(isset($_GET['deleteuserid'])){
	$userid=$_GET['deleteuserid'];

	 $sql="DELETE FROM adduser WHERE userid =$userid";
	 $result=mysqli_query($con,$sql);
	if($result){
		header('location:displayuser.php');
	}else{
		die(mysql_error($con));
	}
}


?>
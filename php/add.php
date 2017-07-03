<?php 
	/*include 'functions.php';*/
	session_start();
	$_SESSION["session"]=$_GET["session"];
	$_SESSION["length"]=$_GET["length"];
	$_SESSION["type"]=$_GET["type"];
    
	header("Location: ../booking-stept.html");
/*	include 'conn.php';
	$sql="INSERT INTO `booking`(`data`,`session`,`type`,`length`) VALUES (?,?,?,?)";
	$stmt=mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"ssss",$userInfo["data"], $userInfo["session"],$userInfo["type"],$userInfo["length"]);
	mysqli_stmt_execute($stmt);
	if(mysqli_affected_rows($conn)>0){
		
	}
	else{
		page_redirect("添加失败！",'../booking-steps.html',0);
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);*/
 ?>
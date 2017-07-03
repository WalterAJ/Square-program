<?php 

 
    session_start();
	include 'functions.php'; 
	$_SESSION["address"]=$_GET["address"];
	include 'conn.php';
	$sql="INSERT INTO `booking`(`email`,`session`,`type`,`address`,`length`) VALUES (?,?,?,?,?)";
	$stmt=mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"sssss",$_SESSION["email"], $_SESSION["session"],$_SESSION["type"],$_SESSION["address"],$_SESSION["length"]);
	mysqli_stmt_execute($stmt);

	/*if(mysqli_affected_rows($conn)>0){
		header("Location: ../index.html");
	}
	else{
		page_redirect("添加失败！",'../booking-steps.html',0);
	}*/
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
		header("Location: ../booking-stepf.html");
 ?>
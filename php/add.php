<?php 
	include 'functions.php';

	$userInfo["bikeId"]=$_GET["bike_id"];
	$userInfo["bikeName"]=$_GET["bike_name"];
	$userInfo["bikeType"]=$_GET["bike_type"];
	$userInfo["bikeSize"]=$_GET["bike_size"];
	$userInfo["bikeColor"]=$_GET["bike_color"];
	$userInfo["bikePD"]=$_GET["bike_pd"];
	$userInfo["bikeBrand"]=$_GET["bike_brand"];
	$userInfo["bikeIsUsed"]=1;

	include 'conn.php';

	if($userInfo["bikeId"]<0)
		page_redirect("ID不能小于零！",'add_bike.php',1);
	if($userInfo["bikeName"]=='')
		page_redirect("请输入车名！",'add_bike.php',1);
	if($userInfo["bikeSize"]<0)
		page_redirect("轮径不能小于零！",'add_bike.php',1);
	if($userInfo["bikeColor"]=='')
		page_redirect("请输入颜色！",'add_bike.php',1);
	
	$check_pd='/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/';
	if (preg_match($check_pd, $userInfo["bikePD"], $parts)) {
		if (!checkdate($parts[2], $parts[3], $parts[1])) {
			page_redirect("生产日期有误",'../add_bike.php',1);
		}
	}
	else{
		page_redirect("生产日期有误",'../add_bike.php',1);
	}

	if($userInfo["bikeBrand"]=='')
		page_redirect("请输入品牌！",'add_bike.php',1);

	$sql="INSERT INTO `bicycle`(`bike_id`,`bike_name`,`bike_type`,`bike_size`,`bike_color`,`bike_pd`,`bike_brand`,`is_use`) VALUES (?,?,?,?,?,?,?,?)";
	$stmt=mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"ississsi",$userInfo["bikeId"],$userInfo["bikeName"],$userInfo["bikeType"],$userInfo["bikeSize"],$userInfo["bikeColor"],$userInfo["bikePD"],$userInfo["bikeBrand"],$userInfo["bikeIsUsed"]);
	mysqli_stmt_execute($stmt);
	if(mysqli_affected_rows($conn)>0){
		page_redirect("添加成功！",'bike_control.php',0);
	}
	else{
		page_redirect("添加失败！",'add_bike.php',0);
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
 ?>
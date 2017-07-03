<?php
	header("Content-type:text/html;charset=utf-8");
	include 'functions.php';
	
	// 1、表单获取
	$userInfo["fname"]=$_GET["fname"];
	$userInfo["lname"]=$_GET["lname"];
	$userInfo["email"]=$_GET["email"];
	$userInfo["number"]=$_GET["number"];
	$userInfo["password"]=$_GET["password"];

	// // 2、数据库连接
	include 'conn.php';

	/*// // 3、表单验证
	if($userInfo["name"]=='')
		page_redirect("请输入用户名！",'../sign_up.html',1);

	// pwd==repwd
	if($userInfo["pwd"]=='')
		page_redirect("请输入密码！",'../sign_up.html',1);

	if($userInfo["pwd"]!=$userInfo["repwd"])
		page_redirect("密码前后输入不一致！",'../sign_up.html',1);
	 // $userInfo["pwd"]=md5($_GET["password"]);
	 // $userInfo["repwd"]=md5($_GET["confirmPassword"]);

	// gender不为空,且转化为数字
	if($userInfo["gender"]=='')
		page_redirect("请勾选性别！",'../sign_up.html',1);
	else if($userInfo["gender"]=='male')
		$userInfo["gender"]=0;
	else
		$userInfo["gender"]=1;*/

	
	// email不为空且符合格式，总长度为50以内
	/*$check_email='/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/';
	if (!preg_match($check_email,$userInfo["email"])){
		page_redirect("邮箱有误",'../sign.html',1);
	}
/**/
	//联系方式


	// 4、操作数据库
	$sql="INSERT INTO `user`( `first_name`, `last_name`,`email_address`,`mobile_number`,`password`) VALUES (?,?,?,?,?)";
	$stmt=mysqli_prepare($conn,$sql);
	mysqli_stmt_bind_param($stmt,"sssss",$userInfo["fname"], $userInfo["lname"],$userInfo["email"],$userInfo["number"],$userInfo["password"]);
	mysqli_stmt_execute($stmt);
	if(mysqli_affected_rows($conn)>0){
		page_redirect("注册成功！",'../booking-stepf.html',1);
	}
	else{
		page_redirect("注册失败！",'#',1);
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
?>
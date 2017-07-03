<?php 	
	session_start();
	header("Content-type:text/html;charset=utf-8");
	include 'functions.php';
	include 'conn.php';
	$user=$_GET["username"];
	$password=$_REQUEST["password"];
	if(empty($user)||empty($password))
	{
		page_redirect("信息不能为空！",'../login.html',0);
	}
	mysqli_query($conn,$sql);

		$sql="select email_address,password from user where email_address='".$user."' ";

	$rs= mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)>=0)
	{
		$row= mysqli_fetch_array($rs);

		if($row)
		{
			if($row[1]==$password)
			{			
					
					page_redirect("登陆成功！",'../booking-stepfloc.html',0);
				
			}
			else
			{
				page_redirect("密码错误！",'../booking-stept.html',0);
			}
		}
		else
		{
			page_redirect("用户名不存在！",'../booking-stept.html',0);
		}
	}
	else
	{
		page_redirect("用户名不存在！",'../booking-stept.html',0);
	}

	//获取用户ID并保存至SESSION
	// if($_GET["ua"]==1)
	// {
	// 	$sql="select user_id from users where user_name=? and user_pwd=?";
	// 	$stmt=mysqli_prepare($conn,$sql);
	// 	mysqli_stmt_bind_param($stmt,"ss",$user,$password);
	// 	mysqli_stmt_execute($stmt);
	// 	mysqli_stmt_bind_result($stmt,$userID);
	// 	while (mysqli_stmt_fetch($stmt))
	// 	{
	// 		$_SESSION["user_id"]=$userID;
	// 	}
	// 	mysqli_stmt_close($stmt);
	// }
	

	mysql_close($conn);


 ?>
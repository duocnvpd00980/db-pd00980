<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	#login{width:200px;height:80px;padding-top:25%;margin:auto;line-height:27px;}
	#boc{border:1px solid #dcdcdc;padding:30px;margin:auto;border-radius:7px;}
</style>
</head>


<body>

<?php include 'ketnoi.php';session_start(); ?>



	<div id='login'>
	<?php
if (isset($_GET['login']))
{
if(isset($_SESSION['id']))
	{	
		if (isset($_SESSION["ten"]))
		{
			
			header("location:index.php?login=1");
		
			}

		if(isset($_GET["id"]))
			{
				if($_GET["id"]=='thoat')
					{	
						session_destroy();
						header("location:login.php");
					}
			}
	 
	}
	else
	{
		$user=$_POST['user'];
		$password=$_POST['password'];
		$query="select * from quantri where User='$user'";
      	$result=$connec->query($query);
		$row=$result->fetch();
	  	
		
		if ($row['User'] =="")
	  		{
				 echo "Tài khoản hoặc mật khẩu không đúng";
			}
	  	else 
	 	 {		
		  if ($row['Password'] ==$password) 
		  	{	
				$_SESSION["id"]=$user;
				$_SESSION["ten"]=$row['User'];
				 if ($row['User']=='admin')
					
					{ 
					header("location:admin.php");
				
					
					 }
				 else
					{header("location:index.php");

					}
			 }
			 else
			 {
			 echo "Tài khoản hoặc mật khẩu không đúng";
			 }
		 }
		
		 
	}
}
?>
	<div id='boc'>
		<form action="login.php?login=1" method="post">
			
			<input type="text" name="user" required="required" /><br/>
			<input type="password" name="password" required="required"  /><br/>
			<input type="submit" value="Đăng Nhập" />
			
		</form>
		
	<div>
	<a href='dangky.php' style='text-decoration:none;font-size:10pt;color:#555'>Đăng ký</a>
<div>
</body>
</html>
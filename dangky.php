<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Đăng ký</title>
<style>
	
	table{border:1px solid #dcdcdc;padding:30px;margin:auto;border-radius:7px;}
</style>
</head>

<body>
<br/><br/><br/><br/><br/>
<table  align="center">
<tr><td></td><td>
<?php
	if (isset($_GET['dangky'])){
		session_start();
			include('ketnoi.php');
			
				$User=$_POST["User"];
				$query="select * from quantri where User='$User'";
      			$result=$connec->query($query);
				$row=$result->fetch();
				if ($row['User']==$User)
				{echo "Tên tài khoản này đã có người sử dụng";}
				else
				{
				$User=$_POST["User"];
				$Password=$_POST["Password"];
				$HoTen=$_POST["HoTen"];
				$GioiTinh=$_POST["GioiTinh"];
				$NgaySinh=$_POST["NgaySinh"];
				$DiaChi=$_POST["DiaChi"];	
				$Email=$_POST["Email"];
							$query="insert into quantri values ('$User', '$Password', '$HoTen', '$GioiTinh', '$NgaySinh', '$DiaChi', '$Email' )";
			$result=$connec->exec($query);
			echo "Tài khoản của bạn đã được đăng ký thành công";	
				}
			}
		?>
<td></tr>
	<form action="dangky.php?dangky=1" method="post">
	
    	<tr><td>Tên đăng nhập </td><td><input type="text" name='User' required="required" /></td></tr>
       <tr><td>Mật khẩu </td><td> <input type="password" name="Password" required="required"  /></td></tr>
        <tr><td>Họ và tên </td><td><input type="text" name="HoTen" required="required" /></td></tr>
         <tr><td>Giới tính </td><td>Nam<input type="radio" name="GioiTinh" value="Nam" required="required"   />
        Nữ<input type="radio" name="GioiTinh" value="Nữ" required="required" /></td>
        <tr><td>Ngày sinh  </td><td><input type="date" name="NgaySinh" required="required" /></td></tr>		
        <tr><td>Địa chỉ  </td><td><input type="text" name="DiaChi" required="required" /></td></tr>	
        <tr><td>Email  </td><td><input type="email" name="Email" required="required" /></td></tr>
        <tr><td></td><td><input type="submit" value="Đăng Ký"  /></td></tr>
        
   </form>
   </table>
</body>
</html>
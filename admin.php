<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<style>
	#them	{
			border:1px solid green;
			width:200px;
			padding:20px;
			 text-decoration::none;
			 float:left;
			 background:#dcdcdc;
		}
	
	a{ text-decoration:none;
	color:green;
		}
	a:hover{color:red}
	table {float:left;border:1px solid gray;padding:15px;border-radius:7px;margin:7px;}
</style>
<body>

<h1 style='margin:auto;color:red;text-align:center;line-height:80px;'>
	ADMIN - QUẢN TRỊ VIÊN
</h1>
	<?php
	session_start();
        include 'ketnoi.php';
        
    
        
    ?>
	<div id="them">
		<ul>
    	<li><a href="?id=them">Thêm sản phẩm </li></p>
        <li><a href="?id=xoa">Xóa sản phẩm  </li></p>
        <li><a href="?id=capnhat">Cập nhật sản phẩm</a></li></p>
		
			<li><a href='index.php'>Trang chủ</a></li></p>
		<li><a href='xulyadmin.php?thoat=thoat'>Thoát</a></li></p>

    </div>
	<div class='hienthi'>
		<div class='danhsach'>
			<?php
			include 'ketnoi.php';
			$_SESSION['vetrangquantri']='chuyentrang';
			
			$query="select * from table_sanpham";
			$result=$connec->query($query);
			
			
			while($row=$result->fetch()){
				if (isset($_GET["id"])) {
					$quantri=$_GET["id"];
					if($quantri=='capnhat') {
						echo "
						<form action='xulyadmin.php?id=capnhat' method='post' >
						<table >
							<tr><td>Mã sản phẩm:</td>	<td>".$row["MaSP"]."<input type='hidden' name='MaSP' value=".$row["MaSP"]."></td></tr>
							<tr><td>Tên sản phẩm:</td>	<td><input type='text' name='TenSP'	value=".$row["TenSP"]."></td></tr>
							<tr><td>Số lượng:</td>		<td><input type='text' name='SoLuong'	value=".$row["SoLuong"]."></td></tr>
							<tr><td>Đơn giá:	</td>	<td><input type='text' name='GiaSP'	value=".$row["GiaSP"]."></td></tr>
							<tr><td>Hình ảnh(Tên ảnh):	</td><td><input type='text' name='HinhAnh'	value=".$row["HinhAnh"]."></tr>
							<tr><td>Trình trạng	</td>	<td><input type='text' name='TinhTrang'	value=".$row["TinhTrang"]."></td></tr>
							<tr><td></td><td><input type='submit' value='Cập nhật'/><br/></td>

						</table>
						</form>
						";
					}
				}
			}
		
				if (isset($_GET["id"])) {
					$quantri=$_GET["id"];
					if($quantri=='them') {
					echo "
						<form action='xulyadmin.php?id=them' method='post' >
						<table>
							<tr><td>Mã sản phẩm:</td>	<td><input type='text' name='MaSP'/></td></tr>
							<tr><td>Tên sản phẩm:</td>	<td><input type='text' name='TenSP'/></td></tr>
							<tr><td>Số lượng:</td>		<td><input type='text' name='SoLuong'/></td></tr>
							<tr><td>Đơn giá:	</td>	<td><input type='text' name='GiaSP'/></td></tr>
							<tr><td>Hình ảnh(Tên ảnh):	</td><td><input type='text' name='HinhAnh'/></tr>
							<tr><td>Trình trạng	</td>	<td><input type='text' name='TinhTrang'/></td></tr>
							<tr><td></td><td><input type='submit' value='Thêm mới'/><br/></td>
						</table>
						</form>
					";}
					
				if($quantri=='xoa') {
					echo "
						<form action='xulyadmin.php?id=xoa' method='post' >
						<table>
							<tr><td>Nhập Mã sản phẩm cần xóa:</td>	<td><input type='text' name='ma'/></td></tr>
							<tr><td></td><td><input type='submit' value='Xóa'/><br/></td>
						</table>
						</form>
					";}
				}
				
				
				
			?>
		</div>
	</div>

	
	
</body>
</html>
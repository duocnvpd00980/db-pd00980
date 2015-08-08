<?php
include('ketnoi.php');

				if (isset($_GET["thoat"])) {header("location:login.php");}
				
			if (isset($_GET["id"])) {
					$quantri=$_GET["id"];
					if($quantri=='them') {
				$MaSP=$_POST["MaSP"];
				$TenSP=$_POST["TenSP"];
				$SoLuong=$_POST["SoLuong"];
				$GiaSP=$_POST["GiaSP"];
				$HinhAnh=$_POST["HinhAnh"];
				$TinhTrang=$_POST["TinhTrang"];	
						$query="insert into table_sanpham values ('$MaSP', '$TenSP','$GiaSP', 'a', '$HinhAnh', '$TinhTrang','$SoLuong')";
						$result=$connec->exec($query);
						echo "Thêm mới thành công";	
				}	
			}
			if (isset($_GET["id"])) {
					$quantri=$_GET["id"];
					if($quantri=='xoa') {
						$MaSP=$_POST["ma"];
						$query="delete from table_sanpham where MaSP='".$_POST["ma"]."'";
						$result=$connec->exec($query);
						echo "Xóa thành công";	
				}	
			}
			
			if (isset($_GET["id"])) {
					$quantri=$_GET["id"];
					if($quantri=='capnhat') {
				$MaSP=$_POST["MaSP"];
				$TenSP=$_POST["TenSP"];
				$SoLuong=$_POST["SoLuong"];
				$GiaSP=$_POST["GiaSP"];
				$HinhAnh=$_POST["HinhAnh"];
				$TinhTrang=$_POST["TinhTrang"];	
						$query="UPDATE table_sanpham set TenSP='$TenSP',SoLuong='$SoLuong' ,GiaSP='$GiaSP' ,HinhAnh='$HinhAnh' ,TinhTrang='$TinhTrang' WHERE MaSP='$MaSP'";
						$result=$connec->exec($query);
						echo "Sửa thành công";	
				}	
			}
			
?>
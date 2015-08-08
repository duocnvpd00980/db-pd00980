<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
					
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Trang chủ</a></li>
							<li><a href="shop.html">Cửa hàng</a></li>
								<li><a href="gioithieu.html">Giới thiệu</a></li>
								<li><a href="tintuc.html">Tin tức</a></li>
								<li><a href="lienhe.html">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	

	
	<section>

				
				<!-- sssssssssssssssssssssssssss  sssssssssssssssssssssssssss   sssssssssssssssssssssssssss  -->
	
				
					 
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Giỏ <strong> hàng</strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
					
		<?php include 'ketnoi.php';session_start(); ?>
		<?php
	if (isset($_SESSION['vetrangquantri'])) { echo "<div id='seach'><a href='admin.php'>Vào trang quản trị</a></div>";}

if(isset($_SESSION['id']))
	{	
		
		if (isset($_SESSION["ten"]))
		echo "<div id='seach'>Xin chào ".$_SESSION["ten"];

	 echo "<a href='?id=thoat'><br/>Thoát</a></div>";
		if(isset($_GET["id"]))
			{
				if($_GET["id"]=='thoat')
					{	
						session_unset();
						header("location:login.php");
					}
			}
	 
	}
	else
	{
	
	echo '<div id="seach"><a href="login.php">Đăng nhập</a></div>';
	}
	
	
?>
      

	
	Giỏ hàng:
	<?php
	

		include 'ketnoi.php';
	
			// CODE HIEN THI DANH SACH SAN PHAM DA CHON
			echo "<table border='1'><tr><td>Tên sản phẩm</td><td>Số lượng</td><td>Đơn giá</td><td>Thành tiền</td></tr>";
			$so=1;
			$tong=0;
			 for($i=1;$i<100;$i++)
				{	$b='a'.$i;
					if (isset($_SESSION[$b]))
						{	

							$dieu=$_SESSION[$b]; 
							$query="select * from sanpham where masanpham='$dieu'";
							$result=$connec->query($query);
							$row=$result->fetch();
										echo "
										<tr><td>".$row['tensanpham']."</td>
										<td>".$so."</td>
										<td>".$row['dongia']."</td>
										<td>".$row['dongia']."</td></tr>
										
										";
										
										$tong=$tong+$row['dongia'];
				if (isset($_GET['tt'])) {
				
				$mahd=rand(5, 15);
				$masp=$row['masanpham'];
				if (isset($_SESSION["id"])){$madl=$_SESSION["id"];} else {header("location:login.php");}
				$soluong='1';
				$gia=$row['dongia'];
				$thanhtien=$soluong*$gia;
				$query="insert into hoadon values ('$madl', '$masp', '$mahd', '$soluong', '$thanhtien','$gia')";
				$result=$connec->exec($query);
				session_destroy();
				header("location:giohang.php");
				
			}
			
	
						}
						
				}

	echo "</table>";
	echo "<hr>Tổng tiền:".$tong."";
	
		
			
			
	echo "<hr><a href='?tt'>Thanh toan</a>";

	
	if (isset($_GET['giohang'])) {
	$giohang=$_GET['giohang'];

	$manglieu[] = $giohang;
}
	// hien thi box tren trang chu $_SESSION['gh']=$tong;

?>

	
	

	

					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		
    	</div>	
    </div><!--/#contact-page-->
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p></p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
							
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>161 Ngô Quyền, TP Đà Nẵng</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2014 E-SHOPPER.</p>
					<p class="pull-right">Designed by <span>Nguyễn Văn Được</span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
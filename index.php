<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <title>Home | mrduoc</title>
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/font-awesome.min.css' rel='stylesheet'>
    <link href='css/prettyPhoto.css' rel='stylesheet'>
    <link href='css/price-range.css' rel='stylesheet'>
    <link href='css/animate.css' rel='stylesheet'>
	<link href='css/main.css' rel='stylesheet'>
	<link href='css/responsive.css' rel='stylesheet'>
    <!--[if lt IE 9]>
    <script src='js/html5shiv.js'></script>
    <script src='js/respond.min.js'></script>
    <![endif]-->       
    <link rel='shortcut icon' href='images/ico/favicon.ico'>
    <link rel='apple-touch-icon-precomposed' sizes='144x144' href='images/ico/apple-touch-icon-144-precomposed.png'>
    <link rel='apple-touch-icon-precomposed' sizes='114x114' href='images/ico/apple-touch-icon-114-precomposed.png'>
    <link rel='apple-touch-icon-precomposed' sizes='72x72' href='images/ico/apple-touch-icon-72-precomposed.png'>
    <link rel='apple-touch-icon-precomposed' href='images/ico/apple-touch-icon-57-precomposed.png'>
</head><!--/head-->
	<?php include 'ketnoi.php';session_start(); ?>
<body>
	<header id='header'><!--header-->
		
		
		<div class='header-middle'><!--header-middle-->
			<div class='container'>
				<div class='row'>
					<div class='col-sm-4'>
						<div class='logo pull-left'>
							<a href='index.html'><img src='images/home/logo.png' alt='' /></a>
						</div>
					
					</div>
					<div class='col-sm-8'>
						<div class='shop-menu pull-right'>
							<ul class='nav navbar-nav'>
								
								
								
								<li><a href='giohang.php'><i class='fa fa-shopping-cart'></i> Giỏ hàng
								<?php
									if(isset($_SESSION['id'])){
										if (!isset($_SESSION['t'])) {$_SESSION['t']=0;}
											if (isset($_GET['giohang'])){
												$gd=$_GET['giohang'];
												$_SESSION['t']=$_SESSION['t']+1;
												echo $_SESSION['t']." Sản phẩm";
												$dk=$_SESSION['t'];
												
												for ($x = $dk; $x <= $dk; $x++) {
												$a='a'.$x;
												$_SESSION[$a]=$_GET['giohang'];
												} 
											
										}
									}
								?>
								
								</a></li>
								<li>	<?php
								
	if (isset($_SESSION['vetrangquantri'])) {
	echo "	<li><a href='admin.php'><i class='fa fa-star'></i> Quản trị</a></li>";
	}

if(isset($_SESSION['id']))
	{	
		
		if (isset($_SESSION["ten"]))
		echo "<li><a href='#'><i class='fa fa-crosshairs'></i> ".$_SESSION["ten"]."</a></li>";

	 echo "<li><a href='?id=thoat'><i class='fa fa-crosshairs'></i> Thoát</a></li>";
	 
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
	
	echo "<li><a href='login.php'><i class='fa fa-lock'></i> Đăng nhập</a></li>";
	}
	
	
?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class='header-bottom'><!--header-bottom-->
			<div class='container'>
				<div class='row'>
					<div class='col-sm-9'>
						<div class='navbar-header'>
							<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
								<span class='sr-only'>Toggle navigation</span>
								<span class='icon-bar'></span>
								<span class='icon-bar'></span>
								<span class='icon-bar'></span>
							</button>
						</div>
						<div class='mainmenu pull-left'>
							<ul class='nav navbar-nav collapse navbar-collapse'>
								<li><a href='index.html' class='active'>Trang chủ</a></li>
							<li><a href='shop.html'>Cửa hàng</a></li>
								<li><a href='gioithieu.html'>Giới thiệu</a></li>
								<li><a href='tintuc.html'>Tin tức</a></li>
								<li><a href='lienhe.html'>Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class='col-sm-3'>
						<div class='search_box pull-right'>
							<input type='text' placeholder='Search'/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id='slider'><!--slider-->
		<div class='container'>
			<div class='row'>
				<div class='col-sm-12'>
					<div id='slider-carousel' class='carousel slide' data-ride='carousel'>
						<ol class='carousel-indicators'>
							<li data-target='#slider-carousel' data-slide-to='0' class='active'></li>
							<li data-target='#slider-carousel' data-slide-to='1'></li>
							<li data-target='#slider-carousel' data-slide-to='2'></li>
						</ol>
						
						<div class='carousel-inner'>
							<div class='item active'>
								<div class='col-sm-6'>
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Xem sắm thõa thích </h2>
									<p>Những mẫu quần áo thời thượng giá rẻ, đầy đủ mẫu mã, chất liệu cực tốt, thoải mái khi mang và hợp thời trang hiện nay </p>
									<button type='button' class='btn btn-default get'>Xem chi tiết</button>
								</div>
								<div class='col-sm-6'>
									<img src='images/home/girl1.jpg' class='girl img-responsive' alt='' />
									<img src='images/home/pricing.png'  class='pricing' alt='' />
								</div>
							</div>
							<div class='item'>
								<div class='col-sm-6'>
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Chất liệu tốt</h2>
									<p>hững mẫu quần áo thời thượng giá rẻ, đầy đủ mẫu mã, chất liệu cực tốt, thoải mái khi mang và hợp thời trang hiện nay </p>
									<button type='button' class='btn btn-default get'>Xem chi tiết</button>
								</div>
								<div class='col-sm-6'>
									<img src='images/home/girl2.jpg' class='girl img-responsive' alt='' />
									<img src='images/home/pricing.png'  class='pricing' alt='' />
								</div>
							</div>
							
							<div class='item'>
								<div class='col-sm-6'>
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Sản phẩm hàng hiệu</h2>
									<p>Những mẫu quần áo thời thượng giá rẻ, đầy đủ mẫu mã, chất liệu cực tốt, thoải mái khi mang và hợp thời trang hiện nay </p>
									<button type='button' class='btn btn-default get'>Xem chi tiết</button>
								</div>
								<div class='col-sm-6'>
									<img src='images/home/girl3.jpg' class='girl img-responsive' alt='' />
									<img src='images/home/pricing.png' class='pricing' alt='' />
								</div>
							</div>
							
						</div>
						
						<a href='#slider-carousel' class='left control-carousel hidden-xs' data-slide='prev'>
							<i class='fa fa-angle-left'></i>
						</a>
						<a href='#slider-carousel' class='right control-carousel hidden-xs' data-slide='next'>
							<i class='fa fa-angle-right'></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-3'>
					<div class='left-sidebar'>
						<h2>Quần áo</h2>
						<div class='panel-group category-products' id='accordian'><!--category-productsr-->
							<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'>
										<a data-toggle='collapse' data-parent='#accordian' href='#sportswear'>
											<span class='badge pull-right'><i class='fa fa-plus'></i></span>
											Áo Nữ
										</a>
									</h4>
								</div>
								<div id='sportswear' class='panel-collapse collapse'>
									<div class='panel-body'>
										<ul>
											<li><a href='#'>Áo sơ mi nữ </a></li>
											<li><a href='#'>Áo thun nữ </a></li>
											<li><a href='#'>Áo khoác nữ </a></li>
											<li><a href='#'>Váy đầm nữ</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'>
										<a data-toggle='collapse' data-parent='#accordian' href='#mens'>
											<span class='badge pull-right'><i class='fa fa-plus'></i></span>
											Quần Nữ
										</a>
									</h4>
								</div>
								<div id='mens' class='panel-collapse collapse'>
									<div class='panel-body'>
										<ul>
											<li><a href='#'>Quần jean nữ</a></li>
											<li><a href='#'>Quần short nữ</a></li>
											<li><a href='#'>Quần thun nữ</a></li>
										
										</ul>
									</div>
								</div>
							</div>
							
							<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'>
										<a data-toggle='collapse' data-parent='#accordian' href='#womens'>
											<span class='badge pull-right'><i class='fa fa-plus'></i></span>
											Áo Nam
										</a>
									</h4>
								</div>
								<div id='womens' class='panel-collapse collapse'>
									<div class='panel-body'>
										<ul>
											<li><a href='#'>Áo khoác</a></li>
											<li><a href='#'>Áo Sơ Mi</a></li>
											<li><a href='#'>Áo Thun Nam</a></li>
											<li><a href='#'>Áo cổ lọ</a></li>
											<li><a href='#'>Áo cổ lọ</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'><a href='#'>Áo khoác Nam</a></h4>
								</div>
							</div>
							<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'><a href='#'>Đồ bộ nữ</a></h4>
								</div>
							</div>
							
							




							<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'><a href='#'>Quần dài nữ</a></h4>
								</div>
							</div>
							<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'><a href='#'>Quần jean nữ</a></h4>
								</div>
							</div>
							<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'><a href='#'>Quần short nữ</a></h4>
								</div>
							</div>
							<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'><a href='#'>Quần thun nữ</a></h4>
								</div>
							</div>
							<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'><a href='#'>Thời trang Khác</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
			
						
					
						
						
					
					</div>
				</div>
				<!-- sssssssssssssssssssssssssss  sssssssssssssssssssssssssss   sssssssssssssssssssssssssss  -->
				<div class='col-sm-9 padding-right'>
					<div class='features_items'><!--features_items-->
						<h2 class='title text-center'>sản phẩm</h2>
						
			

						<?php
												
												$query="select * from table_sanpham";
												$result=$connec->query($query);
												while ($row=$result->fetch()) {
													echo "
													<div class='col-sm-4'>
							<div class='product-image-wrapper'>
								<div class='single-products'>
									<div class='productinfo text-center'>
										<img src='images/home/".$row['HinhAnh'].".jpg' alt='' />
										<h2>$".$row['GiaSP']."</h2>
										<p>".$row['TenSP']."</p>
										<a href='chitietsanpham.html' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Xem</a>
									</div>
									<div class='product-overlay'>
										<div class='overlay-content'>
											<h2>$".$row['GiaSP']."</h2>
											<p>".$row['TenSP']."</p>
											<a href='chitietsanpham.php?sanpham=".$row['MaSP']."' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Xem</a>
										</div>
									</div>
								</div>
								<div class='choose'>
									<ul class='nav nav-pills nav-justified'>
										<li><a href='?giohang=".$row['MaSP']."'><i class='fa fa-plus-square'></i> Thêm vào giỏ hàng</a></li>
										 
									</ul>
								</div>
							</div>
						</div>
													";
													}
															
										?>
										

						
						
				
						
					</div><!--features_items-->
					
					<div class='category-tab'><!--category-tab-->
						<div class='col-sm-12'>
							<ul class='nav nav-tabs'>
								<li class='active'><a href='#tshirt' data-toggle='tab'>sản phẩm ưu chuộn</a></li>
								
							</ul>
						</div>
						<div class='tab-content'>
							<div class='tab-pane fade active in' id='tshirt' >
								<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img src='images/home/gallery1.jpg' alt='' />
												<h2>$56</h2>
												<p>Áo</p>
												<a href='chitietsanpham.html' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Xem</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img src='images/home/gallery2.jpg' alt='' />
												<h2>$56</h2>
												<p>Áo</p>
												<a href='chitietsanpham.html' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Xem</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img src='images/home/gallery3.jpg' alt='' />
												<h2>$56</h2>
												<p>Áo</p>
												<a href='chitietsanpham.html' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Xem</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img src='images/home/gallery4.jpg' alt='' />
												<h2>$56</h2>
												<p>Áo</p>
												<a href='chitietsanpham.html' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Xem</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class='tab-pane fade' id='blazers' >
								<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img src='images/home/gallery4.jpg' alt='' />
												<h2>$56</h2>
												<p>Áo</p>
												<a href='chitietsanpham.html' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Xem</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img src='images/home/gallery3.jpg' alt='' />
												<h2>$56</h2>
												<p>Áo</p>
												<a href='chitietsanpham.html' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Xem</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img src='images/home/gallery2.jpg' alt='' />
												<h2>$56</h2>
												<p>Áo</p>
												<a href='chitietsanpham.html' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Xem</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img src='images/home/gallery1.jpg' alt='' />
												<h2>$56</h2>
												<p>Áo</p>
												<a href='chitietsanpham.html' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Xem</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class='tab-pane fade' id='sunglass' >
								<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img src='images/home/gallery3.jpg' alt='' />
												<h2>$56</h2>
												<p>Áo</p>
												<a href='chitietsanpham.html' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Xem</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img src='images/home/gallery4.jpg' alt='' />
												<h2>$56</h2>
												<p>Áo</p>
												<a href='chitietsanpham.html' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Xem</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img src='images/home/gallery1.jpg' alt='' />
												<h2>$56</h2>
												<p>Áo</p>
												<a href='chitietsanpham.html' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Xem</a>
											</div>
											
										</div>
									</div>
								</div>
							
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--/category-tab-->
					
				
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id='footer'><!--Footer-->
		<div class='footer-top'>
			<div class='container'>
				<div class='row'>
					<div class='col-sm-2'>
						<div class='companyinfo'>
							<h2><span>e</span>-shopper</h2>
							<p></p>
						</div>
					</div>
					<div class='col-sm-7'>
						<div class='col-sm-3'>
							<div class='video-gallery text-center'>
								<a href='#'>
									<div class='iframe-img'>
										<img src='images/home/iframe1.png' alt='' />
									</div>
									<div class='overlay-icon'>
										<i class='fa fa-play-circle-o'></i>
									</div>
								</a>
								
							</div>
						</div>
						
						<div class='col-sm-3'>
							<div class='video-gallery text-center'>
								<a href='#'>
									<div class='iframe-img'>
										<img src='images/home/iframe2.png' alt='' />
									</div>
									<div class='overlay-icon'>
										<i class='fa fa-play-circle-o'></i>
									</div>
								</a>
								
							</div>
						</div>
						
						<div class='col-sm-3'>
							<div class='video-gallery text-center'>
								<a href='#'>
									<div class='iframe-img'>
										<img src='images/home/iframe3.png' alt='' />
									</div>
									<div class='overlay-icon'>
										<i class='fa fa-play-circle-o'></i>
									</div>
								</a>
							
							</div>
						</div>
						
						<div class='col-sm-3'>
							<div class='video-gallery text-center'>
								<a href='#'>
									<div class='iframe-img'>
										<img src='images/home/iframe4.png' alt='' />
									</div>
									<div class='overlay-icon'>
										<i class='fa fa-play-circle-o'></i>
									</div>
								</a>
								
							</div>
						</div>
					</div>
					<div class='col-sm-3'>
						<div class='address'>
							<img src='images/home/map.png' alt='' />
							<p>161 Ngô Quyền, TP Đà Nẵng</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	
		
		<div class='footer-bottom'>
			<div class='container'>
				<div class='row'>
					<p class='pull-left'>Copyright © 2014 E-SHOPPER.</p>
					<p class='pull-right'>Designed by <span>Nguyễn Văn Được</span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src='js/jquery.js'></script>
	<script src='js/bootstrap.min.js'></script>
	<script src='js/jquery.scrollUp.min.js'></script>
	<script src='js/price-range.js'></script>
    <script src='js/jquery.prettyPhoto.js'></script>
    <script src='js/main.js'></script>
</body>
</html>
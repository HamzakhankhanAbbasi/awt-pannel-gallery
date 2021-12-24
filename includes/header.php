<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AWTB-APPAREL</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="assets/images/favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/stellarnav.min.css" />
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
	<header>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-4 col-md-3 col-lg-3">
					<div class="logo">
						<a href="index.php">
							<img src="assets/images/logo.png" alt="logo" class="img-fluid">
						</a>
					</div>
				</div>
				<div class="col-8 col-md-9 col-lg-9">
					<div class="header-right">
						<div class="headerRight-Top mb-4">
							<ul>
								<li>
									<a href="javascript:void(0)" class="p-0 search-btn" onclick="openSearch()">
										<img src="assets/images/search-icon.png" alt="img" class="img-fluid">
									</a>
								</li>
								<li>
									<a href="javascript:void(0)">
										<img src="assets/images/user-icon.png" alt="img" class="img-fluid">
									</a>
								</li>
								<li>
									<a href="javascript:void(0)" class="cart-icon">
										<img src="assets/images/cart-icon.png" alt="img" class="img-fluid">
										<span>01</span>
									</a>
								</li>
							</ul>
							<div class="social-icons">
								<a href="javascript:void(0)" class="social-icon"><i class="fab fa-facebook-f"></i></a>
								<a href="javascript:void(0)" class="social-icon"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
						<div class="stellarnav main_menu">
							<ul>
								<li class="menu-links"><a href="index.php">Home</a></li>
								<li class="menu-links"><a href="javascript:void(0)">About Us</a></li>
								<li class="menu-links"><a href="javascript:void(0)">Latest Arrivals</a></li>
								<li class="menu-links"><a href="mens.php">Men's</a></li>
								<li class="menu-links"><a href="javascript:void(0)">Women's</a></li>
								<li class="menu-links"><a href="javascript:void(0)">Youth</a></li>
								<li class="menu-links"><a href="javascript:void(0)">Hats</a></li>
								<li class="menu-links"><a href="javascript:void(0)">Accessories</a></li>
								<li class="menu-links"><a href="javascript:void(0)">Contact Us</a></li>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div id="myOverlay" class="overlay">
			<span class="closebtn" onclick="closeSearch()" title="Close Overlay"><i class="fas fa-times"></i></span>
			<div class="overlay-content">
				<form>
					<input type="text" placeholder="Search.." name="search">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
		</div>
	</header>
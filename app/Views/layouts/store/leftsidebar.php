<?php
/**
 * @project dungbeoshop
 * @author NTDzVEKNY
 * @email ntdgdeptrai@gmail.com
 * @date 16-Nov-24
 */
?>
<div class="header">
	<div class="bottom-header">
		<div class="container">
			<div class="row justify-content-between align-items-center g-md-4 g-sm-0">
				<div class="col-xxl-3 col-xl-2 col-lg-2 col-sm-3 col-6">
					<div class="logo">
						<a href="index-2.html">
							<img src="assets/images/logo.png" alt="logo">
						</a>
					</div>
				</div>
				<div class="col-xxl-6 col-xl-7 col-lg-8 col-sm-6 col-12 search-col">
					<div class="header-search">
						<form>
							<div class="wrap">
								<select name="category" class="select">
									<option value="">Loại hàng</option>
									<option value="1">Điện thoại</option>
									<option value="2">Tablet</option>
									<option value="3">Laptop</option>
									<option value="4">Tivi</option>
									<option value="5">PC</option>
									<option value="6">Đồng hồ</option>
									<option value="7">Camera</option>
									<option value="8">Âm thanh</option>
								</select>
								<span class="devider"></span>
								<input type="search" name="search" placeholder="Bạn muốn mua gì">
							</div>
							<button type="submit">
								<span><i class="fa-light fa-magnifying-glass"></i></span>
							</button>
						</form>
					</div>
				</div>
				<div class="col-xl-3 col-xl-3 col-lg-2 col-sm-3 col-6">
					<ul class="bottom-header-right d-flex align-items-center justify-content-end">
						<li class="header-cart-options">
							<a role="button" class="search-open d-sm-none"><i class="fa-light fa-magnifying-glass"></i></a>
							<a href="compare.html" class="compare-list-btn"><i class="fa-light fa-shuffle"></i></a>
							<a role="button" class="wish-list-btn">
								<i class="fa-light fa-heart"></i>
<!--								<span class="quantity">02</span>-->
							</a>
							<a role="button" class="cart-list-btn">
								<i class="fa-light fa-cart-shopping"></i>
<!--								<span class="quantity">03</span>-->
							</a>

						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="menu-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xxl-3 col-xl-3 col-lg-4">
					<div class="all-department">
						<span>all Departments</span>
						<button class="category-list-close"><i class="fa-light fa-bars"></i></button>
						<div class="banner">
							<div class="category-list">
								<ul>
									<li class="category-item">
										<a href="#">
											<div class="icon">
												<span><i class="fa-thin fa-mobile-notch"></i></span>
											</div>
											<span>Điện thoại</span>
										</a>
									</li>
									<li class="category-item">
										<a href="#">
											<div class="icon">
												<span><i class="fa-thin fa-tablet"></i></span>
											</div>
											<span>Tablet</span>
										</a>
									</li>
									<li class="category-item">
										<a href="#">
											<div class="icon">
												<span><i class="fa-thin fa-laptop"></i></span>
											</div>
											<span>Laptop</span>
										</a>
									</li>
									<li class="category-item">
										<a href="#">
											<div class="icon">
												<span><i class="fa-thin fa-tv-retro"></i></span>
											</div>
											<span>Tivi</span>
										</a>
									</li>
									<li class="category-item">
										<a href="#">
											<div class="icon">
												<span><i class="fa-thin fa-desktop"></i></span>
											</div>
											<span>PC</span>
										</a>
									</li>
									<li class="category-item">
										<a href="#">
											<div class="icon">
												<span><i class="fa-thin fa-watch-smart"></i></span>
											</div>
											<span>Đồng hồ</span>
										</a>
									</li>
									<li class="category-item">
										<a href="#">
											<div class="icon">
												<span><i class="fa-thin fa-camera"></i></span>
											</div>
											<span>Camera</span>
										</a>
									</li>
									<li class="category-item">
										<a href="#">
											<div class="icon">
												<span><i class="fa-thin fa-headphones-simple"></i></span>
											</div>
											<span>Âm thanh</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-7 col-xl-7 col-lg-6">
					<nav class="navbar navbar-expand-lg">
						<div class="container-fluid">
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<nav id="revel-mobile-menu" class="revel-mobile-menu">
									<ul class="navbar-nav me-auto mb-2 mb-lg-0">
										<li class="nav-item">
											<a class="nav-link" href="/">Home</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="/">About</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="shop.html" id="shopDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
												Products
											</a>
										</li>

										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
												Blog
											</a>
											<ul class="dropdown-menu" aria-labelledby="blogDropdown">
												<li><a class="dropdown-item" href="#">Blog</a></li>
											</ul>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="/">Contact</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</nav>
				</div>
				<div class="col-lg-2">
					<div class="account-link">
<!--						<a href="register.html">Register</a>-->
						<span>/</span>
						<a href="login">Sign in</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

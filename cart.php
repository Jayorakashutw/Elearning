<!DOCTYPE html>
<html lang="en">

	
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>Cart - Edutec</title>	
		<!-- Favicon Icon -->
		<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">		
		<!-- Google Font -->	
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
		<!-- themify-icons CSS -->
		<link rel="stylesheet" href="assets/fonts/themify-icons.css">
		<!-- line-awesome CSS -->
		<link rel="stylesheet" href="assets/css/line-awesome.css">
		<!-- Box Icons CSS -->
		<link href='../unpkg.com/boxicons%402.1.4/css/boxicons.min.css' rel='stylesheet'>
		<!-- fontawesome CSS -->
		<link rel="stylesheet" href="assets/fonts/fontawesome/css/all.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">	
		<!--Preloader Css-->
		<link rel="stylesheet" href="assets/css/preloader.css">
		<!--jquery-simple-mobilemenu Css-->	
		<link rel="stylesheet" href="assets/css/meanmenu.css">	
		<!--swiper-bundle Css-->
		<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">	
		<!--magnific-popup Css-->
		<link rel="stylesheet" href="assets/css/magnific-popup.css">	
		<!--animate Css-->
		<link rel="stylesheet" href="assets/css/animate.css">		
		<!--YouTubePopUp Css-->
		<link rel="stylesheet" href="assets/css/YouTubePopUp.css">	
		 <!--Slick Css-->
		<link rel="stylesheet" href="assets/css/slick.css">	
		<!--slick theme Css-->
		<link rel="stylesheet" href="assets/css/slick-theme.css">					
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<!-- Responsive CSS -->		
		<link rel="stylesheet" href="assets/css/responsive.css">		

	</head>
	
	<body>

		<!-- START PRELOADER -->
		<div class="preloader">
			<span class="loader"></span>		
		</div>
		 <!--  END PRELOADER -->
		 
		<!-- Offcanvas Area Start -->
		<div class="fix-area">
			<div class="offcanvas__info">
				<div class="offcanvas__wrapper">
					<div class="offcanvas__content">
						<div class="offcanvas__top d-flex justify-content-between align-items-center">
							<div class="offcanvas__logo">
								<a href="index.html">
									<img src="assets/img/logo.svg" alt="edutec">
								</a>
							</div>
							<div class="offcanvas__close">
								<button>
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
						<div class="mobile-menu fix mb-3"></div>                   
					</div>
				</div>
			</div>
		</div>
		<div class="offcanvas__overlay"></div>
	
			<!-- Start Header -->
		<?php include 'include/header.php'; ?>
		<!-- End Header -->	
		
		<!-- Start Main Banner -->
		<section class="main-banner" style="background-image: url(assets/img/bg/course-bg.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 text-center z-1 position-relative wow fadeInUp">
						<h2>Cart</h2>
						<p>
							<a href="#">Home</a> <i class='bx bx-chevrons-right'></i> Cart
						</p>
					</div>
				</div>				
			</div>
			
			<img src="assets/img/shapes/hsmile.svg" alt="img" class="blshape">
			<img src="assets/img/shapes/hstart.svg" alt="img" class="brshape">
			<div class="bbig_shape"></div>		
		</section>
		<!-- End Main Banner -->

		<!-- Start Shopping Cart -->
		<div class="shopping-cart section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 wow fadeIn">
						<!-- Shopping Summery -->
						<table class="table shopping-summery responsive-table woocommerce-cart-form">
							<thead>
								<tr class="main-hading">
									<th>Products</th>
									<th>Unit Price</th>
									<th>Quantity</th>
									<th>Total</th> 
									<th></th>
								</tr>
							</thead>
							<tbody>
							
								<tr>
									<td>
										<a href="course-details.html" class="pthumb">
											<img src="assets/img/course/1.jpg" alt="img">
										</a>
										
										<div class="product-name">		
											<a href="course-details.html">
												Financial Security Thinking
											</a>
										</div>
									</td>
									
									<td class="price" data-title="Price"><span>$80.00 </span></td>
									
									<td class="qty" data-title="Qty"><!-- Input Order -->
										<div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="100" value="1">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</div>
										<!--/ End Input Order -->
									</td>
									
									<td class="total-amount"><span>$220.88</span></td>
									<td class="action"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
								</tr>

								<tr>
									<td>
										<a href="course-details.html" class="pthumb">
											<img src="assets/img/course/2.jpg" alt="img">
										</a>
										
										<div class="product-name">		
											<a href="course-details.html">
												Financial Security Thinking
											</a>
										</div>
									</td>
									
									<td class="price" data-title="Price"><span>$80.00 </span></td>
									
									<td class="qty" data-title="Qty"><!-- Input Order -->
										<div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[2]" class="input-number"  data-min="1" data-max="100" value="2">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[2]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</div>
										<!--/ End Input Order -->
									</td>
									
									<td class="total-amount"><span>$100.88</span></td>
									<td class="action"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
								</tr>

								<tr>
									<td>
										<a href="course-details.html" class="pthumb">
											<img src="assets/img/course/3.jpg" alt="img">
										</a>
										
										<div class="product-name">		
											<a href="course-details.html">
												Financial Security Thinking
											</a>
										</div>
									</td>
									
									<td class="price" data-title="Price"><span>$80.00 </span></td>
									
									<td class="qty" data-title="Qty"><!-- Input Order -->
										<div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[4]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[4]" class="input-number"  data-min="1" data-max="100" value="4">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[4]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</div>
										<!--/ End Input Order -->
									</td>
									
									<td class="total-amount"><span>$150.00</span></td>
									<td class="action"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
								</tr>

								<tr>
									<td colspan="6" class="actions">
										<div class="bottom-cart">
											<div class="coupon">
												<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
											</div>
											<a href="#" class="btn_border">Update Cart</a>
										</div>										
									</td>
								</tr>
							</tbody>
						</table>
					</div> <!-- End Col -->
					
					<div class="col-xl-4 wow fadeIn">
						<div class="cart-collaterals">
							<h2>Cart totals</h2>
							
							<div class="shop_table shop_table_responsive">
								<div class="cart-subtotal">
									<div class="title">Subtotal</div>
									<div data-title="Subtotal">
										<span class="woocommerce-Price-amount amount"><bdi>50.00<span class="woocommerce-Price-currencySymbol">$</span></bdi></span>
									</div>
								</div>
								
								<div class="woocommerce-shipping-totals shipping">
									<div class="title">Shipping</div>
									<div data-title="Shipping">														
										<p class="woocommerce-shipping-destination">
											Shipping to <strong>Afghanistan</strong>. 				
										</p>					
									</div>
								</div>

								<div class="order-total">
									<div class="title">Total</div>
									<div data-title="Total"><strong><span class="woocommerce-Price-amount amount"><bdi>350.00<span class="woocommerce-Price-currencySymbol">$</span></bdi></span></strong> </div>
								</div>

								<div class="wc-proceed-to-checkout">		
									<a href="checkout.html" class="bg-btn">
										Proceed to checkout
									</a>
								</div>									
							</div>
						</div>
					</div> <!-- End Col -->	
					
				</div>
			</div>
		</div>
		<!-- End Shopping Cart -->

		<!-- Start Footer -->
		<?php include 'include/footer.php'; ?>
		<!-- End Footer -->
		
		<!-- Start progress-wrap -->
		<div class="progress-wrap">
			<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
				<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
			</svg>
		</div>
		<!-- End progress-wrap -->
	
		<!-- Latest jQuery -->
		<script src="assets/js/jquery.min.js" ></script>
		<!-- Latest compiled and minified Bootstrap -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- jquery-simple-mobilemenu.min -->
		<script src="assets/js/jquery.meanmenu.min.js"></script>
		<!-- modernizer JS -->		
		<script src="assets/js/modernizr-2.8.3.min.js"></script>																	
		<!-- owl-carousel min js  -->
		<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
		<!-- waypoints -->
		<script src="assets/js/waypoints.min.js"></script>		
		<!-- counterup -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<!-- jquery appear js -->			
		<script src="assets/js/404.html"></script>
		<!-- magnific-popup js -->	
		<script src="assets/js/jquery.magnific-popup.js"></script>	
		<!-- swiper-bundle.min js -->	
		<script src="assets/js/swiper-bundle.min.js"></script>	
		<!-- YouTubePopUp js -->		
		<script src="assets/js/YouTubePopUp.jquery.js"></script>
		<!-- yvpopup-active js -->		
		<script src="assets/js/yvpopup-active.js"></script>		
		<!-- Wow js -->			
		<script src="assets/js/wow.js"></script>		
		<!-- nicesellect js -->			
		<script src="assets/js/nicesellect.js"></script>					
		<!-- slick js -->			
		<script src="assets/js/slick.js"></script>			
		<!-- scroll-top js -->			
		<script src="assets/js/scroll-top.js"></script>									
		<!-- scripts js -->
		<script src="assets/js/scripts.js"></script>
		<script>
			$('select').niceSelect();
		</script>			
	</body>

<!-- Mirrored from edutec-html.vercel.app/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Jun 2025 19:59:06 GMT -->
</html>
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
		<title>Checkout - edutec</title>	
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
		<!--niceselect Css-->		
		<link rel="stylesheet" href="assets/css/niceselect.css">		
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
						<h2>Checkout</h2>
						<p>
							<a href="#">Home</a> <i class='bx bx-chevrons-right'></i> Checkout
						</p>
					</div>
				</div>				
			</div>
			
			<img src="assets/img/shapes/hsmile.svg" alt="img" class="blshape">
			<img src="assets/img/shapes/hstart.svg" alt="img" class="brshape">
			<div class="bbig_shape"></div>		
		</section>
		<!-- End Main Banner -->

		<!-- Start Checkout -->
		<section class="shop checkout section-padding">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-8 col-12 wow fadeIn">
						<div class="checkout-form">				
							<h2>Billing Details</h2>
															
							<!-- Form -->
							<form class="form" method="post" action="#">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label for="fname">First Name<span>*</span></label>
											<input id="fname" type="text" name="name" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label for="lname">Last Name<span>*</span></label>
											<input id="lname" type="text" name="name" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label for="email">Email Address<span>*</span></label>
											<input id="email" type="email" name="email" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label for="pnumber">Phone Number<span>*</span></label>
											<input id="pnumber" type="text" name="number" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label for="country">Country<span>*</span></label>
											<select name="country_name" id="country">
												<option value="AF">Afghanistan</option>
												<option value="AX">Åland Islands</option>
												<option value="AL">Albania</option>
												<option value="DZ">Algeria</option>
												<option value="AS">American Samoa</option>
												<option value="AD">Andorra</option>
												<option value="AO">Angola</option>
												<option value="AI">Anguilla</option>
												<option value="AQ">Antarctica</option>
												<option value="AG">Antigua and Barbuda</option>
												<option value="AR">Argentina</option>
												<option value="AM">Armenia</option>
												<option value="AW">Aruba</option>
												<option value="AU">Australia</option>
												<option value="AT">Austria</option>
												<option value="AZ">Azerbaijan</option>
												<option value="BS">Bahamas</option>
												<option value="BH">Bahrain</option>
												<option value="BD">Bangladesh</option>
												<option value="BB">Barbados</option>
												<option value="BY">Belarus</option>
												<option value="BE">Belgium</option>
												<option value="BZ">Belize</option>
												<option value="BJ">Benin</option>
												<option value="BM">Bermuda</option>
												<option value="BT">Bhutan</option>
												<option value="BO">Bolivia</option>
												<option value="BA">Bosnia and Herzegovina</option>
												<option value="BW">Botswana</option>
												<option value="BV">Bouvet Island</option>
												<option value="BR">Brazil</option>
												<option value="IO">British Indian Ocean Territory</option>
												<option value="VG">British Virgin Islands</option>
												<option value="BN">Brunei</option>
												<option value="BG">Bulgaria</option>
												<option value="BF">Burkina Faso</option>
												<option value="BI">Burundi</option>
												<option value="KH">Cambodia</option>
												<option value="CM">Cameroon</option>
												<option value="CA">Canada</option>
												<option value="CV">Cape Verde</option>
												<option value="KY">Cayman Islands</option>
												<option value="CF">Central African Republic</option>
												<option value="TD">Chad</option>
												<option value="CL">Chile</option>
												<option value="CN">China</option>
												<option value="CX">Christmas Island</option>
												<option value="CC">Cocos [Keeling] Islands</option>
												<option value="CO">Colombia</option>
												<option value="KM">Comoros</option>
												<option value="CG">Congo - Brazzaville</option>
												<option value="CD">Congo - Kinshasa</option>
												<option value="CK">Cook Islands</option>
												<option value="CR">Costa Rica</option>
												<option value="CI">Côte d’Ivoire</option>
												<option value="HR">Croatia</option>
												<option value="CU">Cuba</option>
												<option value="CY">Cyprus</option>
												<option value="CZ">Czech Republic</option>
												<option value="DK">Denmark</option>
												<option value="DJ">Djibouti</option>
												<option value="DM">Dominica</option>
												<option value="DO">Dominican Republic</option>
												<option value="EC">Ecuador</option>
												<option value="EG">Egypt</option>
												<option value="SV">El Salvador</option>
												<option value="GQ">Equatorial Guinea</option>
												<option value="ER">Eritrea</option>
												<option value="EE">Estonia</option>
												<option value="ET">Ethiopia</option>
												<option value="FK">Falkland Islands</option>
												<option value="FO">Faroe Islands</option>
												<option value="FJ">Fiji</option>
												<option value="FI">Finland</option>
												<option value="FR">France</option>
												<option value="GF">French Guiana</option>
												<option value="PF">French Polynesia</option>
												<option value="TF">French Southern Territories</option>
												<option value="GA">Gabon</option>
												<option value="GM">Gambia</option>
												<option value="GE">Georgia</option>
												<option value="DE">Germany</option>
												<option value="GH">Ghana</option>
												<option value="GI">Gibraltar</option>
												<option value="GR">Greece</option>
												<option value="GL">Greenland</option>
												<option value="GD">Grenada</option>
												<option value="GP">Guadeloupe</option>
												<option value="GU">Guam</option>
												<option value="GT">Guatemala</option>
												<option value="GG">Guernsey</option>
												<option value="GN">Guinea</option>
												<option value="GW">Guinea-Bissau</option>
												<option value="GY">Guyana</option>
												<option value="HT">Haiti</option>
												<option value="HM">Heard Island and McDonald Islands</option>
												<option value="HN">Honduras</option>
												<option value="HK">Hong Kong SAR China</option>
												<option value="HU">Hungary</option>
												<option value="IS">Iceland</option>
												<option value="IN">India</option>
												<option value="ID">Indonesia</option>
												<option value="IR">Iran</option>
												<option value="IQ">Iraq</option>
												<option value="IE">Ireland</option>
												<option value="IM">Isle of Man</option>
												<option value="IL">Israel</option>
												<option value="IT">Italy</option>
												<option value="JM">Jamaica</option>
												<option value="JP">Japan</option>
												<option value="JE">Jersey</option>
												<option value="JO">Jordan</option>
												<option value="KZ">Kazakhstan</option>
												<option value="KE">Kenya</option>
												<option value="KI">Kiribati</option>
												<option value="KW">Kuwait</option>
												<option value="KG">Kyrgyzstan</option>
												<option value="LA">Laos</option>
												<option value="LV">Latvia</option>
												<option value="LB">Lebanon</option>
												<option value="LS">Lesotho</option>
												<option value="LR">Liberia</option>
												<option value="LY">Libya</option>
												<option value="LI">Liechtenstein</option>
												<option value="LT">Lithuania</option>
												<option value="LU">Luxembourg</option>
												<option value="MO">Macau SAR China</option>
												<option value="MK">Macedonia</option>
												<option value="MG">Madagascar</option>
												<option value="MW">Malawi</option>
												<option value="MY">Malaysia</option>
												<option value="MV">Maldives</option>
												<option value="ML">Mali</option>
												<option value="MT">Malta</option>
												<option value="MH">Marshall Islands</option>
												<option value="MQ">Martinique</option>
												<option value="MR">Mauritania</option>
												<option value="MU">Mauritius</option>
												<option value="YT">Mayotte</option>
												<option value="MX">Mexico</option>
												<option value="FM">Micronesia</option>
												<option value="MD">Moldova</option>
												<option value="MC">Monaco</option>
												<option value="MN">Mongolia</option>
												<option value="ME">Montenegro</option>
												<option value="MS">Montserrat</option>
												<option value="MA">Morocco</option>
												<option value="MZ">Mozambique</option>
												<option value="MM">Myanmar [Burma]</option>
												<option value="NA">Namibia</option>
												<option value="NR">Nauru</option>
												<option value="NP">Nepal</option>
												<option value="NL">Netherlands</option>
												<option value="AN">Netherlands Antilles</option>
												<option value="NC">New Caledonia</option>
												<option value="NZ">New Zealand</option>
												<option value="NI">Nicaragua</option>
												<option value="NE">Niger</option>
												<option value="NG">Nigeria</option>
												<option value="NU">Niue</option>
												<option value="NF">Norfolk Island</option>
												<option value="MP">Northern Mariana Islands</option>
												<option value="KP">North Korea</option>
												<option value="NO">Norway</option>
												<option value="OM">Oman</option>
												<option value="PK">Pakistan</option>
												<option value="PW">Palau</option>
												<option value="PS">Palestinian Territories</option>
												<option value="PA">Panama</option>
												<option value="PG">Papua New Guinea</option>
												<option value="PY">Paraguay</option>
												<option value="PE">Peru</option>
												<option value="PH">Philippines</option>
												<option value="PN">Pitcairn Islands</option>
												<option value="PL">Poland</option>
												<option value="PT">Portugal</option>
												<option value="PR">Puerto Rico</option>
												<option value="QA">Qatar</option>
												<option value="RE">Réunion</option>
												<option value="RO">Romania</option>
												<option value="RU">Russia</option>
												<option value="RW">Rwanda</option>
												<option value="BL">Saint Barthélemy</option>
												<option value="SH">Saint Helena</option>
												<option value="KN">Saint Kitts and Nevis</option>
												<option value="LC">Saint Lucia</option>
												<option value="MF">Saint Martin</option>
												<option value="PM">Saint Pierre and Miquelon</option>
												<option value="VC">Saint Vincent and the Grenadines</option>
												<option value="WS">Samoa</option>
												<option value="SM">San Marino</option>
												<option value="ST">São Tomé and Príncipe</option>
												<option value="SA">Saudi Arabia</option>
												<option value="SN">Senegal</option>
												<option value="RS">Serbia</option>
												<option value="SC">Seychelles</option>
												<option value="SL">Sierra Leone</option>
												<option value="SG">Singapore</option>
												<option value="SK">Slovakia</option>
												<option value="SI">Slovenia</option>
												<option value="SB">Solomon Islands</option>
												<option value="SO">Somalia</option>
												<option value="ZA">South Africa</option>
												<option value="GS">South Georgia</option>
												<option value="KR">South Korea</option>
												<option value="ES">Spain</option>
												<option value="LK">Sri Lanka</option>
												<option value="SD">Sudan</option>
												<option value="SR">Suriname</option>
												<option value="SJ">Svalbard and Jan Mayen</option>
												<option value="SZ">Swaziland</option>
												<option value="SE">Sweden</option>
												<option value="CH">Switzerland</option>
												<option value="SY">Syria</option>
												<option value="TW">Taiwan</option>
												<option value="TJ">Tajikistan</option>
												<option value="TZ">Tanzania</option>
												<option value="TH">Thailand</option>
												<option value="TL">Timor-Leste</option>
												<option value="TG">Togo</option>
												<option value="TK">Tokelau</option>
												<option value="TO">Tonga</option>
												<option value="TT">Trinidad and Tobago</option>
												<option value="TN">Tunisia</option>
												<option value="TR">Turkey</option>
												<option value="TM">Turkmenistan</option>
												<option value="TC">Turks and Caicos Islands</option>
												<option value="TV">Tuvalu</option>
												<option value="UG">Uganda</option>
												<option value="UA">Ukraine</option>
												<option value="AE">United Arab Emirates</option>
												<option value="US" selected="selected">United Kingdom</option>
												<option value="UY">Uruguay</option>
												<option value="UM">U.S. Minor Outlying Islands</option>
												<option value="VI">U.S. Virgin Islands</option>
												<option value="UZ">Uzbekistan</option>
												<option value="VU">Vanuatu</option>
												<option value="VA">Vatican City</option>
												<option value="VE">Venezuela</option>
												<option value="VN">Vietnam</option>
												<option value="WF">Wallis and Futuna</option>
												<option value="EH">Western Sahara</option>
												<option value="YE">Yemen</option>
												<option value="ZM">Zambia</option>
												<option value="ZW">Zimbabwe</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>State / Divition<span>*</span></label>
											<select name="state-province" id="state-province">
												<option value="divition" selected="selected">New Yourk</option>
												<option>Los Angeles</option>
												<option>Chicago</option>
												<option>Houston</option>
												<option>San Diego</option>
												<option>Dallas</option>
												<option>Charlotte</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label for="aline1">Address Line 1<span>*</span></label>
											<input id="aline1" type="text" name="address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label for="aline2">Address Line 2<span>*</span></label>
											<input id="aline2" type="text" name="address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label for="pcode">Postal Code<span>*</span></label>
											<input id="pcode" type="text" name="post" placeholder="" required="required">	
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label for="note">Note </label>
											<input id="note" type="text" name="note" placeholder="" required="required">
										
										</div>
									</div>
									<div class="col-12">
										<div class="form-group create-account">
											<input id="cbox" type="checkbox">
											<label for="cbox">Create an account?</label>
										</div>
									</div>
								</div>
							</form>
							<!--/ End Form -->
						</div>
					</div>
					
					<div class="col-lg-4 col-12 wow fadeIn">
						<div class="order-details">
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>Cart Total</h2>
								<div class="content">
									<ul>
										<li>Sub Total<span>$250.00</span></li>
										<li>(+) Shipping<span>$20.00</span></li>
										<li class="last">Total<span>$270.00</span></li>
									</ul>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Order Widget -->
							<div class="single-widget payment-methods">
								<h2>Payments</h2>
								<div class="content">

								
									<div class="checkbox">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="pmethod1">
											<label class="form-check-label" for="pmethod1">
												Check Payments
											</label>
										</div>

										<div class="form-check">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="pmethod2" checked>
											<label class="form-check-label" for="pmethod2">
												Cash On Delivery
											</label>
										</div>

										<div class="form-check">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="pmethod3" checked>
											<label class="form-check-label" for="pmethod3">
												PayPal
											</label>
										</div>
									</div>
								</div>
							</div>
							<!--/ End Order Widget -->

							<!-- Button Widget -->
							<div class="single-widget get-button">
								<div class="content">
									<div class="button">
										<a href="#" class="bg-btn">Proceed to Checkout</a>
									</div>
								</div>
							</div>
							<!--/ End Button Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Checkout -->

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
		<!-- slick js -->			
		<script src="assets/js/slick.js"></script>	
		<!-- nicesellect js -->			
		<script src="assets/js/nicesellect.js"></script>			
		<!-- scroll-top js -->			
		<script src="assets/js/scroll-top.js"></script>									
		<!-- scripts js -->
		<script src="assets/js/scripts.js"></script>
		<script>
			$('select').niceSelect();
		</script>			
	</body>

<!-- Mirrored from edutec-html.vercel.app/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Jun 2025 19:59:06 GMT -->
</html>
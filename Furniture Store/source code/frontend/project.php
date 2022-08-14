<html>
<head>
	<!-- Font Awesome, Style -->
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="owlcarouselmin.css">
</head>
<body>

<?php include('topbar.php') ;?>
<?php include('header.php'); ?>
<?php include('category.php');?>
			
						<!-- Slider Start -->
						<div class="productSlider">
							<div id="sliderShuffle" class="sliderInner">
								<img src="images/bedroom.jpeg" />
								<img src="images/chairs.jpeg" />
								<img src="images/banner.jpeg"/>
							</div>
							<div class="cycle-control">
								<span id="next"><i class="fas fa-angle-right"></i></span>
								<span id="prev"><i class="fas fa-angle-left"></i></span>
							</div>
						</div>
						<!-- Slider End -->

						<!-- <div class="offer-card">
							<img src="images/chair.jpeg">
						</div>
						<div class="offer-card">
							<img src="images/ottomon.jpeg">
						</div>
						<div class="offer-card">
							<img src="images/cup.jpeg">
						</div> -->
					</div>
				</div>
				<!-- Product Content End -->
				

				<!-- Banner Start -->
				<!-- <div class="banner">
					<div class="container">
						<img src="images/banner.jpeg" alt="Banner">
					</div>
				</div>
				 --><!-- Banner End -->

				
<?php include('product.php'); ?>
				<!-- Popular Store Start -->
				<div class="popularStores">
					<div class="container">
						<h3>Popular Stores</h3>			
						<div class="popularStoresInner">
							<a href="#">Liquor Cabinet</a>
							<a href="#">Rocking Chair</a>
							<a href="#">Bookcase</a>
							<a href="#">Cupboard</a>
							<a href="#">Couch</a>
							<a href="#">Infant Bed</a>
							<a href="#">Sofa Bed</a>
							<a href="#">Game Table</a>
						</div>
					</div>
				</div>
				<!-- Popular Store End -->


		
				<!-- Support Section start-->
				<div class="support">
					<div class="container">
						<a href="#">
							<img src="images/icon1.png">
							<h5>Fast Delivery</h5>
						</a>
						<a href="#">
							<img src="images/icon2.png">
							<h5>Support 24 Hours</h5>
						</a>
						<a href="#">
							<img src="images/icon3.png">
							<h5>Easy Payment Method</h5>
						</a>
						<a href="#">
							<img src="images/icon4.png">
							<h5>Sell on e-store</h5>
						</a>
					</div>
				</div>
				<!-- Support Section end-->




<?php include('footer.php'); ?>
<?php include('login.php'); ?>

				<!-- Product View Box / Quick Product View Start -->
				<div class="productViewBox">
					<h3></h3>
					<div class="productViewBox-closeBtn"><i class="fas fa-times"></i></div>
					<div class="productViewBoxImg">
						<img src="#">
					</div>
					<div class="productViewBoxDetail">
						<h5><b>Price : </b> <i class="fas fa-dollar-sign"></i> </h5>
						<h5><b>Warranty : </b> 12 Months</h5>
						<h5><b>Delivery of the city : </b> Free</h5>
						<h5><b>Payment : </b> COD, Visa, Mastercard, Debit, Credit, Installation</h5>
						<h5><b>Availability : </b> in Stock</h5>
						<h5><b>Product Code : </b> </h5>
						<a href="#" class="addtocart"><i class="fas fa-heart"></i> Add to Cart</a>
						<a href="#" class="writereview"><i class="fas fa-pen"></i> Write a review</a>
						<a href="checkout.php" class="buynow"><i class="fas fa-shopping-cart"></i> Buy Now</a>
					</div>
				</div>
				<!-- Product View Box / Quick Product View End -->


				<!-- Jquery V.3.3.1 -->
				<script src="js/jquery-3.3.1.min.js"></script>
				<script src="js/jquery.cycle.js"></script>
				<script src="js/owl.carousel.min.js"></script>
				<script>
					$("#sliderShuffle").cycle({
						next: '#next',
						prev: '#prev'
					});
					
					$('.owl-carousel').owlCarousel({
						items:4,
						loop:true,
						margin:15,
						autoplay:true,
					autoplayTimeout:3000, //3 Second
					nav:true,
					responsiveClass:true,
					responsive:{
						0:{
							items:1,
							nav:true
						},
						600:{
							items:3,
							nav:true
						},
						1000:{
							items:4,
							nav:true
						}
					}

				});

					$(function(){
						$(".topbar ul li").click(function(){
							$(".topbar ul li").not(this).find("ul").slideUp();
							$(this).find("ul").slideToggle();
						});
						$(".topbar ul li ul li, productCategories ul li .megamenu").click(function(e){
							e.stopPropagation();	
						});
						$(".productCategories ul li").click(function(){
							$(".productCategories ul li").not(this).find(".megamenu").hide();
							$(this).find(".megamenu").toggle();
						});
						$(".otherInfoBody").hide();
						$(".otherInfoHandle").click(function(){
							$(".otherInfoBody").slideToggle();
						});
						$(".signBtn").click(function(){
							$("body").css("overflow", "hidden");
							$(".loginBox").slideDown();
						});
						$(".closeBtn").click(function(){
							$("body").css("overflow", "visible");
							$(".loginBox").slideUp();
						});
						$(".productViewBtn").click(function(e){
							e.preventDefault();
							$("body").css("overflow", "hidden");
							$(".productViewBox").slideDown();
						});
						$(".productViewBox-closeBtn").click(function(){
							$("body").css("overflow", "visible");
							$(".productViewBox").slideUp();
						});
					});
				</script>

</body>
</html>
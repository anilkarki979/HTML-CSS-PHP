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
			
<body>
	<div class="container">
<h2>For detail information</h2>
<h3>Contact Us:</h3>
<ul><b>
	<li>Phone No:&nbsp&nbsp <b style="color: green">9861396669</li></b>
	<li>Email: <a href="mailto:excusedmebishal@gmail.com">srzn.iet@gmail.com</a></li>
<h3>For further information please visit us.</h3>
<p>Location:&nbsp&nbsp<b style="color: red"> Khwopa Engineering College <br>Libali-08,Bhaktapur</p></b>
</ul>
</div>
<?php include('footer.php'); ?>
<?php include('login.php'); ?>


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

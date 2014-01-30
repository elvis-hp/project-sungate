<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php 
	//Yii::app()->bootstrap->register();
	//Yii::app()->bootstrap->registerCarousel();
	
	//Yii::app()->bootstrap->registerCoreCss('bootstrap.min.css');
	//Yii::app()->bootstrap->registerCss('yii.css');
	//Yii::app()->bootstrap->registerJs('jquery.js');
	//Yii::app()->bootstrap->registerJs('bootstrap.js');
	?>
	
	
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.7.2.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>	
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.scrolltotop.js"></script>	
	
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" />
	 <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
	 <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/flexslider.css" />
	 
	 <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/superfish.js"></script>	
	 <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/owl.carousel.min.js"></script>	
	 
	 
	 
</head>

<body>
<!--
<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>
-->

<div id="top-bar" class="container">
			<div class="row">
				<div class="col-md-4">
					<form method="POST" class="search_form">
						<input type="text" class="form-control search" placeholder="keyword...">
					</form>
				</div>
				<div class="col-md-8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>
							<li><a href="checkout.html">Checkout</a></li>					
							<li><a href="register.html">Login</a></li>			
						</ul>
					</div>
				</div>
			</div>
		</div>


<div class="container" id="wrapper">

<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="http://www.captheme.com/bootstrap/sale_shop/img/logo-red.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.html">Woman</a>					
								<ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul>
							</li>															
							<li><a href="./products.html">Man</a></li>			
							<li><a href="./products.html">Sport</a>
								<ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul>
							</li>							
							<li><a href="./products.html">Hangbag</a></li>
							<li><a href="./products.html">Best Seller</a></li>
							<li><a href="./products.html">Top Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>	
			
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="http://www.captheme.com/bootstrap/sale_shop/images/banner-1.jpg" alt="" />
							<div class="intro">
								<p><h1>Search engine friendly</h1></p>
								<p><span>with a visually appealing interface</span></p>
								<p><span>know exactly turned</span></p>
							</div>
						</li>
						<li>
							<img src="http://www.captheme.com/bootstrap/sale_shop/images/banner-2.jpg" alt="" />
							<div class="intro">
								<p><h1>Easy to User</h1></p>
								<p><span>template is designed feature rich, easy to use, search engine friendly</span></p>
								<p><span>Quis nostrud exerci tation</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			
	
	<?php //echo $content; ?>

	<div class="clear"></div>
	
	
	<!--Load sp -->
	
	
		<section class="main-content">
				
				<div class="row">						
					<div class="col-md-12">								
						<ul class="thumbnails listing-products">
							<li class="col-md-4">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="product_detail.html"><img alt="" src="http://www.captheme.com/bootstrap/sale_shop/images/project_img6.jpg?xx=2.jpg" class="img-responsive"></a><br/>
									<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
									<a href="#" class="category">Phasellus consequat</a>
									<p class="price">$341</p>
								</div>
							</li>       
							<li class="col-md-4">
								<div class="product-box">												
									<a href="product_detail.html"><img alt="" src="http://www.captheme.com/bootstrap/sale_shop/images/project_img6.jpg?xx=3.jpg" class="img-responsive"></a><br/>
									<a href="product_detail.html" class="title">Praesent tempor sem</a><br/>
									<a href="#" class="category">Erat gravida</a>
									<p class="price">$28</p>
								</div>
							</li>
							<li class="col-md-4">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="product_detail.html"><img alt="" src="http://www.captheme.com/bootstrap/sale_shop/images/project_img6.jpg?xx=4.jpg" class="img-responsive"></a><br/>
									<a href="product_detail.html" class="title">Wuam ultrices rutrum</a><br/>
									<a href="#" class="category">Suspendisse aliquet</a>
									<p class="price">$341</p>
								</div>
							</li>
							<li class="col-md-4">
								<div class="product-box">												
									<span class="sale_tag"></span>
									<a href="product_detail.html"><img alt="" src="http://www.captheme.com/bootstrap/sale_shop/images/project_img6.jpg?xx=6.jpg" class="img-responsive"></a><br/>
									<a href="product_detail.html" class="title">Praesent tempor sem sodales</a><br/>
									<a href="#" class="category">Nam imperdiet</a>
									<p class="price">$49</p>
								</div>
							</li>
							<li class="col-md-4">
								<div class="product-box">                                        												
									<a href="product_detail.html"><img alt="" src="http://www.captheme.com/bootstrap/sale_shop/images/project_img6.jpg?xx=2.jpg" class="img-responsive"></a><br/>
									<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
									<a href="#" class="category">Congue diam congue</a>
									<p class="price">$35</p>
								</div>
							</li>       
							<li class="col-md-4">
								<div class="product-box">												
									<a href="product_detail.html"><img alt="" src="http://www.captheme.com/bootstrap/sale_shop/images/project_img6.jpg?xx=3.jpg" class="img-responsive"></a><br/>
									<a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
									<a href="#" class="category">Gravida placerat</a>
									<p class="price">$61</p>
								</div>
							</li>
							<li class="col-md-4">
								<div class="product-box">												
									<a href="product_detail.html"><img alt="" src="http://www.captheme.com/bootstrap/sale_shop/images/project_img6.jpg?xx=4.jpg" class="img-responsive"></a><br/>
									<a href="product_detail.html" class="title">Quam ultrices rutrum</a><br/>
									<a href="#" class="category">Orci et nisl iaculis</a>
									<p class="price">$233</p>
								</div>
							</li>
							<li class="col-md-4">
								<div class="product-box">												
									<a href="product_detail.html"><img alt="" src="http://www.captheme.com/bootstrap/sale_shop/images/project_img6.jpg?xx=6.jpg" class="img-responsive"></a><br/>
									<a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
									<a href="#" class="category">Urna nec lectus mollis</a>
									<p class="price">$134</p>
								</div>
							</li>
							<li class="col-md-4">
								<div class="product-box">												
									<a href="product_detail.html"><img alt="" src="http://www.captheme.com/bootstrap/sale_shop/images/project_img6.jpg?xx=2.jpg" class="img-responsive"></a><br/>
									<a href="product_detail.html" class="title">Luctus quam ultrices</a><br/>
									<a href="#" class="category">Suspendisse aliquet</a>
									<p class="price">$261</p>
								</div>
							</li>
						</ul>								
						<hr>
					
					</div>
				</div>
			</section>
	
	<!-- Het load sp-->
	
	
	
	
	

</div><!-- page -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/common.js"></script>	
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
					
					$(".owl-carousel").owlCarousel({
						autoPlay: 3000, //Set AutoPlay to 3 seconds
						items : 4,						
						pagination : false
					});
					
					var owl_1 = $("#owl-carousel-1");
					var owl_2 = $("#owl-carousel-2");

					// Custom Navigation Events
					$(".next_1").click(function(){
						owl_1.trigger('owl.next');
					})
					$(".prev_1").click(function(){
						owl_1.trigger('owl.prev');
					})
					
					// Custom Navigation Events
					$(".next_2").click(function(){
						owl_2.trigger('owl.next');
					})
					$(".prev_2").click(function(){
						owl_2.trigger('owl.prev');
					})
				});
			});
		</script>
</body>
</html>

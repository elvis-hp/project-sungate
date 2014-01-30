<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	
	
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



<?php
		//Top menu
		$this->widget('application.components.TopMenu',  array('delimiter' => ''));
		?>


<div class="container" id="wrapper">
		
		<?php
		//menubar
		$this->widget('application.components.MenuBar', array('delimiter' => ''));
		?>
			
				
		<?php
		//slide
		$this->widget('application.components.SlideBar', array('delimiter' => ''));
		?>
			
	
	

	<div class="clear"></div>
	
	
	<section class="main-content">
		<?php echo $content; ?>
	</section>
	
	
	

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

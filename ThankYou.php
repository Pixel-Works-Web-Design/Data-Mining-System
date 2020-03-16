
<?php 
	// Include Header
	include("connection.php");
	include_once("header.php");


 ?>

 <div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(images/banner/top-heading.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.php" class="home">Home</a></li>
						<li><a href="javascript:;">Thank You</a></li>
					</ul>
				</div>
				<h1 class="heading_primary">Thank You</h1></div>
		</div>
		<section class="content-area" id="BottomSpace">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-9 align-left">
					<?php 
					if(isset($_REQUEST['subscriber']))
					{
						?>
						<h1 style="font-family: serif;">Thank you for Subscribing !</h1>
						

						<?php
					}
					else if(isset($_REQUEST['inquiry'])){
						?>
					<h3 style="font-family: serif;">Dear User,</h3>
					<h2 style="font-family: serif;">Thank you for your inquiry. We will contact you in 48 hours.</h2>
					<br>
					 <h4 style="font-family: serif;">Thanks & Regards</h4>
					 <h4 style="font-family: serif; font-weight: bold;">16Cheers Holiday Team</h4>
					 <br>
						<?php
					}
					else{

					}
					 ?>
					 <h5><a href="index.php" style="color: #4894CC;">Return to Home Page</a></h5>
					
					</div>
					<div class="widget-area col-sm-3 alignright">
						<?php 
						include_once("sidebar.php");
					 ?>
					</div>
				</div>
			</div>
		</section>
	</div>
 <?php 
	// Include Footer
	include_once("footer.php");
 ?>
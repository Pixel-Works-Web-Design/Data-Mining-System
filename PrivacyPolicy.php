
<?php 
	// Include Header
	include("connection.php");
	include_once("header.php");
	


	$getprivacypolicy = mysql_query("SELECT * from privacypolicy where policy_id = '1'") ;
	$privacy = mysql_fetch_assoc($getprivacypolicy) ;
 ?>
	<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(images/banner/top-heading.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.php" class="home">Home</a></li>
						<li><a href="javascript:;">Privacy Policy</a></li>
						
					</ul>
				</div>
				<h2 class="heading_primary" style="text-transform: capitalize;">Privacy Policy</h2></div>
		</div>
		<section class="content-area single-woo-tour" id="BottomSpace">
			<div class="container">
				<div class="tb_single_tour product">
					<div class="top_content_single row" id="BottomSpace">
						<div class="images images_single_left">
							<div class="title-single">
								<div class="title">
									<h1 style="text-transform: capitalize;">Privacy Policy</h1>
								</div>
								<div class="tour_code">
									
								</div>
							</div>
						
							<div id="slider" class="flexslider">
								<ul class="slides">
							
									
								</ul>
							</div>
						
							<div class="clear"></div>
							<div class="single-tour-tabs wc-tabs-wrapper">
							
								<div class="tab-content">
									
									
									<div style="text-transform: capitalize; word-wrap: break-word; width: 100%; line-height: 28px;"><?php echo $privacy['policy_description'] ; ?></div>
								
								</div>
							</div>
							<div class="clear"></div>

							
						</div>
					
							<div class="col-md-3 col-xs-12">
							<?php 
								 include_once("sidebar.php");

							 ?>
							</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	
<?php 
	// Include Footer
	include_once("footer.php");
 ?>

 
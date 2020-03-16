
<?php 
	// Include Header
	include("connection.php");
	include_once("header.php");
	// $aboutIDEncode  = $_REQUEST['Aboutusid'] ;
	$aboutID  = isset($_REQUEST['Aboutusid']) ? base64_decode($_REQUEST['Aboutusid']) : '';

	if($aboutID == '')
	{
		$getaboutus = mysql_query("SELECT * from aboutus limit 1") ;
	}
	else{
		$getaboutus = mysql_query("SELECT * from aboutus where about_id = '$aboutID'") ;	
	}
	
	$about = mysql_fetch_assoc($getaboutus) ;
 ?>
	<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(palash/photos/<?php echo $about['about_breadcrumb']; ?>);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.php" class="home">Home</a></li>
						<li><a href="javascript:;">About Us</a></li>
						
					</ul>
				</div>
				<h2 class="heading_primary" style="text-transform: capitalize;"><?php echo $about['about_title'] ; ?></h2></div>
		</div>
		<section class="content-area single-woo-tour" id="BottomSpace">
			<div class="container">
				<div class="tb_single_tour product">
					<div class="top_content_single row" id="BottomSpace">
						<div class="images images_single_left">
							<div class="title-single">
								<div class="title">
									<h1 style="text-transform: capitalize;"><?php echo $about['about_title'] ; ?></h1>
								</div>
								<div class="tour_code">
									
								</div>
							</div>
						
							<div id="slider" class="flexslider">
								<ul class="slides">
							<?php 
							if(!($about['about_img'] == NULL || $about['about_img'] == ''))
							{
							?>
								<li>
								<a href="palash/photos/<?php echo $about['about_img'] ; ?>" class="swipebox" title=""><img src="palash/photos/<?php echo $about['about_img'] ; ?>" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false" style="width: 100%; height: 400px;"></a>
								</li>
							<?php
							}
							 ?>
								
									
								</ul>
							</div>
						
							<div class="clear"></div>
							<div class="single-tour-tabs wc-tabs-wrapper">
							
								<div class="tab-content">
									
									
									<div style="text-transform: capitalize; word-wrap: break-word; width: 100%; line-height: 28px;"><?php echo $about['about_content'] ; ?></div>
								
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

 
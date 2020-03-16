
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
						<li><a href="javascript:;">Tours</a></li>
					</ul>
				</div>
				<h1 class="heading_primary">Tours</h1></div>
		</div>
		<section class="content-area" id="BottomSpace">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-9">
						<ul class="tours products wrapper-tours-slider">
		<?php 
		
		$gettours = mysql_query("SELECT * from international_domestics");
		if(mysql_num_rows($gettours) > 0)
		{
			while ($tour = mysql_fetch_array($gettours)) {
			?>
			<li class="item-tour col-md-6 col-sm-6 product">
			<div class="item_border">
					<div class="item_content">
						<div class="post_images">
                        
						<a href="tours.php?tour=<?php echo  $tour['InterDom_title'] ; ?>" class="travel_tour-LoopProduct-link">
							<img src="palash/photos/<?php echo $tour['InterDom_photo'] ; ?>" alt="Tour Image" title="<?php echo $tour['InterDom_title'] ; ?>" style="height: 200px; width: 100%;">
						</a>
					<div class="group-icon">							
					</div>
		
					
						</div>
						<div class="wrapper_content">
							<div class="post_title" style="overflow: hidden; width: 100%; height: 22px; word-break: normal; margin-bottom: 13px;">
								<h4 style="font-weight: bold;">
								<a href="tours.php?tour=<?php echo  $tour['InterDom_title'] ; ?>" rel="bookmark">
									<?php echo $tour['InterDom_title'] ; ?>
								</a>
								</h4>
							</div>
							
						</div>
					</div>
					<div class="read_more">
						
						<a href="tours.php?tour=<?php echo  $tour['InterDom_title'] ; ?>" class="read_more_button">VIEW MORE
							<i class="fa fa-long-arrow-right"></i></a>
						<div class="clear"></div>
					</div>
				</div>
			</li>	
			<?php   
			} // End of While loop Get Tours
		}
		 ?>
						
						</ul>
				
				
					</div> <!-- end of col 9 -->
					<div class="widget-area align-right col-sm-3">
					
					<?php 
						 include_once("sidebar.php");
					 ?>
					 	
					</div> <!-- Widget Area -->
				</div>
			</div>
		</section>
	</div>
<?php 
	// Include Footer
	include_once("footer.php");
 ?>
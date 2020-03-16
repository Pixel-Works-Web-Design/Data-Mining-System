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
						<li><a href="javascript:;">Services</a></li>
					</ul>
				</div>
				<h1 class="heading_primary">Services</h1></div>
		</div>
		<section class="content-area" id="BottomSpace">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-9 full-width">
						<div class="panel-group" id="travel-tips" role="tablist" aria-multiselectable="true">

		<?php 
		// show First Services on Active
		$getservices = mysql_query("SELECT * from service limit 1") ;
		if(mysql_num_rows($getservices) > 0)
		{
			$myservices = mysql_fetch_array($getservices) ;

			$serviceFirstid = $myservices['service_id'] ;
			 ?>
				<div class="panel">
								<div class="panel-heading" role="tab" id="1485138125435">
									<h4 class="panel-title" style="text-transform: capitalize;">
										<a role="button" data-toggle="collapse" data-parent="#travel-tips" href="#collapse_1485138125435" aria-expanded="true" aria-controls="collapse_1485138125435">
											<?php echo $myservices['service_title'] ; ?>
											
										</a>
									</h4>
								</div>
								<div id="collapse_1485138125435" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="1485138125435">
									<div class="content-inner">
										<div class="row">
											<div class="col-sm-2">
												
											
												
								<div class="widget-icon-box widget-icon-box-base iconbox-center">
												<div class="boxes-icon circle" style="font-size:30px;width:80px; height:80px;line-height:80px" id="service_icon">
							<span class="inner-icon">
								<a href="palash/photos/<?php echo $myservices['service_img'] ; ?>">
								<img width="145" height="92" src="palash/photos/<?php echo $myservices['service_img'] ; ?>" class="vc_single_image-img attachment-full" alt="" title="<?php echo $myservices['service_title'] ; ?>">
								</a>
							</span>
								
							</div>
						</div>
													
											</div>
											<div class="col-sm-10">
												<div style="text-transform: capitalize; word-wrap: break-word; width: 100%;">
												<?php echo $myservices['service_content'] ; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
			 <?php
			
		}
		// End of show First Services on Active




		$getservices = mysql_query("SELECT * from service") ;
		if(mysql_num_rows($getservices) > 0)
		{
			while ($myservices = mysql_fetch_array($getservices)) {
				
			
			if(!($serviceFirstid ==  $myservices['service_id']))
			{
			 ?>
			 <div class="panel">
								<div class="panel-heading" role="tab" id="heading_1485138122013">
									<h4 class="panel-title" style="text-transform: capitalize;">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#travel-tips" href="#<?php echo $myservices['service_id'] ; ?>" aria-expanded="false" aria-controls="collapse_1485138122013">
											<?php echo $myservices['service_title'] ; ?>
											
										</a>
									</h4>
								</div>
								<div id="<?php echo $myservices['service_id'] ; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_1485138122013">
									<div class="content-inner">
										<div class="row">
											<div class="col-sm-2">
													<div class="widget-icon-box widget-icon-box-base iconbox-center">
												<div class="boxes-icon circle" style="font-size:30px;width:80px; height:80px;line-height:80px" id="service_icon">
							<span class="inner-icon">
								<a href="palash/photos/<?php echo $myservices['service_img'] ; ?>">
								<img width="145" height="92" src="palash/photos/<?php echo $myservices['service_img'] ; ?>" class="vc_single_image-img attachment-full" alt="" title="<?php echo $myservices['service_title'] ; ?>">
								</a>
							</span>
								
							</div>
						</div>
											</div>
											<div class="col-sm-10" s>
												<div style="text-transform: capitalize; word-wrap: break-word; width: 100%;">
												<?php echo $myservices['service_content'] ; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
			 <?php
			} // End of IF first Row not Show

			?>
			
			 <?php
			} // End of While loop
		}
		 ?>

		 
	
	</div>
</div> <!-- end of col-sm-9 -->
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

<?php 
	// Include Header
	include("connection.php");
	include_once("header.php");
	$toursIDEncode  = isset($_REQUEST['Tourid']) ? $_REQUEST['Tourid'] : '' ;
	$toursID  = isset($_REQUEST['Tourid']) ?  base64_decode($_REQUEST['Tourid']) : '';

	if($toursID == '')
	{
		$gettour = mysql_query("SELECT * from tours limit 1") ;
	}
	else{
		$gettour = mysql_query("SELECT * from tours where tours_id = '$toursID'") ;	
	}
	
	$tour = mysql_fetch_assoc($gettour) ;
		 

 ?>

	<div class="site wrapper-content">
		<?php 
			// Breadcrumb Image images/banner/top-heading.jpg

		 ?>
		<div class="top_site_main" style="background-image:url(palash/photos/<?php echo $tour['tours_breadcrumb']; ?>);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
							<li><a href="index.php" class="home">Home</a></li>
						<li><a href="TourList-International-Domestics.php">Tours</a></li>
						<li style="text-transform: lowercase;">
							<p style="text-transform: capitalize !important;">
							<?php 
								if($tour['tours_domestic_international'] == 'DOMESTIC')
								{
									?>
									<a href="tours.php?tour=<?php echo  $tour['tours_domestic_international'] ; ?>">Domestic Tour</a>
									<?php
								}
								else{
									?>
									<a href="tours.php?tour=<?php echo  $tour['tours_domestic_international'] ; ?>">International Tour</a>
									<?php
									
								}
							?>
							</p></li>
					</ul>
				</div>
				<h2 class="heading_primary">
				<?php
				  // echo $tour['tours_tag'] ;
				if(!($tour['tours_tag'] == NULL || $tour['tours_tag'] == ''))
				{

					$ExplodetTag = explode(',', $tour['tours_tag']) ;
					$tottag = count($ExplodetTag)-1 ;
					foreach ($ExplodetTag as $key => $tagss) {
						if($tottag == $key)
						{
							?>
							<a href="SpecialTours.php?TourTags=<?php echo $tagss; ?>" style="color: white;"><?php echo $tagss ; ?></a>
							<?php
						}
						else{
							?>
							<a href="SpecialTours.php?TourTags=<?php echo $tagss; ?>" style="color: white;"><?php echo $tagss.' , ' ; ?></a>
							<?php
						}
					}

				}
				
				// echo str_replace(',', ' , ', $tour['tours_tag']);
				  ?>
				</h2>
			</div>
		</div>
		<section class="content-area single-woo-tour" id="BottomSpace">
			<div class="container">
				<div class="tb_single_tour product">
					<div class="top_content_single row">
						<div class="images images_single_left">
							<div class="title-single" style="padding-bottom: 5px;">
								<div class="title" style="text-transform: capitalize;">
									<h1><?php echo $tour['tours_title'] ; ?></h1>
								</div>
								<div class="tour_code">
									<i class="fa fa-inr" aria-hidden="true"></i>&nbsp;&nbsp;<span id = "prices"><?php echo $tour['tours_price'] ; ?></span>
								</div>
							</div>
							<div class="tour_after_title">
								<div class="meta_date">
									<span><?php echo $tour['tours_day']; ?> DAYS <?php echo $tour['tours_night']; ?> NIGHTS</span>
								</div>
								<div class="meta_values">
									<span>Category:</span>
									<div class="value">

									<!-- <a href="tours.html" rel="tag"><?php echo $tour['tours_category'] ; ?></a> -->
									<?php
										
										if(!($tour['tours_category'] == NULL || $tour['tours_category'] == ''))
										{
											$tags = explode(',', $tour['tours_category']) ;
											$tot = count($tags);

											foreach ($tags as $key => $mytag) {

											$tag = $mytag ;

												if($key == $tot-1)
												{
													?>
													<a href="tours.php?category=<?php echo $tag ; ?>">
														<?php echo $tag ; ?>
													</a>
													<?php
												}
												else{
													?>
													<a href="tours.php?category=<?php echo $tag ; ?>">
														<?php echo $tag . ' , '; ?>
													</a>
													<?php
												}
											}
										}

										  ?>
									</div>
								</div>
								<div class="tour-share">
								<div class="sharethis-inline-follow-buttons"></div>
								<div class="sharethis-inline-share-buttons"></div>

									<!-- <ul class="share-social">
										<li>
											<a target="_blank" class="facebook" href="#"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
											<a target="_blank" class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
										</li>
										<li>
											<a target="_blank" class="googleplus" href="#"><i class="fa fa-google"></i></a>
										</li>
									</ul> -->
								</div>
							</div>
							<div id="slider" class="flexslider">
								<ul class="slides">
									
						<?php  
						$gettourImages = mysql_query("SELECT * from tours_images where tourimg_tours_id = '$toursID'") ;
						if(mysql_num_rows($gettourImages) > 0)
						{
							while ($TourImages = mysql_fetch_array($gettourImages)) {
							?>
							<li>
									<a href="palash/photos/<?php echo $TourImages['tourimg_photo'] ; ?>" >
										<img width="950" height="700" src="palash/photos/<?php echo $TourImages['tourimg_photo'] ; ?>" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
							</li>
							<?php
							}
						}
						?>
								</ul>
							</div>
							<div id="carousel" class="flexslider thumbnail_product">
								<ul class="slides">
					<?php  
						$gettourImages = mysql_query("SELECT * from tours_images where tourimg_tours_id = '$toursID'") ;
						if(mysql_num_rows($gettourImages) > 0)
						{
							while ($TourImages = mysql_fetch_array($gettourImages)) {
							?>
							<li>
								<img width="150" height="100" src="palash/photos/<?php echo $TourImages['tourimg_photo'] ; ?>" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
							</li>

							<?php
							}
						}
					?>
										
								</ul>
							</div>
							<div class="clear"></div>
							<div class="single-tour-tabs wc-tabs-wrapper">
								<ul class="tabs wc-tabs" role="tablist">
									<li class="description_tab active" role="presentation">
										<a href="#tab-description" role="tab" data-toggle="tab">Description</a>
									</li>
									<li class="itinerary_tab_tab" role="presentation">
										<a href="#tab-inclusion" role="tab" data-toggle="tab">Inclusion</a>
									</li>

									<li class="location_tab_tab" role="presentation">
										<a href="#tab-termsconditions" role="tab" data-toggle="tab">Terms & Condition</a>
									</li>
									
								</ul>
								<div class="tab-content" style="text-transform: capitalize;">
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--description panel entry-content wc-tab active" id="tab-description">
									<?php echo 	$tour['tours_description'] ; ?>
									</div>
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--inclusion panel entry-content wc-tab" id="tab-inclusion">
									
										<?php echo 	$tour['tours_inclusion'] ; ?>
										
									</div>
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--termsconditions panel entry-content wc-tab" id="tab-termsconditions">
											<?php echo 	$tour['tours_termscondition'] ; ?>
									</div>
							
								</div>
							</div>
							<div class="related tours">
								<?php

								$datefrom = $tour['tours_validfrom'] ;
								$dateto = $tour['tours_validto'] ;

								 if(!($datefrom == NULL && $datefrom == '' && $dateto == NULL && $dateto == ''))
								 {
								 	// Date Format from
				                  $date1 = date_create($datefrom);
				                  $dates_format1 = DATE_FORMAT($date1, 'F d, Y');

				                  // Date Format to
				                  $date2 = date_create($dateto);
				                  $dates_format2 = DATE_FORMAT($date2, 'F d, Y');
								 ?>
								 <h3>Valid from <span style="color: green;"><?php echo $dates_format1; ?></span> To <span style="color: green;"><?php echo $dates_format2; ?></span></h3>
								 <?php
								 }
								 ?>

							</div>
							<div class="related tours">
								<h2>Related Tours </h2>
								<ul class="tours products wrapper-tours-slider">

					<?php 
						// Extra
				/*	$countrry = $tour['tours_destination'] ;
					$dom_inter = $tour['tours_domestic_international'] ;

				
					$getRelatedQuery = "SELECT * from tours where (tours_destination IN(select tours_destination from tours where tours_destination = '$countrry' ) OR tours_domestic_international	 IN(select tours_domestic_international	 from tours where tours_domestic_international = '$dom_inter' ) OR tours_category IN(SELECT tours_tag from tours where tours_tag =";


					$cat = $tour['tours_category'] ;
					$Explodecat = explode(',', $cat) ;
					$totcat = count($Explodecat)-1;
					foreach ($Explodecat as  $key =>$category) {
						if($totcat == $key)
						{
							$getRelatedQuery.="'$category'";
						}
						else{
							$getRelatedQuery.="'$category' OR ";
						}
						
					}

					$getRelatedQuery.=") OR tours_tag IN(select tours_tag from tours where tours_tag = ";

					$tag = $tour['tours_tag'] ;
					$Explodetag = explode(',', $tag) ;
					$tottag = count($Explodetag)-1;
					foreach ($Explodetag as  $key =>$tags) {
						if($tottag == $key)
						{
							$getRelatedQuery.="'$tags'";
						}
						else{
							$getRelatedQuery.="'$tags' OR ";
						}
						
					}
					
			
			

					$getRelatedQuery.=")	) AND tours_id != '$toursID' limit 3";
			
					$getRelated =  mysql_query($getRelatedQuery);*/
					
					$which =  $tour['tours_domestic_international'];
					$gettours = mysql_query("SELECT * from tours where tours_domestic_international = '$which'  AND tours_id != '$toursID' order by RAND() limit 3") ;
					
					if(mysql_num_rows($gettours) > 0)
					{
						include("TourList.php") ;
					}
					 ?>
									
								</ul>
							</div>
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

<style type="text/css">
	#prices{
		border-bottom: 1px solid gray; 
		padding-bottom: 5px; 
		font-size: 17px;
		cursor: pointer;
	}
	#prices:hover{
		border:none; 
	}
</style>

<?php 
	// Include Footer
	include_once("footer.php");
 ?>


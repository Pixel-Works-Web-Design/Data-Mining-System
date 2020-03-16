<?php 
		while($tour = mysql_fetch_array($gettour))
						{
							?>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
                                        <span class="price">
							
					<ins><span class="travel_tour-Price-amount amount" style="color: white;">
					<i class="fa fa-inr" aria-hidden="true"></i>
					<?php echo $tour['tours_price'] ; ?>	
					</span></ins>
						</span>
						<a href="SingleTour.php?Tourid=<?php echo  base64_encode($tour['tours_id']) ; ?>" class="travel_tour-LoopProduct-link">
							<?php 
							// get 1 image of tour
							$tid = $tour['tours_id'] ;
							$getimg = mysql_query("SELECT * from tours_images where tourimg_tours_id = '$tid'") ;
							if(mysql_num_rows($getimg) > 0)
							{
								$image = mysql_fetch_assoc($getimg) ;
								?>
								<img src="palash/photos/<?php echo $image['tourimg_photo'] ; ?>" alt="Tour Image" title="<?php echo $tour['tours_title'] ; ?>" style="height: 200px; width: 100%;">
								<?php
							}
							
												 ?>
												
											</a>
									<div class="group-icon">							<?php 
									//  get category name and Image
									$cat = $tour['tours_category'];
									$categorys = explode(',', $cat) ;
									$tot = count($categorys) ;
									
						foreach ($categorys as $key => $mycat) {
							$getcatimg = mysql_query("SELECT * from tours_categorys where cat_name = '$mycat'") ;
							$catimg = mysql_fetch_assoc($getcatimg) ;
							if($key == $tot-1)
							{
							?>
					<a href="tours.php?category=<?php echo $mycat ; ?>" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="<?php echo $mycat ; ?>"><img src="palash/photos/<?php echo $catimg['cat_photo'] ; ?>" alt="" width="20"></i></a>
					<?php
							}
							else{
								?>
								<a href="tours.php?category=<?php echo $mycat ; ?>" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="<?php echo $mycat ; ?>"><img src="palash/photos/<?php echo $catimg['cat_photo'] ; ?>" alt="" width="20"></i></a>
							<span style="color: white;">|</span>
								<?php
							}
					?>
					
										<?php
									}
									 ?>
									</div>
						
									
										</div>
										<div class="wrapper_content">
											<div class="post_title" style="overflow: hidden; width: 100%; height: 22px; word-break: normal; margin-bottom: 13px;"><h4>
												<a href="SingleTour.php?Tourid=<?php echo  base64_encode($tour['tours_id']) ; ?>" rel="bookmark">
													<?php echo $tour['tours_title'] ; ?>
												</a>
											</h4></div>
											<span class="post_date">
											<?php echo $tour['tours_day'].' DAYS '.$tour['tours_night'].' NIGHTS' ; ?>
										  </span>
											<p style="word-wrap: break-word; width: 100%; height: 70px; overflow: hidden; text-transform: capitalize;">
											<?php
										  // echo rtrim(  substr($tour['tours_description'], 0 , 20) , '&nbsp;') ;
											//echo substr(strip_tags($tour['tours_description']) , 0 , 150) ;
											echo substr(strip_tags($tour['tours_description']) , 0 , 100) ;
											echo '..';
										 ?>	
											</p>

										</div>
									</div>
									<div class="read_more">
										
										<a href="SingleTour.php?Tourid=<?php echo  base64_encode($tour['tours_id']) ; ?>" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>  <!-- end of item-tour -->
							<?php
						}
 ?>
<?php
while ($tour = mysql_fetch_array($gettour)) {

				// get 1 image of tour
				$tid = $tour['tours_id'] ;
				$getimg = mysql_query("SELECT * from tours_images where tourimg_tours_id = '$tid'") ;
				if(mysql_num_rows($getimg) > 0)
				{
					$image = mysql_fetch_assoc($getimg) ;
					
				}
			    ?>
			    <div class="carousel-feature">
          <a href="SingleTour.php?Tourid=<?php echo  base64_encode($tour['tours_id']) ; ?>"><img class="carousel-image" alt="Image Caption" src="palash/photos/<?php echo $image['tourimg_photo'] ; ?>"></a>

          <div class="carousel-caption">
		           <!-- Tour Title -->
		           <div class="post_title">
		           	<h1>
					<a href="SingleTour.php?Tourid=<?php echo  base64_encode($tour['tours_id']) ; ?>" rel="bookmark">
							<?php echo $tour['tours_title'] ; ?>
					</a>
					</h1>
					</div>
					<!-- End of Tour Title -->

					<span class="post_date">
						<?php echo $tour['tours_day'].' DAYS '.$tour['tours_night'].' NIGHTS' ; ?>
					</span>

					<!-- Tour Description -->
		            <p style="text-transform: capitalize; text-align: left;">
					<?php
				 	echo substr(strip_tags($tour['tours_description']) , 0 , 350) ;
					echo '..';
				 	?>	
					</p>
					<!-- End of Tour Description -->
					
					<h6 style="text-align: left;">
					<a href="SingleTour.php?Tourid=<?php echo  base64_encode($tour['tours_id']) ; ?>" rel="bookmark" id="more">
							MORE DETAILS
					</a>
					</h6>

					<ul id="listofCatPrice">
					  
					<?php 
									//  get category name and Image
									$cat = $tour['tours_category'];
									$categorys = explode(',', $cat) ;
									// $tot = count($categorys) ;
									$tot = 5 ;
									
						foreach ($categorys as $key => $mycat) {

							if($tot == $key)
							{
								break;
							}
							else{
									$getcatimg = mysql_query("SELECT * from tours_categorys where cat_name = '$mycat'") ;
							$catimg = mysql_fetch_assoc($getcatimg) ;
							?>


								<li data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="<?php echo $mycat ; ?>">
									<a href="tours.php?category=<?php echo $mycat ; ?>"  ><img src="palash/photos/<?php echo $catimg['cat_photo'] ; ?>" style="width: 40px; height: 30px;"><br><?php echo $mycat; ?>
									</a>
								</li>
								<?php
							}
						
								
									}
									 ?>

									 <li style="background-color: #005F97; font-weight: bold;  padding: 20px 5px; z-index: 1; font-size: 15px; font-family: sans-serif;"><i class="fa fa-inr" aria-hidden="true"></i>
									<?php echo number_format($tour['tours_price'] , 2 ) ; ?>
									</li>

					</ul>

          </div>
        </div>
			    <?php
			}
			?>
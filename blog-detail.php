<?php 
	if(isset($_REQUEST['comment_submit']))
	{
		include("connection.php");
		$name = addslashes($_REQUEST['comment_name']) ;
		$email = addslashes($_REQUEST['comment_email']) ;
		$message = addslashes($_REQUEST['comment_msg']) ;

		$id = $_REQUEST['blod_ids'] ;
		

		 $done = mysql_query("INSERT into blogs_comment(blog_comment_name , blog_comment_email , blog_comment_message , blog_comment_date , blog_comment_time , blog_comment_blogid) values('$name' , '$email' , '$message' , CURDATE() , CURTIME() , '$id')");

		if($done)
		{	
			echo "<script type='text/javascript'>window.location='blog-detail.php?blogid=$id&commentsuccess=s'</script>";	
		}
		else{
			echo "<script type='text/javascript'>window.location='blog-detail.php?blogid=$id&commentfail=f'</script>";	
		}
		
		exit();
	}
 ?>

<?php 
	// Include Header
	include("connection.php");
	include_once("header.php");
	$blogIDEncode  = $_REQUEST['blogid'] ;
	$blogID  = $_REQUEST['blogid'] ;


	$getblog = mysql_query("SELECT * from blog where blog_id = '$blogID'") ;
	$blog = mysql_fetch_assoc($getblog) ;
 ?>
	<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(palash/photos/<?php echo $blog['blog_breadcrumb']; ?>);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.php" class="home">Home</a></li>
						<li><a href="blog.php">Blogs</a></li>
						
					</ul>
				</div>
				<h2 class="heading_primary" style="text-transform: capitalize;"><?php echo $blog['blog_title'] ; ?></h2></div>
		</div>
		<section class="content-area single-woo-tour" id="BottomSpace">
			<div class="container">
				<div class="tb_single_tour product">
					<div class="top_content_single row">
						<div class="images images_single_left">
							<div class="title-single">
								<div class="title">
									<h1 style="text-transform: capitalize;"><?php echo $blog['blog_title'] ; ?></h1>
								</div>
								<div class="tour_code">
									
								</div>
							</div>
							<div class="tour_after_title">
								<div class="meta_date">
									<span>
									<?php
									// date Format
									$date = date_create($blog['blog_date']);
                  					$dates_format = DATE_FORMAT($date, 'F d, Y');
                  					echo $dates_format;
									?>
									</span>
								</div>
								<div class="meta_values">
									<span>Category:</span>
									<div class="value">
										<?php
										//  Blog Tag
										 // echo $blog['blog_tags'] ;

										if(!($blog['blog_tags'] == NULL || $blog['blog_tags'] == ''))
										{
											$tags = explode(',', $blog['blog_tags']) ;
											$tot = count($tags);

											foreach ($tags as $key => $mytag) {

											$tag = $mytag ;

												if($key == $tot-1)
												{
													?>
													<a href="blog.php?category=<?php echo $tag ; ?>">
														<?php echo $tag ; ?>
													</a>
													<?php
												}
												else{
													?>
													<a href="blog.php?category=<?php echo $tag ; ?>">
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
									<ul class="share-social">
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
									</ul>
								</div>
							</div>
							<div id="slider" class="flexslider">
								<ul class="slides">
							<?php 
							if(!($blog['blog_img'] == NULL || $blog['blog_img'] == ''))
							{
							?>
								<li>
								<a href="palash/photos/<?php echo $blog['blog_img'] ; ?>" class="swipebox" title=""><img width="950" height="700" src="palash/photos/<?php echo $blog['blog_img'] ; ?>" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
								</li>
							<?php
							}
							 ?>
								
									
								</ul>
							</div>
						
							<div class="clear"></div>
							<div class="single-tour-tabs wc-tabs-wrapper">
							
								<div class="tab-content">
									
									<h1 style="text-transform: capitalize;"><?php echo $blog['blog_title'] ; ?></h1>
									<hr>
									<div style="text-transform: capitalize; word-wrap: break-word; width: 100%; line-height: 28px;"><?php echo $blog['blog_description'] ; ?></div>
								
								</div>
							</div>
							<div class="clear"></div>

							<!-- Comments Show and Add -->
							<div class="single-tour-tabs wc-tabs-wrapper">
				<!-- Comment Success or Fail -->
				<?php 
					if(isset($_REQUEST['commentsuccess']))
					{
					?>
						<div class="alert alert-success">
		    			<strong>Thank You</strong> for Yout Comments !.
		  				</div>
					<?php	
					}
					else if(isset($_REQUEST['commentfail']))
					{
					?>
						<div class="alert alert-danger">
		    			<strong>Error</strong> Unable to Accept this  Comments !.
		  				</div>
					<?php	
					}
				?>
				<!-- End of Comment Success or Fail -->

								<?php 
								include("blog-detail_Comments.php") ;
								 ?>
							</div>
							<!-- End of Comments Show and Add -->
							<div class="related tours">
								<br>
								<h2>Related Blogs</h2>
								<ul class="tours products wrapper-tours-slider">
						<?php 
						$getblog = mysql_query("SELECT * from blog where blog_id != '$blogID' order by RAND() limit 3") ;
						if(mysql_num_rows($getblog) > 0)
						{
							// List of Blogs
							include("BlogList.php") ;
							 	
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
	
<?php 
	// Include Footer
	include_once("footer.php");
 ?>


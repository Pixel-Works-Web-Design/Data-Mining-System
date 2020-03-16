			<?php 
	if(isset($_REQUEST['subscribe']))
	{
		include("connection.php");
		$UserEmail = $_REQUEST['subscriber_email'] ;

		$getemail = mysql_query("SELECT * from subscribers where subscribers_email = '$UserEmail'") ;
		if(mysql_num_rows($getemail) > 0)
		{

		}
		else {
			 mysql_query("INSERT into subscribers(subscribers_email) values('$UserEmail')") ;
		}
	

		echo "<script type='text/javascript'>window.location='ThankYou.php?subscriber=y'</script>";
		
		exit();
	}
 ?>

<?php 
if(isset($_REQUEST['SearchInput']))
{
		include("connection.php");
		$name =  $_REQUEST['SearchInput'];
if(!($name == ""))
{
		
		// tours
		$get = "" ;
		$get = mysql_query("SELECT * from tours where tours_title like '%$name%' OR tours_category like '%$name%' OR tours_tag like '%$name%' OR tours_domestic_international like '%$name%'  OR tours_destination like '%$name%'") ;
		if(mysql_num_rows($get) > 0)
		{
			
			while ($data = mysql_fetch_array($get)) {
				$to = base64_encode($data['tours_id']) ;
				echo "<script type='text/javascript'>window.location='SingleTour.php?Tourid=$to'</script>";
			}
		}

		
		// End of tours
		
		// home
		if($name == 'ho' || $name == 'home' || $name == 'hom')
		{
			echo "<script type='text/javascript'>window.location='index.php'</script>";
		}
		// End of home


		// blog name
		if($name == 'blog' || $name == 'Blog' || $name == 'blogs')
		{
			echo "<script type='text/javascript'>window.location='blog.php'</script>";
		}
		// End of blog name

		// Inquirys
		if($name == 'inquiry' || $name == 'INQUIRY' || $name == 'inquirys')
		{
			echo "<script type='text/javascript'>window.location='index.php'</script>";
		}
		// End of Inquirys

		// Contact
		if($name == 'contact' || $name == 'cont' || $name == 'CONTACT' || $name == 'contact us' || $name == 'contactus')
		{
		   echo "<script type='text/javascript'>window.location='contact.php'</script>";
		}
		// End of Contact

		// privacy
		if($name == 'privacy' || $name == 'policy' || $name == 'pri' || $name == 'priv' || $name == 'pol' || $name == 'poli')
		{
			echo "<script type='text/javascript'>window.location='PrivacyPolicy.php'</script>";
		}
		// End of privacy

		// privacy
		if($name == 'term' || $name == 'terms' || $name == 'condition')
		{
			echo "<script type='text/javascript'>window.location='TermsofUse.php'</script>";
		}
		// End of privacy

		// service
		if($name == 'ser' || $name == 'serv' || $name == 'service')
		{
			echo "<script type='text/javascript'>window.location='services.php'</script>";
		}
		// End of service

		// Tours
		if($name == 'tour' || $name == 'tours' || $name == 'package')
		{
			echo "<script type='text/javascript'>window.location='TourList-International-Domestics.php'</script>";
		}
		// End of Tours

		// About Us
		$get = "" ;
		$get = mysql_query("SELECT * from aboutus where about_title like '%$name%'") ;
		if(mysql_num_rows($get) > 0)
		{
			
			while ($data = mysql_fetch_array($get)) {
				$ab = base64_encode($data['about_id']) ;
				echo "<script type='text/javascript'>window.location='AboutUs.php?Aboutusid=$ab'</script>";
			}
		}
		// End of About Us

		// Blog
		$get = "" ;
		$get = mysql_query("SELECT * from blog where blog_title like '%$name%' OR blog_tags like '%$name%'") ;
		if(mysql_num_rows($get) > 0)
		{
			
			while ($data = mysql_fetch_array($get)) {
				echo "<script type='text/javascript'>window.location='blog-detail.php?blogid={$data['blog_id']}'</script>";
			}
		}
		// End of Blog


		// Services
		$get = "" ;
		$get = mysql_query("SELECT * from service where service_title like '%$name%'") ;
		if(mysql_num_rows($get) > 0)
		{
			
			while ($data = mysql_fetch_array($get)) {
				echo "<script type='text/javascript'>window.location='services.php'</script>";
			}
		}
		// End of Services

		
		echo "<script type='text/javascript'>window.location='index.php'</script>";
		
} // If not Black
else{
	echo "<script type='text/javascript'>window.location='index.php'</script>";
}
		exit();
} // end of IF Request SearchInput
 ?>

<?php 
	// Include Header
	include("connection.php");
	include_once("header.php");
 ?>
<div class="site wrapper-content">
		<div class="home-content" role="main">
			<div class="wrapper-bg-video">
				<?php 
				// show video
				
				$getvideo = mysql_query("SELECT * from homebanner where homebanner_id = '1'") ;
				$video = mysql_fetch_assoc($getvideo) ;

				 ?>
				<video poster="images/video_slider.jpg" playsinline autoplay muted loop>
					<source src="palash/photos/<?php echo $video['homebanner_video'] ; ?>" type="video/mp4">
				</video>
				<div class="content-slider">
					<p>Find your special tour today </p>
					<h2>With 16 Cheers Holidays </h2>
					<p><a href="TourList-International-Domestics.php" class="btn btn-slider" style="background-color: #074f9e;">VIEW TOURS </a></p>
				</div>
			</div>

		<div class="padding-top-6x padding-bottom-6x section-background" style="background-color:#cbecfc" id="service_bkimg">
				<div class="container">
					<div class="shortcode_title title-center title-decoration-bottom-center">
						<!-- <div class="title_subtitle"></div> -->
						<h3 class="title_primary" style="color: #114160;">Our Services</h3>
						<span class="line_after_title" style="color:#ffffff;"></span>
					</div>
					<div class="row wrapper-tours-slider">
						<div class="tours-type-slider list_content" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":2}, "992":{"items":3}, "1200":{"items":4}}'>
					<?php 
					//  Services
					
					$getservices = mysql_query("SELECT * from service");
					if(mysql_num_rows($getservices) > 0)
					{
						while ($services = mysql_fetch_assoc($getservices)) {
					    ?>
					    <div class="col-sm-12" style="">
						<div class="widget-icon-box widget-icon-box-base iconbox-center">
							
							 <div class="content-inner">
								<div class="sc-heading article_heading">
									<p><br></p>
								</div>
								
							</div> 
						</div>
							<div class="widget-icon-box widget-icon-box-base iconbox-center">
							<div class="boxes-icon circle" style="font-size:30px;width:80px; height:80px;line-height:80px" id="service_icon">
							<span class="inner-icon">
								<a href="palash/photos/<?php echo $services['service_img'] ; ?>">
								<img width="145" height="92" src="palash/photos/<?php echo $services['service_img'] ; ?>" class="vc_single_image-img attachment-full" alt="" title="<?php echo $services['service_title'] ; ?>">
								</a>
							</span>
								

							</div>
								<div class="content-inner">
								<div class="sc-heading article_heading">
									<h4 class="heading__primary" style="text-transform: capitalize;">
										<a href="services.php" style="color: #114160;">
									<?php echo $services['service_title'] ; ?>
										</a>
									</h4>
								</div>
								
								</div> 
						</div>

					</div>
					    <?php
					} // end of While Loop get Services
					}
					
					 ?>

				
						
						</div>
					</div>
				</div>
			</div>

			<div class="padding-top-6x padding-bottom-6x section-background" style="background-image:url(images/home/bg-popular.jpg)">
				<div class="container">
					<div class="shortcode_title text-white title-center title-decoration-bottom-center">
						<div style="color:#114160">Take a Look at Our</div>
						<h3 style="color:#114160">Tours in Trends</h3>
						<span class="line_after_title" style="color:#ffffff"></span>
					</div>
<!-- ===================== Tour Query ===================== -->


	<div class="carousel-container" style="width: 100%;">
    
      <div id="carousel" style="background-color: transparent;">

      	 <?php 
			//  Get Tours
			$gettour = mysql_query("SELECT * from  tours where 	tours_domestic_international = 'DOMESTIC' order by tours_id desc limit 5") ;
			if(mysql_num_rows($gettour) > 0)
			{
				include("Tour_Slider_Index.php");
			}

			$gettour = mysql_query("SELECT * from  tours where 	tours_domestic_international = 'INTERNATIONAL' order by tours_id desc limit 5") ;
			if(mysql_num_rows($gettour) > 0)
			{
				include("Tour_Slider_Index.php");
			}
		?>	
     
      
      </div>
    	<!-- Next Previous -->
  <a id="but_prev" href="javascript:;"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
  <a id="but_next" href="javascript:;"><i class="fa fa-angle-right" aria-hidden="true"></i></a> 
 <!-- End of Next Previous -->
   
    </div>
     
<!-- =====================  End of Tour Query  ===================== -->
				</div>
			</div>
			<div class="section-white padding-top-6x padding-bottom-6x tours-type" style="background-color:#cbecfc">
				<div class="container">
					<div class="shortcode_title title-center title-decoration-bottom-center" >
						<div class="title_subtitle">Find a Tour by</div>
						<h3 class="title_primary">DESTINATION</h3><span class="line_after_title"></span>
					</div>
					<div class="wrapper-tours-slider wrapper-tours-type-slider">
						<div class="tours-type-slider" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":3}, "992":{"items":4}, "1200":{"items":5}}'>

					<?php 
					$getcountry = mysql_query("SELECT * from country");
					if(mysql_num_rows($getcountry) > 0)
					{
						while ($country = mysql_fetch_array($getcountry)) {
					   ?>
					   <div class="tours_type_item">
								<a href="SpecialTours.php?destination=<?php echo $country['country_name'] ; ?>" class="tours-type__item__image">
									<img src="palash/photos/<?php echo $country['country_image'] ; ?>" alt="<?php echo $country['country_name'] ; ?>" title="<?php echo $country['country_name'] ; ?>" style="width: 200px; height: 200px;">
								</a>
								<div class="content-item">
									<div class="item__title" style="text-transform: uppercase;"><?php echo $country['country_name'] ; ?></div>	
								</div>
						</div>
					   <?php
						}
					}
					 ?>
							
						
						</div>
					</div>
				</div>
			</div>
			<div class="padding-top-6x padding-bottom-6x section-background" style="background-image:url('images/home/bg-destination.jpg');">
				<div class="container">
							<div class="shortcode_title title-center title-decoration-bottom-center">
						<div class="title_subtitle">Customer Says's</div>
						<h3 class="title_primary">Testimonials</h3>
						<span class="line_after_title" style="color:#ffffff"></span>
					</div>
							<div class="shortcode-tour-reviews wrapper-tours-slider" style="cursor: pointer;">
								<div class="tours-type-slider" data-autoplay="true" data-dots="true" data-nav="false" data-responsive='{"0":{"items":1}, "480":{"items":1}, "768":{"items":1}, "992":{"items":1}, "1200":{"items":1}}'>
					<?php 
					$gettesti = mysql_query("SELECT * from testimonials");
					if(mysql_num_rows($gettesti) > 0)
					{
						while ($testimonial = mysql_fetch_array($gettesti)) {
						  ?>
					  	<div class="tour-reviews-item">
								<div class="reviews-item-info">

									<img alt="" src="palash/photos/<?php echo $testimonial['testimonials_img'] ; ?>" class="avatar avatar-95 photo" style="width: 100px; height: 100px;">
									<div class="reviews-item-info-name">
										<?php echo $testimonial['testimonials_name'] ; ?>
									</div>
									<div class="reviews-item-rating">
										<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
									</div>
								</div>
								<div class="reviews-item-content">
									<h3 class="reviews-item-title">
										<a href="#">
									<?php echo $testimonial['testimonials_name'] ; ?>
										</a>
									</h3>
									<div class="reviews-item-description" style="text-transform: capitalize;">
										<?php echo rtrim(  substr($testimonial['testimonials_description'], 0 , 250) , '&nbsp;') ; ?>
									</div>
								</div>
						</div> <!-- end of tour-reviews-item -->
						  <?php 
						}
					}
					 ?>
								
								</div>
							</div>
						</div>
			</div>
			
			<div class="section-white padding-top-6x padding-bottom-6x"  style="background-color:#cbecfc" >
		  <div class="container">
					<div class="row">
						
						<div class="col-sm-12 col-xs-12">
							<div class="shortcode_title title-center title-decoration-bottom-center">
								<h2 class="title_primary">Latest Blog</h2>
								<span class="line_after_title"></span>
							</div>
							<div class="row">

						<?php 
						$getblog = mysql_query("SELECT * from blog order by blog_id desc limit 3") ;
						if(mysql_num_rows($getblog) > 0)
						{
							// List of Blogs
							include("BlogList.php") ;
						}
						 ?>
								
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<style type="text/css">
	@media (max-width: 768px) {
		#service_bkimg{
			background-position:center !important;
    		background-repeat:no-repeat !important
		}
		
	}
	
</style>
<script type="text/javascript">

$(document).ready(function(){
  
  // Slider
  	var carousel = $("#carousel").featureCarousel({
          // include options like this:
          // (use quotes only for string values, and no trailing comma after last option)
          // option: value,
          // option: value
        });

        $("#but_prev").click(function () {
          carousel.prev();
        });
       
        $("#but_next").click(function () {
          carousel.next();
        });

});

</script>
<?php 
	// Include Footer
	include_once("footer.php");
 ?>
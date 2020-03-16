

<?php 
	include("connection.php");
 ?>
	<div class="wrapper-footer wrapper-footer-newsletter" style="background-color: #004a69;">
		<div class="main-top-footer">
			<div class="container">
				<div class="row">
					<aside class="col-sm-3 widget_text"><h3 class="widget-title">CONTACT</h3>
						<div class="textwidget">
							<div class="footer-info">
								
								<ul class="contact-info">
									<li><i class="fa fa-map-marker fa-fw"></i> 104, Eva Surbhi - 1, Atabhai Chowk, Bhavnagar - 364001, Gujarat India</li>
									<li><i class="fa fa-phone fa-fw"></i> +91  87 80 87 9886</li>
									<li>
										<i class="fa fa-envelope fa-fw"></i><a href="mailto:16cheersholidays@gmail.com"> 16cheersholidays@gmail.com</a>
									</li>
								</ul>
							</div>
						</div>
					</aside>
					<aside class="col-sm-3 widget_text"><h3 class="widget-title">INFORMATION</h3>
						<div class="textwidget">
							<ul class="menu list-arrow">
								<?php 
								$getaboutus = mysql_query("SELECT * from aboutus limit 1") ;
								if(mysql_num_rows($getaboutus) > 0)
								{
									$about = mysql_fetch_assoc($getaboutus) ;
									?>
									<li><a href="AboutUs.php?Aboutusid=<?php echo base64_encode($about['about_id']) ; ?>">About Us</a></li>
									<?php
								}

								 ?>
								
								<li><a href="TourList-International-Domestics.php">Tours</a></li>
								<li><a href="blog.php">Blogs</a></li>
								<li><a href="PrivacyPolicy.php">Privacy Policy</a></li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
						</div>
					</aside>
					<aside class="col-sm-3 widget_text"><h3 class="widget-title">Tours</h3>
						<div class="textwidget">
							<ul class="menu list-arrow">
							<?php 
							$gettag = mysql_query("SELECT * from tours_tags");
							if(mysql_num_rows($gettag) > 0)
							{
								while ($tags = mysql_fetch_array($gettag)) {
								    ?>
								    <li><a href="SpecialTours.php?TourTags=<?php echo $tags['Tours_tag_name'] ; ?>"><?php echo $tags['Tours_tag_name'] ; ?></a></li>
								    <?php
								}
							}
							?>
							</ul>
						</div>
					</aside>
					<aside class="col-sm-3 custom-instagram widget_text">
						<h3 class="widget-title">Instagram</h3>
						<div class="textwidget">
							<ul>
								<li><img src="images/instagram/1.jpg" alt="instagram"></li>
								<li><img src="images/instagram/2.jpg" alt="instagram"></li>
								<li><img src="images/instagram/3.jpg" alt="instagram"></li>
								<li><img src="images/instagram/4.jpg" alt="instagram"></li>
								<li><img src="images/instagram/5.jpg" alt="instagram"></li>
								<li><img src="images/instagram/6.jpg" alt="instagram"></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div>
		<div class="container wrapper-copyright">
			<div class="row">
				<div class="col-sm-6">
					<div><p>Copyright © 2019 16 Cheers Holidays. All Rights Reserved.</p></div>
				</div>
				<div class="col-sm-6">
					<aside id="text-5" class="widget_text">
						<div class="textwidget">
							<ul class="footer_menu">
								<li><a href="TermsofUse.php">Terms of Use</a></li>
								<li>|</li>
								<li><a href="PrivacyPolicy.php">Privacy Policy</a></li>
								<li>|</li>
								<li><a href="https://www.facebook.com/16cheersholidays" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="http://instagram.com/16cheersholidays" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<li><a href="mailto:16cheersholidays@gmail.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper-subscribe" style="background-image: url(images/home/bg_newletter.jpg)">
		<div class="subscribe_shadow"></div>
		<div class="form-subscribe parallax-section stick-to-bottom form-subscribe-full-width">
			<div class="shortcode_title text-white title-center title-decoration-bottom-center margin-bottom-3x">
				<div style="color:#114160">To receive our best monthly deals</div>
				<h3 style="color:#114160">JOIN THE NEWSLETTER</h3>
				<span class="line_after_title"></span>
			</div>
			<div class="form-subscribe-form-wrap">
				<aside class="mailchimp-container">
					<form class="epm-sign-up-form" name="epm-sign-up-form" action="index.php" method="post">
						<div class="epm-form-field">
							<label for="epm-email">Email Address</label>
							<input type="email" placeholder="Email Address" name="subscriber_email" tabindex="8" class="email" id="epm-email" value="" required="required">
						</div>


						<input type="submit" name="subscribe" id="subscribe" value="Sign Up Now" data-wait-text="Please wait..." tabindex="10" class="button btn epm-sign-up-button epm-submit-chimp" style="color: white;">
					</form>
				</aside>
			</div>
		</div>
	</div>
</div>


	<?php 

$myurl = $_SERVER['PHP_SELF'] ;
$explodeurl = explode('/', $myurl) ;
$theURL = count($explodeurl)-1;
$myURL =  $explodeurl[$theURL] ;
	if($explodeurl[$theURL] == 'SingleTour.php')
	{
	?>
		<script type='text/javascript' src='assets/js/jquery.swipebox.min.js'></script>
		<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCaQjbVDR1vRh2iS_V3jLBXRrkQxmoxycQ'></script>
		<script type='text/javascript' src='assets/js/gmap.js'></script>
	<?php	
	}	
	
	 ?>



<script type='text/javascript' src='assets/js/jquery.min.js'></script>
<script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='assets/js/vendors.js'></script>
<?php
if(!($explodeurl[$theURL] == 'SingleTour.php'))
	{
	?>
	<script type='text/javascript' src='assets/js/owl.carousel.min.js'></script>		
	<?php	
	}	
	
	 ?>

<style type="text/css">
	
	#BottomSpace{
		padding-bottom: 0px;
		margin-bottom: 0px;
	}
	/*#epm-email{
		background-color: #FFFFFF !important;
			
		padding: 0 15px !important;
	}
	#subscribe{
		background-color: #0099CD !important;
		color: #333333 !important;
		padding: 0 28px !important;
		border: none !important;  
	}
	#subscribe:hover{
		color: white !important;
	}*/
</style>
<script type="text/javascript" src="assets/js/jquery.mb-comingsoon.min.js"></script>
<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
<script type='text/javascript' src='assets/js/theme.js'></script>
</body>
</html>
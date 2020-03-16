<!DOCTYPE html>
<html lang="en-US">
<?php 

$myurl = $_SERVER['PHP_SELF'] ;
$explodeurl = explode('/', $myurl) ;
$theURL = count($explodeurl)-1;
$myURL =  $explodeurl[$theURL] ;

include("connection.php");
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="xmlrpc.html">
	<title>Welcome to 16 Cheers Holidays</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-linearicons.css" type="text/css" media="all">
	<link rel="stylesheet" href="style.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/travel-setting.css" type="text/css" media="all">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

	<!-- extra -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<!-- Share sharethis -->
	<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c99e603fb6af900122ecd9f&product=inline-share-buttons' async='async'></script>

	<!-- Slider -->
	<?php
	 if($explodeurl[$theURL] == 'Index.php' || $explodeurl[$theURL] == 'index.php' ||  $explodeurl[$theURL] == '' ){
	 	?>
	 	 <link rel="stylesheet" href="slider/css/feature-carousel.css" charset="utf-8" />
    	<script src="slider/js/jquery-1.7.min.js" type="text/javascript" charset="utf-8"></script>
    	<script src="slider/js/jquery.featureCarousel.js" type="text/javascript" charset="utf-8"></script>
	 	<?php
		} 
	 ?>
	<!-- End of Slider -->

</head>

	
<body class="<?php if($explodeurl[$theURL] == 'Index.php' || $explodeurl[$theURL] == 'index.php' ||  $explodeurl[$theURL] == '' ){ echo 'transparent_home_page' ;} else{ echo 'single-product'; } ?>  travel_tour-page travel_tour">	
<div class="wrapper-container">
	<header id="masthead" class="site-header sticky_header affix-top">
		<div class="header_top_bar" style="background-color: #004a69;">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<aside id="text-15" class="widget_text">
							<div class="textwidget">
								
							</div>
						</aside>
					</div>
					<div class="col-sm-8 topbar-right">
						<aside id="text-7" class="widget widget_text">
							<div class="textwidget">
								<ul class="top_bar_info clearfix">
									<li><i class="fa fa-phone"></i> +91 87 80 87 9886</li>
									
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
		<div class="navigation-menu">
			<div class="container">
				<div class="menu-mobile-effect navbar-toggle button-collapse" data-activates="mobile-demo">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
				<div class="width-logo sm-logo">
					<a href="index.php" title="16 Cheers Holidays" rel="home">
						<img src="images/logo.png" alt="16 Cheers Holidays" class="" style="max-width: 290px !important;">
						<!-- <img src="images/logo_sticky.png" alt="16 Cheers Holidays" width="480" height="94" class="logo_sticky"> -->
					</a>
			  </div>
				<nav class="width-navigation">
					<ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
						<li class="<?php if($myURL == 'index.php') { echo  'current-menu-ancestor';} ?>"><a href="index.php">Home</a></li>

						<!-- About us -->
						<li class="<?php if($myURL == 'AboutUs.php') { echo  'current-menu-ancestor';} ?>"><a href="javascript:;">About Us</a>
							 <ul class="sub-menu">
							<?php 
							$getaboutus = mysql_query("SELECT * from aboutus") ;
							if(mysql_num_rows($getaboutus) > 0)
							{
								while ($about = mysql_fetch_array($getaboutus)) {
								 ?>
								 <li style="text-transform: capitalize;">
								 	<a href="AboutUs.php?Aboutusid=<?php echo base64_encode($about['about_id']) ; ?>">
								 	<?php echo $about['about_title'] ; ?>
								 	</a>
								 </li>
								 <?php
								} // end of While
							}

							 ?>
              			   </ul>

                        </li>
						<!-- End of About us -->

                        <li class="<?php if($myURL == 'services.php') { echo  'current-menu-ancestor';} ?>"><a href="services.php">Services</a></li>
				   	 	<li  class="<?php if($myURL == 'tours.php' || $myURL == 'SingleTour.php' || $myURL == 'TourList-International-Domestics.php') { echo  'current-menu-ancestor';} ?>"><a href="TourList-International-Domestics.php">Tours</a></li>
						<li class="<?php if($myURL == 'blog.php') { echo  'current-menu-ancestor';} ?>"><a href="blog.php">Blog</a></li>
						<li class="<?php if($myURL == 'contact.php') { echo  'current-menu-ancestor';} ?>"><a href="contact.php">Contact</a></li>

						<li class="menu-right">
							<ul>
								<li id="travel_social_widget-2" class="widget travel_search">
									<div class="search-toggler-unit">
										<div class="search-toggler">
											<i class="fa fa-search"></i>
										</div>
									</div>
									<div class="search-menu search-overlay search-hidden">
										<div class="closeicon"></div>
										<form method="get" class="search-form" action="index.php">
									
									
											<!-- <input type="search" id="SearchInput" class="search-field" placeholder="Search ..." value="" name="SearchInput" title="Search for:">
											<input type="submit" class="search-submit font-awesome" value="&#xf002;"> -->
											<div class="row">
												<div class="container-fluid">
													<div class="col-md-4 col-sm-4 col-xs-2">
														
													</div>
													<div  class="col-md-4  col-sm-4 col-xs-7" style="margin: 0; padding: 0; text-align: right;">
														<input type="search" id="SearchInput" class="search-field" placeholder="Search ..." value="" name="SearchInput" title="Search for:">
														
													</div>
													<div  class="col-md-4 col-sm-4 col-xs-3" style="margin: 0; padding: 0;">
														<input type="submit" class="search-submit font-awesome" value="&#xf002;" style="float: left;">
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="container-fluid">
													<div class="col-md-4 col-sm-4 col-xs-2">
														
													</div>
													<div class="col-md-4  col-sm-4 col-xs-7" style="margin: 0; padding: 0;">

														<div id="ShowSearchData">
															
														</div>
														
													</div>
													<div  class="col-md-4 col-sm-4 col-xs-3">
														
													</div>
												</div>
											</div>
										</form>
										<div class="background-overlay"></div>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

<style type="text/css">
	#ShowSearchData{
		border: none;
		float: right;
		background-color: #FFFFFF;
		width: 400px;
		height: 200px;

		color: black;
		overflow-y: scroll;
		text-align: left;
		display: none;
	}
	#ShowSearchData a{
		color: black !important;
		font-style: 18px;
		padding: 15px 10px;
		display: block;
		text-decoration: none;
	}
	#ShowSearchData li{
		display: block;
		cursor: pointer;
		
	}
	#ShowSearchData li:hover{
		background-color: #EAEAEA;		
	}
	
/*	@media (max-width: 768px) {*/
	@media (max-width: 900px) {
		#ShowSearchData{
			width: 100% !important;
		}
		#SearchInput{
			width: 100% !important;
		}
		#ShowSearchData a{
			color: black !important;
			font-style: 18px;
		}
		#ShowSearchData li:hover{
			background-color: #FFFFFF !important;	
		}
		
		
			
	}
</style>
<script type="text/javascript">

$(document).ready(function(){
  $("#SearchInput").keyup(function(){
      $("#SearchInput").css("background-color", "#EAEAEA");
     var s = $("#SearchInput").val();
     
     $.ajax({
      url: "search.php?search_field=y&field="+s,
      cache: false,
      success: function(html){
      	$("#ShowSearchData").css("display", "block");
        $("#ShowSearchData").html("");
      $("#ShowSearchData").append(html);
	    }
	  });
    
   });
  
  	$( "#SearchInput").keydown(function() {
   		$("#SearchInput").css("background-color", "#FFFFFF");
	});
    

});



</script>
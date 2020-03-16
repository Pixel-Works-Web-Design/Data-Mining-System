
<?php 


if(isset($_REQUEST['search_field']))
{
	include("connection.php");

	$name =  $_REQUEST['field'];
	if(!($name == ""))
	{
		?>
		<ul>
		<?php


		// home
		if($name == 'ho' || $name == 'home' || $name == 'hom')
		{
			?>
			    <li><a href="index.php"><i class="fa fa-arrow-circle-right" id="iconsearch" aria-hidden="true"></i>&nbsp;Home</a></li>
			<?php
		}
		// End of home


		// blog name
		if($name == 'blog' || $name == 'Blog' || $name == 'blogs')
		{
			?>
			    <li><a href="blog.php"><i class="fa fa-arrow-circle-right" id="iconsearch" aria-hidden="true"></i>&nbsp;Blogs</a></li>
			<?php
		}
		// End of blog name

		// Inquirys
		if($name == 'inquiry' || $name == 'INQUIRY' || $name == 'inquirys')
		{
			?>
			    <li><a href="index.php"><i class="fa fa-arrow-circle-right" id="iconsearch" aria-hidden="true"></i>&nbsp;<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Home</a></li>
			<?php
		}
		// End of Inquirys

		// Contact
		if($name == 'contact' || $name == 'cont' || $name == 'CONTACT' || $name == 'contact us' || $name == 'contactus')
		{
			?>
			    <li><a href="contact.php"><i class="fa fa-arrow-circle-right" id="iconsearch" aria-hidden="true"></i>&nbsp;Contact</a></li>
			<?php
		}
		// End of Contact

		// privacy
		if($name == 'privacy' || $name == 'policy' || $name == 'pri' || $name == 'priv' || $name == 'pol' || $name == 'poli')
		{
			?>
			    <li><a href="PrivacyPolicy.php"><i class="fa fa-arrow-circle-right" id="iconsearch" aria-hidden="true"></i>&nbsp;Privacy Policy</a></li>
			<?php
		}
		// End of privacy

		// privacy
		if($name == 'term' || $name == 'terms' || $name == 'condition')
		{
			?>
			    <li><a href="TermsofUse.php"><i class="fa fa-arrow-circle-right" id="iconsearch" aria-hidden="true"></i>&nbsp;Terms of Use</a></li>
			<?php
		}
		// End of privacy

		// service
		if($name == 'ser' || $name == 'serv' || $name == 'service')
		{
			?>
			    <li><a href="services.php"><i class="fa fa-arrow-circle-right" id="iconsearch" aria-hidden="true"></i>&nbsp;Services</a></li>
			<?php
		}
		// End of service

		// Tours
		if($name == 'tour' || $name == 'tours' || $name == 'package')
		{
			?>
			    <li><a href="TourList-International-Domestics.php"><i class="fa fa-arrow-circle-right" id="iconsearch" aria-hidden="true"></i>&nbsp;Tours</a></li>
			<?php
		}
		// End of Tours

		// About Us
		$get = "" ;
		$get = mysql_query("SELECT * from aboutus where about_title like '%$name%'") ;
		if(mysql_num_rows($get) > 0)
		{
			
			while ($data = mysql_fetch_array($get)) {
			    ?>
			 
			    <li><a href="AboutUs.php?Aboutusid=<?php echo base64_encode($data['about_id']) ; ?>">
			    	<i class="fa fa-arrow-circle-right" id="iconsearch" aria-hidden="true"></i>&nbsp;
			    	<?php echo $data['about_title']; ?>
			    </a></li>
			    
			   <?php
			}
		}
		// End of About Us


		// Blog
		$get = "" ;
		$get = mysql_query("SELECT * from blog where blog_title like '%$name%' OR blog_tags like '%$name%'") ;
		if(mysql_num_rows($get) > 0)
		{
			
			while ($data = mysql_fetch_array($get)) {
			    ?>
			 
			    <li><a href="blog-detail.php?blogid=<?php echo $data['blog_id'] ; ?>">
			    	<i class="fa fa-arrow-circle-right" id="iconsearch" aria-hidden="true"></i>&nbsp;
			    	<?php echo $data['blog_title']; ?>
			    </a></li>
			    
			   <?php
			}
		}
		// End of Blog


		// Services
		$get = "" ;
		$get = mysql_query("SELECT * from service where service_title like '%$name%'") ;
		if(mysql_num_rows($get) > 0)
		{
			
			while ($data = mysql_fetch_array($get)) {
			    ?>
			 
			    <li><a href="services.php"><i class="fa fa-arrow-circle-right" id="iconsearch" aria-hidden="true"></i>&nbsp;<?php echo $data['service_title']; ?></a></li>
			    
			   <?php
			}
		}
		// End of Services

		// tours
		$get = "" ;
		$get = mysql_query("SELECT * from tours where tours_title like '%$name%' OR tours_category like '%$name%' OR tours_tag like '%$name%' OR tours_domestic_international like '%$name%'  OR tours_destination like '%$name%'") ;
		if(mysql_num_rows($get) > 0)
		{
			
			while ($data = mysql_fetch_array($get)) {
			    ?>
			 
			    <li><a href="SingleTour.php?Tourid=<?php echo  base64_encode($data['tours_id']) ; ?>">
			    	<i class="fa fa-arrow-circle-right" id="iconsearch" aria-hidden="true"></i>&nbsp;<?php echo $data['tours_title']; ?>
			    </a></li>
			    
			   <?php
			}
		}
		// End of tours

		?>



		</ul>
		<?php
	} // If not Black
} // call php file

 ?>
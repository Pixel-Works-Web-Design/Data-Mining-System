<?php 
	if(isset($_REQUEST['contacform_submit']))
	{
		include("connection.php");

		$name = addslashes($_REQUEST['contact_name']) ;
		$email = addslashes($_REQUEST['contact_email']) ;
		$subject = addslashes($_REQUEST['contact_subject']) ;
		$msg = addslashes($_REQUEST['contact_message']) ;

		$done = mysql_query("INSERT into contactus(contact_name , contact_email , contact_subject , contact_message) values('$name' , '$email' , '$subject' , '$msg')");

		if(mysql_affected_rows() > 0)
		{

				$message="<table border='0'>
	<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td><br><strong>Name</strong> :   ".$name."</td></tr><tr><td><br><strong>E-mail</strong> :  ".$email."</td></tr><tr><td><br><strong>Subject</strong> :  ".$subject."</td></tr><tr><td><br><br><strong>Message</strong> : <br>".$msg."</td></tr><tr><td></td></tr><tr><td></td></tr><tr><td><br>Thanks & Regards <br> <strong><a href='http://pixelworkswebdesign.com/webpreview/16cheersholiday.com/final/index.php'>16cheersholiday.com</a>		</strong></td></tr><tr><td></td></tr></table>";     

			require_once('palash/sendmail/class.phpmailer.php');
				
				
		 $mail        = new PHPMailer();
		
				    $mail->IsSMTP(); // telling the class to use SMTP
				    $mail->SMTPAuth   = true;                  // enable SMTP authentication
				    $mail->SMTPDebug  = 1;    
					 $mail->SMTPSecure= "tls";//"ssl";//"tls";//"tls";//"tls";
				 $mail->Host= "smtp.gmail.com";//"mail.pixelworkswebdesign.com";//"mail.24x7emall.com"; // SMTP server
				  $mail->Port="587";//"587";//"587";

				  $body             ="fdsf";
				//  $mail->Port="465"; 
			//  $mail->Timeout="200";
				 
				 $mail->Username   = "pixelworkswebdesign2007@gmail.com"; // SMTP account username
				$mail->Password   = "Pixel_@2007";        // SMTP account passwordpassword

				 
				  
				  $mail->SetFrom('pixelworkswebdesign2007@gmail.com', '16 Cheers Holidays');
				  
				    $mail->Subject    = '16CheersHolidays Contact Us Detail';
				  $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
				  
				  $mail->MsgHTML($message);
				//  $mail->AddReplyTo("pixelworkswebdesign2007@gmail.com","Easy Ambulance");
				  $mail->AddAddress('pixelworkswebdesign2007@gmail.com', "");
				  
			 // $mail->IsHTML(true); 
			
			  $mail->Send();

			echo "<script type='text/javascript'>window.location='contact.php?SendMessage=s'</script>";	
		}
		else{
			echo "<script type='text/javascript'>window.location='contact.php?SendMessageError=f'</script>";	
		}
		
		exit();
	}
 ?>


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
						<li><a href="javascript:;">Contact</a></li>
					</ul>
				</div>
				<h1 class="heading_primary">Contact</h1></div>
		</div>
		<section class="content-area" id="BottomSpace">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-9 alignleft">
						<div class="video-container">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14822.133089883951!2d72.1479265!3d21.7596127!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa969744d18828cfa!2s16+Cheers+Holidays!5e0!3m2!1sen!2sin!4v1553606813407" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						
						</div>
						<div class="pages_content padding-top-4x">
							<h4>CONTACT INFORMATION</h4>
							<div class="contact_infor">
								<ul>
									<li><label><i class="fa fa-map-marker"></i>ADDRESS</label>
										<div class="des"> 104, Eva Surbhi - 1, Atabhai Chowk, Bhavnagar - 364001, Gujarat India</div>
									</li>
									<li><label><i class="fa fa-phone"></i>TEL NO</label>
										<div class="des">+91 93 27 63 0308 | +91 87 80 87 9886</div>
									</li>
									
									<li><label><i class="fa fa-envelope"></i>EMAIL</label>
										<div class="des"><a href="mailto:16cheersholidays@gmail.com"> 16cheersholidays@gmail.com</a></div>
									</li>
									<!-- <li>
										<label><i class="fa fa-clock-o"></i>WORKING HOURS</label>
										<div class="des">Mon – Fri 9:00 am – 5:30 pm, Sat 9:00 am – 1:00 pm
											<br>
											We are closed on 1st &amp; 3rd Sat of every month, Sundays &amp; public holidays
										</div>
									</li> -->
									
								</ul>
							</div>
						</div>
					
						<div class="wpb_wrapper pages_content">
				<?php 
				if(isset($_REQUEST['SendMessage']))
				{
				?>
				<div class="alert alert-success">
    			<strong>Successfully</strong> Email has been send !.
  				</div>
				<?php	
				}
				else if(isset($_REQUEST['SendMessageError']))
				{
				?>
				<div class="alert alert-danger">
    			<strong>Error</strong> Unable to Send Email !.
  				</div>
				<?php	
				}
				?>
				
				<h4>Have a question?</h4>
							<div role="form" class="wpcf7">
								<div class="screen-reader-response"></div>
								<form action="contact.php" method="post" class="wpcf7-form">
									<div class="form-contact">
										<div class="row-1x">
											<div class="col-sm-6">
													<span class="wpcf7-form-control-wrap your-name">
												<input type="text" name="contact_name" id="contact_name"  value="" size="40" class="wpcf7-form-control" placeholder="Your name*" required="required">
													</span>
											</div>
											<div class="col-sm-6">
													<span class="wpcf7-form-control-wrap your-email">
														<input type="email" name="contact_email" id="contact_email" value="" size="40" class="wpcf7-form-control" placeholder="Email*" required="required">
													</span>
											</div>
										</div>
										<div class="form-contact-fields">
												<span class="wpcf7-form-control-wrap your-subject">
													<input type="text" name="contact_subject" id="contact_subject" value="" size="40" class="wpcf7-form-control" placeholder="Subject" required="required">
												</span>
										</div>
										<div class="form-contact-fields">
											<span class="wpcf7-form-control-wrap your-message">
												<textarea name="contact_message" id="contact_message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Message" required=""></textarea>
												 </span><br>
											<input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit" name="contacform_submit" id="contacform_submit">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="widget-area col-sm-3 align-left">
					<?php 
						include_once("sidebar.php");
					 ?>
					</div>
				</div>
			</div>
		</section>
	</div>
 <?php 
	// Include Footer
	include_once("footer.php");
 ?>
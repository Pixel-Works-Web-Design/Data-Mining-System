<?php 
	 date_default_timezone_set("Asia/Kolkata"); 

	 $today = date('Y-m-d');
	 include("conn.inc.php");
	 $checkjobs = mysql_query("SELECT * from cronjob where cronjob_date = '$today'");
	 $TotalToday = mysql_num_rows($checkjobs);

if(mysql_num_rows($checkjobs) > 0)
{
	while($cronrow = mysql_fetch_array($checkjobs))
	{

		$from = $cronrow['cronjob_from'];
		$to  = $cronrow['cronjob_to'];

		$blogid = $cronrow['cronjob_blogid'];
		
		$getsubscriber = mysql_query("SELECT * from subscribers where subscribe = 'YES'  limit 	$from , $to");
		if(mysql_num_rows($getsubscriber) > 0)
		{
			while($subcribers = mysql_fetch_array($getsubscriber))
			{

		$blogs = mysql_query("SELECT * from blog where blog_id = $blogid");
		$row = mysql_fetch_assoc($blogs);
		$title = "16cheersholiday Newsletter";
			
			  $str = $row['blog_description'];
			 
			 $message2sent = substr(strip_tags($str) , 0 , 200) ;

	// Temporary message			
	$message = "<table width='678' border='0' align='center'>
  <tr>
    <td colspan='2'><p align=center style='text-align:center;background:#F2F2F2'><span style='font-size:10.0pt;font-family:'Arial','sans-serif';color:black'><a href='http://pixelworkswebdesign.com/webpreview/16cheersholiday.com/final/blog-detail.php?blogid={$row['blog_id']}' target='_blank'><span style='color:black;border:none windowtext 1.0pt;padding:0cm;background:#F2F2F2'>View this newsletter in your browser.</span></a><o:p></o:p></span></p></td>
   
  </tr>
  <tr><td colspan='2'><br></td></tr>
  <tr>
    <td><a href='http://pixelworkswebdesign.com/webpreview/16cheersholiday.com/final/blog-detail.php?blogid={$row['blog_id']}' target='_blank'><span style=''><img border=0 width=215 height=143 id='_x0000_i1025' src='photos/{$row['blog_img']}' alt='image'></span></a><o:p></o:p></span></td>
    <td><a href='http://pixelworkswebdesign.com/webpreview/16cheersholiday.com/final/blog-detail.php?blogid={$row['blog_id']}' target='_blank'>{$row['blog_title']}</a><br/><p>$message2sent</p><p><a href='http://pixelworkswebdesign.com/webpreview/16cheersholiday.com/final/blog-detail.php?blogid={$row['blog_id']}' target='_blank'>Click Here to read full article</a></p></td>
  </tr>
  
    <tr>
    
  
  </tr><tr><td><br><br>Thanks & Regards <br> <strong><a href='http://pixelworkswebdesign.com/webpreview/16cheersholiday.com/final/index.php'>16cheersholiday.com</a></strong></td></tr><tr><td></td></tr></table>";
	// End of Temporary message		

	
	   
       

          require_once('sendmail/class.phpmailer.php');
    
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
          
            $mail->Subject    = $title;
          $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
          
          $mail->MsgHTML($message);
        //  $mail->AddReplyTo("pixelworkswebdesign2007@gmail.com","Easy Ambulance");
          $mail->AddAddress($subcribers['subscribers_email'], "");
          
       // $mail->IsHTML(true); 
      
        $mail->Send();

	
		
			} // 0 to 35 send mail

			$afterto = $from+(36/$TotalToday);
			$cronid = $cronrow['cronjob_id'];

			mysql_query("UPDATE cronjob set cronjob_from = '$afterto' where cronjob_id = '$cronid' AND cronjob_date = '$today'");
		}
		else{

		}
		
		
	} // End While No of Job in Todays Date

} // end of IF Today Cron Job available or Not

 ?>





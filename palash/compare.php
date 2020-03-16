<?php 

// If forget user name and password then use this function
// function wpb_admin_account(){
// $user = 'Username';
// $pass = 'Password';
// $email = 'email@domain.com';
// if ( !username_exists( $user )  && !email_exists( $email ) ) {
// $user_id = wp_create_user( $user, $pass, $email );
// $user = new WP_User( $user_id );
// $user->set_role( 'administrator' );
// } }
// add_action('init','wpb_admin_account');
include("conn.inc.php");
for ($i = 1; $i <= 50; $i++) {

	$name = $i.'abbas';
	$mail = 'komel'.$i.'@gmail.com';

	mysql_query("INSERT into subscribers(subscribers_name , subscribers_email) values('$name' , '$mail')");
}
$blogid = '4';
$blogs = mysql_query("SELECT * from blog where blog_id = $blogid");
		$row = mysql_fetch_assoc($blogs);
		$sub = "[PlanetWealth Advisory Services]:Newsletter";
			
			  $str=$row['blog_description'];$search="<<.*?>>";
			  $str1=preg_replace($search,"",$str);
			$message2sent=substr($str1,0,300);


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <table width='678' border='0' align='center'>
  <tr>
    <td colspan='2'><p align=center style='text-align:center;background:#F2F2F2'><span style='font-size:10.0pt;font-family:'Arial','sans-serif';color:black'>Cant see this email properly ? <a href='blogurl' target='_blank'><span style='color:black;border:none windowtext 1.0pt;padding:0cm;background:#F2F2F2'>View this newsletter in your browser.</span></a><o:p></o:p></span></p></td>
   
  </tr>
  <tr>
    <td valign='top'><p class=MsoNormal><span style='font-size:1.0pt'><a href='blogurl' target='_blank'><span style='border:none windowtext 1.0pt;padding:0cm;text-decoration:none'><img border=0 width=215 height=143 id='_x0000_i1025' src='imagepath{$row['blog_img']}' alt=''></span></a><o:p></o:p></span></p></td>
    <td valign='top' style='margin-left:15px'><span style='font-family:'Arial','sans-serif';color:#424242;font-weight:normal'><a href='blogurl' target='_blank'><span style='color:#0467C9;border:none windowtext 1.0pt;padding:0cm'><strong>{$row['blog_title']}</strong><br/></span></a><o:p></o:p></span>$message2sent...<br/><a href='blogurl' target='_blank'><span style='color:#0467C9;border:none windowtext 1.0pt;padding:0cm'>Click Here to read full article</span></a></td>
  </tr>
  
    <tr>
    <td colspan='2' align='center'><span style='font-size:10.5pt;line-height:150%;font-family:'Arial','sans-serif';color:black;text-align:center'><a href='unscrible send id of user like unsciber = $row[id]' target='_blank'><span style='color:#0467C9;border:none windowtext 1.0pt;padding:0cm'>Unsubscribe (Stop getting any further emails from this website)</span></a><o:p></o:p></span></td>
  
  </tr>
   
    
  </tr>
  
  <tr>
    <td colspan='2'><p align=center style='text-align:center;background:#F2F2F2'><span style='font-size:10.0pt;font-family:'Arial','sans-serif';color:black;text-align:center;width:100%'><strong>Planetwealth</strong><br>Sir Pattani Road,  Nr. HCG Hospital Modh Mahodaya Building, Opp. Gosaliya Jain Bhuvan<br>, Bhavnagar -- 364001 Gujarat. India.<o:p></o:p></span></p></td>
   
  </tr>
  
</table>
 </body>
 </html>
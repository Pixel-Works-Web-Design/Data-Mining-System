<?php include_once("header.inc.php"); ?>

 <?php
 // Insert Record
  if(isset($_REQUEST['save']))
  {
      include("conn.inc.php");

      
      $sub = addslashes($_REQUEST['title']);
      $body = addslashes($_REQUEST['content']);

      $EmailSelected = isset($_REQUEST['box1View']) ? 'YES' : 'NO';

  if($sub == '' || $body == '' || $EmailSelected == 'NO')
  {
    if($body == '')
    {
     echo "<script type='text/javascript'>alert('Please give Description ! ');</script>";
    }
    else{
       echo "<script type='text/javascript'>alert('Please Select atleast 1 Email ! ');</script>";
    }
  }
  else{
    // Email send loop
      foreach ($_REQUEST['box1View'] as $email)
      {
        // get the name of Email User
        
        $getsubs= mysql_query("SELECT * from subscribers where subscribers_email = '$email'");
        $subscribers = mysql_fetch_assoc($getsubs);
        
        // End of get the name of Email User


        $title = $sub;
        $message="<table border='0'>
  <tr><td></td></tr><tr><td></td></tr><tr><td><br>".$body."</td></tr><tr><td></td></tr><tr><td><br><br>Thanks & Regards <br> <strong><a href='http://pixelworkswebdesign.com/webpreview/16cheersholiday.com/final/index.php'>16cheersholiday.com</a></strong></td></tr><tr><td></td></tr></table>";

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
          $mail->AddAddress($email, "");
          
       // $mail->IsHTML(true); 
      
        $mail->Send();

      } // end of Foreach loop
    // End of Email send loop
      echo "<script type='text/javascript'>window.location='Newsletter.php?s='</script>";
  }
  
}
   
  // End of Insert Record  
  ?>  


 <style type="text/css">
  
  .form-group .icheckbox_minimal-blue, .form-group .iradio_minimal-blue {
    display: inline-block;
    top: 4px;
    margin-right: .5em;
    margin-left: 10px;
}
  </style> 
  
  
  <link rel="stylesheet" href="js/plugins/magnific/magnific-popup.css">

<div class="container">

  <div class="content">

    <div class="content-container">


    
    <div class="content-header">
        <h2 class="content-header-title">NewsLetter </h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="javascript:;">NewsLetter</a></li>
          
        </ol>
      </div>
 
    <div class="row">
        <div class="col-md-12">
   
        
    <?php
       include("conn.inc.php");
    $get = mysql_query("SELECT * from terms where terms_id = '1'");
    $data = mysql_fetch_assoc($get);
    ?>
        <!-- Create Advertisment -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Manage NewsLetter
             </h3>
        </div>
        <div class="portlet-content">

 <form method="post" id="validate-basic" action="Newsletter.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data" onsubmit="return newsletter()"> 
<div class="row">
  <?php if(isset($_REQUEST['s'])) {?>
      <div class="alert alert-success">
        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
        <strong>Succesfully!</strong> Send Emails !.
      </div>
      
  <?php } else{ ?>
              <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
        <?php } ?>
  <div class="col-sm-12">
    <br>
       <div class="form-group">
         <label class="col-md-3">
          Select E-mails :<strong style="color:Red">*</strong>
          <br>
          <span id="show_tag_info">Press CTRL for Multiple Select !</span>
        </label>

            <div class="col-sm-7">
                <select id="box1View" name="box1View[]" multiple="multiple" class="form-control" data-required="true" style="height:220px; width: 500px;" tabindex="2">
                        <?php
            include('conn.inc.php');
        $list=mysql_query("SELECT distinct subscribers_email from subscribers");
            while($row=mysql_fetch_array($list))
            {
            
                        echo "<option value='$row[0]'>$row[0]</option>";
            }
            ?>
              </select>
            </div>
      </div>

      

  </div> <!-- End of column 12 -->

  
<div class="col-sm-12">
  <br><br>
       <div class="form-group">
         
           <label class="col-md-3">Subject :<strong style="color:Red">*</strong></label>
            <div class="col-md-7">
              <input name="title" type="text" id="title" tabindex="2" class="form-control" data-required="true" value="" />
            </div>
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

   <div class="col-sm-12">
       <div class="form-group">
           <label class="col-md-12">Description :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
             <textarea class="ckeditor form-control" name="content" id="content" tabindex="2"> 
       
             </textarea>
            </div>
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

   <div class="col-sm-12" style="margin-left: 100px;">
     <button type="submit" class="btn btn-secondary btn-lg" name="save" id="save" tabindex="2">Send Email</button>
   </div>


</div>
</form>
        
            </div>
            </div>
      
 
    </div>
    </div>
    </div>




 </div>
 </div>
 

<?php include_once("footer.inc.php");?>

<?php include_once("closebody.php");?>

<script src="js/plugins/magnific/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!-- <script type="text/javascript" src="js/MobileValidation.js"></script> -->
<style type="text/css">
  #show_tag_info{
    display: none;
    color: green;
  }
</style>

<script type="text/javascript">

$(document).ready(function(){
  $("#box1View").focus(function(){
    $("#show_tag_info").css("display", "inline").Show(200);
  });
   $("#box1View").focusout(function(){
    $("#show_tag_info").css("display", "inline").hide(100);
  });
});  
</script>
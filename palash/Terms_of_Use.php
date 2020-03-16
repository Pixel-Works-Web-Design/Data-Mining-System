<?php include_once("header.inc.php"); ?>

 <?php
 // Insert Record
  if(isset($_REQUEST['save']))
  {
      include("conn.inc.php");

      
      /* $pname = addslashes(str_replace('%','',$_FILES['file1']['name']));
       $photoname = "";
      if(!empty($_FILES['file1']['name']))
      {
         
             $filename1=(explode(".",$pname));
          if($filename1[1]=="gif" || $filename1[1]=="jpeg" || $filename1[1]=="jpg"|| $filename1[1]=="png" || $filename1[1]=="bmp" || $filename1[1]=="GIF" || $filename1[1]=="JPEG" || $filename1[1]=="JPG"|| $filename1[1]=="PNG" || $filename1[1]=="BMP" )
            {
           
            $photoname = date("dmYs").$pname; 
             move_uploaded_file($_FILES['file1']['tmp_name'],"photos/".$photoname); 
             mysql_query("UPDATE aboutus set about_img = '$photoname'  where about_id = '1'");
            
            }
            else{
             echo "<script type='text/javascript'>alert('Please Enter only image');</script>";
              echo "<script type='text/javascript'>window.location='AboutUs.php'</script>";
            }
           
         
      }
      */
      
        $pagecontent = addslashes($_REQUEST['content']);

        $done = mysql_query("UPDATE terms set terms_description = '$pagecontent'  where terms_id  = '1'");
        if($done)
        {
           echo "<script type='text/javascript'>window.location='Terms_of_Use.php?s='</script>";
        }
        else{
          echo "<script type='text/javascript'>window.location='Terms_of_Use.php?f='</script>";
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
        <h2 class="content-header-title">Terms of Use </h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="javascript:;">Terms of Use</a></li>
          
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
                Manage Terms of Use 
             </h3>
        </div>
        <div class="portlet-content">

          <form method="post" id="validate-basic" action="Terms_of_Use.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 
       <?php if(isset($_REQUEST['s'])) {?>
      <div class="alert alert-success">
        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
        <strong>Succesfully!</strong> updated Terms  !.
      </div>
      
      <?php } else if(isset($_REQUEST['f'])) {?>
      
       <div class="alert alert-danger">
        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
        <strong>Error!</strong> Terms  Not Updated !.
      </div>
      <?php } else{ ?>
              <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
        <?php } ?>
          


<div class="col-sm-12"><br></div>

   <div class="col-sm-12">
       <div class="form-group">
           <label class="col-md-12">Description <strong style="color:Red">*</strong></label>
            <div class="col-md-12">
              <br>
             <textarea class="ckeditor form-control" name="content" id="content" tabindex="2"> 
        <?php echo $data['terms_description']; ?>
             </textarea>
            </div>
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

   <div class="col-sm-12" style="margin-left: 40px;">
     <button type="submit" class="btn btn-secondary btn-lg" name="save" id="save" tabindex="2">Save</button>
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
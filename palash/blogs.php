<?php 
if(isset($_REQUEST['SendMail']))
{
  include("conn.inc.php");
   date_default_timezone_set("Asia/Kolkata"); 
  $id = $_REQUEST['blogid'];
  $today = date('Y-m-d');

  $done = mysql_query("INSERT into cronjob(cronjob_blogid , cronjob_from , cronjob_to ,   cronjob_date) values('$id' , '0' , '36' , '$today')");

  $checktotJobs = mysql_query("SELECT * from cronjob where cronjob_date = '$today'");
  $total = mysql_num_rows($checktotJobs);
  if($total > 1)
  {
    $to = 36/$total;
    mysql_query("UPDATE cronjob set cronjob_to = '$to' where cronjob_date = '$today'");
  }
 
  

  if($done)
  {
     echo "<script type='text/javascript'>window.location='blogs.php'</script>";
  }
  else{
     echo "<script type='text/javascript'>alert('Unable to Send Mails !');</script>";
     echo "<script type='text/javascript'>window.location='blogs.php'</script>";
  }
  exit();
}

 ?>
<?php include_once("header.inc.php");?>

 <?php
 // Insert Record
  if(isset($_REQUEST['validate']))
  {
      
       include("conn.inc.php");

        $pagetitle = addslashes($_REQUEST['title']);
        $pagecontent = addslashes($_REQUEST['content']);
        $tag = addslashes($_REQUEST['tagss']);

        mysql_query("INSERT into blog(blog_title , blog_description , blog_date , blog_tags) values('$pagetitle' , '$pagecontent' , CURDATE() , '$tag')");
        
        $last_id = mysql_insert_id();

       

      $pname = addslashes(str_replace('%','',$_FILES['file1']['name']));
      $photoname = "";

      if(!empty($_FILES['file1']['name']))
      {
         
             $filename1=(explode(".",$pname));
          if($filename1[1]=="gif" || $filename1[1]=="jpeg" || $filename1[1]=="jpg"|| $filename1[1]=="png" || $filename1[1]=="bmp" || $filename1[1]=="GIF" || $filename1[1]=="JPEG" || $filename1[1]=="JPG"|| $filename1[1]=="PNG" || $filename1[1]=="BMP" )
            {
           
            $photoname = date("dmYs").$pname; 
             move_uploaded_file($_FILES['file1']['tmp_name'],"photos/".$photoname); 
             mysql_query("UPDATE blog set blog_img = '$photoname'  where blog_id  = '$last_id'");
            
            }
            else{
             echo "<script type='text/javascript'>alert('Please Enter only image');</script>";
             
            }
           
         
      }

       // Save BreadCrumb Image
      $Bname = addslashes(str_replace('%','',$_FILES['file_bread']['name']));
      $Breadname = "";
      if(!empty($_FILES['file_bread']['name']))
      {
         
             $filename1=(explode(".",$Bname));
          if($filename1[1]=="gif" || $filename1[1]=="jpeg" || $filename1[1]=="jpg"|| $filename1[1]=="png" || $filename1[1]=="bmp" || $filename1[1]=="GIF" || $filename1[1]=="JPEG" || $filename1[1]=="JPG"|| $filename1[1]=="PNG" || $filename1[1]=="BMP" )
            {
           
            $Breadname = date("dmYs").$Bname; 
             move_uploaded_file($_FILES['file_bread']['tmp_name'],"photos/".$Breadname); 
             mysql_query("UPDATE blog set blog_breadcrumb = '$Breadname'  where blog_id  = '$last_id'");
            
            }
            else{
             echo "<script type='text/javascript'>alert('Please Enter only image');</script>";
             
            }
      }   // End of Save BreadCrumb Image

      
       
    echo "<script type='text/javascript'>window.location='blogs.php'</script>";


  }
     
  if(isset($_REQUEST['update_category']))
  {
      
      include("conn.inc.php");
      $id = $_REQUEST['ids'];

        $pagetitle = addslashes($_REQUEST['title']);
        $pagecontent = addslashes($_REQUEST['content']);
        $tag = addslashes($_REQUEST['tagss']);

      mysql_query("UPDATE blog set blog_title = '$pagetitle' , blog_description = '$pagecontent' , blog_date = CURDATE() , blog_tags = '$tag' where  blog_id = '$id'");
     
      $photo1 = addslashes(str_replace('%','',$_FILES['file1']['name']));
       $photonew="";

       $check = "";

      if(!empty($_FILES['file1']['name']))
      {

         $filename1=(explode(".",$photo1));
      
       
        if($filename1[1]=="gif" || $filename1[1]=="jpeg" || $filename1[1]=="jpg"|| $filename1[1]=="png" || $filename1[1]=="bmp" || $filename1[1]=="GIF" || $filename1[1]=="JPEG" || $filename1[1]=="JPG"|| $filename1[1]=="PNG" || $filename1[1]=="BMP" )
        {
            $photonew = date("dmYs").$photo1; 
            move_uploaded_file($_FILES['file1']['tmp_name'],"photos/".$photonew);

             mysql_query("UPDATE blog set blog_img = '$photonew' where blog_id = '$id'");

              // Remove Image
             $imgname = $_REQUEST['img'];
            if(!($imgname == NULL || $imgname == ''))
            {
              $image_path =  'photos/'.$imgname ;
                if(file_exists($image_path))
                 {
                      unlink($image_path);
                 }
              }
            // End of Remove Image
          
        }
        else{
        echo "<script type='text/javascript'>alert('Please Enter only image');</script>";
        } 
         
      }

       // Save BreadCrumb Image
      $Bname = addslashes(str_replace('%','',$_FILES['file_bread']['name']));
      $Breadname = "";
      if(!empty($_FILES['file_bread']['name']))
      {
         
             $filename1=(explode(".",$Bname));
          if($filename1[1]=="gif" || $filename1[1]=="jpeg" || $filename1[1]=="jpg"|| $filename1[1]=="png" || $filename1[1]=="bmp" || $filename1[1]=="GIF" || $filename1[1]=="JPEG" || $filename1[1]=="JPG"|| $filename1[1]=="PNG" || $filename1[1]=="BMP" )
            {
           
            $Breadname = date("dmYs").$Bname; 
             move_uploaded_file($_FILES['file_bread']['tmp_name'],"photos/".$Breadname); 
             mysql_query("UPDATE blog set blog_breadcrumb = '$Breadname'  where blog_id  = '$id'");
            
            }
            else{
             echo "<script type='text/javascript'>alert('Please Enter only image');</script>";
             
            }
      }   // End of Save BreadCrumb Image
      

        
     echo "<script type='text/javascript'>window.location='blogs.php'</script>";

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

     
<!-- Admin View -->
        
<!--<div class="container">

  <div class="content">

    <div class="content-container">-->
    
    <div class="content-header">
        <h2 class="content-header-title">Blogs</h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="javascript:;">Blogs</a></li>
          
        </ol>
      </div>
 
    <div class="row">
        <div class="col-md-12">
       <!-- <div class="portlet-header">
          <h3>
            <i class="fa fa-tasks"></i>
            Manage Admin Master
          </h3>
        </div>
        -->
        
          <?php
 
  if(isset($_REQUEST['remove']))
  {
      include("conn.inc.php");
     $id = $_REQUEST['id'];
     $imgname = $_REQUEST['img'];
     $check = mysql_query("DELETE  from blog where blog_id = '$id'");

    
    if($check)
    {
       if(!($imgname == NULL || $imgname == ''))
      {
        $image_path =  'photos/'.$imgname ;
       if(file_exists($image_path))
           {
                unlink($image_path);
           }
      }
       
       echo "<script type='text/javascript'>window.location='blogs.php'</script>";
    }
    else{
       echo "<script type='text/javascript'>alert('Unable to Remove this Blog!');</script>";
      echo "<script type='text/javascript'>window.location='blogs.php'</script>";
    }
  } // End of Create
  else if(isset($_REQUEST['create']))
  {
    ?>
        <!-- Create blogs -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Create Blog 
             </h3>
        </div>
        <div class="portlet-content">
          <form method="post" id="validate-basic" action="blogs.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 
      
              <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
    
<div class="col-sm-12"><hr></div>
<!-- Breadcrumb -->
 <div class="col-sm-12">
       <div class="form-group">
         
           <label class="col-md-3" style="color: green;">

              Breadcrumb Image :<strong style="color:Red">*</strong>
              <br>
              <span style="font-weight: normal; color: black;">
                 <i class="fa fa-home" aria-hidden="true"></i>
                 <i class="fa fa-chevron-right" aria-hidden="true"></i> 
                Blogs
                 <i class="fa fa-chevron-right" aria-hidden="true"></i> 
                 ..
              </span>

           </label>
            <div class="col-md-6">
              <input name="file_bread" type="file" id="file_bread" tabindex="2" class="form-control" data-required="true"  /> 
            </div>
           
            
            
        </div>

  </div>  <!-- End of Breadcrumb -->

<div class="col-sm-12"><hr></div>

<div class="col-sm-6">
       <div class="form-group">
         
           <label class="col-md-12">Blog Title :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
              <input name="title" type="text" id="title" tabindex="2" class="form-control" data-required="true"  />
            </div>
        </div>
  </div>


<div class="col-sm-6">
       <div class="form-group">
         
           <label class="col-md-12">Tags :&nbsp;&nbsp;&nbsp;<span id="show_tag_info">seprated by Comma!</span></label>
            <div class="col-md-12">
              <input name="tagss" type="text" id="tagss" tabindex="2" class="form-control"  />
            </div>
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

 <div class="col-sm-6">
       <div class="form-group">
         
           <label class="col-md-12">Image :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
              <input name="file1" type="file" id="file1" tabindex="2" class="form-control" data-required="true"  /> 
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
     <button type="submit" class="btn btn-secondary btn-lg" name="validate" id="validate" tabindex="2">Save</button>
   </div>


          </form>
            </div>
            </div>
            
             <!-- end of button -->
         <!-- End of Create blogs -->   
             
    <?php
  }
  else if(isset($_REQUEST['update']))
  {
      include("conn.inc.php");
      $id = $_REQUEST['id'];
      $get = mysql_query("SELECT * from blog where blog_id = '$id'");
      $data = mysql_fetch_assoc($get);
     ?>
        <!-- Create blogs -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Update Blog :
             </h3>
        </div>
        <div class="portlet-content">
         <form method="post" id="validate-basic" action="blogs.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 
      
              <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
    
             <input type="hidden" name="ids" id="ids" value="<?php echo $id; ?>">
         <input type="hidden" name="img" id="img" value="<?php echo $_REQUEST['img']; ?>">
<div class="col-sm-12"><hr></div>
<!-- Breadcrumb -->
 <div class="col-sm-12">
       <div class="form-group">
         
           <label class="col-md-3" style="color: green;">

              Breadcrumb Image :<strong style="color:Red">*</strong>
              <br>
              <span style="font-weight: normal; color: black;">
                 <i class="fa fa-home" aria-hidden="true"></i>
                 <i class="fa fa-chevron-right" aria-hidden="true"></i> 
                Blogs
                 <i class="fa fa-chevron-right" aria-hidden="true"></i> 
                 ..
              </span>

           </label>
            <div class="col-md-6">
              <input name="file_bread" type="file" id="file_bread" tabindex="2" class="form-control" data-required="true"  /> 
            </div>
            <!-- Image -->
            <?php 
            if(!($data['blog_breadcrumb'] == NULL || $data['blog_breadcrumb'] == ''))
            {
            ?>
              <div class="col-sm-2">
               <div class="thumbnail-view">
               <a class="thumbnail-view-hover ui-lightbox" href="photos/<?php echo $data['blog_breadcrumb']; ?>">
                        </a>
                <img src="photos/<?php echo $data['blog_breadcrumb']; ?>" width="70" alt="Image">
                </div>
               </div>
            <?php
            }
             ?>
             
           <!-- End of  Image -->
            
            
        </div>

  </div>  <!-- End of Breadcrumb -->

<div class="col-sm-12"><hr></div>

<div class="col-sm-6">
       <div class="form-group">
         
           <label class="col-md-12">Blog Title :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
              <input name="title" type="text" id="title" tabindex="2" class="form-control" data-required="true"  value="<?php echo $data['blog_title']; ?>" />
            </div>
        </div>
  </div>


<div class="col-sm-6">
       <div class="form-group">
         
           <label class="col-md-12">Tags :&nbsp;&nbsp;&nbsp;<span id="show_tag_info">seprated by Comma!</span></label>
            <div class="col-md-12">
              <input name="tagss" type="text" id="tagss" tabindex="2" class="form-control"   value="<?php echo $data['blog_tags']; ?>"/>
            </div>
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

 <div class="col-sm-6">
       <div class="form-group">
         
           <label class="col-md-12">Image :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
              <input name="file1" type="file" id="file1" tabindex="2" class="form-control" data-required="true"  /> 
            </div>
            
            
        </div>
  </div>
<div class="col-sm-6">
  <br>
    <div class="thumbnail-view">
             <a class="thumbnail-view-hover ui-lightbox" href="photos/<?php echo $data['blog_img']; ?>">
                      </a>
              <img src="photos/<?php echo $data['blog_img']; ?>" width="70" alt="Image">
              </div>
</div>
<div class="col-sm-12"><br><br></div>

   <div class="col-sm-12">
       <div class="form-group">
           <label class="col-md-12">Description :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
             <textarea class="ckeditor form-control" name="content" id="content" tabindex="2"> 
              <?php echo $data['blog_description']; ?>
             </textarea>
            </div>
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

   <div class="col-sm-12" style="margin-left: 90px;">
    <button type="submit" tabindex="7" class="btn btn-success btn-lg" name="update_category">Update</button>
   </div>


          </form>
            </div>
            </div>
            
             <!-- end of button -->
         <!-- End of Create blogs -->   
    
    <?php
  }
  else{

// Show Data



          ?>
         <div class="portlet">
                 <div class="portlet-header">

              <h3>
                <i class="fa fa-table"></i>
               Blogs&nbsp;&nbsp;
                
               
                <a href="blogs.php?create=y"><i class="fa fa-plus-square"></i></a>
             
                
                
              
              </h3>

            </div> <!-- /.portlet-header -->
               <div class="portlet-content">           

              <div class="table-responsive">

              <table 
                class="table table-striped table-bordered table-hover table-highlight table-checkable" 
                data-provide="datatable" 
                data-display-rows="10"
                data-info="true"
                data-search="true"
                data-length-change="true"
                data-paginate="true"
              >
                  <thead>
                  <tr>
                    <th style="text-align: center;">No</th>
                    <th>Blogs</th>
                    <th>Tags</th>
                    <th style="text-align: center;">Image</th>
                    <th style="text-align: center;">Comments</th>
                    <th style="text-align: center;">Date</th>
                    <th style="text-align: center;">Send Email</th>
                     <th style="text-align: center;">Share</th>
                    <th>Update</th>
                    <th>Delete</th>
                       
                    </tr>
                   
                  </thead>
                  <tbody>
                     <?php
         include("conn.inc.php");
               $get = mysql_query("SELECT * from blog");
               $i = 1;
               while($row = mysql_fetch_array($get))
               {

                  // Date Format
                  $date = date_create($row['blog_date']);
                  $dates_format = DATE_FORMAT($date, 'F d, Y');
                ?>
                    <tr>
                      
                    <td style="text-align: center; vertical-align: middle;"><?php echo $i; ?></td>

                     <td style="vertical-align: middle; font-weight: bold;">
                      <?php echo $row['blog_title']; ?>
                     </td>
                     <td style="vertical-align: middle;">
                      <?php echo $row['blog_tags']; ?>
                     </td>
                    <td style="text-align: center;">
                      <div class="thumbnail-view">
                      <a class="thumbnail-view-hover ui-lightbox" href="photos/<?php echo $row['blog_img']; ?>">
                      </a>

                       <img src="photos/<?php echo $row['blog_img']; ?>" width="60" alt="Image" style="width: 170px; height: 70px;">
                    </div>
                    </td>
                    <!-- comment -->
                     <td style="vertical-align: middle; width: 150px;">
                      <a href="Comments.php?blogid=<?php echo $row['blog_id']; ?>" target="_blank">
                        
                        <?php 
                        $blogid = $row['blog_id'] ;
                        $comment = mysql_query("SELECT * from blogs_comment where blog_comment_blogid = '$blogid' AND blog_comment_show = 'NO'");
                        $PendingComment = mysql_num_rows($comment);
                         ?>
                         <button type="button" class="btn btn-default">
                          Comments
                         <i class="fa fa-comment" aria-hidden="true"></i>
                         </button>
                         <?php 
                         if(!($PendingComment == 0))
                         {
                          ?>
                           <span class="badge badge-warning" style="display: inline-block; position: absolute;"><?php echo $PendingComment ; ?></span>
                          <?php
                         }
                          ?>
                        
                       
                      </a>
                     </td>
                     <!-- end of comment -->
                     <td style="vertical-align: middle;">
                      <?php echo $dates_format; ?>
                     </td>
                     <!-- send mail -->
                     <td style="vertical-align: middle;">
                      <a href="blogs.php?SendMail=y&blogid=<?php echo $row['blog_id']; ?>">
                       <button type="button"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Send 
                        </button>
                      </a>
                     </td>
                     <!-- End of send mail -->
                     <!-- Share Blog -->
                     <td style="width: 70px; text-align: center;">
                       <div class="addthis_sharing_toolbox"></div>
                     </td>
                     <!-- End of Share Blog -->
                    <td><a href="blogs.php?update=y&id=<?php echo $row['blog_id']; ?>&img=<?php echo $row['blog_img']; ?>"><button class="btn btn-secondary" type="button">Update</button></a></td>
                        
                      <td>
                        <a href="blogs.php?remove=y&id=<?php echo $row['blog_id']; ?>&img=<?php echo $row['blog_img']; ?>" onclick="return confirm('Are you sure you have to Remove this Blog  ??')"><button class="btn btn-primary">Delete</button></a>
                    </td>
                    </tr>
                  
                    <?php 
                    $i++;
                  } 
                  ?>

              
                  </tbody>
                </table>
              </div> <!-- /.table-responsive -->
              
            </div> <!-- /.portlet-content -->
              


          </div> <!-- /.portlet -->


        <?php
      }  // End of Show Data

      ?>
 
 
    </div>
    </div>
    </div>

<!-- End of Admin View -->


        <!-- /.row -->

  <!--  </div>  
      
  </div>  

</div>-->


 </div>
 </div>
 
 <!--  Modal show comment -->
 <div id="showcommentmodel" class="modal modal-styled fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title">Comment :</h3>
      </div>
      <div class="modal-body" id="showcommentmodelBody">
        
       </div>
            
      <div class="modal-footer">
        <button type="button" class="btn btn-tertiary" data-dismiss="modal">Close</button>
       
  
    </div>
            </div>
            </div>
</div>
 <!-- End of  Modal show comment -->
<?php include_once("footer.inc.php");?>

<?php include_once("closebody.php");?>

<script src="js/plugins/magnific/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!-- share -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51407e9635abe24e"></script>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "e38f0e15-c72d-4f67-9a0c-a2f8d3073131", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>   
<!-- end of share -->
<style type="text/css">
  #show_tag_info{
    display: none;
    color: green;
  }
</style>
<script type="text/javascript">




$(document).ready(function(){
  $("#tagss").focus(function(){
    $("#show_tag_info").css("display", "inline").Show(200);
  });
   $("#tagss").focusout(function(){
    $("#show_tag_info").css("display", "inline").hide(100);
  });
});  
</script>
<?php include_once("header.inc.php");?>

 <?php

     
  if(isset($_REQUEST['update_category']))
  {
      
      include("conn.inc.php");
      $id = $_REQUEST['ids'];

       $photo1 = addslashes(str_replace('%','',$_FILES['file1']['name']));
       $photonew="";

       $check = "";

      if(!empty($_FILES['file1']['name']))
      {

         $filename1=(explode(".",$photo1));
      
       
        if($filename1[1]=="mp4" || $filename1[1]=="ogg" || $filename1[1]=="webm"|| $filename1[1]=="ogv" || $filename1[1]=="3gp" || $filename1[1]=="flv" || $filename1[1]=="MOV" || $filename1[1]=="AVI"|| $filename1[1]=="MP4" )
        {
            $photonew = date("dmYs").$photo1; 
            move_uploaded_file($_FILES['file1']['tmp_name'],"photos/".$photonew);

            mysql_query("UPDATE homeBanner set homebanner_video = '$photonew' where homebanner_id = '1'");

              // Remove video
             $imgname = $_REQUEST['img'];
            if(!($imgname == NULL || $imgname == ''))
            {
              $image_path =  'photos/'.$imgname ;
                if(file_exists($image_path))
                 {
                      unlink($image_path);

                 }
              }
            // End of Remove video
          
        }
        else{
        echo "<script type='text/javascript'>alert('Please Enter only Video');</script>";
        } 
         
      }
      

        
     echo "<script type='text/javascript'>window.location='Home.php'</script>";

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
        <h2 class="content-header-title">Home</h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="javascript:;">Home Banner</a></li>
          
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
      
  } // End of Create
  else if(isset($_REQUEST['create']))
  {
    ?>
        <!-- Create Services -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Create Services 
             </h3>
        </div>
        <div class="portlet-content">
         
            </div>
            </div>
            
             <!-- end of button -->
         <!-- End of Create Services -->   
             
    <?php
  }
  else if(isset($_REQUEST['update']))
  {
      include("conn.inc.php");
      $id = $_REQUEST['id'];
      $get = mysql_query("SELECT * from homebanner where  homebanner_id = '1'");
      $data = mysql_fetch_assoc($get);
     ?>
        <!-- Create Services -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Update Banner :
             </h3>
        </div>
        <div class="portlet-content">
         <form method="post" id="validate-basic" action="Home.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 
      
              <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
    
           <input type="hidden" name="ids" id="ids" value="<?php echo $id; ?>">
         <input type="hidden" name="img" id="img" value="<?php echo $_REQUEST['video']; ?>">
<div class="col-sm-12"><br><br></div>


<div class="col-sm-12">
 
       <div class="form-group">
          
           <label class="col-md-3">Video  :<strong style="color:Red">*</strong></label>
            <div class="col-md-5">
              <input name="file1" type="file" id="file1" tabindex="2" class="form-control" data-required="true"  /> 
            </div>
        </div>
         <div class="col-md-3">
            <video width="200" controls>
                  <source src="photos/<?php echo $data['homebanner_video']; ?>" type="video/mp4">
                  Your browser does not support HTML5 video.
                </video> 

         </div>
  </div>




  <div class="col-sm-12"><br><br></div>

   <div class="col-sm-12" style="margin-left: 220px;">
     <button type="submit" tabindex="7" class="btn btn-success btn-lg" name="update_category">Update</button>
   </div>


          </form>
            </div>
            </div>
            
             <!-- end of button -->
         <!-- End of Create Services -->   
             
    <?php
  }
  else{

// Show Data



          ?>
         <div class="portlet">
                 <div class="portlet-header">

              <h3>
                <i class="fa fa-table"></i>
               Home Banner&nbsp;&nbsp;
                
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
                    <th style="text-align: center;">No.</th>
                    <th>Video</th>
                    <th>Update</th>
                    
                       
                    </tr>
                   
                  </thead>
                  <tbody>
                     <?php
         include("conn.inc.php");
               $get = mysql_query("SELECT * from homeBanner where homebanner_id = '1'");
               $i = 1;
               while($row = mysql_fetch_array($get))
               {
                ?>
                    <tr>
                      
                    <td style="text-align: center; vertical-align: middle;"><?php echo $i; ?></td>

                    <td style="text-align: center;">
                     
                      <video width="400" controls>
                  <source src="photos/<?php echo $row['homebanner_video']; ?>" type="video/mp4">
                  Your browser does not support HTML5 video.
                </video> 
            <!--     <video width="320" height="240" controls autoplay>
  <source src="Priyanka Chopra - Exotic ft. Pitbull - YouTube.MP4" type="video/mp4">
  Sorry, your browser doesn't support the video element.
</video> -->
                    </td>
                    <td style="vertical-align: middle;"><a href="Home.php?update=y&id=<?php echo '1'; ?>&video=<?php echo $row['homebanner_video']; ?>"><button class="btn btn-secondary" type="button">Update</button></a></td>
                        
                 
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
 

<?php include_once("footer.inc.php");?>

<?php include_once("closebody.php");?>

<script src="js/plugins/magnific/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<?php include_once("header.inc.php");?>

 <?php
 // Insert Record
  if(isset($_REQUEST['validate']))
  {
      
       include("conn.inc.php");

        $pagetitle = addslashes($_REQUEST['title']);
        $pagecontent = addslashes($_REQUEST['content']);

        mysql_query("INSERT into international_domestics(InterDom_title) values('$pagetitle' , '$pagecontent')");
        
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
             mysql_query("UPDATE international_domestics set InterDom_photo = '$photoname'  where InterDom_id  = '$last_id'");
            
            }
            else{
             echo "<script type='text/javascript'>alert('Please Enter only image');</script>";
             
            }
           
         
      }
      
       
    echo "<script type='text/javascript'>window.location='Tour_InternationDomestics.php'</script>";


  }
     
  if(isset($_REQUEST['update_category']))
  {
      
      include("conn.inc.php");
      $id = $_REQUEST['ids'];

      $pagetitle = addslashes($_REQUEST['title']);
     

      mysql_query("UPDATE international_domestics set InterDom_title = '$pagetitle'  where InterDom_id = '$id'");
     
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

             mysql_query("UPDATE international_domestics set InterDom_photo = '$photonew' where InterDom_id = '$id'");

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
      

        
     echo "<script type='text/javascript'>window.location='Tour_InternationDomestics.php'</script>";

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
        <h2 class="content-header-title">Tour Master</h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="javascript:;">Tour Master</a></li>
          
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
     $check = mysql_query("DELETE  from international_domestics where InterDom_id = '$id'");

    
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
       
       echo "<script type='text/javascript'>window.location='Tour_InternationDomestics.php'</script>";
    }
    else{
       echo "<script type='text/javascript'>alert('Unable to Remove this international_domestics!');</script>";
      echo "<script type='text/javascript'>window.location='Tour_InternationDomestics.php'</script>";
    }
  } // End of Create
  else if(isset($_REQUEST['create']))
  {
    ?>
        <!-- Create international_domesticss -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Create Tour Master
             </h3>
        </div>
        <div class="portlet-content">
          <form method="post" id="validate-basic" action="Tour_InternationDomestics.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 
      
              <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
    
          
<div class="col-sm-12"><br><br></div>


<div class="col-sm-12">
       <div class="form-group">
         
           <label class="col-md-3">international_domestics :<strong style="color:Red">*</strong></label>
            <div class="col-md-7">
              <input name="title" type="text" id="title" tabindex="2" class="form-control" data-required="true"  />
            </div>
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

 <div class="col-sm-12">
       <div class="form-group">
         
           <label class="col-md-3">Image :<strong style="color:Red">*</strong></label>
            <div class="col-md-7">
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
         <!-- End of Create international_domesticss -->   
             
    <?php
  }
  else if(isset($_REQUEST['update']))
  {
      include("conn.inc.php");
      $id = $_REQUEST['id'];
      $get = mysql_query("SELECT * from international_domestics where InterDom_id = '$id'");
      $data = mysql_fetch_assoc($get);
     ?>
        <!-- Create international_domesticss -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Update Tour Master :
             </h3>
        </div>
        <div class="portlet-content">
         <form method="post" id="validate-basic" action="Tour_InternationDomestics.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 
      
              <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
    
           <input type="hidden" name="ids" id="ids" value="<?php echo $id; ?>">
         <input type="hidden" name="img" id="img" value="<?php echo $_REQUEST['img']; ?>">
<div class="col-sm-12"><br><br></div>


<div class="col-sm-12">
       <div class="form-group">
         
           <label class="col-md-3">Tour :<strong style="color:Red">*</strong></label>
            <div class="col-md-7">
              <input name="title" type="text" id="title" tabindex="2" class="form-control" data-required="true"  value="<?php echo $data['InterDom_title'] ?>" readonly/>
            </div>
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

 <div class="col-sm-12">
       <div class="form-group">
         
           <label class="col-md-3">Image :<strong style="color:Red">*</strong></label>
            <div class="col-md-7">
              <input name="file1" type="file" id="file1" tabindex="2" class="form-control" data-required="true"  /> 
            </div>
              <div class="col-sm-2">
             <div class="thumbnail-view">
             <a class="thumbnail-view-hover ui-lightbox" href="photos/<?php echo $data['InterDom_photo']; ?>">
                      </a>
              <img src="photos/<?php echo $data['InterDom_photo']; ?>" width="70" alt="Image">
              </div>
          </div>
            
        </div>

  </div>

<div class="col-sm-12"><br><br></div>

 
   <div class="col-sm-12" style="margin-left: 100px;">
     <button type="submit" tabindex="7" class="btn btn-success btn-lg" name="update_category">Update</button>
   </div>


          </form>
            </div>
            </div>
            
             <!-- end of button -->
         <!-- End of Create international_domesticss -->   
             
    <?php
  }
  else{

// Show Data



          ?>
         <div class="portlet">
                 <div class="portlet-header">

              <h3>
                <i class="fa fa-table"></i>
               Tour Master&nbsp;&nbsp;
                
               
                <!-- <a href="Tour_InternationDomestics.php?create=y"><i class="fa fa-plus-square"></i></a> -->
             
                
                
              
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
                    <th>Tours</th>
                    <th style="text-align: center;">Image</th>
                    <th>Update</th>
                    <!-- <th>Delete</th> -->
                       
                    </tr>
                   
                  </thead>
                  <tbody>
                     <?php
         include("conn.inc.php");
               $get = mysql_query("SELECT *from international_domestics");
               $i = 1;
               while($row = mysql_fetch_array($get))
               {
                ?>
                    <tr>
                      
                    <td style="text-align: center; vertical-align: middle;"><?php echo $i; ?></td>

                     <td style="vertical-align: middle;">
                      <?php echo $row['InterDom_title']; ?>
                     </td>
                    <td style="text-align: center;">
                      <div class="thumbnail-view">
                      <a class="thumbnail-view-hover ui-lightbox" href="photos/<?php echo $row['InterDom_photo']; ?>">
                      </a>

                       <img src="photos/<?php echo $row['InterDom_photo']; ?>" width="60" alt="Image" style="width: 170px; height: 70px;">
                    </div>
                    </td>
                    <td><a href="Tour_InternationDomestics.php?update=y&id=<?php echo $row['InterDom_id']; ?>&img=<?php echo $row['InterDom_photo']; ?>"><button class="btn btn-secondary" type="button">Update</button></a></td>
                        
                     <!--  <td>
                        <a href="Tour_InternationDomestics.php?remove=y&id=<?php echo $row['InterDom_id']; ?>&img=<?php echo $row['InterDom_photo']; ?>" onclick="return confirm('Are you sure you have to Remove this international_domestics  ??')"><button class="btn btn-primary">Delete</button></a>
                    </td> -->
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
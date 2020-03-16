<?php include_once("header.inc.php");?>

 <?php
 // Insert Record
  if(isset($_REQUEST['validate']))
  {
      
      include("conn.inc.php");
      $text = addslashes($_REQUEST['title']);

       mysql_query("INSERT into Tours_categorys(cat_name) values('$text')");
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
             mysql_query("UPDATE Tours_categorys set cat_photo = '$photoname'  where  cat_id  = '$last_id'");
            
            }
            else{
             echo "<script type='text/javascript'>alert('Please Enter only image');</script>";
             
            }
           
         
      }
    

    echo "<script type='text/javascript'>window.location='Tour_Categorys.php'</script>";
     


    }
        
     
      if(isset($_REQUEST['update_content']))
      {
      
      include("conn.inc.php");

      $id = $_REQUEST['Nid'];
      $text = addslashes($_REQUEST['title']);
      $check = mysql_query("UPDATE Tours_categorys set cat_name = '$text' where cat_id = '$id'");
       

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

             mysql_query("UPDATE Tours_categorys set cat_photo = '$photonew' where cat_id = '$id'");

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
      echo "<script type='text/javascript'>window.location='Tour_Categorys.php'</script>";
     
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
        <h2 class="content-header-title">Tour Categorys</h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="javascript:;">Tour Categorys</a></li>
          
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

     $Nid = $_REQUEST['id'];
     $imgname = $_REQUEST['img'];

     $check = mysql_query("DELETE  from  Tours_categorys where cat_id = '$Nid'");

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
       echo "<script type='text/javascript'>window.location='Tour_Categorys.php'</script>";
    }
    else{
       echo "<script type='text/javascript'>alert('Somthing have Problem');</script>";
      echo "<script type='text/javascript'>window.location='Tour_Categorys.php'</script>";
    }
  } // End of Create
  else if(isset($_REQUEST['create']))
  {
    ?>
        <!-- Create Advertisment -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Create Tour Categorys
             </h3>
        </div>
        <div class="portlet-content">
        <form method="post" id="validate-basic" action="Tour_Categorys.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 
      
              <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
    
          
<div class="col-sm-12"><br><br></div>


<div class="col-sm-12">
       <div class="form-group">
         
           <label class="col-md-3">Category Name :<strong style="color:Red">*</strong></label>
            <div class="col-md-7">
              <input name="title" type="text" id="title" tabindex="2" class="form-control" data-required="true"  />
            </div>
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

 <div class="col-sm-12">
       <div class="form-group">
         
           <label class="col-md-3">Category Image :<strong style="color:Red">*</strong></label>
            <div class="col-md-7">
              <input name="file1" type="file" id="file1" tabindex="2" class="form-control" data-required="true"  /> 
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
         <!-- End of Create Advertisment -->   
             
    <?php
  }
  else if(isset($_REQUEST['update']))
  {
    $cid = $_REQUEST['id'] ;
    $getcategory = mysql_query("SELECT * from tours_categorys where cat_id = '$cid'") ;
    $category = mysql_fetch_assoc($getcategory) ;

     ?>
        <!-- createte Advertisment -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Update Tour Categorys
             </h3>
        </div>
        <div class="portlet-content">
    <form method="post" id="validate-basic" action="Tour_Categorys.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 
      
              <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
    <input type="hidden" name="Nid" id="Nid" value="<?php echo $category['cat_id']; ?>">
    <input type="hidden" name="img" id="img" value="<?php echo $_REQUEST['img']; ?>">
          
<div class="col-sm-12"><br><br></div>


<div class="col-sm-12">
       <div class="form-group">
         
           <label class="col-md-3">Category Name :<strong style="color:Red">*</strong></label>
            <div class="col-md-7">
              <input name="title" type="text" id="title" tabindex="2" class="form-control" data-required="true" value="<?php echo $category['cat_name'] ; ?>" />
            </div>

        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

 <div class="col-sm-12">
       <div class="form-group">
         
           <label class="col-md-3">Category Image :<strong style="color:Red">*</strong></label>
            <div class="col-md-7">
              <input name="file1" type="file" id="file1" tabindex="2" class="form-control" data-required="true"  /> 
            </div>
             <div class="col-sm-2">
             <div class="thumbnail-view">
             <a class="thumbnail-view-hover ui-lightbox" href="photos/<?php echo $category['cat_photo']; ?>">
                      </a>
              <img src="photos/<?php echo $category['cat_photo']; ?>" width="70" alt="Image">
              </div>
          </div>
            
        </div>
  </div>


  <div class="col-sm-12"><br><br></div>

   <div class="col-sm-12" style="margin-left: 100px;">
    <button type="submit" class="btn btn-secondary btn-lg" name="update_content" id="update_content" tabindex="2" >Update</button>
   </div>


          </form>
            </div>
            </div>
            
             <!-- end of button -->
         <!-- End of Create Advertisment -->   
             
    <?php
  }
  else{

// Show Data



          ?>
         <div class="portlet">
                 <div class="portlet-header">

              <h3>
                <i class="fa fa-table"></i>
               Tour Categorys&nbsp;&nbsp;
                
               
                 <a href="Tour_Categorys.php?create=y"><i class="fa fa-plus-square"></i></a>
               
               
             
              
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
                    <th style="padding-left: 15px;">Category</th>
                    <th style="text-align: center;">Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                      
                    </tr>
                   
                  </thead>
                  <tbody>
                     <?php
         include("conn.inc.php");
               $get = mysql_query("SELECT * from Tours_categorys");
               $i = 1;
               while($row = mysql_fetch_array($get))
               {
                ?>
			              <tr>
                      
                    <td style="text-align: center; width: 50px;"><?php echo $i; ?></td>
                    <td>
                     <p style="margin-left: 10px; font-weight: bold; text-transform: capitalize;"><?php echo $row['cat_name']; ?></p>
                    </td>
                    <td style="text-align: center;">
                      <div class="thumbnail-view">
                      <a class="thumbnail-view-hover ui-lightbox" href="photos/<?php echo $row['cat_photo']; ?>">
                      </a>

                       <img src="photos/<?php echo $row['cat_photo']; ?>" width="60" alt="Image" style="width: 170px; height: 70px;">
                    </div>
                    </td>
                     <td style="width: 150px;"><a href="Tour_Categorys.php?update=y&id=<?php echo $row['cat_id']; ?>&img=<?php echo $row['cat_photo'] ; ?>"><button class="btn btn-secondary" type="button">Update</button></a></td>
                        
                      <td style="width: 150px;">
                        <a href="Tour_Categorys.php?remove=y&id=<?php echo $row['cat_id']; ?>&img=<?php echo $row['cat_photo'] ; ?>" onclick="return confirm('Are you sure you have to Remove this  Tour Category ?')"><button class="btn btn-primary">Delete</button></a>
                        
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
 

<?php include_once("footer.inc.php");?>

<?php include_once("closebody.php");?>

<script src="js/plugins/magnific/jquery.magnific-popup.min.js"></script>
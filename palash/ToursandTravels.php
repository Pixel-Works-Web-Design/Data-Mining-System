<?php 
  if(isset($_REQUEST['remove_image']))
  {
    include("conn.inc.php");
    $imgid = $_REQUEST['imgageid'] ;
    $imgname = $_REQUEST['imagename'] ;
    $mytid = $_REQUEST['tourid'] ;
    mysql_query("DELETE from tours_images where tourimg_id = '$imgid'") ;

     $image_path =  'photos/'.$imgname ;
    if(file_exists($image_path))
    {
      unlink($image_path);
    }

    
    $getimages = mysql_query("SELECT * from tours_images where tourimg_tours_id = '$mytid'");
        if(mysql_num_rows($getimages) > 0)
        {
          while ($images = mysql_fetch_assoc($getimages)) {
            ?>
            <div class="col-sm-3">
             <div class="thumbnail-view">
             <a class="thumbnail-view-hover ui-lightbox" href="photos/<?php echo $images['tourimg_photo']; ?>">
                      </a>
              <img src="photos/<?php echo $images['tourimg_photo']; ?>" width="70" height="50" alt="Image">
              &nbsp;&nbsp;
            </div>  
            <a href="javascript:;" onclick="function_removeimg('<?php echo $images['tourimg_id']; ?>','<?php echo $images['tourimg_photo'] ?>','<?php echo $mytid ; ?>')"><i class="fa fa-times" aria-hidden="true"></i></a>
            </div>

            <?php
          }  
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

        $days = $_REQUEST['day'];
        $nights = $_REQUEST['night'];
      
        $prices = $_REQUEST['price'];
        $country = $_REQUEST['countrybox'];

        $categoryMultiple = $_REQUEST['category'];
        $tagMultiple = $_REQUEST['tag'];

        $tour = $_REQUEST['tour_dom_int'];

        $inclusions = addslashes($_REQUEST['inclusion']);
        $TermsandCondition = addslashes($_REQUEST['terms']);

        // category
        $category = "";
        foreach ($categoryMultiple as $cat) {
          $category .= $cat.',';
        }
        $category = rtrim($category , ',');
        // End of category
        // tag
        $tag = "";
        foreach ($tagMultiple as $tags) {
          $tag .= $tags.',';
        }
        $tag = rtrim($tag , ',');
        // End of tag

        // Tour Valid From to To

        $dateftom = $_REQUEST['validfrom'] ;
        $dateto =  $_REQUEST['validto'] ;



        mysql_query("INSERT into tours (tours_title , tours_day , tours_night , tours_price , tours_category , tours_tag , tours_domestic_international ,   tours_destination , tours_description , tours_inclusion , tours_termscondition , tours_date , tours_validfrom , tours_validto) values('$pagetitle' , '$days' , '$nights' , '$prices' , '$category' , '$tag' , '$tour' , '$country' , '$pagecontent' , '$inclusions' , '$TermsandCondition' , CURDATE() , '$dateftom' , '$dateto')");
        
        $last_id = mysql_insert_id();

       
        // insert images
     
       $count=0;
       $target="photos/";
            foreach ($_FILES['file1']['name'] as $filename) 
            {
                $temp = $target;
                $tmp = $_FILES['file1']['tmp_name'][$count];
                $filename1=(explode(".",$filename));
      
           
               if($filename1[1]=="gif" || $filename1[1]=="jpeg" || $filename1[1]=="jpg"|| $filename1[1]=="png" || $filename1[1]=="bmp" || $filename1[1]=="GIF" || $filename1[1]=="JPEG" || $filename1[1]=="JPG"|| $filename1[1]=="PNG" || $filename1[1]=="BMP" )
                  {

                  $photonew = date("dmys").$filename;
                    $temp=$temp.basename($photonew);
                   move_uploaded_file($tmp,$temp);
                  
                  mysql_query("INSERT into tours_images(tourimg_photo , tourimg_tours_id) values('$photonew' , '$last_id')");
              
                }
           
          $count=$count + 1;
          
          $temp='';
          $tmp='';
      }
      // End of insert images

      // if(!empty($_FILES['file1']['name']))
      // {
         
      //        $filename1=(explode(".",$pname));
      //     if($filename1[1]=="gif" || $filename1[1]=="jpeg" || $filename1[1]=="jpg"|| $filename1[1]=="png" || $filename1[1]=="bmp" || $filename1[1]=="GIF" || $filename1[1]=="JPEG" || $filename1[1]=="JPG"|| $filename1[1]=="PNG" || $filename1[1]=="BMP" )
      //       {
           
      //       $photoname = date("dmYs").$pname; 
      //        move_uploaded_file($_FILES['file1']['tmp_name'],"photos/".$photoname); 
      //        mysql_query("UPDATE tours set tours_image = '$photoname'  where  tours_id  = '$last_id'");
            
      //       }
      //       else{
      //        echo "<script type='text/javascript'>alert('Please Enter only image');</script>";
             
      //       }
           
         
      // }

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
             mysql_query("UPDATE tours set tours_breadcrumb = '$Breadname'  where tours_id  = '$last_id'");
            
            }
            else{
             echo "<script type='text/javascript'>alert('Please Enter only image');</script>";
             
            }
      }   // End of Save BreadCrumb Image

      
       
    echo "<script type='text/javascript'>window.location='ToursandTravels.php'</script>";


  }
     
  if(isset($_REQUEST['update_category']))
  {
      
      include("conn.inc.php");
      $id = $_REQUEST['ids'];


        $pagetitle = addslashes($_REQUEST['title']);
        $pagecontent = addslashes($_REQUEST['content']);

        $days = $_REQUEST['day'];
        $nights = $_REQUEST['night'];
      
        $prices = $_REQUEST['price'];
        $country = $_REQUEST['countrybox'];

        $categoryMultiple = $_REQUEST['category'];
        $tagMultiple = $_REQUEST['tag'];

        $tour = $_REQUEST['tour_dom_int'];

        $inclusions = addslashes($_REQUEST['inclusion']);
        $TermsandCondition = addslashes($_REQUEST['terms']);

        // category
        $category = "";
        foreach ($categoryMultiple as $cat) {
          $category .= $cat.',';
        }
        $category = rtrim($category , ',');
        // End of category
        // tag
        $tag = "";
        foreach ($tagMultiple as $tags) {
          $tag .= $tags.',';
        }
        $tag = rtrim($tag , ',');
        // End of tag

        // Date From to To
        $dateftom = $_REQUEST['validfrom'] ;
        $dateto =  $_REQUEST['validto'] ;

      mysql_query("UPDATE tours set tours_title = '$pagetitle' , tours_day = '$days' , tours_night = '$nights' , tours_price = '$prices' , tours_category = '$category' , tours_tag = '$tag' , tours_domestic_international = '$tour' , tours_destination = '$country' ,  tours_description = '$pagecontent' , tours_inclusion = '$inclusions' , tours_termscondition = '$TermsandCondition' , tours_date = CURDATE() , tours_validfrom = '$dateftom' , tours_validto = '$dateto' where  tours_id = '$id'");
     
      

       // Insert Images
 $photonew = "";
  if(empty($_FILES['file1']['name']))
      {
          $photonew = "";
          
      }
else{
   
       $count=0;
     if($_FILES['file1']['size'][$count] > 0)
    {
         
     $target="photos/";
            foreach ($_FILES['file1']['name'] as $filename) 
            {
              
                $temp = $target;
                $tmp = $_FILES['file1']['tmp_name'][$count];

            $filename1=(explode(".",$filename));

            if($filename1[1]=="gif" || $filename1[1]=="jpeg" || $filename1[1]=="jpg"|| $filename1[1]=="png" || $filename1[1]=="bmp" || $filename1[1]=="GIF" || $filename1[1]=="JPEG" || $filename1[1]=="JPG"|| $filename1[1]=="PNG" || $filename1[1]=="BMP" )
            {
              $photonew = date("dmys").$filename; 
              $temp = $temp.basename($photonew);
               move_uploaded_file($tmp,$temp);  
              
              mysql_query("INSERT into tours_images(tourimg_photo , tourimg_tours_id) values('$photonew' , '$id')");
            }
        
                $count=$count + 1;
                
                $temp='';
                $tmp='';
            } // End of Foreach
    } // end of IF Image Available or Not
 } // else start of images code

// End of Insert Images

      // if(!empty($_FILES['file1']['name']))
      // {

      //    $filename1=(explode(".",$photo1));
      
       
      //   if($filename1[1]=="gif" || $filename1[1]=="jpeg" || $filename1[1]=="jpg"|| $filename1[1]=="png" || $filename1[1]=="bmp" || $filename1[1]=="GIF" || $filename1[1]=="JPEG" || $filename1[1]=="JPG"|| $filename1[1]=="PNG" || $filename1[1]=="BMP" )
      //   {
      //       $photonew = date("dmYs").$photo1; 
      //       move_uploaded_file($_FILES['file1']['tmp_name'],"photos/".$photonew);

      //        mysql_query("UPDATE tours set tours_image = '$photonew' where tours_id = '$id'");

      //         // Remove Image
      //        $imgname = $_REQUEST['img'];
      //       if(!($imgname == NULL || $imgname == ''))
      //       {
      //         $image_path =  'photos/'.$imgname ;
      //           if(file_exists($image_path))
      //            {
      //                 unlink($image_path);
      //            }
      //         }
      //       // End of Remove Image
          
      //   }
      //   else{
      //   echo "<script type='text/javascript'>alert('Please Enter only image');</script>";
      //   } 
         
      // }
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
             mysql_query("UPDATE tours set tours_breadcrumb = '$Breadname'  where tours_id  = '$id'");
            
            }
            else{
             echo "<script type='text/javascript'>alert('Please Enter only image');</script>";
             
            }
      }   // End of Save BreadCrumb Image

        
     echo "<script type='text/javascript'>window.location='ToursandTravels.php'</script>";

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
        <h2 class="content-header-title">Tours</h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="javascript:;">Tours</a></li>
          
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
     

     //  Remove Images from Folder
     $getimage = mysql_query("SELECT * from tours_images where tourimg_tours_id = '$id'") ;
     if(mysql_num_rows($getimage) > 0)
     {
      while ($images = mysql_fetch_array($getimage)) {
          $imgname = $images['tourimg_photo'] ;
           if(!($imgname == NULL || $imgname == ''))
            {
              $image_path =  'photos/'.$imgname ;
                if(file_exists($image_path))
                 {
                      unlink($image_path);
                 }
             }
      }
     }
     // End of  Remove Images from Folder

     // delete 1 or more images
     mysql_query("DELETE from tours_images where tourimg_tours_id = '$id'") ;


     $check = mysql_query("DELETE  from tours where tours_id = '$id'");

    
    if($check)
    {
       
       echo "<script type='text/javascript'>window.location='ToursandTravels.php'</script>";
    }
    else{
       echo "<script type='text/javascript'>alert('Unable to Remove this Tour !');</script>";
      echo "<script type='text/javascript'>window.location='ToursandTravels.php'</script>";
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
                Create Tour &nbsp; <i class="fa fa-globe" aria-hidden="true"></i> 
             </h3>
        </div>
        <div class="portlet-content">
          <form method="post" id="validate-basic" action="ToursandTravels.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 
      
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
                Tours
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
         
           <label class="col-md-12">Tour Title :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
              <input name="title" type="text" id="title" tabindex="2" class="form-control" data-required="true"  />
            </div>
        </div>
  </div>


<div class="col-sm-6">
       <div class="form-group">
         
           <label class="col-md-12"><br></label>
            <div class="col-md-12">
               <label class="col-md-3" style="text-align: right;">Day :</label>
              <div class="col-md-3">
                 <input name="day" type="number" id="day" tabindex="2" class="form-control" data-required="true" value="0" /> 
              </div>
               <label class="col-md-3"  style="text-align: right;">Night :</label>
              <div class="col-md-3">
                 <input name="night" type="number" id="night" tabindex="2" class="form-control" data-required="true" value="0" /> 
              </div>
               
            </div>
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

   <div class="col-sm-12">
       <div class="form-group">
         
            
           <label class="col-md-1"><u>Valid :</u></label>
            <div class="col-md-3">
                  <div class="input-group date ui-datepicker">
                      <input id="date-2" name="validfrom" class="form-control" type="text" tabindex="2">
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  </div>
            </div>
              <label class="col-md-1" style="margin: 0; padding: 0; width: 20px;"> To </label>
              <div class="col-md-3">
                <div class="input-group date ui-datepicker">
                    <input id="date-2" name="validto" class="form-control" type="text" tabindex="2">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
          </div>
        </div>
  </div>

<div class="col-sm-12"><br><br></div>
 <div class="col-sm-6">
       <div class="form-group">
         
            
           <label class="col-md-12">Images :</label>
            <div class="col-md-12">
              <input name="file1[]" type="file" id="file1" tabindex="2" class="form-control" data-required="true" multiple required="required" /> 
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

<div class="col-sm-6">
       <div class="form-group">
         
           <label class="col-md-12">Tour price :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
              <input name="price" type="text" id="price" tabindex="2" class="form-control" data-required="true"  />
            </div>
        </div>
  </div>

  <div class="col-sm-6">
       <div class="form-group">
         
         <label class="col-md-12">Tour :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
              <select  name="tour_dom_int" id="tour_dom_int" tabindex="2" class="form-control" data-required="true">
               <option value="DOMESTIC">DOMESTIC TOURS</option>
               <option value="INTERNATIONAL">INTERNATIONAL TOURS</option>
              </select>
          </div>
         
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

<div class="col-sm-4">
       <div class="form-group">
           <label class="col-md-12">Tour Destination :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
              <select name="countrybox" id="countrybox" tabindex="2" class="form-control" data-required="true" >
                <?php 
                include("conn.inc.php");
                $getcountry = mysql_query("SELECT * from country");
                while($countrys = mysql_fetch_array($getcountry))
                {
                  ?>
                  <option value="<?php echo $countrys['country_name']; ?>"><?php echo $countrys['country_name'] ; ?></option>
                  <?php
                }

                 ?>
              </select>
              
            </div>
         
        </div>
  </div>

  <div class="col-sm-4">
       <div class="form-group">
           <label class="col-md-12">Categorys :<strong style="color:Red">*</strong>&nbsp;&nbsp;&nbsp;<span id="show_cat_info">Press CTRL for Multiple !</span></label>
            <div class="col-md-12">
              <select  name="category[]" id="category" tabindex="2" class="form-control" data-required="true" multiple>
                 <?php 
                include("conn.inc.php");
                $getcategory = mysql_query("SELECT * from tours_categorys");
                while($category = mysql_fetch_array($getcategory))
                {
                  ?>
                  <option value="<?php echo $category['cat_name'] ; ?>"><?php echo $category['cat_name'] ; ?></option>
                  <?php
                }

                 ?>
              </select>
            </div>
         
        </div>
  </div>

<div class="col-sm-4">
       <div class="form-group">
           <label class="col-md-12">Tags :<strong style="color:Red">*</strong>&nbsp;&nbsp;&nbsp;<span id="show_tag_info">Press CTRL for Multiple !</span></label>
            <div class="col-md-12">
              <select  name="tag[]" id="tag" tabindex="2" class="form-control" data-required="true" multiple>
                  <?php 
                include("conn.inc.php");
                $gettag = mysql_query("SELECT * from tours_tags");
                while($tag = mysql_fetch_array($gettag))
                {
                  ?>
                  <option value="<?php echo $tag['Tours_tag_name'] ; ?>"><?php echo $tag['Tours_tag_name'] ; ?></option>
                  <?php
                }

                 ?>
              </select>
            </div>
           
        </div>
  </div>

<div class="col-sm-12"><br><br></div>

   <div class="col-sm-12">
       <div class="form-group">
           <label class="col-md-12">Inclusion :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
             <textarea class="ckeditor form-control" name="inclusion" id="inclusion" tabindex="2"> 
             </textarea>
            </div>
        </div>
  </div>

<div class="col-sm-12"><br><br></div>

   <div class="col-sm-12">
       <div class="form-group">
           <label class="col-md-12">Terms and Condition :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
             <textarea class="ckeditor form-control" name="terms" id="terms" tabindex="2"> 
             </textarea>
            </div>
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

   <div class="col-sm-12" style="margin-left: 60px;">
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
      $get = mysql_query("SELECT * from tours where tours_id = '$id'");
      $data = mysql_fetch_assoc($get);
     ?>
        <!-- Create blogs -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Update Tour :
             </h3>
        </div>
        <div class="portlet-content">
        <form method="post" id="validate-basic" action="ToursandTravels.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 
      
              <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
    
      <input type="hidden" name="ids" id="ids" value="<?php echo $id; ?>">
      
<div class="col-sm-12"></div>

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
                Tours
                 <i class="fa fa-chevron-right" aria-hidden="true"></i> 
                 ..
              </span>

           </label>
            <div class="col-md-6">
              <input name="file_bread" type="file" id="file_bread" tabindex="2" class="form-control" data-required="true"  /> 
            </div>
            <!-- Image -->
            <?php 
            if(!($data['tours_breadcrumb'] == NULL || $data['tours_breadcrumb'] == ''))
            {
            ?>
              <div class="col-sm-2">
               <div class="thumbnail-view">
               <a class="thumbnail-view-hover ui-lightbox" href="photos/<?php echo $data['tours_breadcrumb']; ?>">
                        </a>
                <img src="photos/<?php echo $data['tours_breadcrumb']; ?>" width="70" alt="Image">
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
         
           <label class="col-md-12">Tour Title :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
              <input name="title" type="text" id="title" tabindex="2" class="form-control" data-required="true" value="<?php echo $data['tours_title'] ; ?>" />
            </div>
        </div>
  </div>


<div class="col-sm-6">
       <div class="form-group">
         
           <label class="col-md-12"><br></label>
            <div class="col-md-12">
               <label class="col-md-3" style="text-align: right;">Day :</label>
              <div class="col-md-3">
                 <input name="day" type="number" id="day" tabindex="2" class="form-control" data-required="true" value="<?php echo $data['tours_day'] ; ?>" /> 
              </div>
               <label class="col-md-3"  style="text-align: right;">Night :</label>
              <div class="col-md-3">
                 <input name="night" type="number" id="night" tabindex="2" class="form-control" data-required="true" value="<?php echo $data['tours_night'] ; ?>" /> 
              </div>
               
            </div>
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

<div class="col-sm-12">
       <div class="form-group">
         
            
           <label class="col-md-1"><u>Valid :</u></label>
            <div class="col-md-3">
                  <div class="input-group date ui-datepicker">
                      <input id="date-2" name="validfrom" class="form-control" type="text" tabindex="2" value="<?php echo $data['tours_validfrom'] ; ?>">
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  </div>
            </div>
              <label class="col-md-1" style="margin: 0; padding: 0; width: 20px;"> To </label>
              <div class="col-md-3">
                <div class="input-group date ui-datepicker">
                    <input id="date-2" name="validto" class="form-control" type="text" tabindex="2" value="<?php echo $data['tours_validto'] ; ?>">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
          </div>
        </div>
  </div>

   <div class="col-sm-12"><br><br></div>

 <div class="col-sm-6">
       <div class="form-group">
         
            
           <label class="col-md-12">Images :</label>
            <div class="col-md-12">
              <input name="file1[]" type="file" id="file1" tabindex="2" class="form-control" data-required="true"  multiple /> 
            </div>
            
        </div>
  </div>

   <div class="col-sm-6">
       <div class="form-group" id="showajaximage">
        <?php 
        $tid = $_REQUEST['id'];
        $getimages = mysql_query("SELECT * from tours_images where tourimg_tours_id = '$tid'");
        if(mysql_num_rows($getimages) > 0)
        {
          while ($images = mysql_fetch_assoc($getimages)) {
            ?>
            <div class="col-sm-3">
             <div class="thumbnail-view">
             <a class="thumbnail-view-hover ui-lightbox" href="photos/<?php echo $images['tourimg_photo']; ?>">
                      </a>
              <img src="photos/<?php echo $images['tourimg_photo']; ?>" width="70" height="50" alt="Image">
              &nbsp;&nbsp;
            </div>  
            <a href="javascript:;" onclick="function_removeimg('<?php echo $images['tourimg_id']; ?>','<?php echo $images['tourimg_photo'] ?>','<?php echo $tid ; ?>')"><i class="fa fa-times" aria-hidden="true"></i></a>
            </div>

            <?php
          }  
        }
        
         ?>
          
        </div>
       
  </div>

<div class="col-sm-12"><br><br></div>

   <div class="col-sm-12">
       <div class="form-group">
           <label class="col-md-12">Description :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
             <textarea class="ckeditor form-control" name="content" id="content" tabindex="2"> 
              <?php echo $data['tours_description']; ?>
             </textarea>
            </div>
        </div>
  </div>

   <div class="col-sm-12"><br><br></div>

<div class="col-sm-6">
       <div class="form-group">
         
           <label class="col-md-12">Tour price :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
              <input name="price" type="text" id="price" tabindex="2" class="form-control" data-required="true" value="<?php echo $data['tours_price'] ; ?>" />
            </div>
        </div>
  </div>

  <div class="col-sm-6">
       <div class="form-group">
         
           <label class="col-md-12">Tour :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
              <?php 

               ?>
              <select  name="tour_dom_int" id="tour_dom_int" tabindex="2" class="form-control" data-required="true">
               <option value="DOMESTIC" <?php if($data['tours_domestic_international'] == 'DOMESTIC' ) { echo 'selected'; } ?>>DOMESTIC TOURS</option>
               <option value="INTERNATIONAL"  <?php if($data['tours_domestic_international'] == 'INTERNATIONAL' ) { echo 'selected'; } ?>>INTERNATIONAL TOURS</option>
              </select>
            </div>
          
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

<div class="col-sm-4">
       <div class="form-group">
          
           <label class="col-md-12">Tour Destination :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
           
              <select name="countrybox" id="countrybox" tabindex="2" class="form-control" data-required="true" >
                <?php 
                include("conn.inc.php");
                $getcountry = mysql_query("SELECT * from country");
                while($countrys = mysql_fetch_array($getcountry))
                {
                  ?>
                  <option value="<?php echo $countrys['country_name']; ?>" <?php if($countrys['country_name'] == $data['tours_destination']){ echo 'selected'; } ?>><?php echo $countrys['country_name'] ; ?></option>
                  <?php
                }

                 ?>
              </select>
              
            </div>
          
        </div>
  </div>

  <div class="col-sm-4">
       <div class="form-group">
         
            <label class="col-md-12">Categorys :<strong style="color:Red">*</strong>&nbsp;&nbsp;&nbsp;<span id="show_cat_info">Press CTRL for Multiple !</span></label>
            <div class="col-md-12">
              <select  name="category[]" id="category" tabindex="2" class="form-control" data-required="true" multiple>
                 <?php 

                include("conn.inc.php");
                $mycat = explode(',', $data['tours_category']);
                $getcategory = mysql_query("SELECT * from tours_categorys");
                while($category = mysql_fetch_array($getcategory))
                {
                   $s = '';
                   foreach ($mycat as $cate) {
                    if($category['cat_name'] == $cate)
                    {
                      $s = 'selected';
                    }
                    
                   }
                  ?>
                  <option value="<?php echo $category['cat_name'] ; ?>" <?php echo $s; ?>>
                    <?php echo $category['cat_name'] ; ?>
                      
                    </option>
                  <?php
                }

                 ?>
              </select>
            </div>
      
        </div>
  </div>

<div class="col-sm-4">
       <div class="form-group">
              <label class="col-md-12">Tags :<strong style="color:Red">*</strong> &nbsp;&nbsp;&nbsp;<span id="show_tag_info">Press CTRL for Multiple !</span></label>
            <div class="col-md-12">
              <select  name="tag[]" id="tag" tabindex="2" class="form-control" data-required="true" multiple>
                  <?php 
                include("conn.inc.php");
                $mytag = explode(',', $data['tours_tag']);
               
                $gettag = mysql_query("SELECT * from tours_tags");
                $s = '';
                while($tag = mysql_fetch_array($gettag))
                {
                   $s = '';
                   foreach ($mytag as $tagg) {
                    if($tag['Tours_tag_name'] == $tagg)
                    {
                      $s = 'selected';
                    }
                    
                   }
                   ?>
                   <option value="<?php echo $tag['Tours_tag_name']; ?>" <?php echo $s; ?>>
                    <?php echo $tag['Tours_tag_name']; ?>
                  </option>
                   <?php
                }

                 ?>
              </select>
            </div>
          
        </div>
  </div>

<div class="col-sm-12"><br><br></div>

   <div class="col-sm-12">
       <div class="form-group">
           <label class="col-md-12">Inclusion :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
             <textarea class="ckeditor form-control" name="inclusion" id="inclusion" tabindex="2"> 
              <?php echo $data['tours_inclusion'] ; ?>
             </textarea>
            </div>
        </div>
  </div>

<div class="col-sm-12"><br><br></div>

   <div class="col-sm-12">
       <div class="form-group">
           <label class="col-md-12">Terms and Condition :<strong style="color:Red">*</strong></label>
            <div class="col-md-12">
             <textarea class="ckeditor form-control" name="terms" id="terms" tabindex="2"> 
              <?php echo $data['tours_termscondition'] ; ?>
             </textarea>
            </div>
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

   <div class="col-sm-12" style="margin-left: 60px;">
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
               Tours&nbsp;&nbsp;
                
               
                <a href="ToursandTravels.php?create=y"><i class="fa fa-plus-square"></i></a>
             
                
                
              
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
                    <th>Tour Name</th>
                    <th>Day Night</th>
                    <th>Tour</th>
                    <th>Destination</th>
                    <th style="text-align: center;">Tour Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                       
                    </tr>
                   
                  </thead>
                  <tbody>
                     <?php
         include("conn.inc.php");
               $get = mysql_query("SELECT * from Tours");
               $i = 1;
               while($row = mysql_fetch_array($get))
               {

                  // Date Format
                  /*$date = date_create($row['blog_date']);
                  $dates_format = DATE_FORMAT($date, 'F d, Y');
*/                ?>
                    <tr>
                      
                    <td style="text-align: center; vertical-align: middle;"><?php echo $i; ?></td>

                     <td style="vertical-align: middle; font-weight: bold;">
                      <?php echo $row['tours_title']; ?>
                     </td>
                     <td style="vertical-align: middle;">
                      <?php echo $row['tours_day'].'D /'.$row['tours_night'].'N'; ?>
                     </td>
                     <td style="vertical-align: middle;">
                      <?php echo $row['tours_domestic_international'].' TOUR'; ?>
                     </td>
                      <td style="vertical-align: middle;">
                      <?php echo $row['tours_destination']; ?>
                     </td>
                    <td style="text-align: center;">
                       <?php 
                      // get 1 image of table
                      $tid = $row['tours_id'] ;
                      $getimg = mysql_query("SELECT * from tours_images where tourimg_tours_id = '$tid'") ;
                      $img  = mysql_fetch_assoc($getimg) ;

                       ?>
                      <div class="thumbnail-view">
                      <a class="thumbnail-view-hover ui-lightbox" href="photos/<?php echo $img['tourimg_photo']; ?>">
                      </a>
                     
                       <img src="photos/<?php echo $img['tourimg_photo']; ?>" width="60" alt="Image" style="width: 170px; height: 70px;">
                    </div>
                    </td>
                    
                    <td><a href="ToursandTravels.php?update=y&id=<?php echo $row['tours_id']; ?>"><button class="btn btn-secondary" type="button">Update</button></a></td>
                        
                      <td>
                        <a href="ToursandTravels.php?remove=y&id=<?php echo $row['tours_id']; ?>" onclick="return confirm('Are you sure you have to Remove this Tour  ??')"><button class="btn btn-primary">Delete</button></a>
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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<style type="text/css">
  #show_cat_info{
    display: none;
    color: green;
  }

   #show_tag_info{
    display: none;
    color: green;
  }

</style>
<script type="text/javascript">

$(document).ready(function(){

  // Category
  $("#category").focus(function(){
    $("#show_cat_info").css("display", "inline").Show(200);
  });
   $("#category").focusout(function(){
    $("#show_cat_info").css("display", "inline").hide();
  });

   // Tag
  $("#tag").focus(function(){
      $("#show_tag_info").css("display", "inline").Show(200);
  });

  $("#tag").focusout(function(){
      $("#show_tag_info").css("display", "inline").hide();
  });


}); 

function function_removeimg(imgid,imgname,tid)
{
   $.ajax({
      url: "ToursandTravels.php?remove_image=y&imgageid="+imgid+"&imagename="+imgname+"&tourid="+tid,
      cache: false,
      success: function(html){
        $("#showajaximage").html("");
      $("#showajaximage").append(html);
        
    }
  });
}

</script>
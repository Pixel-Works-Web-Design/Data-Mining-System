<?php include_once("header.inc.php");?>

 <?php
 // Insert Record
  if(isset($_REQUEST['upload_content']))
  {
      
      include("conn.inc.php");
      $text = addslashes($_REQUEST['textcontent']);

      $check = mysql_query("INSERT into Tours_tags(Tours_tag_name) values('$text')");

      if($check){
           echo "<script type='text/javascript'>window.location='Tour_Tags.php'</script>";
      }
      else{
       echo "<script type='text/javascript'>alert('Somthing have Problem');</script>";
      echo "<script type='text/javascript'>window.location='Tour_Tags.php'</script>";
    }

    }
        
     
      if(isset($_REQUEST['update_content']))
      {
      
      include("conn.inc.php");

      $id = $_REQUEST['Nid'];
      $text = addslashes($_REQUEST['textcontent']);
      $check = mysql_query("UPDATE Tours_tags set  Tours_tag_name = '$text' where Tours_tag_id = '$id'");
       

          if($check)
          {
            echo "<script type='text/javascript'>window.location='Tour_Tags.php'</script>";
          }
        else{
          echo "<script type='text/javascript'>alert('Somthing have Problem');</script>";
          echo "<script type='text/javascript'>window.location='Tour_Tags.php'</script>";
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

     
<!-- Admin View -->
        
<!--<div class="container">

  <div class="content">

    <div class="content-container">-->
    
    <div class="content-header">
        <h2 class="content-header-title">Tour Tags</h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="javascript:;">Tour Tags</a></li>
          
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
     $check = mysql_query("DELETE  from  Tours_tags where Tours_tag_id = '$Nid'");

    if($check)
    {
       echo "<script type='text/javascript'>window.location='Tour_Tags.php'</script>";
    }
    else{
       echo "<script type='text/javascript'>alert('Somthing have Problem');</script>";
      echo "<script type='text/javascript'>window.location='Tour_Tags.php'</script>";
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
                Create Tour Tag
             </h3>
        </div>
        <div class="portlet-content">
         <form method="post" id="validate-basic" action="Tour_Tags.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 

           <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>

           <div class="col-sm-2">
           </div>

           <div class="col-sm-5">
              <div class="form-group">
                <br>
             <label class="col-md-12">
              <h3>Tour Tag :<strong style="color:Red">*</strong></h3>
              </label>

               <div class="col-md-12">
                <br>
                 <input type="text"  name="textcontent" id="textcontent"  tabindex="2"  class="form-control" data-required="true" style="width: 500px; height: 60px;" />
               </div>

               <div class="col-md-12">
                <br><br>
                <div class="col-md-1"></div>
                 <div class="col-md-3">
                <button type="submit" class="btn btn-secondary btn-lg" name="upload_content" id="upload_content" tabindex="2">Save</button>
                  </div>     

              </div>

              <div class="col-md-12">
                <br><br>
              </div>
             

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
     ?>
        <!-- createte Advertisment -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Update Tour Tag
             </h3>
        </div>
        <div class="portlet-content">
         <form method="post" id="validate-basic" action="Tour_Tags.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 

           <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>

           <div class="col-sm-2">
           </div>

           <div class="col-sm-5">
              <div class="form-group">
                <br>
             <label class="col-md-12">
              <h3>Update Tag :<strong style="color:Red">*</strong></h3>
              </label>

              <?php
               include("conn.inc.php");
                $Nid = $_REQUEST['id'];
                $get = mysql_query("SELECT *from  Tours_tags where Tours_tag_id = '$Nid'");
                $getdata = mysql_fetch_assoc($get);
              ?>
               <div class="col-md-12">
                <br>
        <input type="hidden" name="Nid" id="Nid" value="<?php echo $getdata['Tours_tag_id']; ?>">
                 <input type="text"  name="textcontent" id="textcontent" tabindex="2"  class="form-control" data-required="true" value="<?php echo $getdata['Tours_tag_name']; ?>" style="width: 500px; height: 60px;"/>
                  
               </div>


               <div class="col-md-12">
                <br><br>
                <div class="col-md-3"></div>
                 <div class="col-md-3">
                <button type="submit" class="btn btn-secondary btn-lg" name="update_content" id="update_content" tabindex="2" >Update</button>
                  </div>     

              </div>

              <div class="col-md-12">
                <br><br>
              </div>
             

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
               Tour Tags&nbsp;&nbsp;
                
               
                 <a href="Tour_Tags.php?create=y"><i class="fa fa-plus-square"></i></a>
               
               
             
              
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
                    <th style="padding-left: 15px;">Tags</th>
                    <th>Update</th>
                    <th>Delete</th>
                      
                    </tr>
                   
                  </thead>
                  <tbody>
                     <?php
         include("conn.inc.php");
               $get = mysql_query("SELECT * from Tours_tags");
               $i = 1;
               while($row = mysql_fetch_array($get))
               {
                ?>
			              <tr>
                      
                    <td style="text-align: center; width: 50px;"><?php echo $i; ?></td>
                    <td>
                     <p style="margin-left: 10px; font-weight: bold; text-transform: capitalize;"><?php echo $row['Tours_tag_name']; ?></p>
                    </td>
                   
                     <td style="width: 150px;"><a href="Tour_Tags.php?update=y&id=<?php echo $row['Tours_tag_id']; ?>"><button class="btn btn-secondary" type="button">Update</button></a></td>
                        
                      <td style="width: 150px;">
                        <a href="Tour_Tags.php?remove=y&id=<?php echo $row['Tours_tag_id']; ?>" onclick="return confirm('Are you sure you have to Remove this  Tour Tag ?')"><button class="btn btn-primary">Delete</button></a>
                        
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
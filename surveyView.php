<?php include_once("header.inc.php");?>

 <?php

  if(isset($_REQUEST['edit']))
  {
      
      include("conn.inc.php");
      $id = $_REQUEST['id'];
      $title = ucfirst(addslashes($_REQUEST['title']));
    
      mysql_query("UPDATE survey set title = '$title' where id = '$id'");
     
            
     echo "<script type='text/javascript'>window.location='surveyView.php'</script>";

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
        <h2 class="content-header-title">Survey Form Questions</h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="surveyView.php">Survey Form</a></li>
          
        </ol>
      </div>
 
    <div class="row">
        <div class="col-md-12">
 
          <?php
 
  if(isset($_REQUEST['remove']))
  {
    //   include("conn.inc.php");
    //  $id = $_REQUEST['id'];
    //  $check = mysql_query("DELETE  from subjects where id = '$id'");

   
       
    //    echo "<script type='text/javascript'>window.location='subjects.php'</script>";
    }
    else if(isset($_REQUEST['create']))
  {
    ?>
        <!-- Create subjects -->
    <?php
  }
  else if(isset($_REQUEST['update']))
  {
      include("conn.inc.php");
      $id = $_REQUEST['id'];
      $get = mysql_query("SELECT * from survey where id = '$id'");
      $data = mysql_fetch_assoc($get);
     ?>
        <!-- Create subjects -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Update Survey Form Question :
             </h3>
        </div>
        <div class="portlet-content">
         <form method="post" id="validate-basic" action="surveyView.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 
      
              <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
    
           <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

     
<div class="col-sm-12"><br><br></div>

<div class="col-sm-12">
           <label class="col-md-3 text-center">Question :<strong style="color:Red">*</strong></label>
            <div class="form-group col-md-7">
              <input
               name="title"
                type="text"
                 id="title"
                  tabindex="2" class="form-control" data-required="true" data-required-message="Please Enter Question"
                  value="<?php echo $data['title'] ?>"/>
            </div>
  </div>
  <div class="col-sm-12"><br><br></div>

  <div class="col-sm-1"></div>
   <div class="col-sm-8">
     <button type="submit" tabindex="7" class="btn btn-info btn-lg" name="edit" id="edit">Save</button>
   </div>
 
          </form>
            </div>
            </div>
            
             <!-- end of button -->
         <!-- End of Create subjects -->   
             
    <?php
  }
  else{

// Show Data

          ?>
       <div class="portlet">
                 <div class="portlet-header">

              <h3>
                <i class="fa fa-table"></i>
                Survey&nbsp;&nbsp;
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
                    <th style="padding-left:18px;">Suvey Question</th>
                    <th style="width:230px;">Update</th>
                       
                    </tr>
                   
                  </thead>
                  <tbody>
                     <?php
         include("conn.inc.php");
               $get = mysql_query("SELECT *from survey");
               $i = 1;
               while($row = mysql_fetch_array($get))
               {
                ?>
                    <tr>
                      
                    <td style="text-align: center; vertical-align: middle;"><?php echo $i; ?></td>

                     <td style="vertical-align: middle; padding-left:20px;">
                      <?php echo $row['title']; ?>
                     </td>
                   
                    <td><a href="surveyView.php?update=y&id=<?php echo $row['id']; ?>"><button class="btn btn-secondary" type="button">Update</button></a></td>
                   
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
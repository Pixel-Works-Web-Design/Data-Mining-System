<?php include_once("header.inc.php");?>

 <?php
 // Insert Record
  if(isset($_REQUEST['save']))
  {
      
       include("conn.inc.php");

        $subject = ucfirst(addslashes($_REQUEST['subject']));

        mysql_query("INSERT into subjects(subject) values('$subject')");
    
    echo "<script type='text/javascript'>window.location='subjects.php'</script>";

  }
     
  if(isset($_REQUEST['edit']))
  {
      
      include("conn.inc.php");
      $id = $_REQUEST['id'];
      $subject = ucfirst(addslashes($_REQUEST['subject']));
    
      mysql_query("UPDATE subjects set subject = '$subject' where id = '$id'");
     
            
     echo "<script type='text/javascript'>window.location='subjects.php'</script>";

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
        <h2 class="content-header-title">Subjects</h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="subjects.php">Subjects</a></li>
          
        </ol>
      </div>
 
    <div class="row">
        <div class="col-md-12">
 
          <?php
 
  if(isset($_REQUEST['remove']))
  {
      include("conn.inc.php");
     $id = $_REQUEST['id'];
     $check = mysql_query("DELETE  from subjects where id = '$id'");

   
       
       echo "<script type='text/javascript'>window.location='subjects.php'</script>";
    }
    else if(isset($_REQUEST['create']))
  {
    ?>
        <!-- Create subjects -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Create Subject
             </h3>
        </div>
        <div class="portlet-content">
          <form method="post" id="validate-basic" action="subjects.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 
      
              <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
    
          
<div class="col-sm-12"><br><br></div>

<div class="col-sm-12">
           <label class="col-md-3 text-center">Subject :<strong style="color:Red">*</strong></label>
            <div class="form-group col-md-7">
              <input name="subject" type="text" id="subject" tabindex="2" class="form-control" data-required="true" data-required-message="Please Enter Subject" />
            </div>
  </div>
<div class="col-sm-12"><br><br></div>

  <div class="col-sm-12"><br></div>

  <div class="col-sm-1"></div>
   <div class="col-sm-7">
     <button type="submit" class="btn btn-secondary btn-lg" name="save" id="save" tabindex="2">Save</button>
   </div>


          </form>
            </div>
</div>

             <!-- end of button -->
         <!-- End of Create subjects -->   
             
    <?php
  }
  else if(isset($_REQUEST['update']))
  {
      include("conn.inc.php");
      $id = $_REQUEST['id'];
      $get = mysql_query("SELECT * from subjects where id = '$id'");
      $data = mysql_fetch_assoc($get);
     ?>
        <!-- Create subjects -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Update Subject :
             </h3>
        </div>
        <div class="portlet-content">
         <form method="post" id="validate-basic" action="subjects.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 
      
              <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
    
           <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

     
<div class="col-sm-12"><br><br></div>

<div class="col-sm-12">
           <label class="col-md-3 text-center">Subject :<strong style="color:Red">*</strong></label>
            <div class="form-group col-md-7">
              <input
               name="subject"
                type="text"
                 id="subject"
                  tabindex="2" class="form-control" data-required="true" data-required-message="Please Enter Subject"
                  value="<?php echo $data['subject'] ?>"/>
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
               Subjects&nbsp;&nbsp;
                
               
                <a href="subjects.php?create=y"><i class="fa fa-plus-square"></i></a>        
                
              
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
                    <th style="text-align: center;">Subject</th>
                    <th style="width:230px;">Update</th>
                    <th style="width:230px;">Delete</th>
                       
                    </tr>
                   
                  </thead>
                  <tbody>
                     <?php
         include("conn.inc.php");
               $get = mysql_query("SELECT *from subjects");
               $i = 1;
               while($row = mysql_fetch_array($get))
               {
                ?>
                    <tr>
                      
                    <td style="text-align: center; vertical-align: middle;"><?php echo $i; ?></td>

                     <td style="text-align: center; vertical-align: middle;">
                      <?php echo $row['subject']; ?>
                     </td>
                   
                    <td><a href="subjects.php?update=y&id=<?php echo $row['id']; ?>"><button class="btn btn-secondary" type="button">Update</button></a></td>
                        
                      <td>
                        <a href="subjects.php?remove=y&id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you have to Remove this Subject  ??')"><button class="btn btn-primary">Delete</button></a>
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
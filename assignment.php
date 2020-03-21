<?php include_once("header.inc.php");?>

 <?php
 // Insert Record
  if(isset($_REQUEST['validate']))
  {
      
       include("conn.inc.php");

        $name = ucfirst(addslashes($_REQUEST['name']));

        if($_SESSION['type'] === "FACULTY"){
          $subject_id = $_SESSION['subject_id'];
        }
        else{
          $subject_id = addslashes($_REQUEST['subject_id']);
        }

        mysql_query("INSERT into assignment values(
          NULL,'$subject_id', '$name',NULL)");
        
        $last_id = mysql_insert_id();

        $pname = addslashes(str_replace('%','',$_FILES['file1']['name']));
      $photoname = "";

      if(!empty($_FILES['file1']['name']))
      {
         
             $filename1=(explode(".",$pname));
          if($filename1[1]=="pdf" || $filename1[1]=="PDF")
            {
           
            $photoname = date("dmYs").$pname; 
             move_uploaded_file($_FILES['file1']['tmp_name'],"photos/".$photoname); 
             mysql_query("UPDATE assignment set file = '$photoname'  where id  = '$last_id'");
            
            }
            else{
             echo "<script type='text/javascript'>alert('Please Enter only PDF');</script>";
             
            }
           
      }
  
    echo "<script type='text/javascript'>window.location='assignment.php'</script>";

  }
     
  if(isset($_REQUEST['editData']))
  {
      
      include("conn.inc.php");
      $name = ucfirst(addslashes($_REQUEST['name']));
      $id = $_REQUEST['ids'];

      if($_SESSION['type'] === "FACULTY"){
        $subject_id = $_SESSION['subject_id'];
      }
      else{
        $subject_id = addslashes($_REQUEST['subject_id']);
      }
      mysql_query("UPDATE assignment set name = '$name', subject_id = '$subject_id' where id = '$id'");
     
      $photo1 = addslashes(str_replace('%','',$_FILES['file1']['name']));
       $photonew="";

       $check = "";

      if(!empty($_FILES['file1']['name']))
      {

         $filename1=(explode(".",$photo1));
      
       
        if($filename1[1]=="pdf" || $filename1[1]=="PDF")
        {
            $photonew = date("dmYs").$photo1; 
            move_uploaded_file($_FILES['file1']['tmp_name'],"photos/".$photonew);

             mysql_query("UPDATE assignment set file = '$photonew' where id = '$id'");

        }
        else{
        echo "<script type='text/javascript'>alert('Please Enter only PDF');</script>";
        } 
         
      }
        
    //  echo "<script type='text/javascript'>window.location='assignment.php'</script>";

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
        <h2 class="content-header-title">Assignmets</h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="assignment.php">Assignmets</a></li>
          
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
     mysql_query("DELETE  from assignment where id = '$id'");

     echo "<script type='text/javascript'>window.location='assignment.php'</script>";
    echo "<script type='text/javascript'>window.location='assignment.php'</script>";
    
  } // End of Create
  else if(isset($_REQUEST['create']))
  {
    include "conn.inc.php";
    $get = mysql_query("SELECT *from subjects");
    ?>
        <!-- Create assignments -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Create Assignmet
             </h3>
        </div>
        <div class="portlet-content">
          <form method="post" id="validate-basic" action="assignment.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 
      
              <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
    
          
<div class="col-sm-12"><br><br></div>

<?php 
  if($_SESSION['type'] === 'MASTERADMIN'){
    ?>
  <div class="col-sm-12">
       <div class="form-group">
          <label class="col-md-3">Subject :<strong style="color:Red">*</strong></label>
            <div class="col-md-7">
            <select name="subject_id" tabindex="2" class="form-control" data-required="true" data-required-message="Please Select Subject" required>
                                            <option value="">Select Subject</option>
                                            <?php
while ($row = mysql_fetch_array($get)) {
        ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['subject'] ?>
                                            </option>
                                            <?php
}
    ?>
                                        </select>
            </div>
        </div>
  </div>


  <div class="col-sm-12"><br><br></div>
    
    <?php
  }
?>


<div class="col-sm-12">
       <div class="form-group">
           <label class="col-md-3">Assignment Name :<strong style="color:Red">*</strong></label>
            <div class="col-md-7">
              <input name="name" type="text" id="name" tabindex="2" class="form-control" data-required="true" data-required-message="Please Enter Assignment Name" required/>
            </div>
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

 <div class="col-sm-12">
       <div class="form-group">
         
           <label class="col-md-3">Upload Assignment :<strong style="color:Red">*</strong></label>
            <div class="col-md-7">
              <input name="file1" type="file" id="file1" tabindex="2" class="form-control" data-required="true"  data-required-message="Please Upload Assignment" required/> 
            </div>
            
            
        </div>
  </div>


  <div class="col-sm-12"><br><br></div>

   <div class="col-sm-12" style="margin-left: 20px;">
     <button type="submit" class="btn btn-secondary btn-lg" name="validate" id="validate" tabindex="2">Save</button>
   </div>


          </form>
            </div>
            </div>
            
             <!-- end of button -->
         <!-- End of Create assignments -->   
             
    <?php
  }
  else if(isset($_REQUEST['update']))
  {
      include("conn.inc.php");
      $id = $_REQUEST['id'];
      $get = mysql_query("SELECT * from assignment where id = '$id'");
      $data = mysql_fetch_assoc($get);
      $getSubjects = mysql_query("SELECT *from subjects");
     ?>
        <!-- Create assignments -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Update Assignmet
             </h3>
        </div>
        <div class="portlet-content">
        <form method="post" id="validate-basic" action="assignment.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data"> 
<input type="hidden" name="ids" id="ids" value="<?php echo $id; ?>">
              <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>
    
          
<div class="col-sm-12"><br><br></div>

<div class="col-sm-12"><br><br></div>


<?php 
  if($_SESSION['type'] === 'MASTERADMIN'){
    ?>
  <div class="col-sm-12">
       <div class="form-group">
          <label class="col-md-3">Subject :<strong style="color:Red">*</strong></label>
            <div class="col-md-7">
            <select name="subject_id" tabindex="2" class="form-control" data-required="true" data-required-message="Please Select Subject" required>
                                            <option value="">Select Subject</option>
                                            <?php
while ($row = mysql_fetch_array($getSubjects)) {
        ?>
                                            <option value="<?php echo $row['id'] ?>" <?php if ($row['id'] === $data['subject_id']) {
            echo 'selected="selected"';
        }
        ?>><?php echo $row['subject'] ?>
                                            </option>
                                            <?php
}
    ?>
                                        </select>
            </div>
        </div>
  </div>


  <div class="col-sm-12"><br><br></div>
    
    <?php
  }
?>


<div class="col-sm-12">
       <div class="form-group">
         
           <label class="col-md-3">Assignment Name :<strong style="color:Red">*</strong></label>
            <div class="col-md-7">
              <input name="name" type="text" id="name" tabindex="2" class="form-control" data-required="true" data-required-message="Please Enter Assignment Name"  value="<?php echo $data['name']; ?>"/>
            </div>
        </div>
  </div>

  <div class="col-sm-12"><br><br></div>

 <div class="col-sm-12">
       <div class="form-group">
         
           <label class="col-md-3">Upload Assignment :<strong style="color:Red">*</strong></label>
            <div class="col-md-7">
              <input name="file1" type="file" id="file1" tabindex="2" class="form-control"/> 
            </div>
            
            
        </div>
  </div>


  <div class="col-sm-12"><br><br></div>

   <div class="col-sm-12" style="margin-left: 20px;">
     <button type="submit" tabindex="2" class="btn btn-success btn-lg" name="editData" id="editData">Update</button>
   </div>


          </form>
            </div>
            </div>
            
             <!-- end of button -->
         <!-- End of Create assignments -->   
             
    <?php
  }
  else{

// Show Data



          ?>
         <div class="portlet">
                 <div class="portlet-header">

              <h3>
                <i class="fa fa-table"></i>
                Assignmets&nbsp;&nbsp;
                
               
                <a href="assignment.php?create=y"><i class="fa fa-plus-square"></i></a>
             
                
                
              
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
                    <th style="text-align:center;">No</th>
                    <th>Assignment</th>
                    <th>Subject</th>
                    <th>Update</th>
                    <th>Delete</th>
                       
                    </tr>
                   
                  </thead>
                  <tbody>
                     <?php
         include("conn.inc.php");

         if($_SESSION['type'] === "FACULTY"){
         $subject_id = $_SESSION['subject_id'];
          $get = mysql_query("SELECT *from assignment where subject_id='$subject_id'");
         }else{
          $get = mysql_query("SELECT *from assignment");
         }
               $i = 1;
               while($row = mysql_fetch_array($get))
               {
                $subId = $row['subject_id'];
                $getSubject = mysql_query("SELECT *from subjects where id='$subId'");
                $subject = mysql_fetch_assoc($getSubject);
                ?>
                    <tr>
                      
                    <td style="text-align: center; vertical-align: middle;"><?php echo $i; ?></td>

                     <td style="vertical-align: middle;">
                     <a class="" target="_blank" href="photos/<?php echo $row['file']; ?>">
                      <?php echo $row['name']; ?>
                      </a>
                     </td>
                  
                    <td style="vertical-align: middle;">
                      <?php echo  $subject['subject']; ?>
                     </td>

                    <td><a href="assignment.php?update=y&id=<?php echo $row['id'];  ?>"><button class="btn btn-secondary" type="button">Update</button></a></td>
                        
                      <td>
                        <a href="assignment.php?remove=y&id=<?php echo $row['id'];  ?>" onclick="return confirm('Are you sure you have to Remove this  Assignment  ??')"><button class="btn btn-primary">Delete</button></a>
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
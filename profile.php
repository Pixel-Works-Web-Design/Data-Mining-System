<?php include_once("header.inc.php");
   
   if(isset($_REQUEST['edit']))
  {
      
      include("conn.inc.php");

      $id = $_REQUEST['id'];
      $name = ucfirst(addslashes($_REQUEST['name']));
      $email = addslashes($_REQUEST['email']);
      $mobile = addslashes($_REQUEST['mobile']);
    
      if($_SESSION['type'] === "FACULTY"){
        $subject = addslashes($_REQUEST['subject']);
        mysql_query("UPDATE facultySubjects set subject_id = '$subject'
         where faculty_id = '$id'");
      }
      
      mysql_query("UPDATE admin_master set name = '$name' ,
      email = '$email',
      mobile = '$mobile'
       where id = '$id'");
   

     echo "<script type='text/javascript'>window.location='profile.php?s='</script>";

  }
?>

<div class="container">

    <div class="content">

        <div class="content-container">


            <div class="content-header">
                <h2 class="content-header-title">My Profile</h2>
                <ol class="breadcrumb">
                    <li><a href="dashboard.php">Home</a></li>
                    <li class="active"><a href="profile.php">My Profile</a></li>

                </ol>
            </div>

            <?php if(isset($_REQUEST['s'])) {?>
            <div class="alert alert-success">
                <a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
                <strong>Succesfully!</strong> updated your Profile.
            </div>

            <?php } else if(isset($_REQUEST['f'])) {?>

            <div class="alert alert-danger">
                <a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
                <strong>Error!</strong> something is weong.
            </div>
            <?php }?>

            <?php
     include("conn.inc.php");
     $id = $_SESSION['id'];
     $get = mysql_query("SELECT * from admin_master where id =".$id."");
     $data = mysql_fetch_assoc($get);

     $getSelectedSubject = mysql_query("SELECT * from facultysubjects where faculty_id	 = '$id'");
     $selected = mysql_fetch_assoc($getSelectedSubject);

     $getSubjects = mysql_query("SELECT *from subjects");
            ?>
            <form method="post" id="validate-basic" action="profile.php" class="form parsley-form"
                data-validate="parsley" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                <div class="col-md-12">
                    <div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are
                            compulsory fields)</strong></div>
                </div>


                <div class="col-sm-12"><br></div>

                <div class="col-sm-6">
                    <label class="col-md-12">Name :<strong style="color:Red">*</strong></label>
                    <div class="form-group col-md-12">
                        <input name="name" type="text" id="name" tabindex="2" class="form-control" data-required="true"
                            data-required-message="Please Enter Name" value="<?php echo $data['name'] ?>" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="col-md-12">Email :<strong style="color:Red">*</strong></label>
                    <div class="form-group col-md-12">
                        <input name="email" type="email" id="email" tabindex="2" class="form-control"
                            data-required="true" data-required-message="Please Enter Email"
                            value="<?php echo $data['email'] ?>" />
                    </div>
                </div>
                <div class="col-sm-12"><br></div>
                <div class="col-sm-6">
                    <label class="col-md-12">Mobile :<strong style="color:Red">*</strong></label>
                    <div class="form-group col-md-12">
                        <input name="mobile" type="text" id="mobile" tabindex="2" class="form-control"
                            data-required="true" data-type="number" data-required-message="Please Enter Mobile"
                            data-min="10" value="<?php echo $data['mobile'] ?>" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <?php
                    if($_SESSION['type'] === "FACULTY"){
                        ?>
 <label class="col-md-12">Subject :<strong style="color:Red">*</strong></label>
                    <div class="form-group col-md-12">
                        <select name="subject" tabindex="2" class="form-control" data-required="true"
                            data-required-message="Please Select Subject">
                            <option value="">Select Subject</option>
                            <?php
      while($row = mysql_fetch_array($getSubjects))
      {
        ?>
                            <option value="<?php echo $row['id'] ?>"
                                <?php if($row['id'] === $selected['subject_id']) echo 'selected="selected"' ?>>
                                <?php echo $row['subject'] ?>
                            </option>
                            <?php
      }
    ?>
                        </select>
                    </div>
                        <?php
                    }
                    ?>
                </div>
                   
                <div class="col-sm-12"><br></div>


                <div class="col-sm-12" style="padding-left:30px;">
                    <br>
                    <button type="submit" class="btn btn-secondary btn-lg" name="edit" id="edit"
                        tabindex="2">Update</button>
                </div>
            </form>

        </div>
    </div>
</div>




<?php  include_once("footer.inc.php");?>

<?php  include_once("closebody.php");?>
<?php include_once("header.inc.php");
   
   if(isset($_REQUEST['edit']))
   {
       
       include("conn.inc.php");
 
       $id = $_REQUEST['id'];
       $fname = ucfirst(addslashes($_REQUEST['fname']));
     $lname = ucfirst(addslashes($_REQUEST['lname']));
     $email = addslashes($_REQUEST['email']);
     $mobile = addslashes($_REQUEST['mobile']);
     $class = addslashes($_REQUEST['class']);
     $gender = addslashes($_REQUEST['gender']);
 
 mysql_query("UPDATE students set fname = '$fname' ,lname = '$lname',
        email = '$email',
        mobile = '$mobile',
        class = '$class',
        gender = '$gender'
         where id = '$id'");
      
      $_SESSION['name'] = $fname . $lname;
      echo "<script type='text/javascript'>window.location='student_profile?s=.php'</script>";
 
   }
  ?>

<div class="container">

    <div class="content">

        <div class="content-container">


            <div class="content-header">
                <h2 class="content-header-title">My Profile</h2>
                <ol class="breadcrumb">
                    <li><a href="dashboard.php">Home</a></li>
                    <li class="active"><a href="student_profile.php">My Profile</a></li>

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
     $get = mysql_query("SELECT * from students where id = '$id'");
      $data = mysql_fetch_assoc($get);

   
            ?>
           <form method="post" id="validate-basic" action="student_profile.php" class="form parsley-form"
                                data-validate="parsley" enctype="multipart/form-data">

                                <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                                <div class="col-md-12">
                                    <div class="alert alert-danger"><strong>(Note:All marked(<strong
                                                style="color:Red">*</strong>) are compulsory fields)</strong></div>
                                </div>


                                <div class="col-sm-12"><br></div>

                                <div class="col-sm-6">
                                    <label class="col-md-12">First Name :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="fname" type="text" id="fname" tabindex="2" class="form-control"
                                            data-required="true" data-required-message="Please Enter Name" 
                                            value="<?php echo $data['fname']; ?>"
                                            />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-md-12">Last Name :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="lname" type="text" id="lname" tabindex="2" class="form-control"
                                            data-required="true" data-required-message="Please Enter Name"
                                            value="<?php echo $data['lname']; ?>"
                                             />
                                    </div>
                                </div>
                                <div class="col-sm-12"><br></div>
                                <div class="col-sm-6">
                                    <label class="col-md-12">Email :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="email" type="email" id="email" tabindex="2" class="form-control"
                                            data-required="true" data-required-message="Please Enter Email"
                                            value="<?php echo $data['email']; ?>"
                                             />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-md-12">Mobile :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="mobile" type="text" id="mobile" tabindex="2" class="form-control"
                                            data-required="true" data-type="number"
                                            data-required-message="Please Enter Mobile" data-min="10" 
                                            value="<?php echo $data['mobile']; ?>"
                                            />
                                    </div>
                                </div>
                                <div class="col-sm-12"><br></div>

                                <div class="col-sm-6">
                                    <label class="col-md-12">Class :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="class" type="text" id="class" tabindex="2" class="form-control"
                                            data-required="true" data-required-message="Please Enter Class"
                                            value="<?php echo $data['class']; ?>"
                                             />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label class="col-sm-3">Gender :<strong style="color:Red">*</strong></label>
                                    <div class="col-sm-12">
                                    
                                        <div class="col-sm-2">
                                            <label>
                                                <input type="radio" name="gender" class="" data-required="true"
                                                    value="MALE" tabindex="2" 
                                                    <?php
                                                    if($data['gender'] === "MALE") echo "checked"
                                                      ?>
                                                    >

                                                <i class="fa fa-male" aria-hidden="true"
                                                    style="font-size:25px; cursor:pointer"></i>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>
                                                <input type="radio" name="gender" class="" data-required="true"
                                                    value="FEMALE" tabindex="2"
                                                    <?php
                                                    if($data['gender'] === "FEMALE") echo "checked"
                                                      ?>
                                                    >
                                                <i class="fa fa-female" aria-hidden="true"
                                                    style="font-size:25px; cursor:pointer"></i>
                                            </label>
                                        </div>
                                    </div>

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
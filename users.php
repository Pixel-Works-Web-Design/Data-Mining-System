<?php include_once("header.inc.php");?>

<?php
include "conn.inc.php";
include "helper.php";
 // Insert Record
  if(isset($_REQUEST['save']))
  {
        $name = ucfirst(addslashes($_REQUEST['name']));
        $email = addslashes($_REQUEST['email']);
        $mobile = addslashes($_REQUEST['mobile']);
        $password = addslashes($_REQUEST['password']);
        $passwordMD = md5($_REQUEST['password']);

        if (checkAdminEmail($email)) {
            echo "<script type='text/javascript'>alert('Email ID Already In Use.')</script>";
        } else {
            mysql_query("INSERT into admin_master values(NULL,'$name','$email','$mobile','$passwordMD','MASTERADMIN','$password')");
        }
      
      echo "<script type='text/javascript'>window.location='users.php'</script>";

  }
     
  if(isset($_REQUEST['edit']))
  {
      $id = $_REQUEST['id'];
      $name = ucfirst(addslashes($_REQUEST['name']));
      $email = addslashes($_REQUEST['email']);
      $mobile = addslashes($_REQUEST['mobile']);
   
      if (checkAdminEmail($email,$id)) {
        echo "<script type='text/javascript'>alert('Email ID Already In Use.')</script>";
    } else {

        mysql_query("UPDATE admin_master set name = '$name' ,
        email = '$email',
        mobile = '$mobile'
         where id = '$id'"); 
    }
     echo "<script type='text/javascript'>window.location='users.php'</script>";

  }
  // End of Insert Record  
  ?>


<style type="text/css">
.form-group .icheckbox_minimal-blue,
.form-group .iradio_minimal-blue {
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
                <h2 class="content-header-title">Users</h2>
                <ol class="breadcrumb">
                    <li><a href="dashboard.php">Home</a></li>
                    <li class="active"><a href="users.php">Users</a></li>

                </ol>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <?php
 
  if(isset($_REQUEST['remove']))
  {
      include("conn.inc.php");
     $id = $_REQUEST['id'];
     $check = mysql_query("DELETE  from admin_master where id = '$id'");
       
       echo "<script type='text/javascript'>window.location='users.php'</script>";
    }
    else if(isset($_REQUEST['create']))
  {
    include("conn.inc.php");
    ?>
                    <!-- Create subjects -->
                    <div class="portlet">
                        <div class="portlet-header">
                            <h3>
                                <i class="fa fa-tasks"></i>
                                Create User
                            </h3>
                        </div>
                        <div class="portlet-content">
                            <form method="post" id="validate-basic" action="users.php" class="form parsley-form"
                                data-validate="parsley" enctype="multipart/form-data" onsubmit="return mobilefunction()">

                                <div class="col-md-12">
                                    <div class="alert alert-danger"><strong>(Note:All marked(<strong
                                                style="color:Red">*</strong>) are compulsory fields)</strong></div>
                                </div>


                                <div class="col-sm-12"><br></div>

                                <div class="col-sm-6">
                                    <label class="col-md-12">Name :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="name" type="text" id="name" tabindex="2" class="form-control"
                                            data-required="true" data-required-message="Please Enter Name" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-md-12">Email :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="email" type="email" id="email" tabindex="2" class="form-control"
                                            data-required="true" data-required-message="Please Enter Email" />
                                    </div>
                                </div>
                                <div class="col-sm-12"><br></div>
                                <div class="col-sm-6">
                                    <label class="col-md-12">Mobile :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="mobile" type="text" id="mobile" tabindex="2" class="form-control"
                                            data-required="true" data-type="number"
                                            data-required-message="Please Enter Mobile" data-min="10" />
                                            <span id="mobilemessage"></span>
                                    </div>
                                </div>
                            
                        
                                <div class="col-sm-6">
                                    <label class="col-md-12">Password :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="password" type="password" id="password" tabindex="2"
                                            class="form-control" data-required="true"
                                            data-required-message="Please Enter Password" />
                                    </div>
                                </div>
                                <div class="col-sm-12"><br></div>
                                <div class="col-sm-6">
                                    <label class="col-md-12">Confirm Passowrd :<strong
                                            style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="cPassword" type="password" id="cPassword" tabindex="2"
                                            class="form-control" data-required="true"
                                            data-required-message="Please Enter Password" data-equalto="#password"
                                            data-error-message="both password & confirm password are not same" />
                                    </div>
                                </div>
                                <div class="col-sm-12" style="padding-left:30px;">
                                    <br>
                                    <button type="submit" class="btn btn-secondary btn-lg" name="save" id="save"
                                        tabindex="2">Save</button>
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
      $get = mysql_query("SELECT * from admin_master where id = '$id'");
      $data = mysql_fetch_assoc($get);

      $getSelectedSubject = mysql_query("SELECT * from facultysubjects where faculty_id	 = '$id'");
      $selected = mysql_fetch_assoc($getSelectedSubject);

      $getSubjects = mysql_query("SELECT *from subjects");
     ?>
                    <!-- Create subjects -->
                    <div class="portlet">
                        <div class="portlet-header">
                            <h3>
                                <i class="fa fa-tasks"></i>
                                Update User :
                            </h3>
                        </div>
                        <div class="portlet-content">
                            <form method="post" id="validate-basic" action="users.php" class="form parsley-form"
                                data-validate="parsley" enctype="multipart/form-data" onsubmit="return mobilefunction()">
                                <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                                <div class="col-md-12">
                                    <div class="alert alert-danger"><strong>(Note:All marked(<strong
                                                style="color:Red">*</strong>) are compulsory fields)</strong></div>
                                </div>


                                <div class="col-sm-12"><br></div>

                                <div class="col-sm-6">
                                    <label class="col-md-12">Name :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="name" type="text" id="name" tabindex="2" class="form-control"
                                            data-required="true" data-required-message="Please Enter Name"
                                            value="<?php echo $data['name'] ?>" />
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
                                            data-required="true" data-type="number"
                                            data-required-message="Please Enter Mobile" data-min="10"
                                            value="<?php echo $data['mobile'] ?>" />
                                            <span id="mobilemessage"></span>
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
                                Users&nbsp;&nbsp;


                                <a href="users.php?create=y"><i class="fa fa-plus-square"></i></a>


                            </h3>

                        </div> <!-- /.portlet-header -->
                        <div class="portlet-content">

                            <div class="table-responsive">

                                <table
                                    class="table table-striped table-bordered table-hover table-highlight table-checkable"
                                    data-provide="datatable" data-display-rows="10" data-info="true" data-search="true"
                                    data-length-change="true" data-paginate="true">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Name</th>
                                            <th style="text-align: center;">Email</th>
                                            <th style="text-align: center;">Mobile</th>
                                            <th style="width:140px;">Update</th>
                                            <th style="width:140px;">Delete</th>

                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php
         include("conn.inc.php");
               $get = mysql_query("SELECT *from admin_master where type='MASTERADMIN' AND id!=1 order by id desc");
               $i = 1;
               while($row = mysql_fetch_array($get))
               {
                ?>
                                        <tr>

                                            <td style="text-align: center; vertical-align: middle;"><?php echo $i; ?>
                                            </td>

                                            <td style="text-align: center; vertical-align: middle;font-weight:bold">
                                                <?php echo $row['name']; ?>
                                            </td>
                                            <td style="text-align: center; vertical-align: middle;">
                                                <?php echo $row['email']; ?>
                                            </td>
                                            <td style="text-align: center; vertical-align: middle;">
                                                <?php echo $row['mobile']; ?>
                                            </td>
                                       

                                            <td><a href="users.php?update=y&id=<?php echo $row['id']; ?>"><button
                                                        class="btn btn-secondary" type="button">Update</button></a></td>

                                            <td>
                                            <?php
                                            if($_SESSION['id'] != $row['id']){
                                                ?>
                                                 <a href="users.php?remove=y&id=<?php echo $row['id']; ?>"
                                                    onclick="return confirm('Are you sure you have to Remove this User  ??')"><button
                                                        class="btn btn-primary">Delete</button></a>
                                                <?php
                                            }
                                             ?>
                                               
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
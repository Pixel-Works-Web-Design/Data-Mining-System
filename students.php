<?php include_once "header.inc.php";?>

<?php
include "conn.inc.php";
include "helper.php";

// Insert Record
if (isset($_REQUEST['save'])) {

    $fname = ucfirst(addslashes($_REQUEST['fname']));
    $lname = ucfirst(addslashes($_REQUEST['lname']));
    $email = addslashes($_REQUEST['email']);
    $mobile = addslashes($_REQUEST['mobile']);
    $class = addslashes($_REQUEST['class']);
    $grno = addslashes($_REQUEST['grno']);
    $gender = addslashes($_REQUEST['gender']);
    $password = addslashes($_REQUEST['password']);
    $passwordMD = md5($_REQUEST['password']);

    if (checkSudentEmailAndGr($email, $grno)) {

        echo "<script type='text/javascript'>alert('Email ID OR GR.NO Already In Use.')</script>";
    } else {
        mysql_query("INSERT into students(
                        id,fname,lname,email,mobile,class,gr_no,gender,password,passwordVisibility
                    ) values(
                        NULL,
                        '$fname',
                        '$lname',
                        '$email',
                        '$mobile',
                        '$class',
                        '$grno',
                        '$gender',
                        '$passwordMD',
                        '$password')
                        ");
    }

    echo "<script type='text/javascript'>window.location='students.php'</script>";

}

if (isset($_REQUEST['edit'])) {

    $id = $_REQUEST['id'];
    $fname = ucfirst(addslashes($_REQUEST['fname']));
    $lname = ucfirst(addslashes($_REQUEST['lname']));
    $email = addslashes($_REQUEST['email']);
    $mobile = addslashes($_REQUEST['mobile']);
    $class = addslashes($_REQUEST['class']);
    $grno = addslashes($_REQUEST['grno']);
    $gender = addslashes($_REQUEST['gender']);

    if (checkSudentEmailAndGr($email, $grno, $id)) {

        echo "<script type='text/javascript'>alert('Email ID OR GR.NO Already In Use.')</script>";
    } else {
        mysql_query("UPDATE students set fname = '$fname' ,lname = '$lname',
       mobile = '$mobile',
       class = '$class',
       gr_no = '$grno',
       gender = '$gender'
        where id = '$id'");

    }

    echo "<script type='text/javascript'>window.location='students.php'</script>";

}
// End of Insert Record
?>
<link rel="stylesheet" href="css/checkbox.css">


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
                <h2 class="content-header-title">Students</h2>
                <ol class="breadcrumb">
                    <li><a href="dashboard.php">Home</a></li>
                    <li class="active"><a href="students.php">Students</a></li>

                </ol>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <?php

if (isset($_REQUEST['remove'])) {
    include "conn.inc.php";
    $id = $_REQUEST['id'];
    $check = mysql_query("DELETE  from students where id = '$id'");
    mysql_query("DELETE  from studentsurvey where student_id = '$id'");
    mysql_query("DELETE  from student_quiz where student_id = '$id'");

    echo "<script type='text/javascript'>window.location='students.php'</script>";
} else if (isset($_REQUEST['create'])) {
    include "conn.inc.php";
    ?>
                    <!-- Create subjects -->
                    <div class="portlet">
                        <div class="portlet-header">
                            <h3>
                                <i class="fa fa-tasks"></i>
                                Create Student
                            </h3>
                        </div>
                        <div class="portlet-content">
                            <form method="post" id="validate-basic" action="students.php" class="form parsley-form"
                                data-validate="parsley" enctype="multipart/form-data">

                                <div class="col-md-12">
                                    <div class="alert alert-danger"><strong>(Note:All marked(<strong
                                                style="color:Red">*</strong>) are compulsory fields)</strong></div>
                                </div>


                                <div class="col-sm-12"><br></div>

                                <div class="col-sm-6">
                                    <label class="col-md-12">First Name :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="fname" type="text" id="fname" tabindex="2" class="form-control"
                                            data-required="true" data-required-message="Please Enter First Name" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-md-12">Last Name :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="lname" type="text" id="lname" tabindex="2" class="form-control"
                                            data-required="true" data-required-message="Please Enter Last Name" />
                                    </div>
                                </div>
                                <div class="col-sm-12"><br></div>
                                <div class="col-sm-6">
                                    <label class="col-md-12">Email :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="email" type="email" id="email" tabindex="2" class="form-control"
                                            data-required="true" data-required-message="Please Enter Email" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-md-12">Mobile :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="mobile" type="text" id="mobile" tabindex="2" class="form-control"
                                            data-required="true" data-type="number"
                                            data-required-message="Please Enter Mobile" data-min="10" />
                                    </div>
                                </div>
                                <div class="col-sm-12"><br></div>

                                <div class="col-sm-6">
                                    <label class="col-md-12">GR.NO. :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="grno" type="text" id="grno" tabindex="2" class="form-control"
                                            data-required="true" data-required-message="Please Enter GR.NO" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-md-12">Class :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="class" type="text" id="class" tabindex="2" class="form-control"
                                            data-required="true" data-required-message="Please Enter Class" />
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <label class="col-sm-3">Gender :<strong style="color:Red">*</strong></label>
                                    <div class="col-sm-12">

                                        <div class="col-sm-2">
                                        <input type="radio" value="MALE" name="gender"
                                    id="male" tabindex="2" checked>
                                <label for="male">
                                <i class="fa fa-male" aria-hidden="true"
                                                    style="font-size:25px; cursor:pointer"></i>
                                </label>
                                         </div>
                                         

                            <div class="col-sm-2">
                            <input type="radio" value="FEMALE" name="gender"
                            id="female" tabindex="2">
                            <label for="female">
                            <i class="fa fa-female" aria-hidden="true"
                                        style="font-size:25px; cursor:pointer"></i>
                            </label>
                            </div>
</div>
                                </div>
                                <div class="col-sm-12"><br></div>

                                <div class="col-sm-6">
                                    <label class="col-md-12">Password :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="password" type="password" id="password" tabindex="2"
                                            class="form-control" data-required="true"
                                            data-required-message="Please Enter Password" />
                                    </div>
                                </div>
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
} else if (isset($_REQUEST['update'])) {
    include "conn.inc.php";
    $id = $_REQUEST['id'];
    $get = mysql_query("SELECT * from students where id = '$id'");
    $data = mysql_fetch_assoc($get);
    ?>
                    <!-- Create subjects -->
                    <div class="portlet">
                        <div class="portlet-header">
                            <h3>
                                <i class="fa fa-tasks"></i>
                                Update Student :
                            </h3>
                        </div>
                        <div class="portlet-content">
                            <form method="post" id="validate-basic" action="students.php" class="form parsley-form"
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
                                            data-required="true" data-required-message="Please Enter First Name"
                                            value="<?php echo $data['fname']; ?>"
                                            />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-md-12">Last Name :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="lname" type="text" id="lname" tabindex="2" class="form-control"
                                            data-required="true" data-required-message="Please Enter Last Name"
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
                                             disabled/>
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
                                    <label class="col-md-12">GR.NO. :<strong style="color:Red">*</strong></label>
                                    <div class="form-group col-md-12">
                                        <input name="grno" type="text" id="grno" tabindex="2" class="form-control"
                                            data-required="true" data-required-message="Please Enter GR.NO" value="<?php echo $data['gr_no']; ?>"/>
                                    </div>
                                </div>
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

                                    <div class="col-md-2">
                                <input type="radio" value="MALE" name="gender"
                                    id="male" tabindex="2"   <?php if ($data['gender'] === "MALE") {
        echo "checked";
    }
    ?>>
                                <label for="male">
                                <i class="fa fa-male" aria-hidden="true"
                                                    style="font-size:25px; cursor:pointer"></i>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <input type="radio" value="FEMALE" name="gender"
                                    id="female" tabindex="2"   <?php if ($data['gender'] === "FEMALE") {
        echo "checked";
    }
    ?>>
                                <label for="female">
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

                    <!-- end of button -->
                    <!-- End of Create subjects -->

                    <?php
} else {

// Show Data

    ?>
                    <div class="portlet">
                        <div class="portlet-header">

                            <h3>
                                <i class="fa fa-table"></i>
                                Students&nbsp;&nbsp;

                <?php
if ($_SESSION['type'] != "FACULTY") {
        ?>
                           <a href="students.php?create=y"><i class="fa fa-plus-square"></i></a>
                        <?php
}
    ?>

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
                                            <th style="text-align: center;">GR.NO</th>
                                            <th style="text-align: center;">Name</th>
                                            <th style="text-align: center;">Survey</th>
                                            <th style="text-align: center;">Quiz</th>
                                            <th style="text-align: center;">Email</th>
                                            <th style="text-align: center;">Mobile</th>
                                            <th style="text-align: center;">Class</th>
                                            <th style="text-align: center;">Gender</th>
                                            <th style="width:100px;">Update</th>
                                            <?php
if ($_SESSION['type'] != "FACULTY") {
        echo '<th style="width:100px;">Delete</th>';
    }
    ?>

                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php
include "conn.inc.php";
    $get = mysql_query("SELECT *from students  order by id desc");
    $i = 1;
    while ($row = mysql_fetch_array($get)) {
$id = $row['id'];
        ?>
                                        <tr>

                                            <td style="text-align: center; vertical-align: middle;"><?php echo $row['gr_no']; ?>
                                            </td>

                                            <td style="text-align: center; vertical-align: middle;font-weight:bold">
                                                <?php echo $row['fname'] . ' ' . $row['lname']; ?>
                                            </td>
                                            <td style="text-align: center; vertical-align: middle;font-weight:bold">
                                            <?php
        if ($row['isSurveyFill'] === 'YES') {
            echo "<a href='studentSurvey.php?id=$id'>Survey Detail</a>";
        } else {
            echo '<h1>-</h1>';
        }
        ?>

                                            </td>
                                            <td style="text-align: center; vertical-align: middle;font-weight:bold">
                                            <?php
$getQuiz = mysql_query("SELECT *from student_quiz where student_id = '$id'");
        if (mysql_num_rows($getQuiz)) {
            echo "<a href='studentQuizResult.php?studentId=$id'>Quiz Detail</a>";
        } else {
            echo '<h1>-</h1>';
        }
        ?>

                                            </td>
                                            <td style="text-align: center; vertical-align: middle;">
                                                <?php echo $row['email']; ?>
                                            </td>
                                            <td style="text-align: center; vertical-align: middle;">
                                                <?php echo $row['mobile']; ?>
                                            </td>

                                            <td style="text-align: center; vertical-align: middle;">
                                                <?php echo $row['class']; ?>
                                            </td>
                                            <td style="text-align: center; vertical-align: middle;" title="<?php echo $row['gender']; ?>">
                                                <?php
if ($row['gender'] == 'MALE') {
            echo '<i class="fa fa-male" aria-hidden="true" style="font-size:25px; cursor:pointer"></i>';
        } else {
            echo '<i class="fa fa-female" aria-hidden="true" style="font-size:25px; cursor:pointer"></i>';
        }
        ?>
                                            </td>

                                            <td><a href="students.php?update=y&id=<?php echo $row['id']; ?>"><button
                                                        class="btn btn-secondary" type="button">Update</button></a></td>

                                                        <?php
if ($_SESSION['type'] != "FACULTY") {
            ?>
     <td>
                                                <a href="students.php?remove=y&id=<?php echo $row['id']; ?>"
                                                    onclick="return confirm('Are you sure you have to Remove this Student  ??')"><button
                                                        class="btn btn-primary">Delete</button></a>
                                            </td>
                                                             <?php
}
        ?>

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
} // End of Show Data

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


<?php include_once "footer.inc.php";?>

<?php include_once "closebody.php";?>

<script src="js/plugins/magnific/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
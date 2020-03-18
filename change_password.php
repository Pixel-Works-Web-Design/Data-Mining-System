<?php include_once("header.inc.php");
   include("conn.inc.php");
   
   
   if(isset($_REQUEST["updatepassword"]))
   {
	 	
			$oLdPassword=md5($_REQUEST["txtoldpassword"]);

			$check_ifValid= mysql_query("SELECT * FROM admin_master WHERE id=".$_SESSION['id']." AND password='".$oLdPassword."'");
      
      $getUser = mysql_query("SELECT * from students WHERE id=".$_SESSION['id']." AND password='".$oLdPassword."'");

			if(mysql_num_rows($check_ifValid)==1)
			{
        mysql_query("UPDATE admin_master SET password='".md5($_REQUEST['txtnewpassword'])."' , passwordVisibility=".$_REQUEST["txtnewpassword"]." WHERE id=".$_SESSION["id"]."");
        
				echo "<script type='text/javascript'>window.location='change_password.php?s='</script>";
      }
      else if(mysql_num_rows($getUser)==1){
        mysql_query("UPDATE students SET password='".md5($_REQUEST['txtnewpassword'])."' , passwordVisibility=".$_REQUEST["txtnewpassword"]." WHERE id=".$_SESSION["id"]."");
        
				echo "<script type='text/javascript'>window.location='change_password.php?s='</script>";
      }
			else {
					echo "<script type='text/javascript'>window.location='change_password.php?f='</script>";
				}
			

	}
?>

<div class="container">

    <div class="content">

        <div class="content-container">


            <div class="content-header">
                <h2 class="content-header-title">Change Password</h2>
                <ol class="breadcrumb">
                    <li><a href="dashboard.php">Home</a></li>
                    <li class="active"><a href="javascript:;">Change Password</a></li>

                </ol>
            </div>

            <?php if(isset($_REQUEST['s'])) {?>
            <div class="alert alert-success">
                <a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
                <strong>Succesfully!</strong> updated your password.
            </div>

            <?php } else if(isset($_REQUEST['f'])) {?>

            <div class="alert alert-danger">
                <a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
                <strong>Error!</strong> your old password do not match.
            </div>
            <?php }?>
            <form method="post" id="validate-basic" action="#" class="form parsley-form form-horizontal"
                data-validate="parsley" enctype="multipart/form-data">

                <div class="form-group">

                    <label class="col-md-3">Old Password</label>

                    <div class="col-md-7">
                        <input type="password" name="txtoldpassword" id="txtoldpassword" class="form-control"
                            data-required="true"
                            data-required-message="Please Enter Password" 
                            >
                    </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <hr>

                <div class="form-group">

                    <label class="col-md-3">New Password</label>

                    <div class="col-md-7">
                        <input type="password" name="txtnewpassword" id="txtnewpassword" class="form-control"
                            data-required="true"
                            data-required-message="Please Enter New Password" 
                            >
                    </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <div class="form-group">

                    <label class="col-md-3">Confirm Password</label>

                    <div class="col-md-7">
                        <input type="password" name="txtconfirmpassword" id="txtconfirmpassword" class="form-control"
                            data-required="true" data-error-message="both password & confirm password are not same"
                            data-equalto="#txtnewpassword">
                    </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <br>

                <div class="form-group">

                    <div class="col-md-7 col-md-push-3">
                        <button type="submit" class="btn btn-info" name="updatepassword" id="updatepassword">Save
                            Changes</button>

                    </div> <!-- /.col -->

                </div> <!-- /.form-group -->

            </form>


        </div>
    </div>
</div>




<?php  include_once("footer.inc.php");?>

<?php  include_once("closebody.php");?>
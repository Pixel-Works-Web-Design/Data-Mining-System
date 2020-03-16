<?php include_once("header.inc.php");
   include("conn.inc.php");
   
   
   if(isset($_REQUEST["updatepassword"]))
   {
	 	
			$oLdPassword=md5($_REQUEST["txtoldpassword"]);

			$check_ifValid= mysql_query("SELECT * FROM admin_master WHERE adm_id=".$_SESSION['id']." AND adm_password='".$oLdPassword."'");
			
			if(mysql_num_rows($check_ifValid)==1)
			{
				mysql_query("UPDATE admin_master SET adm_password='".md5($_REQUEST['txtnewpassword'])."' WHERE adm_id=".$_SESSION["id"]."");
				echo "<script type='text/javascript'>window.location='update_password.php?s='</script>";
			}
			else {
					echo "<script type='text/javascript'>window.location='update_password.php?f='</script>";
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
          <li class="active"><a href="javascript:;">Update Password</a></li>
          
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
      <form  method="post" id="validate-basic" action="#" class="form parsley-form form-horizontal" data-validate="parsley" enctype="multipart/form-data">

                <div class="form-group">

                  <label class="col-md-3">Old Password</label>

                  <div class="col-md-7">
                    <input type="password" name="txtoldpassword" id="txtoldpassword" class="form-control" data-required="true">
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->
 
                <hr>
               
                <div class="form-group">

                  <label class="col-md-3">New Password</label>

                  <div class="col-md-7">
                    <input type="password" name="txtnewpassword" id="txtnewpassword" class="form-control" data-required="true">
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <div class="form-group">

                  <label class="col-md-3">Confirm Password</label>

                  <div class="col-md-7">
                    <input type="password" name="txtconfirmpassword"  id="txtconfirmpassword" class="form-control" data-required="true" data-error-message="both password & confirm password are not same"  data-equalto="#txtnewpassword">
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

                <br>

                <div class="form-group">

                  <div class="col-md-7 col-md-push-3">
                    <button type="submit" class="btn btn-primary" name="updatepassword" id="updatepassword">Save Changes</button>
                  
                  </div> <!-- /.col -->

                </div> <!-- /.form-group -->

              </form>
      
      
      </div>
      </div>
      </div>
      
 


<?php  include_once("footer.inc.php");?>

<?php  include_once("closebody.php");?>

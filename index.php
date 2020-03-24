<?php include_once("conn.inc.php");
		session_start();

if(isset($_REQUEST['btnLogin']))
{
		$uname = $_REQUEST['loginusername'];
    $pass = md5 ($_REQUEST['loginpassword']);
    
		$result = mysql_query("SELECT * from admin_master where email = '$uname' and password = '$pass'");
		$num_rows = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
    
    $getUser = mysql_query("SELECT * from students where email = '$uname' and password = '$pass'");
    $num_rowsUser = mysql_num_rows($getUser);
    
		$_SESSION['type'] = "";
		
			
		if($num_rows == 1 ) //$num_rows == 0
		{
			
			
			$_SESSION['name'] = $row["name"];
			$_SESSION['login'] = "1";
			$_SESSION['id']= $row[0];
			$_SESSION['type']= $row["type"];
			$address=$_SERVER['REMOTE_ADDR'];
			mysql_query("INSERT into history values(NULL,'$uname',now(),'$address')");
       
      if($row["type"] === "FACULTY"){
        $id = $row[0];
        $get = mysql_query("SELECT *from facultysubjects where faculty_id='$id'");
        $subjects = mysql_fetch_assoc($get);
        $subject_id = $subjects['subject_id'];
        $_SESSION['subject_id']= $subject_id;
      }
      echo "<script type='text/javascript'>window.location='dashboard.php'</script>"; 
      
		}
		else if($num_rowsUser == 1){
	  	$row=mysql_fetch_array($getUser);
      $_SESSION['name'] = $row["fname"] . ' ' . $row["lname"];
			$_SESSION['login'] = "1";
			$_SESSION['id']= $row[0];
      $_SESSION['type']= "STUDENT";
      $_SESSION['isSurveyFill']= $row['isSurveyFill'];
			$address=$_SERVER['REMOTE_ADDR'];
			mysql_query("INSERT into history values(NULL,'$uname',now(),'$address')");
       
      if($row['isSurveyFill'] === 'NO'){
        echo "<script type='text/javascript'>window.location='surveys.php'</script>";   
      }
      else{
        echo "<script type='text/javascript'>window.location='dashboard.php'</script>"; 
      }
      
    }
		else
		{
			$_SESSION['login'] = "";	
		}
	}

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>Login - Data Mining System</title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- App CSS -->
  <link rel="stylesheet" href="css/target-admin.css">
  <link rel="stylesheet" href="css/custom.css">


	<style type="text/css">
	.account-logo {
    		width: 304px;
			height:auto;
	}
    </style>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body class="account-bg">

<div class="navbar">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <i class="fa fa-cogs"></i>
      </button>

      <a class="navbar-brand navbar-brand-image" href="index.php">
        <img src="photos/pixelworkslogo.png" alt="Site Logo" style="width: 100%; height: 60px;">
      </a>

    </div> <!-- /.navbar-header -->

    <div class="navbar-collapse collapse">
        

      <ul class="nav navbar-nav navbar-right">   

        <li>
       <!--   <a href="javascript:;">
            <i class="fa fa-angle-double-left"></i> 
            &nbsp;Back to Homepage
          </a>-->
        </li> 

      </ul>
       

    </div> <!--/.navbar-collapse -->

  </div> <!-- /.container -->

</div> <!-- /.navbar -->

<hr class="account-header-divider">

<div class="account-wrapper">

  <div class="account-logo">
    <img src="img/avatars/avatar-1-xs.jpg" alt="Target Admin" style="height: 30px;">
  </div>

    <div class="account-body">

      <h3 class="account-body-title">Welcome back to Data Mining System  Admin Panel.</h3>

      <h5 class="account-body-subtitle">Please sign in to get access.</h5>
		
        <?php if(isset($_REQUEST['ms'])) {?>
        
         <h4 class="error" style=" color:#F00">You entered either Invalid User Id or Password!</h4>
        <?php }?>

      <form class="form account-form parsley-form" method="POST" action="#" data-validate="parsley">

        <div class="form-group">
          <label for="login-username" class="placeholder-hidden">Username</label>
          <input type="text"  id="login-username"  name="loginusername" class="form-control " data-required="true" data-required-message="Please Enter User Id"
  placeholder="Username" tabindex="1">

        </div> <!-- /.form-group -->

        <div class="form-group">
          <label for="login-password" class="placeholder-hidden">Password</label>
          <input type="password" class="form-control"  id="login-password" name="loginpassword" data-required="true" placeholder="Password" tabindex="2" data-required-message="Please Enter Password"
  >
        </div> <!-- /.form-group -->

        <div class="form-group clearfix">
        <!--  <div class="pull-left">         
            <label class="checkbox-inline">
            <input type="checkbox"  value="" tabindex="3">Remember me
            </label>
          </div>--->

          <div class="pull-right">
            <a href="#">Forgot Password?</a>
          </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-lg" name="btnLogin" tabindex="4">
            Signin &nbsp; <i class="fa fa-play-circle"></i>
          </button>
        </div> <!-- /.form-group -->

      </form>


    </div> <!-- /.account-body -->

  </div> <!-- /.account-wrapper -->



        

  <script src="js/libs/jquery-1.10.1.min.js"></script>
  <script src="js/libs/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="js/libs/bootstrap.min.js"></script>

  <!--[if lt IE 9]>
  <script src="./js/libs/excanvas.compiled.js"></script>
  <![endif]-->
  <!-- App JS -->
  <script src="js/target-admin.js"></script>
  
  <!-- Plugin JS -->
  <script src="js/target-account.js"></script>

  <script src="js/plugins/parsley/parsley.js"></script>
  <script src="js/plugins/icheck/jquery.icheck.js"></script>
  <script src="js/plugins/datepicker/bootstrap-datepicker.js"></script>
  <script src="js/plugins/timepicker/bootstrap-timepicker.js"></script>
  <script src="js/plugins/simplecolorpicker/jquery.simplecolorpicker.js"></script>
  <script src="js/plugins/select2/select2.js"></script>

  <!-- Plugin JS -->
  <script src="js/demos/form-validation.js"></script>


</body>
</html>

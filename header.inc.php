<?php
 session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>Data Mining System Admin Panel</title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="js/plugins/icheck/skins/minimal/blue.css">
  <link rel="stylesheet" href="js/plugins/select2/select2.css">
  <link rel="stylesheet" href="js/plugins/datepicker/datepicker.css">
  <link rel="stylesheet" href="js/plugins/simplecolorpicker/jquery.simplecolorpicker.css">
  <link rel="stylesheet" href="js/plugins/timepicker/bootstrap-timepicker.css">
  <link rel="stylesheet" href="js/plugins/fileupload/bootstrap-fileupload.css">

  <!-- App CSS -->
  <link rel="stylesheet" href="css/target-admin.css">
  <link rel="stylesheet" href="css/custom.css">


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <div class="navbar">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <i class="fa fa-cogs"></i>
      </button>

      <a class="navbar-brand navbar-brand-image" href="dashboard.php">
        <img src="photos/pixelworkslogo.png" alt="Admin Panel Logo" style="width: 100%; height: 60px;">
      </a>

    </div> <!-- /.navbar-header -->

    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        
        <li>
          <a href="javascript:;">Welcome, <?php echo $_SESSION["name"];?></a>
        </li>
         
        <li class="dropdown navbar-profile">
          <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
            <img src="img/avatars/avatar-1-xs.jpg" class="navbar-profile-avatar" alt="">
            <span class="navbar-profile-label">rod@rod.me &nbsp;</span>
            <i class="fa fa-caret-down"></i>
          </a>

          <ul class="dropdown-menu" role="menu">

          <li>
             <a href="
             <?php 
             if($_SESSION['type'] !== "STUDENT") echo "profile.php";
             else echo "student_profile.php";
             ?>
             
             ">
                <i class="fa fa-user"></i> 
                &nbsp;&nbsp;My Profile
              </a>
            </li>
         <li>
             <a href="change_password.php">
                <i class="fa fa-dollar"></i> 
                &nbsp;&nbsp;Change My Password
              </a>
            </li>
 
            <li class="divider"></li>

            <li>
              <a href="logout.php">
                <i class="fa fa-sign-out"></i> 
                &nbsp;&nbsp;Logout
              </a>
            </li>

          </ul>

        </li>

      </ul>
    </div> <!--/.navbar-collapse -->

  </div> <!-- /.container -->

</div> <!-- /.navbar -->

<div class="mainbar">
<?php
if(!($_SESSION['type'] === 'STUDENT' && $_SESSION['isSurveyFill'] === 'NO')){
  include_once("navbar.php");
}
?>
</div> <!-- /.mainbar -->
<?php if(isset($_SESSION['id'])) {
}
else {
  echo "<script type='text/javascript'>window.location='index.php'</script>";
}
?>
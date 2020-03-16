<?php session_start();

function strip_tags_content($text, $tags = '', $invert = FALSE) 
{ 
        preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($tags), $tags); 
        $tags = array_unique($tags[1]); 
        
        if(is_array($tags) AND count($tags) > 0) 
        { 
            if($invert == FALSE) 
            { 
                return preg_replace('@<(?!(?:'. implode('|', $tags) .')\b)(\w+)\b.*?>.*?</\1>@si', '', $text); 
            } 
            else 
            { 
                return preg_replace('@<('. implode('|', $tags) .')\b.*?>.*?</\1>@si', '', $text); 
            } 
        } 
        elseif($invert == FALSE) 
        { 
            return preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $text); 
        } 
        return $text; 
    } 
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>Dashboard - Target Admin</title>

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
        <img src="photos/logo.png" alt="Site Logos">
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
             <a href="update_password.php">
                <i class="fa fa-dollar"></i> 
                &nbsp;&nbsp;Change My Password
              </a>
            </li>
       
        
             
        <!--    <li>
              <a href="update-password.php">
                <i class="fa fa-dollar"></i> 
                &nbsp;&nbsp;Change My Password
              </a>
            </li>

            <li>
              <a href="profile.php">
                <i class="fa fa-user"></i> 
                &nbsp;&nbsp;Profile
              </a>
            </li> -->
 
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

  <div class="container">

    <button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
      <i class="fa fa-bars"></i>
    </button>

    <div class="mainbar-collapse collapse">

      <ul class="nav navbar-nav mainbar-nav">

        <li  >
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i>
            Dashboard
          </a>
        </li>

      
        <li class="dropdown ">
          <a href="#about" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            <i class="fa fa-ruble"></i>
            Entry
            <span class="caret"></span>
          </a>

          <ul class="dropdown-menu">   
            
           
            <li>
              <a href="Tour_Categorys.php">
                <i class="fa fa-edit nav-icon"></i> 
                Tour Categorys
              </a>
            </li> 
            <li>
              <a href="Tour_Tags.php"><i class="fa fa-edit nav-icon"></i> 
                Tour Tags
              </a>
            </li>
            <li>
              <a href="Tour_InternationDomestics.php"><i class="fa fa-globe" aria-hidden="true"></i>
                &nbsp;&nbsp;Tour Master
              </a>
            </li> 
             <li>
              <a href="Country_Master.php"><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
               Country
              </a>
            </li> 
             <li>
              <a href="Newsletter.php">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                &nbsp;&nbsp;Newsletters
              </a>
            </li>   
              <!--  <li><a href="cluster_admin.php"><i class="fa fa-edit nav-icon"></i> Create Cluster Admin</a></li>   
            
            

               <li><a href="Employee_User.php?clusterid=<?php echo $_SESSION['id']; ?>"><i class="fa fa-edit nav-icon"></i> Create Employee User </a></li>   
              -->
              
          </ul>
        </li>
        
      <!--   <?php if($_SESSION["roletype"]=="EMPLOYEE"){?>
         <li>
          <a href="employee_myorder.php">
             <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            My Order
          </a>
        </li>
     
   <?php } ?> -->

  
       
  <!--  <?php if($_SESSION["roletype"]=="MASTERADMIN"){?>
         <li>
          <a href="User_Register.php">
          <i class="fa fa-user" aria-hidden="true"></i>
            User's
          </a>
        </li>
     
   <?php } ?>
 
    

    <?php if($_SESSION["roletype"]=="MASTERADMIN"){?>
         <li>
          <a href="category.php">
           <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Products
          </a>
        </li>
     
   <?php } ?>
 -->


<!-- Website Management -->

<li class="dropdown ">
          <a href="#about" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            <i class="fa fa-desktop"></i>
            Website Management
            <span class="caret"></span>
          </a>
    <ul class="dropdown-menu">   
            
           <li>
              <a href="Home.php">
                 <i class="fa fa-desktop"></i>
                 &nbsp;&nbsp;Home
              </a>
           </li>
            <li>
              <a href="AboutUs.php">
                <i class="fa fa-edit nav-icon"></i>
                 About Us
              </a>
           </li>
           <li>
              <a href="Services.php">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                 &nbsp;&nbsp;Services
              </a>
           </li>

          
           <li>
              <a href="Testimonials_user.php">
               <i class="fa fa-comments" aria-hidden="true"></i>
                  &nbsp;&nbsp;Testimonials
              </a>
           </li>
            <li>
              <a href="Privacy_Policy.php">
               <i class="fa fa-edit nav-icon"></i>
                  &nbsp;&nbsp;Privacy Policy 
              </a>
           </li>
           <li>
              <a href="Terms_of_Use.php">
               <i class="fa fa-edit nav-icon"></i>
                  &nbsp;&nbsp;Terms of Use
              </a>
           </li>
            <li>
              <a href="blogs.php">
                <i class="fa fa-eye" aria-hidden="true"></i>
                   &nbsp;&nbsp;&nbsp;Blogs
              </a>
           </li>
    <!--       
           <li>
              <a href="AboutUs.php">
                <i class="fa fa-edit nav-icon"></i>
                 About Us
              </a>
           </li>
            <li>
              <a href="Services.php">
                <i class="fa fa-edit nav-icon"></i>
                 Services
              </a>
           </li>
            <li>
              <a href="Features.php">
               <i class="fa fa-edit nav-icon"></i>
                 Features
              </a>
           </li>
           <li>
              <a href="Driver_Benifit.php">
             <i class="fa fa-male" aria-hidden="true"></i>
                &nbsp;&nbsp; Driver Benifit
              </a>
           </li>
            <li>
                <a href="Advertisment.php">
                  <i class="fa fa-globe"></i>
                   &nbsp;&nbsp;Advertisment
                </a>
            </li>
            <li>
              <a href="News.php">
                <i class="fa fa-comment-o"></i>
                 &nbsp;&nbsp;News
              </a>
           </li> -->
    </ul>
</li>

<!-- End of  Website Management -->
          
         <li>
          <a href="ToursandTravels.php">
           <i class="fa fa-globe" aria-hidden="true"></i>
            Tours
          </a>
        </li>
          <li>
            <?php 
            include("conn.inc.php");
            $Inquirytot = mysql_query("SELECT * from inquiry where inquiry_show = 'NO'");
            $InqTOT = mysql_num_rows($Inquirytot);
             ?>
          <a href="Inquirys.php">
            <?php 
            if(!($InqTOT == 0))
            {
              ?>
               <span class="badge badge-warning" style="position: absolute; margin-left: 20px;"><?php echo $InqTOT ; ?></span>
              <?php   
            }

             ?>
           
           <i class="fa fa-info-circle" aria-hidden="true"></i>
            Inquiry's
          </a>
        </li>

         <li>
          <a href="users.php">
            <i class="fa fa-users"></i>
            Master User
          </a>
        </li>
     

  
      </ul>
    </div> <!-- /.navbar-collapse -->   
  </div> <!-- /.container --> 
</div> <!-- /.mainbar -->
<?php if(isset($_SESSION['id'])) {
}
else {
  echo "<script type='text/javascript'>window.location='index.php'</script>";
}
?>
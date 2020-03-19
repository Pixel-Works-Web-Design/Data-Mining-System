
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

    <?php
if($_SESSION['type'] != "STUDENT"){
?>
    <li class="dropdown ">
      <a href="#about" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
        <i class="fa fa-ruble"></i>
        Entry
        <span class="caret"></span>
      </a>

      <ul class="dropdown-menu">   
        
      <?php
if($_SESSION['type'] === "MASTERADMIN"){
?>
        <li>
          <a href="subjects.php"><i class="fa fa-edit nav-icon"></i> 
            Subjects
          </a>
        </li>
        <li>
          <a href="surveyView.php"><i class="fa fa-eye nav-icon"></i> 
            Survey Form
          </a>
        </li>
<?php } ?>
      </ul>
    </li>
    <?php } ?>
<?php
if($_SESSION['type'] === "MASTERADMIN"){
?>
<li>
      <a href="faculties.php">
        <i class="fa fa-male"></i>
        Faculties
      </a>
    </li>
<?php
}
?>
     <?php
if($_SESSION['type'] != "STUDENT"){
?>
    <li>
      <a href="students.php">
        <i class="fa fa-user"></i>
       Students
      </a>
    </li>
    <?php
}
?>

    <?php
if($_SESSION['type'] === "MASTERADMIN"){
?>
    <li>
      <a href="users.php">
        <i class="fa fa-users"></i>
       Users
      </a>
    </li>
    <?php
}
?>
  </ul>
</div> <!-- /.navbar-collapse -->   
</div> 
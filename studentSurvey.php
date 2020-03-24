<?php include_once("header.inc.php");?>


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

<?php
  include("conn.inc.php");
  $id = $_REQUEST['id'];
  $get = mysql_query("SELECT * from students where id = '$id'");
  $data = mysql_fetch_assoc($get);

  $name = $data['fname'] . ' ' . $data['lname'];

  $getSuervey = mysql_query("SELECT * FROM `survey` AS sur INNER JOIN `studentsurvey` AS stu ON sur.id = stu.survey_id AND stu.student_id = '$id'");
?>
<div class="container">

    <div class="content">

        <div class="content-container">

            <div class="content-header">
                <h2 class="content-header-title">
                    <?php  echo $name . ' Student Survey Detail'; ?>
                </h2>
                <ol class="breadcrumb">
                    <li><a href="dashboard.php">Home</a></li>
                    <li class="active"><a href="students.php">
                        <?php echo $name; ?>
                    </a></li>

                </ol>
            </div>

            <div class="row">
            <div class="col-md-1"></div>
                <div class="col-md-10">

                <div class="card">
  <ul class="list-group list-group-flush">
  <?php 
  $i =1;
  while($row = mysql_fetch_array($getSuervey)){
      $answer = " " . $row['value'];
      if($row['otherValue']){
          $answer.= "  (  " . $row['otherValue'] . "  )";
      }
?>
<li class="list-group-item">
    <label style="color:gray; font-family:Comic Sans MS; font-size:16px;"><?php echo "(".$i.") ". $row['title']; ?></label><br>
    <label style="font-size:15px;"> 
        <span style="text-decoration:underline; margin-right:4px;">Ans.</span> 
        <?php echo  $answer; ?>
    </label>
</li>
<?php
      $i++; 
  }
  ?>
    
  </ul>
</div>

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
<?php include_once("header.inc.php");?>


 <style type="text/css">
  .middle{
    vertical-align: middle;
     text-align:center;
  }
  .form-group .icheckbox_minimal-blue, .form-group .iradio_minimal-blue {
    display: inline-block;
    top: 4px;
    margin-right: .5em;
    margin-left: 10px;
}
  </style> 
  
<?php 
  include("conn.inc.php");
  $studentId = $_REQUEST['studentId'];
  $getStudent = mysql_query("SELECT * from students where id = '$studentId'");
  $student = mysql_fetch_assoc($getStudent);
  $name = $student['fname'] . " " . $student['lname'] ;
  $heading= "Result of " . $name . " Student Quiz";
?>
<div class="container">

  <div class="content">

    <div class="content-container">

     
<!-- Admin View -->
        
<!--<div class="container">

  <div class="content">

    <div class="content-container">-->
    
    <div class="content-header">
        <h2 class="content-header-title"><?php echo $heading; ?></h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="studentQuizResult.php?studentId=<?php echo $studentId; ?>"><?php echo $heading; ?></a></li>
          
        </ol>
      </div>
 
    <div class="row">
        <div class="col-md-12">
       <!-- <div class="portlet-header">
          <h3>
            <i class="fa fa-tasks"></i>
            Manage Admin Master
          </h3>
        </div>
        -->
        
        <div class="portlet">
                 <div class="portlet-header">

              <h3>
                <i class="fa fa-table"></i>
                <?php echo $heading; ?>
              </h3>

            </div> <!-- /.portlet-header -->
               <div class="portlet-content">           

              <div class="table-responsive">

              <table 
                class="table table-striped table-bordered table-hover table-highlight table-checkable" 
                data-provide="datatable" 
                data-display-rows="10"
                data-info="true"
                data-search="true"
                data-length-change="true"
                data-paginate="true"
              >
                  <thead>
                  <tr>
                    <th style="width:150px;">Date</th>
                    <th>Quiz</th>
                    <th class="middle">Subject</th>
                    <th class="middle">MCQ</th>
                    <th class="middle">Score</th>
                    <th class="middle">Average</th>
                    </tr>
                   
                  </thead>
                  <tbody>
                     <?php
                     if($_SESSION['type'] === 'FACULTY'){
                        $subjectId = $_SESSION['subject_id'];
                        $get = mysql_query("SELECT * FROM `student_quiz` AS stuQuz INNER JOIN `quiz` AS quiz ON stuQuz.quiz_id = quiz.id AND stuQuz.student_id= '$studentId' AND quiz.subject_id = '$subjectId'");
                     }else{
                        $get = mysql_query("SELECT * FROM `student_quiz` AS stuQuz INNER JOIN `quiz` AS quiz ON stuQuz.quiz_id = quiz.id AND stuQuz.student_id= '$studentId'");
                     }

               $i = 1;
               while($row = mysql_fetch_array($get))
               {
                $subId = $row['subject_id'];
                $getSubject = mysql_query("SELECT *from subjects where id='$subId'");
                $subject = mysql_fetch_assoc($getSubject);

                				// date Format
				$date = date_create($row['date']);
                $date_format = DATE_FORMAT($date, 'F d, Y');
              
                ?>
                    <tr>
                      
                    <td style="vertical-align: middle;"><?php echo $date_format; ?></td>

                     <td style="vertical-align: middle;">
                     <a href="quiz.php">
                     <?php echo $row['name']; ?>
                     </a>
                     </td>

                    <td class="middle">
                      <?php echo  $subject['subject']; ?>
                     </td>

                     <td class="middle">
                     <?php echo  $row['questions']; ?>
                     </td>

                     <td class="middle" style="font-weight:bold;">
                     <?php echo  "(" . $row['result'] . "/" . $row['questions'] . ")"; ?>
                      </td>

                     <td class="middle" style="font-weight:bold;">
                      <?php
                        echo ( $row['result'] * 100) / $row['questions'] . '%'; 
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

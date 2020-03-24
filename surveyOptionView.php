<?php include_once("header.inc.php");?>

 <style type="text/css">
.space {
    padding-left:20px !important;
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

  $surveyId = $_REQUEST['surveyid'];
  $option = $_REQUEST['option'];

  $get = mysql_query("SELECT * from survey where id = '$surveyId'");
  $data = mysql_fetch_assoc($get);
  $question = $data['title'];

  $getSurveys = mysql_query("SELECT * from studentsurvey where survey_id = '$surveyId' AND value like '%$option%'");
  ?>
<div class="container">

  <div class="content">

    <div class="content-container">

     

    <div class="content-header">
        <h2 class="content-header-title">
            Survey Question : <u> <?php  echo $question; ?> </u>
        </h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li><a href="#">Suvey</a></li>
          <li><a href="#">Questions</a></li>
          
        </ol>
      </div>
 
    <div class="row">
        <div class="col-md-12">
 
       <div class="portlet">
                 <div class="portlet-header">

              <h3>
                <i class="fa fa-table"></i>
                Answers&nbsp;&nbsp;
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
                  <th style="text-align: center;">No.</th>
                    <th class="space">Student</th>
                    <th class="space"> Answer</th>
                    <th class="space" style="width:230px;">View</th>
                    </tr>
                   
                  </thead>
                  <tbody>
                     <?php
                     $i = 1;
           while($row = mysql_fetch_array($getSurveys))
               {
                   $studentId = $row['student_id'];
                   $getStudent = mysql_query("SELECT * from students where id = '$studentId'");
                   $student = mysql_fetch_assoc($getStudent);
                   $name = $student['fname'] . ' ' . $student['lname'];
                ?>
                    <tr>
                    <td style="text-align: center; vertical-align: middle;">
                    <?php echo $i; ?>
                    </td>

                    <td class="space" style="vertical-align: middle; font-weight:700;">
                    <?php echo $name; ?>
                    </td>

                     <td class="space" style="vertical-align: middle; font-weight:700;">
                     <?php echo $row['value']; ?>
                     </td>
                   
                     <td class="space" style="vertical-align: middle; font-weight:700;">
                     <a href="studentSurvey.php?id=<?php echo $studentId;  ?>">
                      View Survey
                      </a>
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
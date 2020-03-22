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
  
  
  <link rel="stylesheet" href="js/plugins/magnific/magnific-popup.css">

<div class="container">

  <div class="content">

    <div class="content-container">

     
<!-- Admin View -->
        
<!--<div class="container">

  <div class="content">

    <div class="content-container">-->
    
    <div class="content-header">
        <h2 class="content-header-title">Quiz (MCQ)</h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="noOfquiz.php">Quiz (MCQ)</a></li>
          
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
                Quiz (MCQ)&nbsp;&nbsp;
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
                    <th class="middle">No</th>
                    <th>Quiz</th>
                    <th class="middle">Subject</th>
                    <th class="middle">MCQ</th>
                    <th class="middle">Start</th>
                    </tr>
                   
                  </thead>
                  <tbody>
                     <?php
         include("conn.inc.php");

          $get = mysql_query("SELECT *from quiz");
               $i = 1;
               while($row = mysql_fetch_array($get))
               {
                $subId = $row['subject_id'];
                $getSubject = mysql_query("SELECT *from subjects where id='$subId'");
                $subject = mysql_fetch_assoc($getSubject);

                $quizId = $row['id'];
                $noOfMcq = mysql_query("SELECT *from mcq where quiz_id='$quizId'");
                if(mysql_num_rows($noOfMcq) > 0){
                  ?>
                  <tr>
                      
                      <td style="text-align: center; vertical-align: middle;"><?php echo $i; ?></td>
  
                       <td style="vertical-align: middle;">
                       <a href="studentQuiz.php?quizId=<?php echo $row['id'] . '&subjectId=' . $subId; ?>">
                       <?php echo $row['name']; ?>
                       </a>
                       </td>
  
                      <td class="middle">
                        <?php echo  $subject['subject']; ?>
                       </td>
  
                       <td class="middle">
                        <?php echo  "(" . mysql_num_rows($noOfMcq) . ")"; ?>
                       </td>
  
                       <td class="middle"><a href="studentQuiz.php?quizId=<?php echo $row['id'] . '&subjectId=' . $subId; ?>"><button class="btn btn-secondary" type="button">
                       Start
                       </button></a></td>
                     
                      </tr>
                    
                  <?php
                }
                ?>
                    
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

<script src="js/plugins/magnific/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
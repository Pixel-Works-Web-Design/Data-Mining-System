<?php include_once("header.inc.php");?>

 
 <style type="text/css">
  
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

     <?php 
     include("conn.inc.php");
     $id = $_REQUEST['subjectId'];

     $get = mysql_query("SELECT * from subjects where id = '$id'");
     $data = mysql_fetch_assoc($get);
     ?>
<!-- Admin View -->
        
<!--<div class="container">

  <div class="content">

    <div class="content-container">-->
    
    <div class="content-header">
        <h2 class="content-header-title">
        <?php echo $data['subject']; ?> Assignmets
        </h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="studentAssignment.php?subjectId=<?php echo $id; ?>">
          <?php echo $data['subject']; ?> Assignmets
          </a></li>
          
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
                Assignmets&nbsp;&nbsp;
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
                    <th style="text-align:center;">No</th>
                    <th>Assignment</th>
                    <th style="text-align:center;">Open</th>
                    </tr>
                   
                  </thead>
                  <tbody>
                     <?php

          $get = mysql_query("SELECT *from assignment where subject_id='$id'");
               $i = 1;
               while($row = mysql_fetch_array($get))
               {
                ?>
                    <tr>
                      
                    <td style="text-align: center; vertical-align: middle;"><?php echo $i; ?></td>

                     <td style="vertical-align: middle;">
                     <a class="" target="_blank" href="photos/<?php echo $row['file']; ?>" style="font-size:18px;">
                      <?php echo $row['name']; ?>
                      </a>
                     </td>
                  
                    <td style="vertical-align: middle; text-align:center;">
                    <a class="" target="_blank" href="photos/<?php echo $row['file']; ?>">
                    <i class="fa fa-external-link" aria-hidden="true" style="font-size:25px; cursor:pointer"></i>
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

<script src="js/plugins/magnific/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
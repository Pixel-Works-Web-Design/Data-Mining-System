<?php 
  if(isset($_REQUEST['show_Inquirydetail']))
  {

    include("conn.inc.php");    
    $inquiryID =  $_REQUEST['inqid'];
    $getdetail = mysql_query("SELECT * from inquiry  where inquiry_id = '$inquiryID'");
    $row = mysql_fetch_assoc($getdetail) ;

    ?>
     <div class="portlet-content">           
        <h4 style="text-transform: capitalize;">
          <i class="fa fa-user" aria-hidden="true" style="font-size: 20px;"></i> &nbsp;&nbsp;
          <?php echo $row['inquiry_name']; ?>
        </h4>
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
                  
                  </thead>
                  <tbody>
                    
                    <tr>
                     <td><strong>Email :</strong></td>
                     <td style="vertical-align: middle;">
                      <?php echo $row['inquiry_email']; ?>
                     </td>
                    </tr>

                    <tr>
                    <td><strong>Nationality :</strong></td>
                     <td style="vertical-align: middle;">
                      <?php echo $row['inquiry_nationality']; ?>
                     </td>
                     </tr>

                     <tr>
                     <td><strong>City of Residence :</strong></td>
                     <td style="vertical-align: middle;">
                      <?php echo $row['inquiry_city']; ?>
                     </td>
                     </tr>

                      <tr>
                     <td><strong>Budget (Approximate):</strong></td>
                     <td style="vertical-align: middle;">
                      <i class="fa fa-inr" aria-hidden="true"></i>&nbsp;
                      <?php echo $row['inquiry_budget']; ?>
                     </td>
                     </tr>
                     
                  <tr>
                     <td><strong>Foods :</strong></td>
                     <td style="vertical-align: middle;">
                      <?php 
                        //echo $row['inquiry_Foods'];
                     echo preg_replace('/^[,\s]+|[\s,]+$/', '', $row['inquiry_Foods']);
                         ?>
                     </td>
                  </tr>

                    
                      <tr>
                       <td>
                       <strong>Extra Beds :</strong>&nbsp;&nbsp;
                        <?php echo $row['inquiry_ExtraBeds']; ?>
                      </td>
                      <td>
                       <strong>Assistance for Train and Flight:</strong>&nbsp;&nbsp;
                        <?php echo $row['inquiry_assistForTrainFlight']; ?>
                        </td>
                    </tr>
                  
                  <tr>
                     <td><strong>No of Rooms :</strong></td>
                     <td style="vertical-align: middle;">
                      <?php echo $row['inquiry_NumberofRooms']; ?>
                     </td>
                  </tr>
                   <tr>
                     <td><strong>Hotel Type :</strong></td>
                     <td style="vertical-align: middle;">
                      <?php
                      // echo $row['inquiry_Hoteltype']; 
                      echo preg_replace('/^[,\s]+|[\s,]+$/', '', $row['inquiry_Hoteltype']);
                      ?>
                     </td>
                  </tr>

                   <tr>
                     <td colspan="2"><strong>Convenience Time to Talk :</strong></td>
                    
                    </tr>

                   <tr>
                     <td colspan="2" style="vertical-align: middle;">
                      <?php echo $row['inquiry_convTimetoTalk']; ?>
                     </td>
                   </tr>

                    <tr>
                     <td colspan="2"><strong>Special Requirments :</strong></td>
                    
                    </tr>

                   <tr>
                     <td colspan="2" style="vertical-align: middle;">
                      <?php echo $row['inquiry_ExtraRequir']; ?>
                     </td>
                   </tr>

              
                  </tbody>
                </table>
              </div> <!-- /.table-responsive -->
              
            </div> <!-- /.portlet-content -->
    <?php
    exit();
  }

 ?>
<?php include_once("header.inc.php");?>

 <?php
 // Insert Record
  if(isset($_REQUEST['validate']))
  {
      
     
  }
     
  if(isset($_REQUEST['update_category']))
  {
      
    
  }
  // End of Insert Record  
  ?>  


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

     
<!-- Admin View -->
        
<!--<div class="container">

  <div class="content">

    <div class="content-container">-->
    
    <div class="content-header">
        <h2 class="content-header-title"> Inquirys 
          
        </h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="javascript:;">Inquiry</a></li>
          
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
        
          <?php
 
  if(isset($_REQUEST['remove']))
  {
     
  } // End of Create
  else if(isset($_REQUEST['create']))
  {
    ?>
        <!-- Create blogs -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Create Blog 
             </h3>
        </div>
        <div class="portlet-content">
         
            </div>
            </div>
            
             <!-- end of button -->
         <!-- End of Create blogs -->   
             
    <?php
  }
  else if(isset($_REQUEST['update']))
  {
      
     ?>
        <!-- Create blogs -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Update Blog :
             </h3>
        </div>
        <div class="portlet-content">
        
            </div>
            </div>
            
             <!-- end of button -->
         <!-- End of Create blogs -->   
    <!-- Show Commwnts -->

       

    <!-- End of Show Comments -->
    <?php
  }
  else{

// Show Data



          ?>
         <div class="portlet">
                 <div class="portlet-header">

              <h3>
                <i class="fa fa-table"></i>
               Inquiry&nbsp;&nbsp;
                
               
                
                
              
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
                    <th style="text-align: center;">No</th>
                    <th>Name</th>
                    <th>WhatSapp No.</th>
                    <th>Date of Traveling</th>
                    <th>Days</th>
                     <th>No. of Person</th>
                    <th>Destination</th>
                    <th>Tour</th>
                    <th>Tour Type</th>
                    <th>Extra</th>
                    </tr>
                   
                  </thead>
                  <tbody>
                     <?php
                    
         include("conn.inc.php");

      
         // mark as Show Inquiry
         mysql_query("UPDATE inquiry set inquiry_show = 'YES'");
         // End of mark as Show Inquiry
         
               $get = mysql_query("SELECT * from inquiry  order by inquiry_id desc");
               $i = 1;
               while($row = mysql_fetch_array($get))
               {

                  // Date Format [Date of Traveling]
                   $date = date_create($row['inquiry_DateofTravel']);
                   $date_of_traveling = DATE_FORMAT($date, 'F d, Y');
                ?>
                    <tr>
                      
                    <td style="text-align: center; vertical-align: middle;"><?php echo $i; ?></td>

                     <td style="vertical-align: middle; font-weight: bold; text-transform: capitalize;">
                      <?php echo $row['inquiry_name']; ?>
                     </td>
                      <td style="vertical-align: middle;">
                      <?php echo $row['inquiry_whatsappNo']; ?>
                     </td>
                     <td style="vertical-align: middle;">
                      <?php echo $date_of_traveling; ?>
                     </td>
                     <td style="vertical-align: middle;">
                      <?php echo $row['inquiry_NumberofDays']; ?>
                     </td>
                      <td style="vertical-align: middle;">
                      <?php echo 'Person ('.'<b>'.$row['inquiry_person'].'</b>'.') , Adult  ('.'<b>'.$row['inquiry_NumberofAdult'].'</b>'.')  , Child  ('.'<b>'.$row['inquiry_NumberofChild'].'</b>'.')'; ?>
                     </td>

                      <td style="vertical-align: middle;">
                      <?php echo $row['inquiry_destination']; ?>
                     </td>
                     <td style="vertical-align: middle; text-transform: capitalize;">
                      <?php echo $row['inquiry_Tours'].' Tour'; ?>
                     </td>
                      <td style="vertical-align: middle; text-transform: capitalize;">
                      <?php echo $row['inquiry_tourtype']; ?>
                     </td>
                      <td style="vertical-align: middle; text-transform: capitalize;">
                      <button type="button" class="btn btn-dark" onclick="ShowInquiry('<?php echo $row['inquiry_id'] ; ?>')">Details</button>
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


        <?php
      }  // End of Show Data

      ?>
 
 
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
 
 <!--  Modal show Inquiry -->
 <div id="showinquirymodel" class="modal modal-styled fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title">More Informations :</h3>
      </div>
      <div class="modal-body" id="showinquirymodelBody">
        
       </div>
            
      <div class="modal-footer">
        <button type="button" class="btn btn-tertiary" data-dismiss="modal">Close</button>
       
  
    </div>
            </div>
            </div>
</div>
 <!-- End of Modal show Inquiry -->
<?php include_once("footer.inc.php");?>

<?php include_once("closebody.php");?>

<script src="js/plugins/magnific/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>


<script type="text/javascript">

function ShowInquiry(inquiryid)
{
   $.ajax({
      url: "Inquirys.php?show_Inquirydetail=y&inqid="+inquiryid,
      cache: false,
      success: function(html){
        $("#showinquirymodelBody").html("");
        $("#showinquirymodelBody").append(html);
        $('#showinquirymodel').modal();
    }
  });

}

</script>
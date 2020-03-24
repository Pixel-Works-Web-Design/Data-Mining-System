<?php 
 if(isset($_REQUEST['show_comments']))
  {
    $commentid =  $_REQUEST['comid'];
    include("conn.inc.php");
    $getmsg = mysql_query("SELECT * from blogs_comment where blog_comment_id = '$commentid'");
    $comment = mysql_fetch_assoc($getmsg);
    ?>
    <h4 style="text-transform: capitalize;"> <i class="fa fa-user" aria-hidden="true" style="font-size: 20px; color: #3378B7;"></i> &nbsp;&nbsp;<?php echo $comment['blog_comment_name']; ?></h4>
    
     <hr>
    <div>
      <?php echo $comment['blog_comment_message']; ?>
        
      </div>
    <?php
    exit();
  }

  if(isset($_REQUEST['comments']))
  {

    include("conn.inc.php");
    $commentid = $_REQUEST['comid'];
    $blogsid = $_REQUEST['blogid'];
   

    $setapprover = '';
    $checkapproved = mysql_query("SELECT * from blogs_comment where blog_comment_id = '$commentid'");
    $comment = mysql_fetch_assoc($checkapproved);
    if($comment['blog_comment_approved'] == 'NO')
    {
       $setapprover = mysql_query("UPDATE blogs_comment set blog_comment_approved = 'YES' where blog_comment_id = '$commentid'");
    }
    else{
      $setapprover = mysql_query("UPDATE blogs_comment set blog_comment_approved = 'NO' where blog_comment_id = '$commentid'");
    }
   
    if($setapprover)
    {
      echo "<script type='text/javascript'>window.location='Comments.php?blogid=$blogsid'</script>"; 
    }
    else{
        echo "<script type='text/javascript'>alert('Unable to peroform Action on this Comments !')</script>"; 
       echo "<script type='text/javascript'>window.location='Comments.php?blogid=$blogsid'</script>"; 
    }
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
        <h2 class="content-header-title">Comments >>
          <?php 
           include("conn.inc.php");
          $bid = $_REQUEST['blogid'];
          $getblog = mysql_query("SELECT * from blog where blog_id = '$bid'");
          $blog = mysql_fetch_assoc($getblog);
          echo $blog['blog_title'];
           ?>
        </h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="javascript:;">Comments</a></li>
          
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
               Comments&nbsp;&nbsp;
                
               
                
                
              
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
                    <th>Email</th>
                    <th>Date</th>
                    <th>Comment</th>
                    <th>Approved</th>
                       
                    </tr>
                   
                  </thead>
                  <tbody>
                     <?php
                     $blodid = $_REQUEST['blogid'];
         include("conn.inc.php");

         // mark comment as Show
         mysql_query("UPDATE blogs_comment set blog_comment_show = 'YES' where  blog_comment_blogid = '$blodid'");
         // End of mark comment as Show
         
               $get = mysql_query("SELECT * from blogs_comment where blog_comment_blogid = '$blodid' order by blog_comment_id desc");
               $i = 1;
               while($row = mysql_fetch_array($get))
               {

                  // Date Format
                  $date = date_create($row['blog_comment_date']);
                  $dates_format = DATE_FORMAT($date, 'F d, Y');
                ?>
                    <tr>
                      
                    <td style="text-align: center; vertical-align: middle;"><?php echo $i; ?></td>

                     <td style="vertical-align: middle;">

                    <i class="fa fa-user" aria-hidden="true" style="font-size: 20px;"></i> &nbsp;&nbsp;
                    <?php echo $row['blog_comment_name']; ?>
                     </td>
                     <td style="vertical-align: middle;">
                     <?php echo $row['blog_comment_email']; ?>
                     </td>
                     <td style="vertical-align: middle;">
                    <?php echo $dates_format; ?>
                     </td>
                     <td style="vertical-align: middle;">
                     <button type="button" class="btn btn-default" onclick="showcomment('<?php echo $row['blog_comment_id']; ?>')">Comment</button>
                     </td>
                     <!-- Approved -->
                      <td style="vertical-align: middle; width: 150px;">
                     <?php 
                     if($row['blog_comment_approved'] == 'NO'){
                      ?>
                       <a href="Comments.php?comments=y&comid=<?php echo $row['blog_comment_id']; ?>&blogid=<?php echo $_REQUEST['blogid']; ?>">
                    <button type="button" class="btn btn-secondary">Approved</button>

                    </a> 
                    <i class="fa fa-times" aria-hidden="true" style="font-size: 20px; float: right;"></i>
                      <?php
                     }
                     else{
                      ?>
                       <a href="Comments.php?comments=y&comid=<?php echo $row['blog_comment_id']; ?>&blogid=<?php echo $_REQUEST['blogid']; ?>">
                    <button type="button" class="btn btn-info">Approved</button>
                    </a> 
                     <i class="fa fa-check" aria-hidden="true" style="font-size: 20px; float: right;"></i>
                      <?php
                     }
                      ?>
                   
                      
                    
                    
                     </td>
                   <!-- End of Approved -->
                  
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
 
 <!--  Modal show comment -->
 <div id="showcommentmodel" class="modal modal-styled fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title">Comment :</h3>
      </div>
      <div class="modal-body" id="showcommentmodelBody">
        
       </div>
            
      <div class="modal-footer">
        <button type="button" class="btn btn-tertiary" data-dismiss="modal">Close</button>
       
  
    </div>
            </div>
            </div>
</div>
 <!-- End of  Modal show comment -->
<?php include_once("footer.inc.php");?>

<?php include_once("closebody.php");?>

<script src="js/plugins/magnific/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<style type="text/css">
  #show_tag_info{
    display: none;
    color: green;
  }
</style>
<script type="text/javascript">

function showcomment(commentid)
{
   $.ajax({
      url: "Comments.php?show_comments=y&comid="+commentid,
      cache: false,
      success: function(html){
        $("#showcommentmodelBody").html("");
      $("#showcommentmodelBody").append(html);
        $('#showcommentmodel').modal();
    }
  });

}

</script>
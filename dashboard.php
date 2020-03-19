
<?php include_once("header.inc.php");?>


<div class="container">

  <div class="content">

    <div class="content-container">

      

       
  <h3>Dashboard</h3>
      <br>
<?php
   if(isset($_REQUEST['oper']))
  {
     
    }
    else{

?>
        <!-- /.row -->
        <!-- show USERS -->

            <div class="portlet">

                 <div class="portlet-header">

              <h3>
                <i class="fa fa-table"></i>
                 Dashboard&nbsp;&nbsp;
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
                     <th>Data</th>
                  </thead>
                  <tbody>
                    <td>Under the construction</td>
              
                  </tbody>
                </table>

              </div> <!-- /.table-responsive -->
             
            </div> <!-- /.portlet-content -->
              
            <?php
        }
            ?>

          </div> <!-- /.portlet -->

           <!-- End of show USERS -->
      <br>



        <!-- /.row -->

    </div> <!-- /.content-container -->
      
  </div> <!-- /.content -->

</div>




<?php include_once("footer.inc.php");?>

<?php include_once("closebody.php");?>

<script type="text/javascript">
  

  
</script>
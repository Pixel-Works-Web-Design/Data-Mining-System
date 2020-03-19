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
                <div class="portlet-content col-md-8">
                    <div class="table-responsive">

                        <table class="table table-striped table-bordered table-hover table-highlight table-checkable"
                            data-provide="datatable" data-display-rows="10" data-info="true" data-search="true"
                            data-length-change="true" data-paginate="true">
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


                <div class="col-md-4">
      <br>
                    <div class="portlet">

                        <div class="portlet-header">

                            <h3>
                                <i class="fa fa-bar-chart-o"></i> Suvvey Chart
                            </h3>

                        </div>
 
                        <div class="portlet-content">

                            <div id="survey-chart" class="chart-holder-225"></div>
    </div>

                        </div> 

                    </div>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="js/libs/raphael-2.1.2.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <!-- <script src="js/demos/charts/morris/donut.js"></script> -->
<script>
    $(function() {

if (!$('#survey-chart').length) { return false; }

survey();

$(window).resize(target_admin.debounce(survey, 325));

});

function survey() {
$('#survey-chart').empty();
// $.ajax({
//     url: "Inquirys.php?show_Inquirydetail=y&inqid=" + inquiryid,
//     cache: false,
//     success: function(html) {
//         $("#showinquirymodelBody").html("");
//         $("#showinquirymodelBody").append(html);
//         $('#showinquirymodel').modal();
//     }
// });
Morris.Donut({
    element: 'survey-chart',
    data: [
        { label: 'Direct', value: 25 },
        { label: 'Referrals1', value: 40 },
        { label: 'Search engines', value: 25 },
        { label: 'Unique visitors', value: 10 }
    ],
    colors: target_admin.layoutColors,
    hideHover: true,
    formatter: function(y) { return y + "%" }
});
}
</script>
    <?php include_once("footer.inc.php");?>

    <?php include_once("closebody.php");?>

    <script type="text/javascript">



    </script>
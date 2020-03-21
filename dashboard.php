<?php include_once "header.inc.php";?>

<style>
.morris-hover-row-label{
    display:none !important;
}
    .dots{
        position:absolute;
        top:4px;
        left:0px;
        width:13px;
        height:13px;
        border-radius:15px;
    }
    .dots_title{
        margin-left:5px;
    }
    .red{
        background-color:#e74c3c;
    }
    .black{
        background-color:#333333;
    }
    .green{
        background-color:#169f84;
    }
    .blue{
        background-color:blue;
    }
</style>
<div class="container">

    <div class="content">

        <div class="content-container">




            <h3>Dashboard</h3>
            <br>
            <?php
include "conn.inc.php";
$getStudents = mysql_query("SELECT * from students");
$students = mysql_num_rows($getStudents);

?>
            <!-- /.row -->
            <!-- show USERS -->

            <div class="portlet">

                <div class="portlet-content col-md-8">
                <div class="portlet">

<div class="portlet-header">

    <h3>
        <i class="fa fa-bar-chart-o"></i> Survey based on Study Material 
    </h3>

</div>
<div class="portlet-content">
<!-- /.pull-right -->

<div class="clear"></div>

<div class="col-md-12">
    <!-- <div class="col-md-3"><span class="dots red"></span> <span class="dots_title">Books</span></div>

    <div class="col-md-3"><span class="dots blue"></span><span class="dots_title">Ppts</span></div>
    <div class="col-md-3"><span class="dots green"></span><span class="dots_title">Videos</span></div>
    <div class="col-md-3"><span class="dots black"></span><span class="dots_title">Others</span></div> -->
</div>

<div id="line-chart" class="chart-holder bar__"></div>

<div class="col-md-12" style="margin-top:-15px; width:100%; height:50px; background-color:white;">
</div>
<!-- <div id="area-chart" class="chart-holder"></div> -->
</div>
<!-- /.portlet-content -->

</div>
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
                        <input type="hidden" name="students" id="students" value="<?php echo $students; ?>">
                            <div id="survey-chart" class="chart-holder-225"></div>
    </div>

                        </div>

                    </div>

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
<script>
$(function() {

    
function survey() {
$('#survey-chart').empty();

$.ajax({
    url: "surveyChartData.php",
    cache: false,
    dataType: 'JSON',
    success: function(response) {

        Morris.Donut({
    element: 'survey-chart',
    data: response,
    colors: target_admin.layoutColors,
    hideHover: true,
    formatter: function(y) { return y + "%" }
});
    }
});
}

function line () {
	$('#line-chart').empty ();

    
$.ajax({
    url: "surveyStudyLineChartData.php",
    cache: false,
    dataType: 'JSON',
    success: function(response) {
        
        Morris.Line({
		element: 'line-chart',
		data: response,
		xkey: 'y',
        ykeys: ['books', 'ppts','videos','others'],
        labels: ['Books','Ppts', 'Videos', 'Others'],
		lineColors: target_admin.layoutColors
	});

    }
});

}

    survey();
	line ();

    $(window).resize(target_admin.debounce(survey, 325));
	$(window).resize (target_admin.debounce (line, 325));

});

</script>
    <?php include_once "footer.inc.php";?>

    <?php include_once "closebody.php";?>

    <script type="text/javascript">



    </script>
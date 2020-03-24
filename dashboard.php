<?php include_once "header.inc.php";?>

<style>
    .canvasjs-chart-credit{
        display:none;
    }
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
    #line-chart tspan { fill: none; }
    .optionValue{
        padding:5px 10px;
        display:block;
        font-size:15px;
        text-decoration:none !important;
    }
</style>

<?php
include "conn.inc.php";
$getStudents = mysql_query("SELECT * from students");
$students = mysql_num_rows($getStudents);

?>
<div class="container">
    <div class="content" style="padding-bottom:800px;">
        <div class="content-container">
            <h3>Dashboard</h3>
            <br>

            <div class="portlet">
                <div class="portlet-content col-md-8">
                     <div class="portlet">
                            <div class="portlet-header">
                                <h3>
                                 <i class="fa fa-bar-chart-o"></i> Survey based on Study Material 
                                </h3>
                            </div>
                            <div class="portlet-content">
                                 <div id="line-chart" class="chart-holder bar__"></div>
                                <div class="col-md-12" style="margin-top:-15px; width:100%; height:50px; background-color:white;">
                                </div>
                            </div>
                    </div> <!-- end of portlet -->
                </div> <!-- end of content -->
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
            <div class="col-md-12">
                    <div class="portlet">
                        <div class="portlet-header">
                            <h3>
                                <i class="fa fa-bar-chart-o"></i> Survey based on Seleted Options 
                            </h3>
                        </div>
                        <div class="portlet-content">
                        <div class="form-group col-md-5">
                        <br><br>
                            <label class="col-md-12 text-success" style="margin-left:-10px;">Select Survey Option :</label>
                                        <select name="subject" tabindex="2" class="form-control">
                                            <?php
 $getSurbeyOption = mysql_query("SELECT *from survey where value != 'INPUT'");    
while ($row = mysql_fetch_array($getSurbeyOption)) {
        ?>
                                            <option value="<?php echo $row['id'] ?>" style="font-weight:600;" <?php if ($row['id'] === '5') echo 'selected="selected"';  ?>>
                                                <?php echo $row['title']; ?>
                                            </option>
                                            <?php
}
    ?>
                                        </select>
                                        <br>
                                        <div id="options">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-7">
                        <div id="YesNoSurveyChart" style="height: 300px; width: 100%;"></div>
                        </div>
                        </div>
                </div> <!-- end of portlet -->
            </div> <!-- end of content -->
        </div>
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="js/libs/raphael-2.1.2.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/line.js"></script>

<script>
$(function() {
    $('select').on('change', function (e) {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
    
        surveySelect(valueSelected)
});

    function surveySelect(id = 5) {
        $.ajax({
    url: "surveySelectOptionChartData.php?id="+id,
    cache: false,
    dataType: 'JSON',
    success: function(response) {
            
            $("#options").html("");
            let datas = ``;
            response && response.data.map(({label,y})=>{
                datas+=`<div><a href='surveyOptionView.php?surveyid=${id}&option=${label}' class='optionValue'>
                <i class="fa fa-check" aria-hidden="true"></i>&nbsp;
                ${label} &nbsp;&nbsp; (${y}%)
                </a></div>`;
            })
      $("#options").append(datas);
            
        var chart = new CanvasJS.Chart("YesNoSurveyChart", {
                animationEnabled: true,
                title: {
                    text:response.title
                },
                data: [{
                    type: "doughnut",
                    startAngle: 60,
                    indexLabelFontSize: 17,
                    indexLabel: "{label} ({y}%)",
                    toolTipContent: "{label} ({y}%)",
                    dataPoints: response.data ? response.data : []
                }]
            });
            chart.render();
    }
});
    }
    
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
    surveySelect();
    $(window).resize(target_admin.debounce(survey, 325));
	$(window).resize (target_admin.debounce (line, 325));

});

</script>
    <?php include_once "footer.inc.php";?>

    <?php include_once "closebody.php";?>

    <script type="text/javascript">



    </script>
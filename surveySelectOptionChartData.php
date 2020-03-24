<?php 
include "conn.inc.php";
$data = array();
$id =  $_REQUEST['id'];

$getSurvey = mysql_query("SELECT * from survey where id = '$id'");
$survey = mysql_fetch_assoc($getSurvey);

$type = $survey['value'];


$studentSurveys = mysql_query("SELECT * from studentsurvey where survey_id = 
'$id'");
$noOf = mysql_num_rows($studentSurveys);

if($type === 'TOGGLE'){
    $yes = 0;
    $no = 0;
    while ($row = mysql_fetch_array($studentSurveys)) {
       if($row['value'] === "YES") $yes+= 1;
       else $no+= 1;
    }

    $data[] = array( "y"=> number_format(($yes *100) / $noOf,0), "label"=> "YES" );
    $data[] = array( "y"=> number_format(($no *100) / $noOf,0), "label"=> "NO" );
}
else{
    $valueData = array();
    $option = json_decode($survey['options']);

    foreach($option as $key=>$item) {
        $valueData[] = array( "value"=> 0, "label"=> $item );
    }
    while ($row = mysql_fetch_array($studentSurveys)) {
        foreach($option as $key=>$item) {
            if(trim($item) == trim($row['value'])){
                $valueData[$key]['value'] = $valueData[$key]['value'] + 1;
            }
        }
     }
     foreach($option as $key=>$item) {
         $average = ($valueData[$key]['value'] * 100) / $noOf;
        $data[] = array( "y"=> number_format($average,0), "label"=> $item );
    }
}


$final = array( 
    "data"=>$data,
    "title"=>$survey['title']
);
echo json_encode($final);
?>
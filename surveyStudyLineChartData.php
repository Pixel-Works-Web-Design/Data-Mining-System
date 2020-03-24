<?php 
include "conn.inc.php";
$data = array();

 $getSurveyStudy = mysql_query("SELECT * from studentsurvey where survey_id = 11");
 $survey =  mysql_num_rows($getSurveyStudy);
 $i = 2001;

 while ($row = mysql_fetch_array($getSurveyStudy)) {
       $book = 0;
       $ppt = 0;
       $video = 0;
       $other = 0;
       $value = trim($row['value']);

       if($value === "Books") $book = 1;
       if($value === "Ppts") $ppt = 1;
       if($value === "Videos") $video = 1;
       if($value === "Others") $other = 1;

    $data[] = array( 
        "y"=> $i,
         "books"=> $book ,
         "ppts"=> $ppt,
         "videos"=> $video,
         "others"=> $other
        );
    $i++;
        // $data[] = array( "label"=> 'Surveys', "value"=> $row['value'] );
    }

echo json_encode($data);
?>
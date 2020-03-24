<?php 
include "conn.inc.php";
$data = array();

 $getStudents = mysql_query("SELECT * from students where isSurveyFill = 'YES'");
 $students =  mysql_num_rows($getStudents);

   while ($row = mysql_fetch_array($getStudents)) {
        $data[] = array( "label"=> 'Surveys', "value"=> $students );
    }

echo json_encode($data);
?>
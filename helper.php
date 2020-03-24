<?php

function checkSudentEmailAndGr($email,$gr,$id=null) {
    if($id){
        $check = mysql_query("SELECT * from students where (email = '$email' or gr_no = '$gr') AND id != '$id'");
    }
    else{
        $check = mysql_query("SELECT * from students where email = '$email' or gr_no = '$gr'");
    }
    return mysql_num_rows($check);
}

function checkAdminEmail($email,$id=null) {
    if($id){
        $check = mysql_query("SELECT * from admin_master where email = '$email' AND id != '$id'");
    }
    else{
        $check = mysql_query("SELECT * from admin_master where email = '$email'");
    }
    return mysql_num_rows($check);
}

?>
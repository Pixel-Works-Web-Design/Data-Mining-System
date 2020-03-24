<?php include_once("header.inc.php");
   include("conn.inc.php");
   
   if(isset($_REQUEST["saveMcq"]))
   {
    include("conn.inc.php");
    date_default_timezone_set("Asia/Kolkata"); 

    $quizId = $_REQUEST['quizId'];
    $subjectId = $_REQUEST['subjectId'];
    $studentId = $_SESSION['id'];
    $final = 0;

    $get = mysql_query("SELECT * from mcq where quiz_id = '$quizId'");
    $questions = mysql_num_rows($get);

    while($row = mysql_fetch_array($get)){
        $mcqId = $row['id'];
        $value= addslashes($_REQUEST[$mcqId]);
        if($value == $row['answer']){
            $final += 1;
        }
    }

    $check = mysql_query("SELECT * from student_quiz where 	student_id = '$studentId' AND quiz_id = '$quizId'");
    $hasQuiz = mysql_num_rows($check);
    
    if($hasQuiz){
        mysql_query("UPDATE student_quiz set questions = '$questions',
        result = '$final',
        date = CURDATE() where student_id = '$studentId' AND quiz_id = '$quizId'");
    }else{
        mysql_query("INSERT into student_quiz values(
            NULL,
            '$studentId',
            '$quizId',
            '$questions',
            '$final',
            CURDATE()
            )");
    }

    echo "<script type='text/javascript'>window.location='studentQuiz.php?quizId=$quizId&subjectId=$subjectId&done=y'</script>";

   }
?>
<link rel="stylesheet" href="css/checkbox.css">

<style>
    .options{
        /* margin:4px 0; */
    }
    .label-text{
        padding:0px 30% 5px 0; 
    }
    .option-label{
        margin:0 15px 0 5px;
    }
    :required {
  background: red !important;
}
</style>
<?php 
    include "conn.inc.php";
    $sid = $_REQUEST['subjectId'];
    $qid = $_REQUEST['quizId'];
    
    $getSubject = mysql_query("SELECT * from subjects where id = '$sid'");
    $subject = mysql_fetch_assoc($getSubject);
    
    $getquiz = mysql_query("SELECT * from quiz where id = '$qid'");
    $quiz = mysql_fetch_assoc($getquiz);
    
    $getMcq = mysql_query("SELECT * from mcq where quiz_id = '$qid'");
    $count = mysql_num_rows($getMcq);
?>
<div class="container">

    <div class="content">

        <div class="content-container">

            <div class="col-md-10">
            <div class="content-header">
                <h2 class="content-header-title text-center">
                    <?php echo "MCQ of " . $quiz['name']; ?>
                </h2>
            </div>
            </div>
            
            <div class="col-md-2">
            <div class="content-header">
                <h2 class="content-header-title text-right">
                <?php echo "Questions : " . $count; ?>
                </h2>
            </div>
            </div>
    <div class="col-md-12"></div>

            <?php if(isset($_REQUEST['done'])) {?>
                <br><br><br>
            <div class="alert alert-success">
                <a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
                <strong>Your responses were successfully submitted. Thank you! </strong>
            </div>

            <?php 
            echo "<script type='text/javascript'>setTimeout(function(){ window.location='studentResult.php' }, 2000);</script>";
        }
         ?>
        
            <form method="post" name="validate-basic" id="validate-basic" action="studentQuiz.php" class="form parsley-form form-horizontal"
                data-validate="parsley" enctype="multipart/form-data">

                <input type="hidden" name="quizId" id="quizId" value="<?php echo $qid; ?>">
                <input type="hidden" name="subjectId" id="subjectId" value="<?php echo $sid; ?>">
                <?php
     include("conn.inc.php");
     $get = mysql_query("SELECT * from mcq where quiz_id = '$qid'");
     $i = 1;
     
     while($row = mysql_fetch_array($get)){
         $mcqId = $row['id'];
         $A = $row['option_a'];
         $B = $row['option_b'];
         $C = $row['option_c'];
         $D = $row['option_d'];
?>
                <div class="form-group">

                    <label class="col-md-2  text-success">
                    </label>

                    <div class="col-md-7">
                        <label class="col-md-12" style="margin-left:-28px; color:gray; font-family:Comic Sans MS; font-size:17px;">
                            <?php 
                    echo "(".$i.")   " . $row['question'] ;
                    ?>
                        </label>
                        <div style=" margin-top:40px; margin-bottom:17px;">
                        
                            <div class="col-md-12 options">
                                <input type="radio" value="A" name="<?php echo $mcqId ?>"
                                    id="<?php echo $A . $mcqId; ?>" tabindex="2" required>
                                <label for="<?php echo $A . $mcqId; ?>" class="label-text">
                                <span class="option-label">(A)</span><?php echo $A; ?>
                                </label>
                            </div>
                            <div class="col-md-12 options">
                                <input type="radio" value="B" name="<?php echo $mcqId ?>"
                                    id="<?php echo $B . $mcqId; ?>" tabindex="2" required>
                                <label for="<?php echo $B . $mcqId; ?>" class="label-text">
                                <span class="option-label">(B)</span><?php echo $B; ?>
                                </label>
                            </div>
                            <div class="col-md-12 options">
                                <input type="radio" value="C" name="<?php echo $mcqId ?>"
                                    id="<?php echo $C . $mcqId; ?>" tabindex="2" required>
                                <label for="<?php echo $C . $mcqId; ?>" class="label-text">
                                <span class="option-label">(C)</span><?php echo $C; ?>
                                </label>
                            </div>
                            <div class="col-md-12 options">
                                <input type="radio" value="D" name="<?php echo $mcqId ?>"
                                    id="<?php echo $D . $mcqId; ?>" tabindex="2" required>
                                <label for="<?php echo $D . $mcqId; ?>" class="label-text">
                                <span class="option-label">(D)</span><?php echo $D; ?>
                                </label>
                            </div>
                        </div>
                    </div> <!-- /.col -->

                </div> <!-- /.form-group -->
                <!-- <hr> -->

                <?php
                  $i++;
     }
    ?>

<div class="form-group">

<div class="col-md-7 col-md-push-2" id="errorView" style="display:none;">
    <label for="" class="text-danger" style="font-size:20px;">All Question is Required.</label>
    <br>
</div> <!-- /.col -->

</div> <!-- /.form-group -->

                <div class="form-group">

                    <div class="col-md-7 col-md-push-2">
                        <br><br>
                        <button type="submit" class="btn btn-info btn-lg" name="saveMcq" id="saveMcq"
                            tabindex="2">Submit</button>

                    </div> <!-- /.col -->

                </div> <!-- /.form-group -->

            </form>


        </div>
    </div>
</div>

<?php  include_once("footer.inc.php");?>

<?php  include_once("closebody.php");?>
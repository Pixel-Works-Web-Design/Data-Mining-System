<?php include_once "header.inc.php";?>

 <?php
// Insert Record
if (isset($_REQUEST['validate'])) {

    include "conn.inc.php";

    $question = ucfirst(addslashes($_REQUEST['question']));
    $option_a = ucfirst(addslashes($_REQUEST['option_a']));
    $option_b = ucfirst(addslashes($_REQUEST['option_b']));
    $option_c = ucfirst(addslashes($_REQUEST['option_c']));
    $option_d = ucfirst(addslashes($_REQUEST['option_d']));
    $answer = addslashes($_REQUEST['answer']);

    $quizId = $_REQUEST['quizId'];
    $subjectId = $_REQUEST['subjectId'];

    mysql_query("INSERT into mcq(
          id,
          quiz_id,
          question,
          option_a,
          option_b,
          option_c,
          option_d,
          answer
        ) values(
          NULL,
          '$quizId',
          '$question',
          '$option_a',
          '$option_b',
          '$option_c',
          '$option_d',
          '$answer'
          )");

    echo "<script type='text/javascript'>window.location='quizMcq.php?quizId=$quizId&subjectId=$subjectId'</script>";

}

if (isset($_REQUEST['editData'])) {

    include "conn.inc.php";
    $question = ucfirst(addslashes($_REQUEST['question']));
    $option_a = ucfirst(addslashes($_REQUEST['option_a']));
    $option_b = ucfirst(addslashes($_REQUEST['option_b']));
    $option_c = ucfirst(addslashes($_REQUEST['option_c']));
    $option_d = ucfirst(addslashes($_REQUEST['option_d']));
    $answer = addslashes($_REQUEST['answer']);

    $quizId = $_REQUEST['quizId'];
    $subjectId = $_REQUEST['subjectId'];
    $id = $_REQUEST['id'];

    mysql_query("UPDATE mcq set
     question = '$question',
     option_a = '$option_a',
     option_b = '$option_b',
     option_c = '$option_c',
     option_d = '$option_d',
     answer = '$answer'
      where id = '$id'");

    echo "<script type='text/javascript'>window.location='quizMcq.php?quizId=$quizId&subjectId=$subjectId'</script>";

}
// End of Insert Record
?>
<link rel="stylesheet" href="css/checkbox.css">

 <style type="text/css">
 .radio-label{
    width:85px;
    font-size:20px;
    padding-left:35px !important;
 }
  .middle-label{
    margin-top:6px;
  }
  .centerText{
    vertical-align: middle;
     text-align:center;
  }
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
    <?php
include "conn.inc.php";
$sid = $_REQUEST['subjectId'];
$qid = $_REQUEST['quizId'];

$getSubject = mysql_query("SELECT * from subjects where id = '$sid'");
$subject = mysql_fetch_assoc($getSubject);

$getquiz = mysql_query("SELECT * from quiz where id = '$qid'");
$quiz = mysql_fetch_assoc($getquiz);

$label = "MCQ of " . $subject['subject'] . " Subject " . $quiz['name'];
?>
     <div class="content-header">
        <h2 class="content-header-title">
            <?php echo $label; ?>
        </h2>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>
          <li><a href="quiz.php">Quiz</a></li>
          <li class="active"><a href="<?php echo "quizMcq.php?quizId=" . $qid . "&subjectId=" . $sid; ?>">
          <?php echo $label; ?>
          </a></li>
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

if (isset($_REQUEST['remove'])) {
    include "conn.inc.php";
    $id = $_REQUEST['id'];
    $quizId = $_REQUEST['quizId'];
    $subjectId = $_REQUEST['subjectId'];

    mysql_query("DELETE from mcq where id = '$id'");

    echo "<script type='text/javascript'>window.location='quizMcq.php?quizId=$quizId&subjectId=$subjectId'</script>";

} // End of Create
else if (isset($_REQUEST['create'])) {
    ?>
        <!-- Create quizs -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Create MCQ
             </h3>
        </div>
        <div class="portlet-content">
          <form method="post" id="validate-basic" action="quizMcq.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data">

          <input type="hidden" name="quizId" id="quizId" value="<?php echo $_REQUEST['quizId']; ?>">
          <input type="hidden" name="subjectId" id="subjectId" value="<?php echo $_REQUEST['subjectId']; ?>">

              <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>


<div class="col-sm-12"><br></div>

<div class="col-sm-12">
           <label class="col-md-3 text-right">Question :<strong style="color:Red">*</strong></label>
            <div class="col-md-7 form-group">
            <textarea data-required="true" tabindex="2"
                                data-required-message="Question field is Required."
                                data-minlength="3" name="question" id="question"
                                cols="10" rows="4" class="form-control"></textarea>
        </div>
  </div>
  <div class="col-sm-12"><br><br></div>

  <div class="col-sm-12">
           <label class="col-md-3 text-right middle-label">A.<strong style="color:Red">*</strong></label>
            <div class="col-md-7 form-group">
            <input name="option_a" type="text" id="option_a" tabindex="2" class="form-control" data-required="true" data-required-message="Option A Field is Required." />
            </div>
  </div>

  <div class="col-sm-12"><br></div>

  <div class="col-sm-12">
           <label class="col-md-3 text-right middle-label">B.<strong style="color:Red">*</strong></label>
            <div class="col-md-7 form-group">
            <input name="option_b" type="text" id="option_b" tabindex="2" class="form-control" data-required="true" data-required-message="Option B Field is Required." />
            </div>
  </div>

  <div class="col-sm-12"><br></div>

  <div class="col-sm-12">
           <label class="col-md-3 text-right middle-label">C.<strong style="color:Red">*</strong></label>
            <div class="col-md-7 form-group">
            <input name="option_c" type="text" id="option_c" tabindex="2" class="form-control" data-required="true" data-required-message="Option C Field is Required." />
            </div>
  </div>

  <div class="col-sm-12"><br></div>

  <div class="col-sm-12">
           <label class="col-md-3 text-right middle-label">D.<strong style="color:Red">*</strong></label>
            <div class="col-md-7 form-group">
            <input name="option_d" type="text" id="option_d" tabindex="2" class="form-control" data-required="true" data-required-message="Option D Field is Required." />
            </div>
  </div>
  <div class="col-sm-12"><br></div>

  <div class="col-sm-12">
           <label class="col-md-4 text-right middle-label"></label>
            <div class="col-md-1">
              <input type="radio" value="A" name="answer" id="A" tabindex="2" checked>
              <label for="A" class="radio-label">A</label>
            </div>
            <div class="col-md-1">
              <input type="radio" value="B" name="answer" id="B" tabindex="3">
              <label for="B" class="radio-label">B</label>
            </div>
            <div class="col-md-1">
              <input type="radio" value="C" name="answer" id="C" tabindex="4">
              <label for="C" class="radio-label">C</label>
            </div>
            <div class="col-md-1">
              <input type="radio" value="D" name="answer" id="D" tabindex="5">
              <label for="D" class="radio-label">D</label>
            </div>
  </div>

  <div class="col-sm-12"><br><br></div>

  <div class="col-sm-5"></div>
   <div class="col-sm-5">
     <button type="submit" class="btn btn-secondary btn-lg" name="validate" id="validate" tabindex="2" style="margin-left:20px;">Save</button>
   </div>


          </form>
            </div>
            </div>

             <!-- end of button -->
         <!-- End of Create quizs -->

    <?php
} else if (isset($_REQUEST['update'])) {
    include "conn.inc.php";
    $id = $_REQUEST['id'];
    $get = mysql_query("SELECT * from mcq where id = '$id'");
    $data = mysql_fetch_assoc($get);
    ?>
        <!-- Create quizs -->
<div class="portlet">
<div class="portlet-header">
              <h3>
                <i class="fa fa-tasks"></i>
                Update MCQ
             </h3>
        </div>
        <div class="portlet-content">
        <form method="post" id="validate-basic" action="quizMcq.php" class="form parsley-form" data-validate="parsley" enctype="multipart/form-data">

        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
        <input type="hidden" name="quizId" id="quizId" value="<?php echo $_REQUEST['quizId']; ?>">
        <input type="hidden" name="subjectId" id="subjectId" value="<?php echo $_REQUEST['subjectId']; ?>">

            <div class="col-md-12"><div class="alert alert-danger"><strong>(Note:All marked(<strong style="color:Red">*</strong>) are compulsory fields)</strong></div></div>


        <div class="col-sm-12"><br></div>

        <div class="col-sm-12">
        <label class="col-md-3 text-right">Question :<strong style="color:Red">*</strong></label>
          <div class="col-md-7 form-group">
          <textarea data-required="true" tabindex="2"
                              data-required-message="Question field is Required."
                              data-minlength="3" name="question" id="question"
                              cols="10" rows="4" class="form-control"><?php echo $data['question']; ?></textarea>
        </div>
        </div>
        <div class="col-sm-12"><br><br></div>

        <div class="col-sm-12">
        <label class="col-md-3 text-right middle-label">A.<strong style="color:Red">*</strong></label>
          <div class="col-md-7 form-group">
          <input name="option_a" type="text" id="option_a" tabindex="2" class="form-control" data-required="true" data-required-message="Option A Field is Required." value="<?php echo $data['option_a']; ?>"/>
          </div>
        </div>

        <div class="col-sm-12"><br></div>

        <div class="col-sm-12">
        <label class="col-md-3 text-right middle-label">B.<strong style="color:Red">*</strong></label>
          <div class="col-md-7 form-group">
          <input name="option_b" type="text" id="option_b" tabindex="2" class="form-control" data-required="true" data-required-message="Option B Field is Required." value="<?php echo $data['option_b']; ?>"/>
          </div>
        </div>

        <div class="col-sm-12"><br></div>

        <div class="col-sm-12">
        <label class="col-md-3 text-right middle-label">C.<strong style="color:Red">*</strong></label>
          <div class="col-md-7 form-group">
          <input name="option_c" type="text" id="option_c" tabindex="2" class="form-control" data-required="true" data-required-message="Option C Field is Required." value="<?php echo $data['option_c']; ?>"/>
          </div>
        </div>

        <div class="col-sm-12"><br></div>

        <div class="col-sm-12">
        <label class="col-md-3 text-right middle-label">D.<strong style="color:Red">*</strong></label>
          <div class="col-md-7 form-group">
          <input name="option_d" type="text" id="option_d" tabindex="2" class="form-control" data-required="true" data-required-message="Option D Field is Required." value="<?php echo $data['option_d']; ?>"/>
          </div>
        </div>
        <div class="col-sm-12"><br></div>

        <div class="col-sm-12">
        <label class="col-md-4 text-right middle-label"></label>
          <div class="col-md-1">
            <input type="radio" value="A" name="answer" id="A" tabindex="2" <?php if($data['answer'] === "A") echo "checked" ?>>
            <label for="A" class="radio-label">A</label>
          </div>
          <div class="col-md-1">
            <input type="radio" value="B" name="answer" id="B" tabindex="2" <?php if($data['answer'] === "B") echo "checked"; ?>>
            <label for="B" class="radio-label">B</label>
          </div>
          <div class="col-md-1">
            <input type="radio" value="C" name="answer" id="C" tabindex="2" <?php if($data['answer'] === "C") echo "checked"; ?>>
            <label for="C" class="radio-label">C</label>
          </div>
          <div class="col-md-1">
            <input type="radio" value="D" name="answer" id="D" tabindex="2" <?php if($data['answer'] === "D") echo "checked"; ?>>
            <label for="D" class="radio-label">D</label>
          </div>
        </div>

        <div class="col-sm-12"><br><br></div>

        <div class="col-sm-5"></div>
        <div class="col-sm-5">
        <button type="submit" class="btn btn-success btn-lg" name="editData" id="editData" tabindex="2" style="margin-left:20px;">Update</button>
        </div>


        </form>
            </div>
            </div>

             <!-- end of button -->
         <!-- End of Create quizs -->

    <?php
} else {

// Show Data
include "conn.inc.php";
    $get = mysql_query("SELECT *from mcq where quiz_id = '$qid'");
    $i = 1;
    $count =  mysql_num_rows($get);
    ?>
         <div class="portlet">
                 <div class="portlet-header">

              <h3>
                <i class="fa fa-table"></i>
                Multiple Choice Question (MCQ)&nbsp;&nbsp;

                <?php 
                if($count < 10){
                  ?>
                  
                <a href="<?php echo "quizMcq.php?quizId=" . $qid . '&subjectId=' . $sid . "&create=y"; ?>">
                <i class="fa fa-plus-square"></i>
                </a>

                  <?php
                }
                ?>
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
                    <th style="text-align:center;">No</th>
                    <th>Question</th>
                    <th style="text-align:center;" >A</th>
                    <th style="text-align:center;">B</th>
                    <th style="text-align:center;">C</th>
                    <th style="text-align:center;">D</th>
                    <th style="text-align:center;">Right Answer</th>
                    <th style="width:100px;">Update</th>
                    <th style="width:100px;">Delete</th>
                    </tr>

                  </thead>
                  <tbody>
                     <?php

    while ($row = mysql_fetch_array($get)) {
        ?>
                    <tr>

                    <td style="text-align: center; vertical-align: middle;"><?php echo $i; ?>
                    </td>

                    <td style="vertical-align: middle;">
                      <?php echo $row['question']; ?>
                     </td>

                     <td class="centerText">
                      <?php echo $row['option_a']; ?>
                     </td>
                     <td class="centerText">
                      <?php echo $row['option_b']; ?>
                     </td>
                     <td class="centerText">
                      <?php echo $row['option_c']; ?>
                     </td>
                     <td class="centerText">
                      <?php echo $row['option_d']; ?>
                     </td>
                     <td class="centerText" style="font-weight:bold;">
                      <?php echo $row['answer']; ?>
                     </td>

                    <td><a href="<?php echo "quizMcq.php?quizId=" . $qid . '&subjectId=' . $sid . "&update=y&id=" . $row['id']; ?>"><button class="btn btn-secondary" type="button"> <i class="fa fa-pencil-square-o"></i> </button></a></td>

                      <td>
                        <a href="<?php echo "quizMcq.php?quizId=" . $qid . '&subjectId=' . $sid . "&remove=y&id=" . $row['id']; ?>" onclick="return confirm('Are you sure you have to Remove this  MCQ  ??')"><button class="btn btn-primary"> <i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                    </td>
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
} // End of Show Data

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


<?php include_once "footer.inc.php";?>

<?php include_once "closebody.php";?>

<script src="js/plugins/magnific/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
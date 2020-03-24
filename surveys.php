<?php include_once("header.inc.php");
   include("conn.inc.php");
   
   if(isset($_REQUEST["saveSurvey"]))
   {
    include("conn.inc.php");
    
    $get = mysql_query("SELECT * from survey");
    $studentId = $_SESSION['id'];

    while($row = mysql_fetch_array($get)){
        $survey= $row['id'];
        $value= addslashes($_REQUEST[$survey]);

        if($row['hasOther'] === "YES"){
            $otherValue= addslashes($_REQUEST[$survey.'otherValue']);
            mysql_query("INSERT into studentSurvey values(NULL,'$studentId','$survey','$value','$otherValue')");
        }
        else{
            mysql_query("INSERT into studentSurvey values(NULL,'$studentId','$survey','$value',NULL)");
        }
    }

    mysql_query("UPDATE students set isSurveyFill = 'YES' where id = '$studentId'");
    $_SESSION['isSurveyFill'] = 'YES';

    echo "<script type='text/javascript'>window.location='surveys.php?done=y'</script>"; 
	}
?>
<link rel="stylesheet" href="css/checkbox.css">

<div class="container">

    <div class="content">

        <div class="content-container">


            <div class="content-header">
                <h2 class="content-header-title text-center">Survey Form</h2>
            </div>

            <?php if(isset($_REQUEST['done'])) {?>
            <div class="alert alert-success">
                <a class="close" data-dismiss="alert" href="#" aria-hidden="true">×</a>
                <strong>Succesfully! </strong> Survey Created , Thanks For Your Feedback.
            </div>

            <?php 
            echo "<script type='text/javascript'>setTimeout(function(){ window.location='dashboard.php' }, 2000);</script>";
        }
         ?>
            <form method="post" id="validate-basic" action="surveys.php" class="form parsley-form form-horizontal"
                data-validate="parsley" enctype="multipart/form-data">

                <?php
     include("conn.inc.php");
     $get = mysql_query("SELECT * from survey");
     $i = 1;
     
     while($row = mysql_fetch_array($get)){
?>
                <div class="form-group">

                    <label class="col-md-2  text-success">
                    </label>

                    <div class="col-md-7">
                        <label class="col-md-12" style="margin-left:-28px; color:gray; font-family:Comic Sans MS; font-size:17px;">
                            <?php 
                    echo "(".$i.")   " . $row['title'] ;
                    ?>
                        </label>
                        <?php
                        if($row['value'] === "INPUT"){
                            ?>
                        <div class="form-group">
                            <textarea data-required="true" tabindex="2"
                                data-required-message="<?php echo str_replace('?', '', $row['title']) . ' field is Required.'; ?>"
                                data-minlength="2" name="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>"
                                cols="10" rows="4" class="form-control"></textarea>
                        </div>
                        <?php
                        }
                        else if($row['value'] === "TOGGLE"){
                            ?>
                        <div style=" margin-top:40px; margin-bottom:17px;">
                            <div class="col-md-3">
                                <input type="radio" value="YES" name="<?php echo $row['id']; ?>"
                                    id="<?php echo $row['id']; ?>" tabindex="2">
                                <label for="<?php echo $row['id']; ?>">Yes</label>
                            </div>
                            <input type="radio" value="NO" name="<?php echo $row['id']; ?>"
                                id="<?php echo $row['title']; ?>" tabindex="2" checked>
                            <label for="<?php echo $row['title']; ?>">NO</label>
                        </div>
                        <?php
                        }
                        else{
                            ?>
                        <div style="margin-left:20px; margin-top:40px; margin-bottom:20px;">
                            <?php
                            $hasOther = $row['hasOther'] === 'YES';
                                $data = json_decode($row['options']);
                                foreach($data as $key=>$item) {
                                    $idName='';
                                    if($hasOther && $key+1 === count($data)){
                                        $idName = $item.$row['id'].'hasOther';
                                    }
                                    else{
                                        $idName = $item.$row['id'];
                                    }
                                   ?>
                            <input type="radio" name="<?php echo $row['id']; ?>" id="<?php echo $idName; ?>"
                                tabindex="2" <?php if($key === 0) echo 'checked'; ?> value="<?php echo $item; ?> ">
                            <label for="<?php echo $idName; ?>">
                                <?php echo $item; ?>
                            </label>
                            <span style="margin-left:15px;"></span>


                            <?php
                                  }
                                  ?>
                        </div>
                        <?php
                        if($row['hasOther'] === 'YES'){
                            ?>
                        <input name="<?php echo $row['id'].'otherValue'; ?>" type="text"
                            id="<?php echo $row['id'].'otherValue'; ?>" tabindex="2" class="form-control"
                            style="display:none; margin-left:20px; margin-top:10px;" />
                        <?php
                        }
                        }
                        ?>
                    </div> <!-- /.col -->

                </div> <!-- /.form-group -->
                <!-- <hr> -->

                <?php
                  $i++;
     }
    ?>

                <div class="form-group">

                    <div class="col-md-7 col-md-push-3">
                        <br>
                        <button type="submit" class="btn btn-info btn-lg" name="saveSurvey" id="saveSurvey"
                            tabindex="2">Save Information</button>

                    </div> <!-- /.col -->

                </div> <!-- /.form-group -->

            </form>


        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(document).ready(function() {
    $('input[type="radio"]').click(function() {
        var name = $(this).attr("name");
        var id = $(this).attr("id");
        var inputView = `${name}otherValue`
        var hasOther = id.search("hasOther")

        if (hasOther >= 0) {
            $(`#${inputView}`).css("display", "block")
        } else {
            $(`#${inputView}`).css("display", "none")
            $(`#${inputView}`).val("")
        }
    });
});
</script>

<?php  include_once("footer.inc.php");?>

<?php  include_once("closebody.php");?>
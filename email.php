<?php 

function sendEmailToStudent($name,$email,$password) {
    
    $message="<table border='0'>
    <tr>
    <td>
    hii ".$name.",
    </td>
    </tr>
    <tr>
    <td>
    You have been registered for a Data Mining System Panel. Please use below credentials for Login.
    </td>
    </tr>
    <tr><td><br>UserName :   ".$email."</td></tr>
    <tr><td>Password :  ".$password."</td></tr>
    <tr><td><br>Thanks & Regards <br> <strong><a href='http://www.pixelworkswebdesign.com/'>Data Mining System</a></strong></td></tr>
    </table>";

	require_once('sendmail/class.phpmailer.php');

        $mail = new PHPMailer();

    try {
        $mail->IsSMTP(); 
        $mail->SMTPAuth   = true; 
        $mail->SMTPDebug  = 1;    
        $mail->SMTPSecure= "tls";
        $mail->Host= "smtp.gmail.com";
        $mail->Port="587";				 

        $mail->Username   = "pixelworkswebdesign2007@gmail.com"; 
        $mail->Password   = "Pixel_@2007";  

        $mail->SetFrom('pixelworkswebdesign2007@gmail.com', 'Data Mining System');

        $mail->Subject    = 'Welcome To Data Mining System Panel';
        $mail->MsgHTML($message);

        $mail->AddAddress($email, "");

        $mail->Send();
    } catch (phpmailerException $e) {
        echo $e->errorMessage(); 
    }
}

?>
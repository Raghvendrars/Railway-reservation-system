<?php session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
extract($_POST);

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

$generator = "1357902468"; 
	$ans = ""; 
	for ($i = 1; $i <= 6; $i++) { 
		$ans .= substr($generator, (rand()%(strlen($generator))), 1); 
	}  // Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '*******';                 // SMTP username
    $mail->Password = '*******';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // enablesble TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('bookMyJourneyOTP@otp.com', 'Akki OTP');
    $em = $email;
    $nm = User;
    $mail->addAddress("$em", "$nm");     // Add a recipient
        
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Forgot Password OTP';
    $mail->Body    = "Hello $nm, Your OTP for Project Name is $ans";
    $mail->AltBody = "Hello $nm, Your OTP for Project Name is $ans";
    $mail->send();
    echo 'Message has been sent';
    $_SESSION['otp']= "$ans";
    $_SESSION['name']="User";
    $_SESSION['email']= $email;
    header("location:otpinput.php"); 
    exit();
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


 ?>
<?php
//$captcha=$_POST['g-recaptcha-response'];
$captcha=true;
if(!$captcha) {
    echo "Please check the captcha form.";
    $return='fail';            
}else{
  header("Content-Type:text/html; charset=utf-8");

  $name=$_POST['name'];
  $email=$_POST['email'];
  $Bcc=$_POST['email'];
  $message=$_POST['detail'];

  //$recEmail = "goox@chachinggroup.com";
  $recEmail = "info@mrb.com";


  include_once('class/mailer/class.phpmailer.php');
  $mail= new PHPMailer(); // defaults to using php "mail()"
  //$mail->SMTPDebug = 2;  
  /*$mail->IsSMTP();
  $mail->SMTPAuth = true;
  $mail->Username = "senderapp24@gmail.com";
  $mail->Password = "{1_hRdL&";
  $mail->SMTPSecure = "ssl";  
  $mail->Host = "smtp.gmail.com";
  $mail->Port = "465";*/
  //$mail->From = 'no-reply@citrushotelcardiff.com';
  
  $mail->IsHTML(true);
  $mail->CharSet = "utf-8";
  $mail->From ="website@compasshospitality.com";
  $mail->FromName = $name;
  /*$mail->SetFrom(strval($email), strval($name));*/
  $mail->Subject = "GENERAL ENQUIRIES : MAGNOLIAS RATCHADAMRI BOULEVARD";
  $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
  //$mail->MsgHTML(eregi_replace("[\]",'',"<strong>Name : </strong>".$name." (".$Bcc.")&nbsp;&nbsp;&nbsp;&nbsp;<br><strong>Phone Number : </strong>".$phoneNM."<br><br><strong>Comments : </strong>".$comments));
  $mail->MsgHTML("
    <strong>Name : </strong>".$name."<br><br>
    <strong>Email Address : </strong>".$email."<br><br>
    <strong>Message : </strong>".$message);

  $mail->AddAddress($recEmail);
  $mail->addReplyTo($email, $name);
  // $mail->AddCC("jejee@chachinggroup.com","goox");

  if(!$mail->Send()){
      echo "Send Fail";
      $return='failed';
      //$error=$mail->ErrorInfo;
  }else{
      echo "Done";
      $return='true'; //sent
  }
  $mail->ClearAllRecipients();
 
}

?>
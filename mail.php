<?php

/* Namespace alias. */
# use PHPMailer\PHPMailer\PHPMailer;
# use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */
require '/home/yoeman/vendor/composer/autoload_real.php';

/* If you installed PHPMailer without Composer do this instead: */
/*
require '/home/bishwo/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '/home/bishwo/vendor/phpmailer/phpmailer/src/Exception.php';
require '/home/bishwo/vendor/phpmailer/phpmailer/src/SMTP.php';
*/

/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer;

/* Open the try/catch block. */
try {
   /* Set the mail sender. */
   $mail->setFrom('ykoirala69@gmail.com', 'Yoeman Koirala');

   /* Add a recipient. */
   $mail->addAddress('ykoirala69@gmail.com', 'Yoeman Koirala');

   /* Set the subject. */
   $mail->Subject = 'Force';

   /* Set the mail message body. */
   $mail->Body = 'There is a great disturbance in the Force.';

   /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{
   /* PHPMailer exception. */
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage();
}

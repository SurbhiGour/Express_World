<?php

include "dbinfo.php";


    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];    
    $message=$_POST['message'];
    
   


      //code start here for image upoading,,,//


         // $query=mysql_query($connection,"INSERT INTO contact(name,email,phone,message) VALUES('$name','$email','$phone','$message')")or die(mysql_error($connection));

         $sql = mysqli_query($conn,"INSERT INTO `create` (`name`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$message')")or die(mysqli_error($conn));



         if ($sql == 1)
         {
                
                require_once('PHPMailer_5.2.4/class.phpmailer.php');
                $mail= new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPDebug=1;
                $mail->SMTPAuth=true;
                $mail->SMTPSecure='tls';
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->IsHTML (true);
                // $mail->Username = 'cs@e-bc.in';
                // $mail->Password = 'cs@2017';
                $mail->Username = 'ashutosh12.ebc@gmail.com';
                $mail->Password = '7276776574';
                $mail->SetFrom("ashutosh12.ebc@gmail.com");

                $mail->Subject="EXPRESS WORLD ENQUIRY";
                $mail->Body= "<b><h3>Thankyou for contact us, we will get back soon.</h3></b>". "<BR>"."Client Name:".$name. "<BR>"."Email-Id:".$email."<br>"."Subject:".$subject."<br>"."Enquiry Specification:".$message;

                // $mail->MsgHTML($message);
                $mail->AddAddress($email);
                
                $mail->AddCC("expressworld2019@gmail.com");
               
                if(!$mail->Send()) {
                    // echo "Mailer Error" . $mail->ErrorInfo;
                    echo "2";
                }
                else{
                    echo "1";
                }
             }
             else
             {
              echo "data fail".mysqli_error($conn);
             }//end mmail body//


 ?>
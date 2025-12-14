<?php

     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\Exception;

     require 'vendor/autoload.php';

     if (isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        try{
            $mail =new PHPMailer(true);

            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            //sender's email account
            $mail->Username = "serey.phem.12022006@gmail.com";
            $mail->Password = "nyaf dqcq ucue xfne";

            $mail->setFrom("serey.phem.12022006@gmail.com", "Website Contact");

            //receiver's email account
            $mail->addAddress("serey.phem@student.passerellesnumeriques.org");
            $mail->addReplyTo($email, $name);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = nl2br($message);

            if (!empty($_FILES['attachments']['name'][0])) {
            foreach ($_FILES['attachments']['tmp_name'] as $key => $tmp_name) {
                $fileName = $_FILES['attachments']['name'][$key];
                $mail->addAttachment($tmp_name, $fileName);
                }
            }

            $mail->send();

            echo "Message has been sent successfully!";

        }catch (Exception $e){
            echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";

        }
     }

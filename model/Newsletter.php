<?php

// The File Path is looked at from the index.php file

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once './vendors/Exception.php';
require_once './vendors/PHPMailer.php';
require_once './vendors/SMTP.php';

require_once("./model/Model.php");
require_once("./model/Customer.php");
require("./conn.php");

class Newsletter implements Model {


    public static function sendToAllCustomers(){

        $mail = new PHPMailer(true);
        $email_subject = $_POST["newsletter_subject"];
        $email_message = $_POST["newsletter_message"];
        $customers = Customer::findAll();

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                       
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'keventep94@gmail.com';                 
            $mail->Password   = 'ukfbcqtktifljkkp';                     
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;                                    

            //Recipients
            $mail->setFrom('keventep94@gmail.com', 'RUPP Project Group 6');
    
            while($customer = $customers->fetch(PDO::FETCH_ASSOC)) {

                $mail->addAddress($customer["email"], $customer["first_name"]);     
            }


            $mail->addReplyTo('keventep94@gmail.com', 'Newsletter');
            $mail->addCC('keventep94@gmail.com');
            $mail->addBCC('keventep94@gmail.com');

            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = $email_subject;
            $mail->Body    = $email_message;
            $mail->AltBody = strip_tags($email_message);

            $mail->send();
            return 'Message has been sent successfully';

        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }


    public static function sendToNewsletterCustomers(){

        $mail = new PHPMailer(true);
        $email_subject = $_POST["newsletter_subject"];
        $email_message = $_POST["newsletter_message"];
        $customers = Customer::findAllSubscribers();

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                       
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'keventep94@gmail.com';                 
            $mail->Password   = 'ukfbcqtktifljkkp';                     
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;                                    

            //Recipients
            $mail->setFrom('keventep94@gmail.com', 'RUPP Project Group 6');
    
            while($customer = $customers->fetch(PDO::FETCH_ASSOC)) {

                $mail->addAddress($customer["email"], $customer["first_name"]);     
            }


            $mail->addReplyTo('keventep94@gmail.com', 'Newsletter');
            $mail->addCC('keventep94@gmail.com');
            $mail->addBCC('keventep94@gmail.com');

            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = $email_subject;
            $mail->Body    = $email_message;
            $mail->AltBody = strip_tags($email_message);

            $mail->send();
            return 'Message has been sent successfully';

        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public static function sendToAdmin(){

        $mail = new PHPMailer(true);
        $sender_name = $_POST["contact_name"];
        $sender_message = $_POST["contact_message"];
        $sender_email = $_POST["contact_email"];

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                       
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'keventep94@gmail.com';                 
            $mail->Password   = 'ukfbcqtktifljkkp';                     
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;                                    

            //Recipients
            $mail->setFrom($sender_email, $sender_name);
    
            $mail->addAddress("keventep94@gmail.com", "RUPP Group 6");     

            $mail->addReplyTo($sender_email, 'Contact');
            $mail->addCC("keventep94@gmail.com");
            $mail->addBCC("keventep94@gmail.com");

            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = "Contact Information";
            $mail->Body    = $sender_message;
            $mail->AltBody = strip_tags($sender_message);

            $mail->send();
            return 'Message has been sent successfully';

        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }

    public static function findAll() {

        
    } 

    public static function findOne($newsletter_id){

        
    }

    public static function create(){

        

    }

    public static function update(){

        
    }

    public static function delete($newsletter_ids){

        
    }

  }

?>
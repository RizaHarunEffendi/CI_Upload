<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {

    public function index()
    {
        /* Load PHPMailer library */
        $this->load->library('phpmailer_lib');
        /* PHPMailer object */
        $mail = $this->phpmailer_lib->load();

        /* SMTP configuration */
        $mail->isSMTP();
        $mail->Host     = 'tangankakipemuda.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'admin@tangankakipemuda.com';
        $mail->Password = 'rikyirmanilam2016';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;

        $mail->setFrom('admin@tangankakipemuda.com', 'Tangan Kaki Pemuda'); // user email
        $mail->addReplyTo('admin@tangankakipemuda.com', ''); //user emai

        // Add a recipient
        $mail->addAddress('izaeffendi99@gmail.com'); //email tujuan pengiriman email
            
        // Email subject
        $mail->Subject = 'Test Email Codeigniter'; //subject email

         // Set email format to HTML
        $mail->isHTML(true);
            
         // Email body content
        $mailContent = "
             <h2>Testing Email</h2>
             <p>Laporan email SMTP Codeigniter dengan PHPMailer.</p>"; // isi email
        $mail->Body = $mailContent;

          /* Send email */
        if(!$mail->send()){
            echo 'Mail could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Mail has been sent';
        }
    }

}

/* End of file Mail.php */

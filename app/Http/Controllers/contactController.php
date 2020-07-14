<?php

namespace App\Http\Controllers;
include 'phpmailer/PHPMailerAutoload.php';

use Illuminate\Http\Request;
use App\contactus;
use DB;

class contactController extends Controller
{
    public function index(){

        return view('contact');
    }

    public function add(request $request){
        $contacts = new contactus;

        $data = [
            'name' => $request->name,
            'message' => $request->message,
            'email' => $request->email
           
    
    
            ];

        


        
         
$message= $data['message'];
$name='mahmoud';
$email='engmahmoudelsayed2019@gmail.com';
$subject='';  
$mail = new \PHPMailer();
               $mail->isSMTP();
               $mail->Host     = "smtp.mailtrap.io";
               $mail->Username = "81a1ddbd73d28e";
               $mail->Password = "ee94cdb552f425";
               $mail->Port     = "2525";
               $mail->SMTPSecure = 'tls';
                $mail->SMTPAuth = true;
                $mail->isHTML(true);
                $mail->CharSet = 'UTF-8';
                $mail->SetFrom($data['email']);
                $mail->addAddress($email);
                $mail->Subject = 'This is a test email';
                $mail->Body = '<p>';
                $mail->Body .=  "your message ".$data['message'];
                $mail->Body .=  '</p>';
 
                           

          if($mail->send()) {
             echo 'email send successfuly Please Check Your Email';
             
         }else {
             echo 'there is error';
            }      
     


    }
}

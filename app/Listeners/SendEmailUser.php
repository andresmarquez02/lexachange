<?php

namespace App\Listeners;

use App\Events\SendEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

class SendEmailUser
{
    public function handle(SendEmail $event)
    {
        // echo $event->message['id'];
    //    $i = 0;
    //     while (true) {
    //         $mail = new PHPMailer(true);
    //         try {
    //             // Server settings
    //             $mail->isSMTP();                                            //Send using SMTP
    //             $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    //             $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    //             $mail->Username   = 'soyandresprogramador@gmail.com';                     //SMTP username
    //             $mail->Password   = '28518939';                               //SMTP password
    //             $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    //             $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    //             //Recipients
    //             $mail->setFrom('soyandresprogramador@gmail.com', env('APP_NAME'));
    //             $mail->addAddress($event->message['email'],$event->message['name']);
    //             //Content
    //             $mail->isHTML(true);                                  //Set email format to HTML
    //             $mail->Subject = 'Lexachange. El futuro es ahora';
    //             $mail->Body    = view($event->message['view'])->with('name',$event->message['name'])->with('id',$event->message['id']);
    //             $mail->send();
    //             break;
    //         } catch (Exception $e) {
    //             $i++;
    //             if($i > 2) break;
    //         }
    //     }
    }
}

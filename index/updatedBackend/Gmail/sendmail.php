<?php
    class SendMail{
        private $subject = "Email Notification";
        private $sender;
        private $emailTemplate = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Email Template</title>
                <style>
                    body{
                        font-family: Arial, Helvetica, sans-serif;
                        background-color: #f0f0f0;
                        padding: 20px;
                    }
                    h1{
                        color: #00ff40;
                    }
                    h3{
                        color: green;
                    }
                    p{
                        font-size: 16px;
                        line-height: 1.4;
                        color: #333333;
                    }
                    a{
                        color: #0066cc;
                        text-decoration: none;
                    }
                    .container{
                        background-color: #ffffff;
                        padding: 20px;
                        border-radius: 5px;
                    }
                </style>
            </head>
            <body>
                <div class="container">
                    
                    <h1>Greetings, from Ourlady Parish System!</h1>
                    <p>You have a notification from [Name]:</p>
                    <ul>
                        <li>Full details here : </li>
                        <li>Title : [Title]</li>
                        <li>Date : [Date]</li>
                        <li>Time : [Time]</li>
                    </ul>
                    <h3>Your Request Status : [Status]</h3>
                    <p>Kindly check your account for more details.</p>
                    <p>Best regards,<br>Ourlady Parish</p>
                </div>
            </body>
            </html>
            ';
        public function __construct($receiver,$status,$senderM,$senderName,$title,$date,$time)
        {
            // $this->senderM = $senderM;
            $this->sender = "From:$senderName <$senderM>"."\r\n";
            $this->sender .="MIME-Version: 1.0". "\r\n";
            $this->sender .="Content-Type: text/html; charset=UTF-8". "\r\n";
            $this->emailTemplate = str_replace('[Name]',$senderM,$this->emailTemplate);
            $this->emailTemplate = str_replace('[Status]',$status,$this->emailTemplate);
            $this->emailTemplate = str_replace('[Title]',$title,$this->emailTemplate);
            $this->emailTemplate = str_replace('[Date]',$date,$this->emailTemplate);
            $this->emailTemplate = str_replace('[Time]',$time,$this->emailTemplate);
            // $this->emailTemplate = str_replace('[ReSched]',$reSched,$this->emailTemplate);
            // $this->emailTemplate = str_replace('[ProductLink]','http://localhost/church/html/booking-table.php',$this->emailTemplate);
            if(mail($receiver, $this->subject, $this->emailTemplate, $this->sender,$senderM)){
                // echo "Email sent successfully to $receiver";
                return true;
            }else{
                return false;
            }
        }
    }
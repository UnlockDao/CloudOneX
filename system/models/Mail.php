<?php
class Mail{

    public static function send($to,$subject,$message,$config)
    {

        $transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 587))
            ->setUsername('8d4838ddc644a1')
            ->setPassword('6acc80ff295d3a')
        ;

        $mailer = new Swift_Mailer($transport);

        $message = (new Swift_Message('Wonderful Subject'))
            ->setFrom(['john@doe.com' => 'John Doe'])
            ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
            ->setBody($message,'text/html')
        ;

        $result = $mailer->send($message);

        dd($result);

    }

}
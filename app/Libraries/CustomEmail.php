<?php


namespace App\Libraries;

class CustomEmail{

    public function sendEmail()
    {
        $to = 'arvindomkar1994@gmail.com';
        $subject = 'SMS | Email Verification Link';
        $message = 'This is test from codeignitor4';

        $email = \Config\Services::email();
        $email->setFrom('twominutesvideoes@gmail.com', '2 Minutes');
        $email->setTo('arvindomkar1994@gmail.com');
        // $this->email->setCC('another@another-example.com');
        // $this->email->setBCC('them@their-example.com');

        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');

        if($email->send()){
            return 'success';
        }else{
            return 'error';
        }
    }



}
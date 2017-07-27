<?php

namespace App\Http\Controllers;

use \Mail;
use Illuminate\Http\Request;


class MailController extends Controller{
    public function basic_email(){
        $data = [
            'name'=>'Bryan',
            'text'=>'mail',
            'email'=>'bryanisimo@gmail.com'
        ];

        Mail::send('email.test', $data, function($message) use ($data){
            $message->to('axel@hanami.ninja', 'Axel G')->subject('Mensaje de'. $data['name']);
            $message->from($data['email'], $data['name']);
        });
        echo 'Listo';
    }
}

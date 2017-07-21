<?php

namespace App\Http\Controllers;

//use Mail;
use Illuminate\Http\Request;


class MailController extends Controller{
    public function basic_email(){
        $data = ['name'=>'Axel'];
        \Mail::send(['text'=>'mail'], $data, function($message){
            $message->to('latiosaxe@gmail.com', 'Axel G')->subject('Test');
            $message->from('noreplay@text.com', 'Axel');
        });
        echo 'Listo';
    }
}

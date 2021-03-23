<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SingupEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $data = [
            'title' => 'Mail From Flick.id',
            'body' => 'This is for testing Mailing Service'
        ];
        Mail::to("bmasshidiqy@gmail.com")->send(new SingupEmail($data));
        return "Email Sent";
    }
}

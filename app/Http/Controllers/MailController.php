<?php

namespace App\Http\Controllers;

use App\Mail\SignupEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
   public function sendEmail(){
       $data=[
           'name'=>"Hamidullah",
           'verification_code'=>"Wewereru"
       ];
       Mail::to('hamidullahnazary2@gmail.com')->send(new SignupEmail($data));
   }
}

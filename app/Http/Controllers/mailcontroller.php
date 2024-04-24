<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Mail\Email;

class MailController extends Controller
{
     public function index(){
        $user=auth::user()->email;
        $emaildata = [
            'title' => 'Mail from me',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus doloremque vero consequatur cupiditate nisi odio.'
        ];     
        Mail::to($user)->send(new Email($emaildata));
        return view('site.thank');
     }
    
}


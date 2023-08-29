<?php

namespace App\Http\Controllers;
use App\Mail\ContactUs;
use App\Http\Requests\SendStoreRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class SendController extends Controller
{
    public function send(SendStoreRequest $request){
        $email = "service@qbitsinc.com";
        Mail::to($email)->send(new ContactUS($request->all()));
        return redirect('/#contact');
    }
}

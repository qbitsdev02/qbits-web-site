<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendStoreRequest;
use Illuminate\Http\Request;
use App\Models\Contact;


class SendController extends Controller
{
    
    public function send(SendStoreRequest $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone_number = $request->phone_number;
        $contact->body = $request->body;
        $contact->save();
        return redirect('/#contact');
    }
}

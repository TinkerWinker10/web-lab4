<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    //
    public function submit(Request $req){
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->phone = $req->input('phone');
        $contact->time = $req->input('time');

        $contact->save();

        return redirect()->route('main');
    }
}

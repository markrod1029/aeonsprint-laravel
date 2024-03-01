<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        Mail::to('markrodcadayong17@gmail.com')->send(new ContactMail(
            $request->name,
            $request->email,
            $request->body,
        ));

        Return redirect()->back();

    }  
}

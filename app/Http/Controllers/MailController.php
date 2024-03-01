<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Mail\MailNotify;

class MailController extends Controller
{
    //

    public function index() 
    {
        $data = [

            'subject' => 'Mail Tutorial',
            'body' => 'Hello Word'
        ];
        try
        {
            Mail::to('aeon.redstone@gmail.com')->send(new MailNotify($data));
            return response()->json(['Great check you Email box']);

        } catch(Exception $th) 
        {
            return response()->json(['Sorry Somethinf went wrong']);

        }
    }
}

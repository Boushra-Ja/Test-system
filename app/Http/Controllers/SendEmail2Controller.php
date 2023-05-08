<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use App\Models\Code;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmail2Controller extends Controller
{
    public function basic_email(Request $request)
    {
        Mail::to($request->mail)->send(new NotifyMail($request->name,$request->code));

    }

    public function make_code(){

        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $pin = mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];

        // shuffle the result
        $string = str_shuffle($pin);

        $code=  Code::create([
            'code' => $string ,

        ]);

        return response()->json($code, 200);
    }


    

}

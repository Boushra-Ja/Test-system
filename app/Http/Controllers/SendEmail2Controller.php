<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
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
        return response()->json(["code"=>$string], 200);
    }

    function register(Request $request){

        $user=  User::create([
              'name' => $request->name ,
              'email'=>$request->email,
              'password'=>$request->password,
          ]);

          $token = $user->createToken('TestToken')->plainTextToken;
          if($user)
              return response()->json([
                   'message'=>'Store user successfully',
                   'user' => $user,
                   'token' => $token,
              ]);

       else {
            return $this->sendErrors('failed in Store user', ['error' => 'not true']);
  }


      }

      function login(Request $request){

        $user=  User::where('email',$request->email)->first();
          if($user)
          if($request->password == $user->password)
              return response()->json([
                   'message'=>'successfully',
                   'user' => $user,
              ]);

       else {
            return $this->sendErrors('this account is not true', ['error' => 'not true']);
  }


      }


}

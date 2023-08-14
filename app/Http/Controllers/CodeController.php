<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Http\Requests\StoreCodeRequest;
use App\Http\Requests\UpdateCodeRequest;
use App\Models\User;
use Illuminate\Http\Request;

class CodeController extends Controller
{
    function verification(Request $request){

        $code=Code::where('id',$request->id)->first();

        if($code->code == $request->code){

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
              return response()->json([
                'message'=>'failed in Store user'
           ]);
        }
  }
  else
  {
    return response()->json([
        'message'=>'error number'
   ]);

  }
      } //

      function login(Request $request){

        $user=  User::where('email',$request->email)->first();
          if($user){
            $token = $user->createToken('TestToken')->plainTextToken;
            if($request->password == $user->password)
                return response()->json([
                    'message'=>'successfully',
                    'user' => $user,
                    'token' => $token,

                ]);
            else
            return response()->json([
                'message'=>'this password is not true',
            ]);
            }

       else {
        return response()->json([
            'message'=>'this acount is not true',
        ]);  }


      }

      function login_data(Request $request){



        $mail_exisit=User::where('email',$request->mail)->first();
        if($mail_exisit){
            return response()->json([
                'message'=>'the email already exists'
           ]);
        }

        $user=  User::create([
            'name' => $request->name ,
            'email'=>$request->email,
            'password'=>'password',
        ]);

        $token = $user->createToken('TestToken')->plainTextToken;
        if($user)
            return response()->json([
                 'message'=>'Store user successfully',
                 'user' => $user,
                 'token' => $token,
            ]);

     else {
          return response()->json([
            'message'=>'failed in Store user'
       ]);
    }


      }

      function login_with_id(Request $request){

        $user=  User::where('id',$request->id)->first();
          if($user){
            $token = $user->createToken('TestToken')->plainTextToken;
            return response()->json([
                'token' => $token,
            ]);

            }
       else {
        return response()->json([
            'message'=>'this acount is not true',
        ]);  }


      }




}

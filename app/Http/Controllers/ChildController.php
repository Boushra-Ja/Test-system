<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Http\Requests\StoreChildRequest;
use App\Http\Requests\UpdateChildRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function stor(Request $request){

        $dateOfBirth=$request->age;
        $years = (int)Carbon ::parse($dateOfBirth)->diff(Carbon::now())->format('%y') ;
        $months = (int)Carbon ::parse($dateOfBirth)->diff(Carbon::now())->format('%m') ;
        $days = (int)Carbon ::parse($dateOfBirth)->diff(Carbon::now())->format('%d') ;

        if($days >= 15)
        {
            $months = $months + 1 ;
        }

        $age = ($years * 12 )+ $months ;

        $child=  Child::create([
            'name' => $request->name ,
            'age'=>$age,
            'user_id'=>$request->user_id,
        ]);
        if($child)
                return response()->json([
                    'message'=>'Store child successfully',
                    'child' => $child,
                ]);

        else {
                return $this->sendErrors('failed in Store child', ['error' => 'not true']);
        }
    }

    public function age(Request $request){
        $dateOfBirth=$request->age;
        $years = (int)Carbon ::parse($dateOfBirth)->diff(Carbon::now())->format('%y') ;
        $months = (int)Carbon ::parse($dateOfBirth)->diff(Carbon::now())->format('%m') ;
        $days = (int)Carbon ::parse($dateOfBirth)->diff(Carbon::now())->format('%d') ;
        if($days >= 15)
        {
            $months = $months + 1 ;
        }

        $age = ($years * 12 )+ $months ;
        return $age;
    }

    public function show(){
        $child=Child::all();

        return response()->json([
            'child' => $child,
        ]);

    }
}

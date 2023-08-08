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
        $d_now = (Carbon::now())->format('d');
        $m_now = (Carbon::now())->format('m') ;
        $y_now = (Carbon::now())->format('y') ;

        $d_child = Carbon::createFromFormat('d/m/Y', $dateOfBirth)->format('d');
        $m_child = Carbon::createFromFormat('d/m/Y', $dateOfBirth)->format('m');
        $y_child = Carbon::createFromFormat('d/m/Y', $dateOfBirth)->format('y');


        if($d_now < $d_child)
        {
            $d_now += 30 ;
            $m_now -= 1 ;
        }
        if($m_now < $m_child)
        {
            $m_now += 12 ;
            $y_now -= 1 ;
        }

        $d_diff = $d_now - $d_child ;
        $m_diff = $m_now - $m_child ;
        $y_diff = $y_now - $y_child ;
        if($d_diff >= 15)
        {
            $m_diff += 1 ;
        }

        $age = ($y_diff * 12) + $m_diff ;

        $child=  Child::create([
            'name' => $request->name ,
            'age'=>$age,
            'user_id'=>$request->user_id,
            'date'=>$request->age
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

    public Static function age($a){
        $dateOfBirth=$a;
        $d_now = (Carbon::now())->format('d');
        $m_now = (Carbon::now())->format('m') ;
        $y_now = (Carbon::now())->format('y') ;
        
        $d_child = Carbon::createFromFormat('d/m/Y', $dateOfBirth)->format('d');
        $m_child = Carbon::createFromFormat('d/m/Y', $dateOfBirth)->format('m');
        $y_child = Carbon::createFromFormat('d/m/Y', $dateOfBirth)->format('y');


        if($d_now < $d_child)
        {
            $d_now += 30 ;
            $m_now -= 1 ;
        }
        if($m_now < $m_child)
        {
            $m_now += 12 ;
            $y_now -= 1 ;
        }

        $d_diff = $d_now - $d_child ;
        $m_diff = $m_now - $m_child ;
        $y_diff = $y_now - $y_child ;
        if($d_diff >= 15)
        {
            $m_diff += 1 ;
        }

        $age = ($y_diff * 12) + $m_diff ;

        return $age;
    }

    public function show(){
        $child=Child::all();

        return response()->json([
            'child' => $child,
        ]);

    }
}

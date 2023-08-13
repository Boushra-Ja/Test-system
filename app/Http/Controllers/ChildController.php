<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\BaseController;
use App\Models\Child;
use App\Http\Requests\StoreChildRequest;
use App\Http\Requests\UpdateChildRequest;
use App\Models\TempTable;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class ChildController extends BaseController
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

    public function connect_between_sys1(Request $request)  {

        $user = User::where('name' , $request->user_name)
        ->where('email' , $request->email)->first() ;


        if($user)
        {

            $child = Child::where('name' , $request->child_name)
            ->where('father_name' , $request->father_name)
            ->where('user_id',$user['id'])->first() ;

            if(!$child)
            {
                $child_db = Child::create([
                    'name' => $request->child_name ,
                    'father_name' => $request->father_name,
                    'user_id' => $user['id'],
                    'age'=> ChildController::age($request->age),
                    'date'=>$request->age
                ]);
            }
            else{
                $child_db = $child ;
            }

            return $this->sendResponse($child_db , 'true') ;
        }
        else{

            $res = TempTableController::store($request) ;
            if($res)
            {
                return $this->sendResponse('يجب تسجيل المستخدم في المنظومة' , 'false') ;
            }
            return $this->sendErrors('يوجد مشكلة ما' , 'error') ;
        }
    }


    public function connect_between_sys2($user_id){

        $temp = TempTable::first() ;

        if(!$temp)
        {
            return $this->sendResponse('يجب الانتقال الى صفحة اضافة طفل' , 'true') ;
        }
        else{

            $child_db = Child::create([
                'name' => $temp['name'] ,
                'father_name' => $temp['father_name'] ,
                'user_id' =>$user_id ,
                'age'=> $temp['age'] ,
                'date'=>$temp['date']
            ]);

            if($child_db)
            {
                TempTableController::destroy($temp['id']) ;
                return $this->sendResponse('يجب الانتقال الى صفحة الاختبار' , 'false') ;
            }
        }
        return $this->sendErrors('يوجد مشكلة ما' ,'error') ;
    }
}

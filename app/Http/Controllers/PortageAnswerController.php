<?php

namespace App\Http\Controllers;

use App\Http\Resources\Bayan\Alshateb_all;
use App\Http\Resources\Bayan\portage_result;
use App\Models\TestResult;
use App\Models\Child;
use App\Models\PortageDiminssion;
use App\Models\ResultList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortageAnswerController extends Controller
{

    public function Portage_table(Request $request)
    {

        $res=TestResult::where('child_id',$request->child_id)->where('dim_id',$request->dim_id)->latest('created_at')->first();
        if($res){

            $state="";

            $age=Child::where('id',$request->child_id)->value('age');
            $data=((($res->basal*12)+$res->additional)/$age)*100;
            if($data <= 25)
              $state="شديد جداً";
            else if($data > 25 && $data<= 40)
              $state="شديد ";
            else if($data > 40 && $data<= 55)
              $state="متوسط ";
            else if($data > 55 && $data<= 70)
              $state="بسيط ";
            else if($data > 70 && $data<= 85)
              $state="بسيط جداً";
            else
              $state=" طبيعي";



            $total=($res->basal*12)+$res->additional;
            $month=$total%12;
            $year=($total-$month)/12;

            return response()->json([
                'dimantion'=>PortageDiminssion::where('id',$request->dim_id)->value('title'),
                'performance' => $state,
                'performance_ratio' => $data,
                'year' => $year,
                'month' => $month,
              ]);

        }



    }


    public function Portage_result_all()
    {

        $r=Child::where('user_id',Auth::user()->id)->get();

        $res=array();
        $i=0;
        foreach ($r as $item){
            $re=TestResult::where('child_id',$item->id)->get();
            foreach ($re as $item1){
                $res[$i]=$item1;
                $i=$i+1;

            }

        }
        if($res){

            $q=portage_result::collection($res );
            return response()->json([
                'result' => $q,
            ]);


        }

    }


    public function list_result_all()
    {



        $r=Child::where('user_id',Auth::user()->id)->get();

        $res=array();
        $i=0;
        foreach ($r as $item){
            $re=ResultList::where('child_id',$item->id)->get();
            foreach ($re as $item1){
                $res[$i]=$item1;
                $i=$i+1;

            }

        }



        if($res){

            $q=Alshateb_all::collection($res );
            return response()->json([
                'result' => $q,
            ]);

        }

    }



}

<?php

namespace App\Http\Controllers;

use App\Models\TestResult;
use App\Http\Requests\StorePortageAnswerRequest;
use App\Http\Requests\UpdatePortageAnswerRequest;
use App\Models\Child;
use App\Models\PortageDiminssion;
use Illuminate\Http\Request;

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


}

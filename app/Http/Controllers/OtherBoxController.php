<?php

namespace App\Http\Controllers;

use App\Http\Resources\Bayan\Alshatb_result;
use App\Models\Child;
use App\Models\OtherBox;
use App\Http\Requests\StoreOtherBoxRequest;
use App\Http\Requests\UpdateOtherBoxRequest;
use App\Models\AlshatbList;
use App\Models\AlshatbListAnswer;
use App\Models\HelpPortegeList;
use App\Models\ResultList;
use App\Models\TestResult;
use Illuminate\Http\Request;

class OtherBoxController extends Controller
{

    public function first_box_list(Request $request)
    {
        $res=TestResult::where('child_id',$request->child_id)->where('dim_id',$request->dim_id)->latest('created_at')->first();
        if($res){
            $age=($res->basal*12)+$res->additional;
            if($age<72){

                $box=OtherBox::where('subTitle_id',$request->subTitle_id)->where('start_age', '<=', $age)->where('end_age', '>', $age)->first();
                $q=AlshatbList::where('box_id',$box->id)->first();

                $real_age=Child::where('id',$request->child_id)->first();

                $box_end=OtherBox::where('subTitle_id',$request->subTitle_id)->where('start_age', '<=', $real_age->age)->where('end_age', '>', $real_age->age)->first();
                $q_end=AlshatbList::where('box_id',$box_end->id)->max('id');




                $ans = HelpPortegeList::create([
                    'start' => $q->id,
                    'true' => '0',
                    'true_q_id' => '1',
                    'end' =>$q_end,
                    'child_id' => $request->child_id,

                ]);

                $res1 = ResultList::create([
                    'sub_id' => $request->subTitle_id,
                    'child_id'=>$request->child_id
                ]);

                return response()->json([
                    'question' => $q,
                    'result'=>'true'
                ]);
            }

            else{
                $box=OtherBox::where('subTitle_id',$request->subTitle_id)->where('start_age', '<=', '70')->where('end_age', '>', '70')->first();

                $q=AlshatbList::where('box_id',$box->id)->first();

                $ans = HelpPortegeList::create([
                    'start' => $q->id,
                    'true' => '0',
                    'true_q_id' => '1',
                    'end' =>$box->id,
                    'child_id' => $request->child_id,

                ]);

                $res1 = ResultList::create([
                    'sub_id' => $request->subTitle_id,
                    'child_id'=>$request->child_id
                ]);

                return response()->json([
                    'question' => $q,
                    'result'=>'true'
                ]);
            }
        }
        else
            return response()->json([
                'result'=>'false'

            ]);


    }

    public function stor(Request $request)
    {

        if($request->answer =='false'){

            $result=ResultList::where('child_id',$request->child_id)->where('sub_id',$request->subTitle_id)->latest('created_at')->first();
            $ans = AlshatbListAnswer::create([
                'ques_id' => $request->ques_id,
                'result_id'=>$result->id
            ]);

        }


        $res=HelpPortegeList::where('child_id',$request->child_id)->first();


        if($res->true != '4'){
                $ques_number=AlshatbList::where('id',$request->ques_id)->value('ques_number');
                if($ques_number-1!= '0' ){

                if($request->answer == 'true' && $res->true_q_id == ($request->ques_id+1)){
                    $t=$res->true+1;
                    $res->update([
                            'true' => $t,
                            'true_q_id' => $request->ques_id,
                        ]);
                    if($t==4 && $res->end!=$res->start){
                        $q=AlshatbList::where('id',$res->start+1)->first();
                        return response()->json([
                            'question' => $q,
                            'end' => 'false',
                        ]);
                    }else if($t==4 && $res->end==$res->start){
                        $res->delete();
                        return response()->json([
                            'end' => 'true',
                        ]);
                    }
                    else{
                        $q=AlshatbList::where('id',$request->ques_id-1)->first();
                        return response()->json([
                            'question' => $q,
                            'end' => 'false',
                        ]);
                    }
                }else if($request->answer == 'true' && $res->true_q_id != ($request->ques_id+1)){
                     $q=AlshatbList::where('id',$request->ques_id-1)->first();

                        $res->update([
                            'true' => '1',
                            'true_q_id' => $request->ques_id,
                        ]);
                    return response()->json([
                        'question' => $q,
                        'end' => 'false',
                    ]);

                }else{
                     $q=AlshatbList::where('id',$request->ques_id-1)->first();

                        $res->update([
                            'true' => '0',
                            'true_q_id' => '1',
                        ]);
                    return response()->json([
                        'question' => $q,
                        'end' => 'false',
                    ]);
                }





            }else{
                $res->update([
                        'true' => '4',
                    ]);
                if($res->end!=$res->start){
                    $q=AlshatbList::where('id',$res->start+1)->first();

                    return response()->json([
                        'question' => $q,
                        'end' => 'false',
                    ]);
                }else{
                    $res->delete();
                    return response()->json([
                        'end' => 'true',
                    ]);
                }

            }
        }else {
            if($res->end != $request->ques_id){

                   $q=AlshatbList::where('id',$request->ques_id+1)->first();


                return response()->json([
                    'end' => 'false',
                    'question' => $q,
                ]);

            }else{

                $res->delete();
                return response()->json([
                    'end' => 'true',
                ]);
            }


        }



    }

    public function plan(Request $request){

        $result=ResultList::where('child_id',$request->child_id)->where('sub_id',$request->subTitle_id)->latest('created_at')->first();
        $res=AlshatbListAnswer::where('result_id',$result->id)->get();
        $q=Alshatb_result::collection($res );
        return response()->json([
            'result' => $q,
        ]);
    }




}







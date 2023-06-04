<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\OtherBox;
use App\Http\Requests\StoreOtherBoxRequest;
use App\Http\Requests\UpdateOtherBoxRequest;
use App\Models\AlshatbList;
use App\Models\AlshatbListAnswer;
use App\Models\HelpPortegeList;
use App\Models\TestResult;
use Illuminate\Http\Request;

class OtherBoxController extends Controller
{

    public function first_box_list(Request $request)
    {
        $res=TestResult::where('child_id',$request->child_id)->where('dim_id',$request->dim_id)->latest('created_at')->first();
        $age=$res->basal*12+$res->additional;
        $box=OtherBox::where('subTitle_id',$request->subTitle_id)->where('start_age', '<=', $age)->where('end_age', '>=', $age)->first();
       // $q=AlshatbList::where('box_id','>=',$box->id)->where('box_id','<=',$box_end->id)->get();
       $q=AlshatbList::where('box_id',$box->id)->first();



         $ans = HelpPortegeList::create([
            'start' => $q->id,
            'true' => '0',
            'false' => '0',
            'true_box_id' => '1',
            'false_box_id' => '1',
            'child_id' => $request->child_id,
        ]);

        return response()->json([
            'question' => $q
        ]);
    }

    public function stor(Request $request)
    {


        if($request->answer =='false')
            $ans = AlshatbListAnswer::create([
                'ques_id' => $request->ques_id,
                'child_id' => $request->child_id,
                'answer' => '0',
            ]);
        $res=HelpPortegeList::where('child_id',$request->child_id)->first();


        if($request->ques_id == $res->start && $request->answer == 'false'){
            $res->update([
                'true'=> '5',
                'false' => '1',
                'false_box_id' =>  $request->ques_id
            ]);
            $q=AlshatbList::where('ques_number',$res->start-1)->first();
            return response()->json([
                'question' => $q,
                'end' => 'false',
            ]);
        }else if($res->true == 5 ){
            if($request->answer =='false'){
                $t=$res->false+1;
                if($t<=4)
                    $res->update([
                        'false' => $t,
                        'false_box_id' =>  $request->ques_id
                    ]);
                $q=AlshatbList::where('ques_number', $request->ques_idt-1)->first();
                return response()->json([
                    'question' => $q,
                    'end' => 'false',
                ]);
            }else{
                $res->update([
                    'true' => '1',
                    'true_box_id' =>  $request->ques_id
                ]);
            }
        }else{
            if($res->true != '4'){
                if($request->ques_id-1!= '0'){

                    if($request->answer == 'true' && $res->true_box_id == ($request->ques_id+1)){
                        $t=$res->true+1;
                        $res->update([
                                'true' => $t,
                                'true_box_id' => $request->ques_id,
                            ]);


                        if($t==4 && $res->false!=4){
                            $q=AlshatbList::where('ques_number',$res->start+1)->first();
                            return response()->json([
                                'question' => $q,
                                'end' => 'false',
                            ]);
                        }else if($t==4 && $res->false==4){
                            return response()->json([
                                'end' => 'true',
                            ]);
                        }
                        else{
                            $q=AlshatbList::where('ques_number',$request->ques_id-1)->first();
                            return response()->json([
                                'question' => $q,
                                'end' => 'false',
                            ]);
                        }
                    }else if($request->answer == 'true' && $res->true_box_id != ($request->ques_id+1)){
                        $q=AlshatbList::where('ques_number',$request->ques_id-1)->first();
                            $res->update([
                                'true' => '1',
                                'true_box_id' => $request->ques_id,
                            ]);
                        return response()->json([
                            'question' => $q,
                            'end' => 'false',
                        ]);

                    }else{
                        $q=AlshatbList::where('ques_number',$request->ques_id-1)->first();
                            $res->update([
                                'true' => '0',
                                'true_box_id' => '1',
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
                    if($res->false!='4'){
                        $q=AlshatbList::where('ques_number',$res->start+1)->first();
                        return response()->json([
                            'question' => $q,
                            'end' => 'false',
                        ]);
                    }else{
                        return response()->json([
                            'end' => 'true',
                        ]);
                    }

                }
            }else {
                if($request->answer == 'false' && $res->false_box_id == ($request->ques_id-1)){
                    $q=AlshatbList::where('ques_number',$request->ques_id+1)->first();
                    $t=$res->false+1;
                    $res->update(
                        [
                            'false' =>$t,
                            'false_box_id' => $request->ques_id
                        ]);
                        if($t!=4)
                            return response()->json([
                                'end' => 'false',
                                'question' => $q,
                            ]);
                        else
                            return response()->json([
                                'end' => 'true',
                            ]);


                }else if($request->answer == 'false' && $res->false_box_id != ($request->ques_id-1)){
                    $q=AlshatbList::where('ques_number',$request->ques_id+1)->first();
                    $res->update(
                        [
                            'false' =>'1',
                            'false_box_id' => $request->ques_id
                        ]);
                    return response()->json([
                        'end' => 'false',
                        'question' => $q,
                    ]);

                }else{
                    $q=AlshatbList::where('ques_number',$request->ques_id+1)->first();
                    $res->update(
                        [
                            'false' =>'0',
                            'false_box_id' => '1'
                        ]);
                    return response()->json([
                        'end' => 'false',
                        'question' => $q,
                    ]);


                }


            }


        }










    }

}

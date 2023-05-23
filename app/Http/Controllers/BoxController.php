<?php

namespace App\Http\Controllers;

use App\Models\Box;
use App\Http\Requests\StoreBoxRequest;
use App\Http\Requests\UpdateBoxRequest;
use App\Models\Child;
use App\Models\HelpPortege;
use App\Models\PortageAnswer;
use App\Models\PortageQuestion;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $age=Child::where('id',$request->child_id)->first();
        $box1=Box::where('dim_id',$request->dim_id)->where('start_age','<=',$age->age)->where('end_age','>=',$age->age)->first();
        if($request->disability == "true")
           $box=Box::where('id',$box1->id-2)->first();
        else
           $box=Box::where('id',$box1->id-1)->first();

        $q=PortageQuestion::where('box_id',$box->id)->get();

        $ans=  HelpPortege::create([
            'start' => $box->id ,
            'true'=>"0",
            'false'=>"0",
            'true_box_id'=>1,
            'false_box_id'=>1,
            'child_id'=>$request->child_id,
            'mark'=>0
        ]);

        return response()->json([
            'question' => $q,
        ]);

    }

    public function store_index(Request $request)
    {

        $counter=0;
        $count_true=0;
        $count_false=0;

        foreach($request->ans as $item){
            $ans=  PortageAnswer::create([
                'ques_id' => $item['ques_id'] ,
                'child_id'=>$request->child_id,
                'ques_mark'=>$item['ques_mark'],
                'box_id'=>$request->box_id
            ]);
            $counter++;
            if($item['ques_mark'] == "true"){
                $count_true++;
            }
            else
                $count_false++;
        }

        $res=HelpPortege::where('child_id', $request->child_id)->first();


        if($res->true != 2){
            if($counter ==  $count_true){
                if($res->true_box_id == ($request->box_id+1) || $res->true_box_id == 1){
                   $t=$res->true+1;
                   $res->update(
                    [
                        'true'=>$t,
                        'true_box_id'=>$request->box_id,

                    ]
                );
                }
                else{
                   $t=1;
                    $res->update(
                        [
                            'true'=>$t,
                            'true_box_id'=>$request->box_id,

                        ]
                    );
                }
                if($t==2){
                    if($res->false !=2){
                        $box=Box::where('id',($res->start+1))->first();
                        $q=PortageQuestion::where('box_id',$box->id)->get();
                        return response()->json([
                            'question' => $q,
                        ]);
                    }
                    else
                    return response()->json([
                        'result' => 'end',
                    ]);



                }
                else{
                    $box=Box::where('id',($request->box_id-1))->first();
                    $q=PortageQuestion::where('box_id',$box->id)->get();
                    return response()->json([
                        'question' => $q,
                    ]);
                }

            }
            if($count_false == $counter){

                if($res->false == 1 && $res->false_box_id==$request->box_id+1){

                    $res->update(
                        [
                            'false'=>2,
                            'false_box_id'=>$request->box_id
                        ]);

                }
                else{

                    $res->update(
                        [
                            'false'=>1,
                            'false_box_id'=>$request->box_id
                        ]);

                }


            }
            $box=Box::where('id',($request->box_id-1))->first();
            $q=PortageQuestion::where('box_id',$box->id)->get();
            return response()->json([
                'question' => $q,
            ]);
        }

        if($count_false == $counter){

            if($res->false == 1 && $res->false_box_id==$request->box_id-1){

                //$res->delete();

                return response()->json([
                    'result' => 'end',
                ]);

            }
            else{

                $res->update(
                    [
                        'false'=>1,
                        'false_box_id'=>$request->box_id
                    ]);

            }


        }

        $box=Box::where('id',($request->box_id+1))->first();
        $q=PortageQuestion::where('box_id',$box->id)->get();
        return response()->json([
            'question' => $q,
        ]);


    }


    public function result(int $child_id ){

        $res=HelpPortege::where('child_id',$child_id)->first();

        $rule=Box::where('id',$res->true_box_id+1)->value('mark_age');

        $true=PortageAnswer::where('child_id',$child_id)->where('ques_mark','true')->get();

        $all=$rule*12;

        foreach($true as $t){
            $all=$all+ PortageQuestion::where('id',$t->ques_id)->value('ques_mark') ;
        }

        return response()->json([
            'rule' => $rule,
            'all'=>$all,
            'all_y'=>$all/12
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBoxRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Box $box)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Box $box)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBoxRequest $request, Box $box)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Box $box)
    {
        //
    }
}

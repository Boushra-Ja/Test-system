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
            'child_id'=>$request->child_id
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
            if($item['ques_mark'] == "true")
               $count_true++;
            else
                $count_false++;
        }

        $res=HelpPortege::where('child_id', $request->child_id)->first();


        if($res->true != 2){
            if($counter ==  $count_true){
                $t=$res->true+1;
                $res->update(
                    [
                        'true'=>$t,
                    ]
                );
                if($t==2){
                    if($res->false == 0){
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
            $box=Box::where('id',($request->box_id-1))->first();
            $q=PortageQuestion::where('box_id',$box->id)->get();
            return response()->json([
                'question' => $q,
            ]);
        }

        if($count_false == $counter){
            $res->update(
                [
                    'false'=>$request->box_id,
                ]
            );

            return response()->json([
                'result' => 'end',
            ]);

        }

        $box=Box::where('id',($request->box_id+1))->first();
        $q=PortageQuestion::where('box_id',$box->id)->get();
        return response()->json([
            'question' => $q,
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

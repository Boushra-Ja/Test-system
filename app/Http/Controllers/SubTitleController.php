<?php

namespace App\Http\Controllers;

use App\Models\PortageDiminssion;
use App\Models\SubTitle;
use App\Models\TestResult;
use Carbon\Carbon;


class SubTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub=SubTitle::all();
        return response()->json([
            'title' => $sub,
        ]);
    }

    public function available( $child_id ){

        $yearAgo = Carbon::now()->subYear(); // تاريخ قبل سنة من الوقت

        $res=TestResult::where('child_id',$child_id)->whereDate('created_at', '>=', $yearAgo)->get('dim_id');

        $a=array();
        $i = 0;
        foreach ($res as $item) {

            $a[$i]=PortageDiminssion::where('id',$item->dim_id)->value('title');

            $i+=1;
        }

        return response()->json([
            'dim' => $a,

        ]);

        }








}

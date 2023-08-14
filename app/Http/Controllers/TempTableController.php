<?php

namespace App\Http\Controllers;

use App\Models\TempTable;
use App\Http\Requests\StoreTempTableRequest;
use App\Http\Requests\UpdateTempTableRequest;
use Illuminate\Http\Request;

class TempTableController extends Controller
{


    static public function store(Request $request)
    {
        $res = TempTable::create([
            'name' => $request->child_name ,
            'father_name' => $request->father_name,
            'age'=> ChildController::age($request->age),
            'date'=>$request->age
        ]) ;

        return $res ;
    }


    static public function destroy($id)
    {

        $res = TempTable::where('id' , $id)->delete() ;
        return $res ;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\SubTitle;
use App\Http\Requests\StoreSubTitleRequest;
use App\Http\Requests\UpdateSubTitleRequest;
use Illuminate\Http\Request;

class SubTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sub=SubTitle::where('dim_id',$request->dim_id)->get();
        return response()->json([
            'title' => $sub,
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
    public function store(StoreSubTitleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SubTitle $subTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubTitle $subTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubTitleRequest $request, SubTitle $subTitle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubTitle $subTitle)
    {
        //
    }
}

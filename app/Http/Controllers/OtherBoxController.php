<?php

namespace App\Http\Controllers;

use App\Models\OtherBox;
use App\Http\Requests\StoreOtherBoxRequest;
use App\Http\Requests\UpdateOtherBoxRequest;
use Illuminate\Http\Request;

class OtherBoxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
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
    public function store(StoreOtherBoxRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OtherBox $otherBox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OtherBox $otherBox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOtherBoxRequest $request, OtherBox $otherBox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OtherBox $otherBox)
    {
        //
    }
}

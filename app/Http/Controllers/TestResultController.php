<?php

namespace App\Http\Controllers;

use App\Http\Resources\Note;
use App\Models\TestResult;
use App\Http\Requests\StoreTestResultRequest;
use App\Http\Requests\UpdateTestResultRequest;
use App\Http\Resources\Boshra\ReportResource;
use Illuminate\View\View;

class TestResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreTestResultRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TestResult $testResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TestResult $testResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestResultRequest $request, TestResult $testResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TestResult $testResult)
    {
        //
    }
    public function report($child_id)
    {
        $tests  = TestResult::where('child_id' , $child_id)->take(1)->get() ;
        return response()->json( ReportResource::collection($tests ), 200);

    }
    public function doo($child_id)
    {

        $test  = TestResult::where('child_id' , $child_id)->take(1)->get() ;
        return response()->json([
           "data"=> Note::collection($test )]);
      // return View("welcome",compact($data));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ResultList;
use App\Http\Requests\StoreResultListRequest;
use App\Http\Requests\UpdateResultListRequest;
use GuzzleHttp\Client;
class ResultListController extends Controller
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


    public function store_res(StoreResultListRequest $request)
    {
        $client = new Client();


        $api_key = env('base64:TDs2kr6jWKmozz8u+DHgeskspMWq9H2eyklHadkRAq0=');

        // بيانات الطلب
        $data = [
            'child_id' => 1,
            'basal' => 21,
            'additional' => 23 ,
            'dim_id'  => 1
        ];
        // عنوان النهاية المطلوبة
        $url = 'http://192.168.1.106:8000/api/store/resault';

        // إعداد العميل
        $client = new Client();

        $response = $client->request('POST', $url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $api_key,
                'Accept' => 'application/json',
            ],
            'json' => $data,
        ]);

        // الحصول على جسم الاستجابة كنص JSON
        $body = $response->getBody();
        $data = json_decode($body, true);

        // استخدام البيانات المسترجعة
        print_r($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(ResultList $resultList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ResultList $resultList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResultListRequest $request, ResultList $resultList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResultList $resultList)
    {
        //
    }
}

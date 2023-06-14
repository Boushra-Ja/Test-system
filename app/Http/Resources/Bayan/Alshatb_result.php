<?php

namespace App\Http\Resources\Bayan;

use App\Models\AlshatbList;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Alshatb_result extends JsonResource
{

    public function toArray(Request $request ): array
    {

        $q=AlshatbList::where('id',$this->ques_id)->value('question');

        return [

            'qus' => $q,
        ];
    }
}

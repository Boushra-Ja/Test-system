<?php

namespace App\Http\Resources\Bayan;

use App\Models\AlshatbList;
use App\Models\Child;
use App\Models\PortageDiminssion;
use App\Models\SubTitle;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class availabel extends JsonResource
{

    public function toArray(Request $request ): array
    {


        $dim=PortageDiminssion::where('id',$this->dim_id)->first();


        return [
            'dim_nam' =>$dim->title,
            'dim_id' => $dim->id,

        ];
    }
}

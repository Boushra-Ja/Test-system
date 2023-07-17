<?php

namespace App\Http\Resources\Bayan;

use App\Models\AlshatbList;
use App\Models\Child;
use App\Models\PortageDiminssion;
use App\Models\SubTitle;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Alshateb_all extends JsonResource
{

    public function toArray(Request $request ): array
    {
        return [
            'child_nam' => Child::where('id',$this->child_id)->value('name'),
            'date' => $this->created_at,
            'dim' => PortageDiminssion::where('id',SubTitle::where('id',$this->sub_id)->value('dim_id'))->value('title'),
            'sub_title' => SubTitle::where('id',$this->sub_id)->value('title'),


        ];
    }
}

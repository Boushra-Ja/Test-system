<?php

namespace App\Http\Resources\Bayan;

use App\Models\AlshatbList;
use App\Models\Child;
use App\Models\PortageDiminssion;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class portage_result extends JsonResource
{

    public function toArray(Request $request ): array    {

        return [

            'child_nam' => Child::where('id',$this->child_id)->value('name'),
            'child_id' => $this->child_id,
            'date' => $this->created_at,
            'dim' => PortageDiminssion::where('id',$this->dim_id)->value('title'),
            'dim_id' => $this->dim_id,
            'basal_age' => $this->basal,
            'additional_age' => $this['additional']


        ];
    }
}

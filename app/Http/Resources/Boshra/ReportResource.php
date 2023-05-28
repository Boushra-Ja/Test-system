<?php

namespace App\Http\Resources\Boshra;

use App\Models\Child;
use App\Models\PortageDiminssion;
use App\Models\TestResult;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
{

    public function toArray(Request $request ): array
    {
        $ratio = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        $age = Child::where('id', $this->child_id)->value('age');

        $s_dim = TestResult::where('child_id', $this->child_id)
            ->where('dim_id', PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id'))
            ->orderBy('created_at', 'Desc')->take(2)->get();

        $i = 0;
        foreach ($s_dim as $elem) {
            $ratio[$i] = (($elem['basal'] + $elem['additional']) / $age) * 100;
            $i++;
        }
        if ($i != 2) {
            $i = 2;
        }

        $m_dim = TestResult::where('child_id', $this->child_id)
            ->where('dim_id', PortageDiminssion::where('title', 'البعد الحركي')->value('id'))
            ->orderBy('created_at', 'Desc')->take(2)->get();

        foreach ($m_dim as $elem) {
            $ratio[$i] = (($elem['basal'] + $elem['additional']) / $age) * 100;
            $i++;
        }

        if ($i != 4) {
            $i = 4;
        }

        $c_dim = TestResult::where('child_id', $this->child_id)
            ->where('dim_id', PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id'))
            ->orderBy('created_at', 'Desc')->take(2)->get();

        foreach ($c_dim as $elem) {
            $ratio[$i] = (($elem['basal'] + $elem['additional']) / $age) * 100;
            $i++;
        }
        if ($i != 6) {
            $i = 6;
        }

        $com_dim = TestResult::where('child_id', $this->child_id)
            ->where('dim_id', PortageDiminssion::where('title', 'البعد الاتصالي')->value('id'))
            ->orderBy('created_at', 'Desc')->take(2)->get();

        foreach ($com_dim as $elem) {
            $ratio[$i] = (($elem['basal'] + $elem['additional']) / $age) * 100;
            $i++;
        }

        if ($i != 8) {
            $i = 8;
        }


        $k_dim = TestResult::where('child_id', $this->child_id)
            ->where('dim_id', PortageDiminssion::where('title', 'البعد المعرفي')->value('id'))
            ->orderBy('created_at', 'Desc')->take(2)->get();

        foreach ($k_dim as $elem) {
            $ratio[$i] = (($elem['basal'] + $elem['additional']) / $age) * 100;
            $i++;
        }
        return [

            'new_social_ratio' => $ratio[0],
            'old_social_ratio' => $ratio[1],
            'new_montor_ratio' => $ratio[2],
            'old_montor_ratio' => $ratio[3],
            'new_care_ratio' => $ratio[4],
            'old_care_ratio' => $ratio[5],
            'new_comm_ratio' => $ratio[6],
            'old_comm_ratio' => $ratio[7],
            'new_know_ratio' => $ratio[8],
            'old_know_ratio' => $ratio[9]
        ];
    }
}

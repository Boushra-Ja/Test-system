<?php

namespace Database\Seeders;

use App\Models\PortageDiminssion;
use Illuminate\Database\Seeder;

class PortageDiminssionSeeder extends Seeder
{

    public function run(): void
    {
        PortageDiminssion::create([
            'title' => 'البعد الحركي' ,

        ]);
        PortageDiminssion::create([
            'title' => 'البعد الاجتماعي' ,

        ]);
        PortageDiminssion::create([
            'title' => 'بعد العناية الذاتية' ,

        ]);
    }
}

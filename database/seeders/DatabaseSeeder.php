<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AlshatbList;
use App\Models\OtherBox;
use App\Models\PortageDiminssion;
use App\Models\SubTitle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            DifficultTitleSeeder::class ,
            PortageDiminssionSeeder::class,
            BoxSeeder::class ,
            PortageQuestionSeeder::class,
            SubTitleSeeder::class ,
            OtherBoxSeeder::class ,
            AlshatbListSeeder::class
        ]);


    }
}

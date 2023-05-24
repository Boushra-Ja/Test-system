<?php

namespace Database\Seeders;

use App\Models\OtherBox;
use App\Models\SubTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OtherBoxSeeder extends Seeder
{

    public function run(): void
    {
        ///المجال الاجتماعي
        ////'التفاعل مع الآخرين'//////
        ////////1 - 6//////////
        OtherBox::create([
            'id' => 1,
            'start_age' => 0,
            'end_age' =>  12,
            'subTitle_id' => SubTitle::where('title', 'التفاعل مع الآخرين')->value('id'),
        ]);
        OtherBox::create([
            'id' => 2,
            'start_age' => 12,
            'end_age' =>  24,
            'subTitle_id' => SubTitle::where('title', 'التفاعل مع الآخرين')->value('id'),
        ]);
        OtherBox::create([
            'id' => 3,
            'start_age' => 24,
            'end_age' =>  36,
            'subTitle_id' => SubTitle::where('title', 'التفاعل مع الآخرين')->value('id'),
        ]);
        OtherBox::create([
            'id' => 4,
            'start_age' => 36,
            'end_age' =>  48,
            'subTitle_id' => SubTitle::where('title', 'التفاعل مع الآخرين')->value('id'),
        ]);
        OtherBox::create([
            'id' => 5,
            'start_age' => 48,
            'end_age' =>  60,
            'subTitle_id' => SubTitle::where('title', 'التفاعل مع الآخرين')->value('id'),
        ]);
        OtherBox::create([
            'id' => 6,
            'start_age' => 60,
            'end_age' =>  72,
            'subTitle_id' => SubTitle::where('title', 'التفاعل مع الآخرين')->value('id'),
        ]);

        /////////المهارات الانفعالية/////////
        /////////6 - 12/////////////
        OtherBox::create([
            'id' => 7,
            'start_age' => 0,
            'end_age' =>  12,
            'subTitle_id' => SubTitle::where('title', 'المهارات الانفعالية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 8,
            'start_age' => 12,
            'end_age' =>  24,
            'subTitle_id' => SubTitle::where('title', 'المهارات الانفعالية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 9,
            'start_age' => 24,
            'end_age' =>  36,
            'subTitle_id' => SubTitle::where('title', 'المهارات الانفعالية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 10,
            'start_age' => 36,
            'end_age' =>  48,
            'subTitle_id' => SubTitle::where('title', 'المهارات الانفعالية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 11,
            'start_age' => 48,
            'end_age' =>  60,
            'subTitle_id' => SubTitle::where('title', 'المهارات الانفعالية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 12,
            'start_age' => 60,
            'end_age' =>  72,
            'subTitle_id' => SubTitle::where('title', 'المهارات الانفعالية')->value('id'),
        ]);
    }
}

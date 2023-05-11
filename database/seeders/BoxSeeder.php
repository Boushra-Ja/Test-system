<?php

namespace Database\Seeders;

use App\Models\Box;
use App\Models\PortageDiminssion;
use Illuminate\Database\Seeder;

class BoxSeeder extends Seeder
{

    public function run(): void
    {

        ////Box for Self_care Diminssion
        Box::create([
            'start_age' => 1,
            'end_age' => 6,
            ////update
            'mark_age' => 1,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id'),
            'id' => 1
        ]);
        Box::create([
            'start_age' => 6,
            'end_age' => 12,
            ////update
            'mark_age' => 1,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id'),
            'id' => 2

        ]);
        Box::create([
            'start_age' => 12,
            'end_age' => 16,
            ////update
            'mark_age' => 1,
            'id' => 3,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);
        Box::create([
            'start_age' => 16,
            'end_age' => 24,
            'mark_age' => 1,
            'id' => 4,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);

        Box::create([
            'start_age' => 24,
            'end_age' => 30,
            'mark_age' => 1,
            'id' => 5,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);
        Box::create([
            'start_age' => 30,
            'end_age' => 36,
            'mark_age' => 1,
            'id' => 6,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);

        Box::create([
            'start_age' => 36,
            'end_age' => 42,
            'mark_age' => 1,
            'id' => 7,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);
        Box::create([
            'start_age' => 42,
            'end_age' => 54,
            'mark_age' => 1,
            'id' => 8,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);
        Box::create([
            'start_age' => 54,
            'end_age' => 66,
            'mark_age' => 1,
            'id' => 9,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);
        Box::create([
            'start_age' => 66,
            'end_age' => 78,
            'mark_age' => 1,
            'id' => 10,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);

        Box::create([
            'start_age' => 78,
            'end_age' => 90,
            'mark_age' => 1,
            'id' => 11,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);

        Box::create([
            'start_age' => 90,
            'end_age' => 102,
            'mark_age' => 1,
            'id' => 12,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);
        Box::create([
            'start_age' => 102,
            'end_age' => 114,
            'mark_age' => 1,
            'id' => 13,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);

        ////Box for Communication Diminssion
        ///////////////////////////
        Box::create([
            'start_age' => 1,
            'end_age' => 6,
            'mark_age' => 1,
            'id' => 14,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
        Box::create([
            'start_age' => 6,
            'end_age' => 12,
            'mark_age' => 1,
            'id' => 15,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
        Box::create([
            'start_age' => 12,
            'end_age' => 18,
            'mark_age' => 1,
            'id' => 16,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
        Box::create([
            'start_age' => 18,
            'end_age' => 24,
            'mark_age' => 1,
            'id' => 17,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
        Box::create([
            'start_age' => 24,
            'end_age' => 30,
            'mark_age' => 1,
            'id' => 18,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
        Box::create([
            'start_age' => 30,
            'end_age' => 36,
            'mark_age' => 1,
            'id' => 19,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
        Box::create([
            'start_age' => 36,
            'end_age' => 42,
            'mark_age' => 1,
            'id' => 20,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
        Box::create([
            'start_age' => 42,
            'end_age' => 54,
            'mark_age' => 1,
            'id' => 21,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
        Box::create([
            'start_age' => 54,
            'end_age' => 66,
            'mark_age' => 1,
            'id' => 22,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
        Box::create([
            'start_age' => 66,
            'end_age' => 78,
            'mark_age' => 1,
            'id' => 23,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);


        Box::create([
            'start_age' => 78,
            'end_age' => 90,
            'mark_age' => 1,
            'id' => 24,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);

        Box::create([
            'start_age' => 90,
            'end_age' => 102,
            'mark_age' => 1,
            'id' => 25,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);

        Box::create([
            'start_age' => 102,
            'end_age' => 114,
            'mark_age' => 1,
            'id' => 26,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);

        ////Box for motor Diminssion
        Box::create([
            'start_age' => 1,
            'end_age' => 6,
            'mark_age' => 1,
            'id' => 27,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);
        Box::create([
            'start_age' => 6,
            'end_age' => 12,
            'mark_age' => 1,
            'id' => 28,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);
        Box::create([
            'start_age' => 12,
            'end_age' => 18,
            'mark_age' => 1,
            'id' => 29,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);
        Box::create([
            'start_age' => 18,
            'end_age' => 24,
            'mark_age' => 1,
            'id' => 30,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);
        Box::create([
            'start_age' => 24,
            'end_age' => 30,
            'mark_age' => 1,
            'id' => 31,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);
        Box::create([
            'start_age' => 30,
            'end_age' => 36,
            'mark_age' => 1,
            'id' => 32,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);
        Box::create([
            'start_age' => 36,
            'end_age' => 42,
            'mark_age' => 1,
            'id' => 33,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);
        Box::create([
            'start_age' => 42,
            'end_age' => 54,
            'mark_age' => 1,
            'id' => 34,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);
        Box::create([
            'start_age' => 54,
            'end_age' => 66,
            'mark_age' => 1,
            'id' => 35,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);
        Box::create([
            'start_age' => 1,
            'end_age' => 6,
            'mark_age' => 1,
            'id' => 36,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 6,
            'end_age' => 12,
            'mark_age' => 1,
            'id' => 37,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 12,
            'end_age' => 18,
            'mark_age' => 1,
            'id' => 38,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 18,
            'end_age' => 24,
            'mark_age' => 1,
            'id' => 39,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 24,
            'end_age' => 30,
            'mark_age' => 1,
            'id' => 40,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 30,
            'end_age' => 36,
            'mark_age' => 1,
            'id' => 41,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 36,
            'end_age' => 42,
            'mark_age' => 1,
            'id' => 42,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 42,
            'end_age' => 54,
            'mark_age' => 1,
            'id' => 43,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 54,
            'end_age' => 66,
            'mark_age' => 1,
            'id' => 44,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 66,
            'end_age' =>78,
            'mark_age' => 1,
            'id' => 45,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' =>78,
            'end_age' => 90,
            'mark_age' => 1,
            'id' => 46,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 90,
            'end_age' => 102,
            'mark_age' => 1,
            'id' => 47,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 102,
            'end_age' => 114,
            'mark_age' => 1,
            'id' => 48,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        /////////////المعرفي////////

        Box::create([
            'start_age' => 1,
            'end_age' => 6,
            'mark_age' => 1,
            'id' => 49,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);
        Box::create([
            'start_age' => 6,
            'end_age' => 12,
            'mark_age' => 1,
            'id' => 50,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);

        Box::create([
            'start_age' => 12,
            'end_age' => 18,
            'mark_age' => 1,
            'id' => 51,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);

        Box::create([
            'start_age' => 18,
            'end_age' => 24,
            'mark_age' => 1,
            'id' => 52,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);
        Box::create([
            'start_age' => 24,
            'end_age' => 30,
            'mark_age' => 1,
            'id' => 53,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);
        Box::create([
            'start_age' => 30,
            'end_age' => 36,
            'mark_age' => 1,
            'id' => 54,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);
        Box::create([
            'start_age' => 36,
            'end_age' => 42,
            'mark_age' => 1,
            'id' => 55,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);

        Box::create([
            'start_age' => 42,
            'end_age' => 54,
            'mark_age' => 1,
            'id' => 56,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);
        Box::create([
            'start_age' => 54,
            'end_age' => 66,
            'mark_age' => 1,
            'id' => 57,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);
        Box::create([
            'start_age' => 66,
            'end_age' => 78,
            'mark_age' => 1,
            'id' => 58,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);
    }
}

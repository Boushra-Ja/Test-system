<?php

namespace Database\Seeders;

use App\Models\Box;
use App\Models\PortageDiminssion;
use Illuminate\Database\Seeder;

class BoxSeeder extends Seeder
{

    public function run(): void
    {

        // العناية الذاتية

        // 1        13


        Box::create([
            'start_age' => 1,
            'end_age' => 6,
            'mark_age' => 0.5,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id'),
            'id' => 1
        ]);
        Box::create([
            'start_age' => 6,
            'end_age' => 12,
            'mark_age' => 1,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id'),
            'id' => 2

        ]);
        Box::create([
            'start_age' => 12,
            'end_age' => 18,
            ////update
            'mark_age' => 1.5,
            'id' => 3,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);
        Box::create([
            'start_age' => 18,
            'end_age' => 24,
            'mark_age' => 2,
            'id' => 4,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);

        Box::create([
            'start_age' => 24,
            'end_age' => 30,
            'mark_age' => 2.5,
            'id' => 5,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);
        Box::create([
            'start_age' => 30,
            'end_age' => 36,
            'mark_age' => 3,
            'id' => 6,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);

        Box::create([
            'start_age' => 36,
            'end_age' => 42,
            'mark_age' => 3.5,
            'id' => 7,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);
        Box::create([
            'start_age' => 42,
            'end_age' => 54,
            'mark_age' => 4.5,
            'id' => 8,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);
        Box::create([
            'start_age' => 54,
            'end_age' => 66,
            'mark_age' => 5.5,
            'id' => 9,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);
        Box::create([
            'start_age' => 66,
            'end_age' => 78,
            'mark_age' => 6.5,
            'id' => 10,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);

        Box::create([
            'start_age' => 78,
            'end_age' => 90,
            'mark_age' => 7.5,
            'id' => 11,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);

        Box::create([
            'start_age' => 90,
            'end_age' => 102,
            'mark_age' => 8.5,
            'id' => 12,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);
        Box::create([
            'start_age' => 102,
            'end_age' => 114,
            'mark_age' => 9.5,
            'id' => 13,
            'dim_id' => PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id')

        ]);













        ///// البعد الاتصالي
        // 14          26

        Box::create([
            'start_age' => 1,
            'end_age' => 6,
            'mark_age' => 0.5,
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
            'mark_age' => 1.5,
            'id' => 16,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
        Box::create([
            'start_age' => 18,
            'end_age' => 24,
            'mark_age' => 2,
            'id' => 17,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
        Box::create([
            'start_age' => 24,
            'end_age' => 30,
            'mark_age' => 2.5,
            'id' => 18,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
        Box::create([
            'start_age' => 30,
            'end_age' => 36,
            'mark_age' => 3,
            'id' => 19,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
        Box::create([
            'start_age' => 36,
            'end_age' => 42,
            'mark_age' => 3.5,
            'id' => 20,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
        Box::create([
            'start_age' => 42,
            'end_age' => 54,
            'mark_age' => 4.5,
            'id' => 21,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
        Box::create([
            'start_age' => 54,
            'end_age' => 66,
            'mark_age' => 5.5,
            'id' => 22,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
        Box::create([
            'start_age' => 66,
            'end_age' => 78,
            'mark_age' => 6.5,
            'id' => 23,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);


        Box::create([
            'start_age' => 78,
            'end_age' => 90,
            'mark_age' => 7.5,
            'id' => 24,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);

        Box::create([
            'start_age' => 90,
            'end_age' => 102,
            'mark_age' => 8.5,
            'id' => 25,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);

        Box::create([
            'start_age' => 102,
            'end_age' => 114,
            'mark_age' => 9.5,
            'id' => 26,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاتصالي')->value('id')

        ]);
















        // البعد الحركي
        // 27      39

        Box::create([
            'start_age' => 1,
            'end_age' => 6,
            'mark_age' => 0.5,
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
            'mark_age' => 1.5,
            'id' => 29,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);
        Box::create([
            'start_age' => 18,
            'end_age' => 24,
            'mark_age' => 2,
            'id' => 30,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);
        Box::create([
            'start_age' => 24,
            'end_age' => 30,
            'mark_age' => 2.5,
            'id' => 31,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);
        Box::create([
            'start_age' => 30,
            'end_age' => 36,
            'mark_age' => 3,
            'id' => 32,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);
        Box::create([
            'start_age' => 36,
            'end_age' => 42,
            'mark_age' => 3.5,
            'id' => 33,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);
        Box::create([
            'start_age' => 42,
            'end_age' => 54,
            'mark_age' => 4.5,
            'id' => 34,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);
        Box::create([
            'start_age' => 54,
            'end_age' => 66,
            'mark_age' => 5.5,
            'id' => 35,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);
        Box::create([
            'start_age' => 66,
            'end_age' => 78,
            'mark_age' => 6.5,
            'id' => 36,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);


        Box::create([
            'start_age' => 78,
            'end_age' => 90,
            'mark_age' => 7.5,
            'id' => 37,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);

        Box::create([
            'start_age' => 90,
            'end_age' => 102,
            'mark_age' => 8.5,
            'id' => 38,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);

        Box::create([
            'start_age' => 102,
            'end_age' => 114,
            'mark_age' => 9.5,
            'id' => 39,
            'dim_id' => PortageDiminssion::where('title', 'البعد الحركي')->value('id')

        ]);














        //البعد الاجتماعي'
        // 40    52

        Box::create([
            'start_age' => 1,
            'end_age' => 6,
            'mark_age' => 0.5,
            'id' => 40,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 6,
            'end_age' => 12,
            'mark_age' => 1,
            'id' => 41,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 12,
            'end_age' => 18,
            'mark_age' => 1.5,
            'id' => 42,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 18,
            'end_age' => 24,
            'mark_age' => 2,
            'id' => 43,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 24,
            'end_age' => 30,
            'mark_age' => 2.5,
            'id' => 44,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 30,
            'end_age' => 36,
            'mark_age' => 3,
            'id' => 45,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 36,
            'end_age' => 42,
            'mark_age' => 3.5,
            'id' => 46,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 42,
            'end_age' => 54,
            'mark_age' => 4.5,
            'id' => 47,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 54,
            'end_age' => 66,
            'mark_age' => 5.5,
            'id' => 48,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);
        Box::create([
            'start_age' => 66,
            'end_age' => 78,
            'mark_age' => 6.5,
            'id' => 49,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);


        Box::create([
            'start_age' => 78,
            'end_age' => 90,
            'mark_age' => 7.5,
            'id' => 50,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);

        Box::create([
            'start_age' => 90,
            'end_age' => 102,
            'mark_age' => 8.5,
            'id' => 51,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);

        Box::create([
            'start_age' => 102,
            'end_age' => 114,
            'mark_age' => 9.5,
            'id' => 52,
            'dim_id' => PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id')

        ]);











        // 'البعد المعرفي'
        //  53     65

        Box::create([
            'start_age' => 1,
            'end_age' => 6,
            'mark_age' => 0.5,
            'id' => 53,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);
        Box::create([
            'start_age' => 6,
            'end_age' => 12,
            'mark_age' => 1,
            'id' => 54,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);
        Box::create([
            'start_age' => 12,
            'end_age' => 18,
            'mark_age' => 1.5,
            'id' => 55,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);
        Box::create([
            'start_age' => 18,
            'end_age' => 24,
            'mark_age' => 2,
            'id' => 56,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);
        Box::create([
            'start_age' => 24,
            'end_age' => 30,
            'mark_age' => 2.5,
            'id' => 57,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);
        Box::create([
            'start_age' => 30,
            'end_age' => 36,
            'mark_age' => 3,
            'id' => 58,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);
        Box::create([
            'start_age' => 36,
            'end_age' => 42,
            'mark_age' => 3.5,
            'id' => 59,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);
        Box::create([
            'start_age' => 42,
            'end_age' => 54,
            'mark_age' => 4.5,
            'id' => 60,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);
        Box::create([
            'start_age' => 54,
            'end_age' => 66,
            'mark_age' => 5.5,
            'id' => 61,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);
        Box::create([
            'start_age' => 66,
            'end_age' => 78,
            'mark_age' => 6.5,
            'id' => 62,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);


        Box::create([
            'start_age' => 78,
            'end_age' => 90,
            'mark_age' => 7.5,
            'id' => 63,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);

        Box::create([
            'start_age' => 90,
            'end_age' => 102,
            'mark_age' => 8.5,
            'id' => 64,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);

        Box::create([
            'start_age' => 102,
            'end_age' => 114,
            'mark_age' => 9.5,
            'id' => 65,
            'dim_id' => PortageDiminssion::where('title', 'البعد المعرفي')->value('id')

        ]);


    }
}

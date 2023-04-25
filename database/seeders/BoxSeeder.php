<?php

namespace Database\Seeders;

use App\Models\Box;
use App\Models\PortageDiminssion;
use Illuminate\Database\Seeder;

class BoxSeeder extends Seeder
{

    public function run(): void
    {
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



    }
}

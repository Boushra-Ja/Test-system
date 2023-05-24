<?php

namespace Database\Seeders;

use App\Models\AlshatbList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlshatbListSeeder extends Seeder
{

    public function run(): void
    {
        ///////////البعد الاجتماعي
        //////التفاعل
        /////Box 1
        AlshatbList::create([
            'ques_number' => 1,
            'question' => 'ينظر لشخص يحاول أن يشد انتباهه بالحديث إليه أو الحركة أمامه',
            'box_id' =>  1
        ]);
        AlshatbList::create([
            'ques_number' => 2,
            'question' => 'يبتسم أو يصدر أصوات أو يكف عن البكاء استجابة لوجوده في محيط العائلة',
            'box_id' =>  1
        ]);
        AlshatbList::create([
            'ques_number' => 3,
            'question' => 'يربت ويشد على ملامح وجه شخص كبير (الشعر ، الأنف ، النظارات ..الخ)',
            'box_id' =>  1
        ]);
        AlshatbList::create([
            'ques_number' => 4,
            'question' => 'يتواصل بصريا لمدة من 2 - 3 دقائق عندما يكون برعاية شخص',
            'box_id' =>  1
        ]);


        AlshatbList::create([
            'ques_number' => 5,
            'question' => 'يلعب لعبة الاستغماية باليد (أوبي ، دي عيني ، بيكابو) مقلدا',
            'box_id' =>  1
        ]);
        AlshatbList::create([
            'ques_number' => 6,
            'question' => 'يصفق باليدين مقلدا الكبار',
            'box_id' =>  1
        ]);
        AlshatbList::create([
            'ques_number' => 7,
            'question' => 'يقول باي ، باي بيده مقلدا الكبار',
            'box_id' =>  1
        ]);

        AlshatbList::create([
            'ques_number' => 8,
            'question' => 'يحضن ويربت ، يقبل أشخاص معروفين',
            'box_id' =>  1
        ]);
        AlshatbList::create([
            'ques_number' => 9,
            'question' => 'يتجاوب عند سماع اسمه الشخصي بالنظر أو مد الذراعين كي يحمل',
            'box_id' =>  1
        ]);

        AlshatbList::create([
            'ques_number' => 10,
            'question' => 'يمد اللعب أو الأشياء إلى الكبير ويطلق سراحها',
            'box_id' =>  1
        ]);

        ////Box 2
        AlshatbList::create([
            'ques_number' => 11,
            'question' => 'يشارك بأشياء أو طعام مع الآخرين عندما يطلب منه',
            'box_id' =>  2
        ]);
        AlshatbList::create([
            'ques_number' => 12,
            'question' => 'يحيّي أطفال بعمره ومكانته والكبار المألوفين عندما يذكر',
            'box_id' =>  2
        ]);

        /////Box 3
        AlshatbList::create([
            'ques_number' => 13,
            'question' => 'يحضر أو يأخذ شيء من غرفة إلى أخرى عندما يعطى التعليمات',
            'box_id' =>  3
        ]);
        AlshatbList::create([
            'ques_number' => 14,
            'question' => 'يظهر محاولة لمساعدة والدته أو والده بمهامهما وذلك بعمل جزء من الشغل : حمل الغسيل ، نقل المكنسة ...الخ',
            'box_id' =>  3
        ]);

        /////Box 4
        AlshatbList::create([
            'ques_number' => 15,
            'question' => 'يحيّي الكبار المألوفين لديه بدون تذكير',
            'box_id' =>  4
        ]);
        AlshatbList::create([
            'ques_number' => 16,
            'question' => 'يقول شكرا من غير تذكير حوالي 50% من الوقت',
            'box_id' =>  4
        ]);


        /////Box 5
        AlshatbList::create([
            'ques_number' => 17,
            'question' => 'يجيب على الهاتف، ينادي الكبير أو يتحدث إلى شخص مألوف',
            'box_id' =>  5
        ]);
        AlshatbList::create([
            'ques_number' => 18,
            'question' => 'يستجيب لطلب الكبار 75% من الوقت',
            'box_id' =>  5
        ]);

        ////Box 6
        AlshatbList::create([
            'ques_number' => 19,
            'question' => 'يجيب على أسئلة الكبار الموجهة له حول ألعابه واهتماماته',
            'box_id' =>  6
        ]);
        AlshatbList::create([
            'ques_number' => 20,
            'question' => 'يأخذ الإذن لاستعمال أدوات تخص لآخرين 75 % من الوقت',
            'box_id' =>  6
        ]);

        /////المهارات الانفعالية
        /////Box 7
        AlshatbList::create([
            'ques_number' => 1,
            'question' => 'يناغي ويناجي عندما يكون مكتفيا باحتياجاته',
            'box_id' =>  7
        ]);
        AlshatbList::create([
            'ques_number' => 2,
            'question' => 'يضحك',
            'box_id' =>  7
        ]);
        AlshatbList::create([
            'ques_number' => 3,
            'question' => 'يمد يده للوصول الى الأشياء المقدمة له',
            'box_id' =>  7
        ]);
        AlshatbList::create([
            'ques_number' => 4,
            'question' => 'يمد يده للوصول الى أشخاص مألوفين',
            'box_id' =>  7
        ]);
        AlshatbList::create([
            'ques_number' => 5,
            'question' => 'يبتسم ويصدر أصوات لصورته في المرآة أو يمد يده ويصل اليها ليربت على صورته فيها',
            'box_id' =>  7
        ]);
        AlshatbList::create([
            'ques_number' => 6,
            'question' => 'يحمل ويفحص الأشياء المقدمة لمدة دقيقة على الأقل',
            'box_id' =>  7
        ]);

        /////Box 8
        AlshatbList::create([
            'ques_number' => 7,
            'question' => '',
            'box_id' =>  7
        ]);
    }
}

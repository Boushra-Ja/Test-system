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
        ////// 1            18 ///////////////
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
        /////////7 - 12/////////////
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

        //////////اللعب الاجتماعي//////////
        ///////13  - 18//////////
        OtherBox::create([
            'id' => 13,
            'start_age' => 0,
            'end_age' =>  12,
            'subTitle_id' => SubTitle::where('title', 'اللعب الاجتماعي والتفاعل مع الألعاب')->value('id'),
        ]);
        OtherBox::create([
            'id' => 14,
            'start_age' => 12,
            'end_age' =>  24,
            'subTitle_id' => SubTitle::where('title', 'اللعب الاجتماعي والتفاعل مع الألعاب')->value('id'),
        ]);
        OtherBox::create([
            'id' => 15,
            'start_age' => 24,
            'end_age' =>  36,
            'subTitle_id' => SubTitle::where('title', 'اللعب الاجتماعي والتفاعل مع الألعاب')->value('id'),
        ]);
        OtherBox::create([
            'id' => 16,
            'start_age' => 36,
            'end_age' =>  48,
            'subTitle_id' => SubTitle::where('title', 'اللعب الاجتماعي والتفاعل مع الألعاب')->value('id'),
        ]);
        OtherBox::create([
            'id' => 17,
            'start_age' => 48,
            'end_age' =>  60,
            'subTitle_id' => SubTitle::where('title', 'اللعب الاجتماعي والتفاعل مع الألعاب')->value('id'),
        ]);
        OtherBox::create([
            'id' => 18,
            'start_age' => 60,
            'end_age' =>  72,
            'subTitle_id' => SubTitle::where('title', 'اللعب الاجتماعي والتفاعل مع الألعاب')->value('id'),
        ]);


        ////////البعد المعرفي/////////
        ///// 19        30  //////////
        //////المهارات الحسية/////
        /////19   -   24  //////
        OtherBox::create([
            'id' => 19,
            'start_age' => 0,
            'end_age' =>  12,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحسية والإدراكية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 20,
            'start_age' => 12,
            'end_age' =>  24,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحسية والإدراكية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 21,
            'start_age' => 24,
            'end_age' =>  36,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحسية والإدراكية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 22,
            'start_age' => 36,
            'end_age' =>  48,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحسية والإدراكية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 23,
            'start_age' => 48,
            'end_age' =>  60,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحسية والإدراكية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 24,
            'start_age' => 60,
            'end_age' =>  72,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحسية والإدراكية')->value('id'),
        ]);


        /////الاستكشاف والتفكير المنطقي//////
        /////// 25  -- 30 ////
        OtherBox::create([
            'id' => 25,
            'start_age' => 0,
            'end_age' =>  12,
            'subTitle_id' => SubTitle::where('title', 'الاستكشاف والتفكير المنطقي والأهداف الرياضية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 26,
            'start_age' => 12,
            'end_age' =>  24,
            'subTitle_id' => SubTitle::where('title', 'الاستكشاف والتفكير المنطقي والأهداف الرياضية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 27,
            'start_age' => 24,
            'end_age' =>  36,
            'subTitle_id' => SubTitle::where('title', 'الاستكشاف والتفكير المنطقي والأهداف الرياضية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 28,
            'start_age' => 36,
            'end_age' =>  48,
            'subTitle_id' => SubTitle::where('title', 'الاستكشاف والتفكير المنطقي والأهداف الرياضية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 29,
            'start_age' => 48,
            'end_age' =>  60,
            'subTitle_id' => SubTitle::where('title', 'الاستكشاف والتفكير المنطقي والأهداف الرياضية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 30,
            'start_age' => 60,
            'end_age' =>  72,
            'subTitle_id' => SubTitle::where('title', 'الاستكشاف والتفكير المنطقي والأهداف الرياضية')->value('id'),
        ]);


        //////البعد الاتصالي///////
        ///// 31         42 ///////
        //////التواصل والللغة ///////
        ///// 31   -   36/////////
        OtherBox::create([
            'id' => 31,
            'start_age' => 0,
            'end_age' =>  12,
            'subTitle_id' => SubTitle::where('title', 'التواصل واللغة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 32,
            'start_age' => 12,
            'end_age' =>  24,
            'subTitle_id' => SubTitle::where('title', 'التواصل واللغة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 33,
            'start_age' => 24,
            'end_age' =>  36,
            'subTitle_id' => SubTitle::where('title', 'التواصل واللغة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 34,
            'start_age' => 36,
            'end_age' =>  48,
            'subTitle_id' => SubTitle::where('title', 'التواصل واللغة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 35,
            'start_age' => 48,
            'end_age' =>  60,
            'subTitle_id' => SubTitle::where('title', 'التواصل واللغة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 36,
            'start_age' => 60,
            'end_age' =>  72,
            'subTitle_id' => SubTitle::where('title', 'التواصل واللغة')->value('id'),
        ]);


        //////مهارات القراءة المبكرة/////
        ////// 37    -   42  ///////
        OtherBox::create([
            'id' => 37,
            'start_age' => 0,
            'end_age' =>  12,
            'subTitle_id' => SubTitle::where('title', 'مهارات القراءة المبكرة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 38,
            'start_age' => 12,
            'end_age' =>  24,
            'subTitle_id' => SubTitle::where('title', 'مهارات القراءة المبكرة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 39,
            'start_age' => 24,
            'end_age' =>  36,
            'subTitle_id' => SubTitle::where('title', 'مهارات القراءة المبكرة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 40,
            'start_age' => 36,
            'end_age' =>  48,
            'subTitle_id' => SubTitle::where('title', 'مهارات القراءة المبكرة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 41,
            'start_age' => 48,
            'end_age' =>  60,
            'subTitle_id' => SubTitle::where('title', 'مهارات القراءة المبكرة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 42,
            'start_age' => 60,
            'end_age' =>  72,
            'subTitle_id' => SubTitle::where('title', 'مهارات القراءة المبكرة')->value('id'),
        ]);

        //////بعد العناية الذاتية///////
        /// التغذيه//////////
        /// 43----48//
        OtherBox::create([
            'id' => 43,
            'start_age' => 0,
            'end_age' =>  12,
            'subTitle_id' => SubTitle::where('title', 'التغذية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 44,
            'start_age' => 12,
            'end_age' =>  24,
            'subTitle_id' => SubTitle::where('title', 'التغذية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 45,
            'start_age' => 24,
            'end_age' =>  36,
            'subTitle_id' => SubTitle::where('title', 'التغذية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 46,
            'start_age' => 36,
            'end_age' =>  48,
            'subTitle_id' => SubTitle::where('title', 'التغذية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 47,
            'start_age' => 48,
            'end_age' =>  60,
            'subTitle_id' => SubTitle::where('title', 'التغذية')->value('id'),
        ]);
        OtherBox::create([
            'id' => 48,
            'start_age' => 60,
            'end_age' =>  72,
            'subTitle_id' => SubTitle::where('title', 'التغذية')->value('id'),
        ]);
        /////////النظافه والترتيب والصحه العامه///
        /// 49 ---- 54//
        OtherBox::create([
            'id' => 49,
            'start_age' => 0,
            'end_age' =>  12,

            'subTitle_id' => SubTitle::where('title','النظافة والترتيب والصحة العامة')->value('id'),
        ]);

        OtherBox::create([
            'id' => 50,
            'start_age' => 12,
            'end_age' =>  24,
            'subTitle_id' => SubTitle::where('title','النظافة والترتيب والصحة العامة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 51,
            'start_age' => 24,
            'end_age' =>  36,
            'subTitle_id' => SubTitle::where('title','النظافة والترتيب والصحة العامة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 52,
            'start_age' => 36,
            'end_age' =>  48,
            'subTitle_id' => SubTitle::where('title','النظافة والترتيب والصحة العامة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 53,
            'start_age' => 48,
            'end_age' =>  60,
            'subTitle_id' => SubTitle::where('title','النظافة والترتيب والصحة العامة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 54,
            'start_age' => 60,
            'end_age' =>  72,
            'subTitle_id' => SubTitle::where('title','النظافة والترتيب والصحة العامة')->value('id'),
        ]);

        ////ارتداء الملابس///
        /// 55 --- 60///
        OtherBox::create([
            'id' => 55,
            'start_age' => 0,
            'end_age' =>  12,
            'subTitle_id' => SubTitle::where('title', 'ارتداء الملابس')->value('id'),
        ]);
        OtherBox::create([
            'id' => 56,
            'start_age' => 12,
            'end_age' =>  24,
            'subTitle_id' => SubTitle::where('title', 'ارتداء الملابس')->value('id'),
        ]);
        OtherBox::create([
            'id' => 57,
            'start_age' => 24,
            'end_age' =>  36,
            'subTitle_id' => SubTitle::where('title', 'ارتداء الملابس')->value('id'),
        ]);
        OtherBox::create([
            'id' => 58,
            'start_age' => 36,
            'end_age' =>  48,
            'subTitle_id' => SubTitle::where('title', 'ارتداء الملابس')->value('id'),
        ]);
        OtherBox::create([
            'id' => 59,
            'start_age' => 48,
            'end_age' =>  60,
            'subTitle_id' => SubTitle::where('title', 'ارتداء الملابس')->value('id'),
        ]);
        OtherBox::create([
            'id' => 60,
            'start_age' => 60,
            'end_age' =>  72,
            'subTitle_id' => SubTitle::where('title', 'ارتداء الملابس')->value('id'),
        ]);
        //////المهارات الحركية الكبيرة والتوازن////
        /// 61---66////
        OtherBox::create([
            'id' => 61,
            'start_age' => 0,
            'end_age' =>  12,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحركية الكبيرة والتوازن')->value('id'),
        ]);
        OtherBox::create([
            'id' => 62,
            'start_age' => 12,
            'end_age' =>  24,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحركية الكبيرة والتوازن')->value('id'),
        ]);
        OtherBox::create([
            'id' => 63,
            'start_age' => 24,
            'end_age' =>  36,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحركية الكبيرة والتوازن')->value('id'),
        ]);
        OtherBox::create([
            'id' => 64,
            'start_age' => 36,
            'end_age' =>  48,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحركية الكبيرة والتوازن')->value('id'),
        ]);
        OtherBox::create([
            'id' => 65,
            'start_age' => 48,
            'end_age' =>  60,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحركية الكبيرة والتوازن')->value('id'),
        ]);
        OtherBox::create([
            'id' => 66,
            'start_age' => 60,
            'end_age' =>  72,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحركية الكبيرة والتوازن')->value('id'),
        ]);
        ////المهارات الحركية الدقيقة///
        /// 67-------72
        OtherBox::create([
            'id' => 67,
            'start_age' => 0,
            'end_age' =>  12,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحركية الدقيقة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 68,
            'start_age' => 12,
            'end_age' =>  24,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحركية الدقيقة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 69,
            'start_age' => 24,
            'end_age' =>  36,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحركية الدقيقة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 70,
            'start_age' => 36,
            'end_age' =>  48,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحركية الدقيقة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 71,
            'start_age' => 48,
            'end_age' =>  60,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحركية الدقيقة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 72,
            'start_age' => 60,
            'end_age' =>  72,
            'subTitle_id' => SubTitle::where('title', 'المهارات الحركية الدقيقة')->value('id'),
        ]);

        /////مهارات ما قبل  الكتابه والكتابه المبكره ////
        /// 73 ----78///
        OtherBox::create([
            'id' => 73,
            'start_age' => 0,
            'end_age' =>  12,
            'subTitle_id' => SubTitle::where('title', 'مهارات ماقبل الكتابة والكتابة المبكرة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 74,
            'start_age' => 12,
            'end_age' =>  24,
            'subTitle_id' => SubTitle::where('title', 'مهارات ماقبل الكتابة والكتابة المبكرة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 75,
            'start_age' => 24,
            'end_age' =>  36,
            'subTitle_id' => SubTitle::where('title', 'مهارات ماقبل الكتابة والكتابة المبكرة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 76,
            'start_age' => 36,
            'end_age' =>  48,
            'subTitle_id' => SubTitle::where('title', 'مهارات ماقبل الكتابة والكتابة المبكرة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 77,
            'start_age' => 48,
            'end_age' =>  60,
            'subTitle_id' => SubTitle::where('title', 'مهارات ماقبل الكتابة والكتابة المبكرة')->value('id'),
        ]);
        OtherBox::create([
            'id' => 78,
            'start_age' => 60,
            'end_age' =>  72,
            'subTitle_id' => SubTitle::where('title', 'مهارات ماقبل الكتابة والكتابة المبكرة')->value('id'),
        ]);






    }
}

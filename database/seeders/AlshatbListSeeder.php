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
            'question' => 'يكمل نشاطاته عند غياب أحد الوالدين',
            'box_id' =>  8
        ]);
        AlshatbList::create([
            'ques_number' => 8,
            'question' => 'يتنقل في البيئة المحيطة ليستكشفها بنشاط',
            'box_id' =>  8
        ]);
        AlshatbList::create([
            'ques_number' => 9,
            'question' => 'يسحب شخص آخر لمشاهدة بعض الأشياء أو الأعمال',
            'box_id' =>  8
        ]);
        AlshatbList::create([
            'ques_number' => 10,
            'question' => 'يسحب يده يقول لا عند الاقتراب بجوار أشياء ممنوعة عندما يذكر',
            'box_id' =>  8
        ]);
        AlshatbList::create([
            'ques_number' => 11,
            'question' => 'ينتظر لأن تقضى له احتياجاته المرحاضية عندما يكون موضوعا على كرسي عالي أو طاولة التغيير ',
            'box_id' =>  8
        ]);


        /////Box 9
        AlshatbList::create([
            'ques_number' => 12,
            'question' => 'يستمع إلى الموسيقى أو القصصص لمدة 5 - 10 دقائق ',
            'box_id' =>  9
        ]);
        AlshatbList::create([
            'ques_number' => 13,
            'question' => 'يختار عندما يسأل أتريد شرب اللبن أم العصير',
            'box_id' =>  9
        ]);
        AlshatbList::create([
            'ques_number' => 14,
            'question' => 'يهم المشاعر بتعبيره عن الحب، الغضب،الحزن،الضحك ...الخ',
            'box_id' =>  9
        ]);

        ////Box 10
        AlshatbList::create([
            'ques_number' => 15,
            'question' => 'يرقص ويغني مع الإيقاع',
            'box_id' =>  10
        ]);
        AlshatbList::create([
            'ques_number' => 16,
            'question' => 'يبقى في مكان محدد عندما يطلب منه ذلك',
            'box_id' =>  10
        ]);

        ////Box 11
        AlshatbList::create([
            'ques_number' => 17,
            'question' => 'يطلب المساعدة عند ملاقاة صعوبة (في الحمام أو إحضار شراب)',
            'box_id' =>  11
        ]);
        AlshatbList::create([
            'ques_number' => 18,
            'question' => 'يعمل وحده في مهمة لمدة 20 - 30 دقيقة',
            'box_id' =>  11
        ]);
        AlshatbList::create([
            'ques_number' => 19,
            'question' => 'يعتذر بدون تذكير 75 % من الوقت',
            'box_id' =>  11
        ]);
        AlshatbList::create([
            'ques_number' => 20,
            'question' => 'يتصرف بشكل مناسب عند تواجده في المحيط العام',
            'box_id' =>  11
        ]);


        ////Box 12
        AlshatbList::create([
            'ques_number' => 21,
            'question' => 'يخبر عن مشاعره الخاصة(غاضب، مبسوط، محب)',
            'box_id' =>  12
        ]);

        AlshatbList::create([
            'ques_number' => 22,
            'question' => 'يخفف حال أصدقاء اللعب إن كانوا مضطربين',
            'box_id' =>  12
        ]);
        AlshatbList::create([
            'ques_number' => 23,
            'question' => 'يختار أصدقاءه',
            'box_id' =>  12
        ]);

        /////اللعب الاجتماعي
        ////Box 13
        AlshatbList::create([
            'ques_number' => 1,
            'question' => 'يلعب لمدة 10 دقائق في مكان آمن وبمراقبة شخص كبير',
            'box_id' =>  13
        ]);
        AlshatbList::create([
            'ques_number' => 2,
            'question' => 'يتحكم باللعب والأدوات مستخدما يديه',
            'box_id' =>  13
        ]);
        AlshatbList::create([
            'ques_number' => 3,
            'question' => 'يقلد حركات طفل آخر',
            'box_id' =>  13
        ]);

        ////Box 14
        AlshatbList::create([
            'ques_number' => 4,
            'question' => 'يلعب بجانب طفل آخر لكن كل منهما يؤدي نشاط مختلف',
            'box_id' =>  14
        ]);
        AlshatbList::create([
            'ques_number' => 5,
            'question' => 'يأخذ دور في لعبة دفع سيارة أو دحرجة كرة مع شخص كبير لمدة من 2 - 5 دقيقة',
            'box_id' =>  14
        ]);
        AlshatbList::create([
            'ques_number' => 6,
            'question' => 'يحضن ويحمل لعبة لينة أو عروسة',
            'box_id' =>  14
        ]);
        AlshatbList::create([
            'ques_number' => 7,
            'question' => 'يعيد الحركات التي تصدر ضحكاً وانتباها',
            'box_id' =>  14
        ]);


        /////Box 15
        AlshatbList::create([
            'ques_number' => 8,
            'question' => 'يلعب لعبة ارتداء ملابس الكبار وتقليدهم',
            'box_id' =>  15
        ]);

        ////Box 16
        AlshatbList::create([
            'ques_number' => 9,
            'question' => 'يلعب متبعاً القوانين في ألعاب جماعية مقادة من قبل شخص كبير',
            'box_id' =>  16
        ]);
        AlshatbList::create([
            'ques_number' => 10,
            'question' => 'يلعب قرب أو يتحدث مع الأطفال الآخرين عندما يعمل بمشروعه الخاص لمدة 30 دقيقة',
            'box_id' =>  16
        ]);

        /////Box 17
        AlshatbList::create([
            'ques_number' => 11,
            'question' => 'ينتظر دوره في اللعب مع 8 أو 9 أطفال آخرين',
            'box_id' =>  17
        ]);
        AlshatbList::create([
            'ques_number' => 12,
            'question' => 'يلعب مع طفلين أو ثلاث لمدة 20 دقيقة في نشاط متعاون',
            'box_id' =>  17
        ]);

        /////Box 18
        AlshatbList::create([
            'ques_number' => 13,
            'question' => 'يشرح قوانين الألعاب أو النشاطات للآخرين',
            'box_id' =>  18
        ]);
        AlshatbList::create([
            'ques_number' => 14,
            'question' => 'يقلد دور الكبار',
            'box_id' =>  18
        ]);
        AlshatbList::create([
            'ques_number' => 15,
            'question' => 'يمثل دور في قصة / مسرحية أو يستعمل اللعب التي تلبس باليد لذلك',
            'box_id' =>  18
        ]);


        ///////////البعد المعرفي
        //////المهارات الحسية والادراكية
        /////Box 19
        AlshatbList::create([
            'ques_number' => 1,
            'question' => 'الاستشارة البصرية العامة(أقل من ستة أسابيع) : مثل الاستجابة للضوء',
            'box_id' =>  19
        ]);
        AlshatbList::create([
            'ques_number' => 2,
            'question' => 'الاستشارة اللمسية العامة(أقل من ستة أسابيع) مثل الاستجابة للمثيرات اللمسية الصوفية',
            'box_id' =>  19
        ]);
        AlshatbList::create([
            'ques_number' => 3,
            'question' => 'الاستشارة السمعية العامة(أقل من ستة أسابيع) مثل الاستجابة للصوت العالي',
            'box_id' =>  19
        ]);
        AlshatbList::create([
            'ques_number' => 4,
            'question' => 'الاستشارة البصرية العامة(أكثر من ستة أسابيع) مثل الاستجابة لجسم متحرك',
            'box_id' =>  19
        ]);
        AlshatbList::create([
            'ques_number' => 5,
            'question' => ' الاستشارة اللمسية العامة (أكثر من ستة أسابيع) مثل الاستجابة للمثيرات اللمسية الناعمة',
            'box_id' =>  19
        ]);
        AlshatbList::create([
            'ques_number' => 6,
            'question' => ' الاستشارة السمعية العامة (أكثر من ستة أسابيع) مثل الاستجابة للصوت المنخفض',
            'box_id' =>  19
        ]);
        AlshatbList::create([
            'ques_number' => 7,
            'question' => 'يهدأ أو يبكي أو يحرك جسمه كحساسية للتلامس الجسدي',
            'box_id' =>  19
        ]);
        AlshatbList::create([
            'ques_number' => 8,
            'question' => 'ينظر بدقة إلى أداة تحركت عبر خط منتصف الجسم',
            'box_id' =>  19
        ]);
        AlshatbList::create([
            'ques_number' => 9,
            'question' => 'يدير عينيه ورأسه اتجاه الضوء',
            'box_id' =>  19
        ]);
        AlshatbList::create([
            'ques_number' => 10,
            'question' => 'يدير رأسه باتجاه الصوت',
            'box_id' =>  19
        ]);
        AlshatbList::create([
            'ques_number' => 11,
            'question' =>  'ينظر إلى يده مدركا إياها',
            'box_id' =>  19
        ]);
        AlshatbList::create([
            'ques_number' => 12,
            'question' => 'يتواصل بصريا لمدة 3 ثواني',
            'box_id' =>  19
        ]);
        AlshatbList::create([
            'ques_number' => 13,
            'question' => 'يحرك عينيه لمتابعة أداة تتحرك أمامه لمساحة تقدر ب 180 درجة',
            'box_id' =>  19
        ]);

        //////Box 20
        AlshatbList::create([
            'ques_number' => 14,
            'question' => 'يخرج 6 أدوات من وعاء كل على حدى',
            'box_id' =>  20
        ]);
        AlshatbList::create([
            'ques_number' => 15,
            'question' => 'يشير إلى جزء واحد من الجسم',
            'box_id' =>  20
        ]);
        AlshatbList::create([
            'ques_number' => 16,
            'question' => 'يكدس 3 مكعبات فوق بعض عن الطلب',
            'box_id' =>  20
        ]);
        AlshatbList::create([
            'ques_number' => 17,
            'question' => 'يطابق أدوات متشابهة',
            'box_id' =>  20
        ]);
        AlshatbList::create([
            'ques_number' => 18,
            'question' => 'يشير إلى نفسه عندما يسأل(أين اسمه)',
            'box_id' =>  20
        ]);
        AlshatbList::create([
            'ques_number' => 19,
            'question' => 'يضع 5 أوتاد مدورة في لوح الأوتاد عند الطلب',
            'box_id' =>  20
        ]);
        AlshatbList::create([
            'ques_number' => 20,
            'question' => 'يطابق أدوات مع صور لتلك الأدوات',
            'box_id' =>  20
        ]);
        AlshatbList::create([
            'ques_number' => 21,
            'question' => 'يشير إلى صورة مسماة',
            'box_id' =>  20
        ]);
        AlshatbList::create([
            'ques_number' => 22,
            'question' => 'يقلب من 2-3 صفحات من كتاب في المرة الواحدة ليجد الصورة المسماة',
            'box_id' =>  20
        ]);

        /////Box 21
        AlshatbList::create([
            'ques_number' => 23,
            'question' => 'يركب 3 قطع في لوح أشكال',
            'box_id' =>  21
        ]);
        AlshatbList::create([
            'ques_number' => 24,
            'question' => 'يسمي 4 صور مألوفة',
            'box_id' =>  21
        ]);
        AlshatbList::create([
            'ques_number' => 25,
            'question' => 'يطابق بين 3 ملامس(ناعم ، خشن ، طري)',
            'box_id' =>  21
        ]);
        AlshatbList::create([
            'ques_number' => 26,
            'question' => 'يشير إلى كبير وصغير عند الطلب',
            'box_id' =>  21
        ]);
        AlshatbList::create([
            'ques_number' => 27,
            'question' => 'يطابق ثلاثة ألوان',
            'box_id' =>  21
        ]);
        AlshatbList::create([
            'ques_number' => 28,
            'question' => 'يضع الأدوات بداخل، على وتحت عند الطلب',
            'box_id' =>  21
        ]);
        AlshatbList::create([
            'ques_number' => 29,
            'question' => 'يسمي أدوات تصدر أصواتا',
            'box_id' =>  21
        ]);
        AlshatbList::create([
            'ques_number' => 30,
            'question' => 'يطابق أشكال هندسية مع صور لتلك الأشكال',
            'box_id' =>  21
        ]);
        AlshatbList::create([
            'ques_number' => 31,
            'question' => 'يكدس خمس أو أكثر من حلقات على وتد بالترتيب',
            'box_id' =>  21
        ]);

        ///Box 22
        AlshatbList::create([
            'ques_number' => 32,
            'question' => 'يسمي الأدوات الصغيرة والكبيرة',
            'box_id' =>  22
        ]);
        AlshatbList::create([
            'ques_number' => 33,
            'question' => 'يشير إلى 10 أجزاء من الجسم عند تلقي التعليمات اللغوية',
            'box_id' =>  22
        ]);
        AlshatbList::create([
            'ques_number' => 34,
            'question' => 'يشير إلى ولد وبنت عند الأمر اللغوي',
            'box_id' =>  22
        ]);
        AlshatbList::create([
            'ques_number' => 35,
            'question' => 'يخبر إما الأداة خفيفة أو ثقيلة',
            'box_id' =>  22
        ]);
        AlshatbList::create([
            'ques_number' => 36,
            'question' => 'يلعب باليد والأصابع وهو يغني ويعمل حركات',
            'box_id' =>  22
        ]);
        AlshatbList::create([
            'ques_number' => 37,
            'question' => 'يشير إلى الأدوات القصيرة والطويلة',
            'box_id' =>  22
        ]);
        AlshatbList::create([
            'ques_number' => 38,
            'question' => 'يبني جسرا ب 3 مكعبات بالتقليد',
            'box_id' =>  22
        ]);
        AlshatbList::create([
            'ques_number' => 39,
            'question' => 'يسمي 3 ألوان عند الطلب',
            'box_id' =>  22
        ]);

        ////Box 23
        AlshatbList::create([
            'ques_number' => 40,
            'question' => 'يسمي خمسة ملامس',
            'box_id' =>  23
        ]);
        AlshatbList::create([
            'ques_number' => 41,
            'question' => 'يسمي 4 أشياء رآها في صورة',
            'box_id' =>  23
        ]);
        AlshatbList::create([
            'ques_number' => 42,
            'question' => 'يقول إذا كان الشيء أثقل أو أخف(أقل من نصف كيلو)',
            'box_id' =>  23
        ]);
        AlshatbList::create([
            'ques_number' => 43,
            'question' => 'يسمي 8 ألوان',
            'box_id' =>  23
        ]);
        AlshatbList::create([
            'ques_number' => 44,
            'question' => 'يسمي 5 ليرات، 10 ليرات ، 25 ليرة',
            'box_id' =>  23
        ]);
        AlshatbList::create([
            'ques_number' => 45,
            'question' => 'يقول لون الأدوات المسماة',
            'box_id' =>  23
        ]);
        AlshatbList::create([
            'ques_number' => 46,
            'question' => 'يبني هرما مكونا من 10 مكعبات بالتقليد',
            'box_id' =>  23
        ]);
        AlshatbList::create([
            'ques_number' => 47,
            'question' => 'يسمي طويل وقصير',
            'box_id' =>  23
        ]);
        AlshatbList::create([
            'ques_number' => 48,
            'question' => 'يضع الأدوات بالخلف ، بجانب وبالقرب من',
            'box_id' =>  23
        ]);
        AlshatbList::create([
            'ques_number' => 49,
            'question' => 'يسمي الموضع إما الأول،الوسط، الأخير',
            'box_id' =>  23
        ]);

        //////Box 24
        AlshatbList::create([
            'ques_number' => 50,
            'question' => 'يسمي اليمين واليسار على نفسه',
            'box_id' =>  24
        ]);
        AlshatbList::create([
            'ques_number' => 51,
            'question' => 'يرتب الأدوات تبعا للطول والعرض',
            'box_id' =>  24
        ]);
        AlshatbList::create([
            'ques_number' => 52,
            'question' => 'يسمي موضع الأدوات إما الأول أو الثاني أو الثالث',
            'box_id' =>  24
        ]);
        AlshatbList::create([
            'ques_number' => 53,
            'question' => 'يسمي أيام الأسبوع',
            'box_id' =>  24
        ]);
        AlshatbList::create([
            'ques_number' => 54,
            'question' => 'يشير إلى نصف وكل الأشياء',
            'box_id' =>  24
        ]);

        ///////الاستكشاف والتفكير المنطقي
        ////Box 25
        AlshatbList::create([
            'ques_number' => 1,
            'question' => 'يدير رأسه باحثا عن مصدر الصوت',
            'box_id' =>  25
        ]);
        AlshatbList::create([
            'ques_number' => 2,
            'question' => 'يرفع قطعة من القماش من على وجهه(تعرقل الرؤية)',
            'box_id' =>  25
        ]);
        AlshatbList::create([
            'ques_number' => 3,
            'question' => 'يبحث ببصره عن أداة رفعت من خط رؤيته المباشر',
            'box_id' =>  25
        ]);
        AlshatbList::create([
            'ques_number' => 4,
            'question' => 'يضع أداة في يده مستكشفا إياها',
            'box_id' =>  25
        ]);

        ////////Box 26
        AlshatbList::create([
            'ques_number' => 5,
            'question' => 'يجد أداة مخبأة تحت وعاء',
            'box_id' =>  26
        ]);

        /////Box 27
        AlshatbList::create([
            'ques_number' => 6,
            'question' => 'يركب أحجية من قطعتين',
            'box_id' =>  27
        ]);

        ////Box 28
        AlshatbList::create([
            'ques_number' => 7,
            'question' => 'يطابق مجموعات متساوية من 1-3 أشياء',
            'box_id' =>  28
        ]);
        AlshatbList::create([
            'ques_number' => 8,
            'question' => 'يقول أي الأدوات تتناسب معا',
            'box_id' =>  28
        ]);
        AlshatbList::create([
            'ques_number' => 9,
            'question' => 'يعد إلى عشرة آليا مقلدا',
            'box_id' =>  28
        ]);
        AlshatbList::create([
            'ques_number' => 10,
            'question' => 'يرتب الأدوات في فصائل',
            'box_id' =>  28
        ]);
        AlshatbList::create([
            'ques_number' => 11,
            'question' => 'يعد إلى عشرة مع مفهوم العدد مقلدا',
            'box_id' =>  28
        ]);
        AlshatbList::create([
            'ques_number' => 12,
            'question' => 'يطابق سلسلة أو نموذج من المكعبات أو الخرز',
            'box_id' =>  28
        ]);
        AlshatbList::create([
            'ques_number' => 13,
            'question' => 'يكمل صورة مجزأة من 6 قطع دون خطأ',
            'box_id' =>  28
        ]);
        AlshatbList::create([
            'ques_number' => 14,
            'question' => 'يخبر إذا ماكانت الأشياء متشابهة أم مختلفة',
            'box_id' =>  28
        ]);
        AlshatbList::create([
            'ques_number' => 15,
            'question' => 'يسمي 3 أشكال هندسية',
            'box_id' =>  28
        ]);

        ////Box 29
        AlshatbList::create([
            'ques_number' => 16,
            'question' => 'يلتقط عدد محدد من الأدوات (1-5) عند الطلب',
            'box_id' =>  29
        ]);
        AlshatbList::create([
            'ques_number' => 17,
            'question' => 'يسمي الوقت من النهار المربوط بنشاطات',
            'box_id' =>  29
        ]);
        AlshatbList::create([
            'ques_number' => 18,
            'question' => 'يقول بما هو ناقص عندما تزال أداة من مجموعة مكونة من 3 أدوات',
            'box_id' =>  29
        ]);
        AlshatbList::create([
            'ques_number' => 19,
            'question' => 'يطابق مجموعات متساوية من 1 - 10 أشياء',
            'box_id' =>  29
        ]);
        AlshatbList::create([
            'ques_number' => 20,
            'question' => 'يسمي أو يشير إلى الجزء الناقص من الصورة',
            'box_id' =>  29
        ]);
        AlshatbList::create([
            'ques_number' => 21,
            'question' => 'يعد عدا آليا من 1- 20',
            'box_id' =>  29
        ]);
        AlshatbList::create([
            'ques_number' => 22,
            'question' => 'يعد إلى 20 مع مفهوم العدد',
            'box_id' =>  29
        ]);
        AlshatbList::create([
            'ques_number' => 23,
            'question' => 'يسمي 10 أعداد مكتوبة',
            'box_id' =>  29
        ]);
        AlshatbList::create([
            'ques_number' => 24,
            'question' => 'يرتب الأعداد المكتوبة من 1 إلى 10 في التسلسل الصحيح',
            'box_id' =>  29
        ]);
        AlshatbList::create([
            'ques_number' => 25,
            'question' => 'يشير إلى الأعداد المكتوبة من 1- 25',
            'box_id' =>  29
        ]);
        AlshatbList::create([
            'ques_number' => 26,
            'question' => 'يكمل متاهات بسيطة',
            'box_id' =>  29
        ]);


        /////Box 30
        AlshatbList::create([
            'ques_number' => 27,
            'question' => 'يجمع ويطرح مركبات إلى ثلاثة',
            'box_id' =>  30
        ]);
        AlshatbList::create([
            'ques_number' => 28,
            'question' => 'يقول يوم وشهر ميلاده',
            'box_id' =>  30
        ]);
        AlshatbList::create([
            'ques_number' => 29,
            'question' => 'يخبر عن توقعاته لما سيحدث',
            'box_id' =>  30
        ]);
        AlshatbList::create([
            'ques_number' => 30,
            'question' => 'يعد من الذاكرة عدا آليا من 1 - 100',
            'box_id' =>  30
        ]);


        /////البعد الاتصالي
        ////التواصل واللغة
        ////Box 31
        AlshatbList::create([
            'ques_number' => 1,
            'question' => 'يبكي بطريقة مختلفة طبقا لنوع الإزعاجات',
            'box_id' =>  31
        ]);
        AlshatbList::create([
            'ques_number' => 2,
            'question' => 'يعيد صوته الشخصي',
            'box_id' =>  31
        ]);
        AlshatbList::create([
            'ques_number' => 3,
            'question' => 'يتحدث بكلام غير مفهوم(سلسلة من المقاطع)',
            'box_id' =>  31
        ]);
        AlshatbList::create([
            'ques_number' => 4,
            'question' => 'يعيد الصوت الصادر عن الآخرين',
            'box_id' =>  31
        ]);
        AlshatbList::create([
            'ques_number' => 5,
            'question' => 'يعيد نفس المقطع مرتين أو ثلاث مثل( ما- ما - ما)',
            'box_id' =>  31
        ]);
        AlshatbList::create([
            'ques_number' => 6,
            'question' => 'يجيب على الإشارات بإشارات',
            'box_id' =>  31
        ]);
        AlshatbList::create([
            'ques_number' => 7,
            'question' => 'ينفذ بعض التعليمات البسيطة التي تكون مصحوبة بإشارات',
            'box_id' =>  31
        ]);
        AlshatbList::create([
            'ques_number' => 8,
            'question' => 'يوقف النشاط لمدة دقائق عندما يقال له (لا) 75% من الوقت',
            'box_id' =>  31
        ]);
        AlshatbList::create([
            'ques_number' => 9,
            'question' => 'يجيب أجوبة بسيطة بإجابة غير لغوية',
            'box_id' =>  31
        ]);
        AlshatbList::create([
            'ques_number' => 10,
            'question' => 'يتحدث رابطا مقطعين مختلفين خلال اللعب اللغوي',
            'box_id' =>  31
        ]);
        AlshatbList::create([
            'ques_number' => 11,
            'question' => 'يسمي شخص أو شخص باستعمال كلمة مفردة',
            'box_id' =>  31
        ]);

        /////Box 32
        AlshatbList::create([
            'ques_number' => 12,
            'question' => 'يقول 5 كلمات مختلفة(ممكن استعمال نفس الكلمة للرمز لأشياء مختلفة)',
            'box_id' =>  32
        ]);
        AlshatbList::create([
            'ques_number' => 13,
            'question' => 'يطلب المزيد(كمان)',
            'box_id' =>  32
        ]);
        AlshatbList::create([
            'ques_number' => 14,
            'question' => 'يقول انتهى /اختفى (بح)',
            'box_id' =>  32
        ]);
        AlshatbList::create([
            'ques_number' => 15,
            'question' => 'ينفذ 3 تعلبمات مختلفة لخطوة واحدة بدون استعمال الإشارات',
            'box_id' =>  32
        ]);
        AlshatbList::create([
            'ques_number' => 16,
            'question' => 'يعطي أو (يري) عند الطلب منه',
            'box_id' =>  32
        ]);
        AlshatbList::create([
            'ques_number' => 17,
            'question' => 'يشير إلى 12 شيء مألوف عندما تذكر',
            'box_id' =>  32
        ]);
        AlshatbList::create([
            'ques_number' => 18,
            'question' => 'يقول اسمه واسم الدلم عندما يطلب منه',
            'box_id' =>  32
        ]);
        AlshatbList::create([
            'ques_number' => 19,
            'question' => 'يجيب سؤال ماهذا الشيء؟ بإعطاء اسم ذلك الشيء',
            'box_id' =>  32
        ]);
        AlshatbList::create([
            'ques_number' => 20,
            'question' => 'يتحدث رابطا استعمال الكلمات والإشارات ليجعل رغباته معروفة',
            'box_id' =>  32
        ]);
        AlshatbList::create([
            'ques_number' => 21,
            'question' => 'يسمي 5 أشخاص آخرين من العائلة',
            'box_id' =>  32
        ]);
        AlshatbList::create([
            'ques_number' => 22,
            'question' => 'يسمي 4 ألعاب',
            'box_id' =>  32
        ]);
        AlshatbList::create([
            'ques_number' => 23,
            'question' => 'يقلد أصوات حيوانات أو يستعمل أصوات الحيوانات كأسماء لها مثل(الكلب هاو هاو)',
            'box_id' =>  32
        ]);
        AlshatbList::create([
            'ques_number' => 24,
            'question' => 'يسأل عن بعض الطعام المألوف عندما يراه مثل لبن، بسكويت ، حلوى',
            'box_id' =>  32
        ]);
        AlshatbList::create([
            'ques_number' => 25,
            'question' => 'يسأل أسئلة وبذلك يقول الجملة أو الكلمة على صيغة سؤال',
            'box_id' =>  32
        ]);
        AlshatbList::create([
            'ques_number' => 26,
            'question' => 'يشير إلى 3 أجزاء من جسمه',
            'box_id' =>  32
        ]);
        AlshatbList::create([
            'ques_number' => 27,
            'question' => 'يجيب أسئلة نعم أو لا بإجابة مثبتة أو منفية',
            'box_id' =>  32
        ]);


        /////Box 33
        AlshatbList::create([
            'ques_number' => 28,
            'question' => 'يعبر عن الملكية بجملة من كلمتين أو بكلمة واحدة(مثال كرة ، كرتي..)',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 29,
            'question' => 'يربط اسم فعل في مقطع مكون من كلمتين(بابا راح)',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 30,
            'question' => 'يستعمل الكلمة التي تعني احتياج الذهاب إلى الحمام',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 31,
            'question' => 'يتحدث رابطا الاسم أو الفعل مع (هنا ، هناك) في جملة قصيرة من كلمتين مثل (هنا كرسي)',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 32,
            'question' => 'يقول لا يوجد أو ليس في الكلام(فش ، مافي ، مش هيك بالعامية)',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 33,
            'question' => 'يجيب سؤال ماذا يفعل؟ خلال نشاطاته العادية له وللأسرة',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 34,
            'question' => 'يجيب أسئلة مثل أين أمك؟',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 35,
            'question' => 'يسمي أصوات مألوفة من البيئة مثل صوت القطة',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 36,
            'question' => 'يعطي أكثر من شيء واحد عند سؤاله باستعمال سيغة الجمع (مثل مكعبات)',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 37,
            'question' => 'يدل على نفسه باستعمال اسمه في الحديث',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 38,
            'question' => 'يشير إلى صور لأشياء مألوفة موصوفة باستعمالها(10)',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 39,
            'question' => 'يرفع أصابعه ليقول عمره',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 40,
            'question' => 'يجيب عندما يسأل عن الجنس(بنت أم ولد)',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 41,
            'question' => 'ينفذ سلسلة من أمرين متقاربين(خذ الكرسي وضعه في الزاوية)',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 42,
            'question' => 'يستعمل الفعل المضارع بطريقة صحيحة',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 43,
            'question' => 'يستعمل صيغة الحمع(كتاب - كتب)',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 44,
            'question' => 'يستعمل بعض الأفعال الماضية(ذهب ، عمل ، كان)',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 45,
            'question' => 'يسأل سؤال ماهذا...ذاك؟',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 46,
            'question' => 'يتحكم بارتفاع الصوت 90 % من الوقت',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 47,
            'question' => 'يستعمل هذا وتلك في الحديث',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 48,
            'question' => 'يستعمل كلمة هذه في جملة مثل هذه كرة',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 49,
            'question' => 'يقول أنا بدل اسمه',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 50,
            'question' => 'يشير إلى أشياء ليست الشيء(ليس المكعب)',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 51,
            'question' => 'يجيب أسئلة من باسم',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 52,
            'question' => 'يستعمل صيغة الملكية من الاسم(لبابا)',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 53,
            'question' => 'يستعمل ال التعريف أو النكرة في الحديث(الكرة ، كرة)',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 54,
            'question' => 'يستعمل بعض أسماء من المجموعات(اللعب الحيوانات ، الطعام)',
            'box_id' =>  33
        ]);
        AlshatbList::create([
            'ques_number' => 55,
            'question' => 'يقول أستطيع أو أقدر قبل الفعل أحيانا(أقدر اعمل)',
            'box_id' =>  33
        ]);

        /////Box 34
        AlshatbList::create([
            'ques_number' => 56,
            'question' => 'يصنف الأشياء إما مفتوحة أو مغلقة',
            'box_id' =>  34
        ]);
        AlshatbList::create([
            'ques_number' => 57,
            'question' => 'ينفذ سلسلة من أمرين غير متقاربين(مثال خذ الكوب وأطفئ الضوء)',
            'box_id' =>  34
        ]);
        AlshatbList::create([
            'ques_number' => 58,
            'question' => 'يقول الاسم كاملا عندما يطلب منه',
            'box_id' =>  34
        ]);
        AlshatbList::create([
            'ques_number' => 59,
            'question' => 'يجيب أسئلة بسيطة تبدأ ب كيف مثل(كيف تصل إلى البقال؟)',
            'box_id' =>  34
        ]);
        AlshatbList::create([
            'ques_number' => 60,
            'question' => 'يستعمل صيغة الماضي ',
            'box_id' =>  34
        ]);
        AlshatbList::create([
            'ques_number' => 61,
            'question' => 'يخبر عن التجربة الفورية',
            'box_id' =>  34
        ]);
        AlshatbList::create([
            'ques_number' => 62,
            'question' => 'يخبر عن كيفية استعمال أدوات معروفة',
            'box_id' =>  34
        ]);
        AlshatbList::create([
            'ques_number' => 63,
            'question' => 'يستعمل (سوف ، سوف أذهب ،سوف أعمل، أريد أن ) للتعبير عن الأشياء المقبلة',
            'box_id' =>  34
        ]);
        AlshatbList::create([
            'ques_number' => 64,
            'question' => 'يسأل سؤالا استفهاميا بطريقته الخاصة',
            'box_id' =>  34
        ]);
        AlshatbList::create([
            'ques_number' => 65,
            'question' => 'يقول بعض صيغ الجمع الشائعة(رجال ، أقدام) بشكل مناسب',
            'box_id' =>  34
        ]);
        AlshatbList::create([
            'ques_number' => 66,
            'question' => 'يخبر عن حدثين في نفس ترتيب حدوثهما',
            'box_id' =>  34
        ]);

        //////Box 35
        AlshatbList::create([
            'ques_number' => 67,
            'question' => 'ينفذ سلسلة من 3 إشارات',
            'box_id' =>  35
        ]);
        AlshatbList::create([
            'ques_number' => 68,
            'question' => 'يخبر عن فهمه للجملة المبنية للمجهول(الولد أكل التفاحة:أُكلت التفاحة)',
            'box_id' =>  35
        ]);
        AlshatbList::create([
            'ques_number' => 69,
            'question' => 'يجد زوج من الأدوات ، الصور عند الطلب',
            'box_id' =>  35
        ]);
        AlshatbList::create([
            'ques_number' => 70,
            'question' => 'يقول (أستطيع ، أرغب) في الكلام بشكل مناسب',
            'box_id' =>  35
        ]);
        AlshatbList::create([
            'ques_number' => 71,
            'question' => 'يقول جمل مترابطة(أنا ضربت الكرة وطارت الى الشارع)',
            'box_id' =>  35
        ]);
        AlshatbList::create([
            'ques_number' => 72,
            'question' => 'يجد أعلى وأسفل الأشياء عند الطلب',
            'box_id' =>  35
        ]);
        AlshatbList::create([
            'ques_number' => 73,
            'question' => 'يقول جمل منفية: لا أريد ، لا أستطيع ،لن أفعل',
            'box_id' =>  35
        ]);
        AlshatbList::create([
            'ques_number' => 74,
            'question' => 'يشير إلى الأخطاء السخيفة في الصورة',
            'box_id' =>  35
        ]);
        AlshatbList::create([
            'ques_number' => 75,
            'question' => 'يقول كلمات أخ ، أخت ،جد ، جدة بشكل مناسب',
            'box_id' =>  35
        ]);
        AlshatbList::create([
            'ques_number' => 76,
            'question' => 'يقول الكلمة النهائية في التناظر العكسي(مثال تظهر الشمس في الصباح ويظهر القمر في...)',
            'box_id' =>  35
        ]);
        AlshatbList::create([
            'ques_number' => 77,
            'question' => 'يسمي الصورة التي لا تنتمي إلى فئة معينة(لا تنتمي إلى فئة الحيوان)',
            'box_id' =>  35
        ]);
        AlshatbList::create([
            'ques_number' => 78,
            'question' => 'يقول إن كانت الكلمتين على نفس الوزن والنغمة أم لا',
            'box_id' =>  35
        ]);
        AlshatbList::create([
            'ques_number' => 79,
            'question' => 'يخبر إذا كان الصوت عاليا أو خافتا',
            'box_id' =>  35
        ]);

        /////Box 36
        AlshatbList::create([
            'ques_number' => 80,
            'question' => 'يشير إلى قليل ، أكثر ، أكثر الجميع',
            'box_id' =>  36
        ]);
        AlshatbList::create([
            'ques_number' => 81,
            'question' => 'يقول العنوان',
            'box_id' =>  36
        ]);
        AlshatbList::create([
            'ques_number' => 82,
            'question' => 'يقول رقم الهاتف',
            'box_id' =>  36
        ]);
        AlshatbList::create([
            'ques_number' => 83,
            'question' => 'يقول نكت بسيطة',
            'box_id' =>  36
        ]);
        AlshatbList::create([
            'ques_number' => 84,
            'question' => 'يخبر عن تجاربه اليومية',
            'box_id' =>  36
        ]);
        AlshatbList::create([
            'ques_number' => 85,
            'question' => 'يصف طريق الوصول من باب منزله إلى غرفته',
            'box_id' =>  36
        ]);
        AlshatbList::create([
            'ques_number' => 86,
            'question' => 'يجيب أسئلة لماذا بتفسير',
            'box_id' =>  36
        ]);
        AlshatbList::create([
            'ques_number' => 87,
            'question' => 'يقول معاني الكلمات',
            'box_id' =>  36
        ]);
        AlshatbList::create([
            'ques_number' => 88,
            'question' => 'يقول عكس الشيء',
            'box_id' =>  36
        ]);
        AlshatbList::create([
            'ques_number' => 89,
            'question' => 'يجيب أسئلة ماذا يحدث إذا مثال(ماذا يحدث إذا سقطت البيضة)',
            'box_id' =>  36
        ]);
        AlshatbList::create([
            'ques_number' => 90,
            'question' => 'يتحدث مستعملا كلمة أمس وغدا بطريقة سليمة',
            'box_id' =>  36
        ]);

        /////مهارات القراءة المبكرة
        /////Box 37
        AlshatbList::create([
            'ques_number' => 1,
            'question' => 'يقلب صفحات من كتاب في وقت واحد',
            'box_id' =>  37
        ]);

        ////Box 38
        AlshatbList::create([
            'ques_number' => 2,
            'question' => 'يشير إلى 3-5 صور في كتاب عندما تذكر اسماؤهم',
            'box_id' =>  38
        ]);
        /////Box 39
        AlshatbList::create([
            'ques_number' => 3,
            'question' => 'يعطي كتاب لشخص كبير للقراءة له أو المشاركة معه بالنظر',
            'box_id' =>  39
        ]);
        AlshatbList::create([
            'ques_number' => 4,
            'question' => 'يحضر كتاب معين عند الطلب',
            'box_id' =>  39
        ]);
        AlshatbList::create([
            'ques_number' => 5,
            'question' => 'يصف 3 أنشطة ممثلة في صور',
            'box_id' =>  39
        ]);
        AlshatbList::create([
            'ques_number' => 6,
            'question' => 'يصف حدثين أو شخصيتين من قصة مألوفةأو برنامج على TV',
            'box_id' =>  39
        ]);

        /////Box 40
        AlshatbList::create([
            'ques_number' => 7,
            'question' => 'يجلس ليستمع 5 دقائق عندما تقرأ له قصة',
            'box_id' =>  40
        ]);
        ////Box 41
        AlshatbList::create([
            'ques_number' => 8,
            'question' => 'يطابق الرمز (الأحرف والأعداد المكتوبة)',
            'box_id' =>  41
        ]);
        AlshatbList::create([
            'ques_number' => 9,
            'question' => 'يقول 5 أحداث رئيسية من قصة سمعها 3 مرات',
            'box_id' =>  41
        ]);
        AlshatbList::create([
            'ques_number' => 10,
            'question' => 'يغني 5 أسطر من أغنية',
            'box_id' =>  41
        ]);
        AlshatbList::create([
            'ques_number' => 11,
            'question' => 'يسرد قصة مألوفة دون استخدام صور للتلميحات',
            'box_id' =>  41
        ]);

        ////Box 42
        AlshatbList::create([
            'ques_number' => 12,
            'question' => 'يسرد الأحرف الأبجدية غيبا وبالترتيب',
            'box_id' =>  42
        ]);
        AlshatbList::create([
            'ques_number' => 13,
            'question' => 'يسمي خمسة أحرف أبجدية',
            'box_id' =>  42
        ]);
        AlshatbList::create([
            'ques_number' => 14,
            'question' => 'يقرأ الأحرف الأبجدية بالترتيب',
            'box_id' =>  42
        ]);
        AlshatbList::create([
            'ques_number' => 15,
            'question' => 'يطابق الأحرف في بدايةالكلمة وفي وسطها بالإضافة إلى الأحرف المنفصلة',
            'box_id' =>  42
        ]);
        AlshatbList::create([
            'ques_number' => 16,
            'question' => 'يقرأ الأحرف في بداية الكلمة وفي وسطها بالإضافة إلى الأحرف المنفصلة ',
            'box_id' =>  42
        ]);
        AlshatbList::create([
            'ques_number' => 17,
            'question' => 'يقرأ عشر كلمات مطبوعة دون أن يتهجى الكلمة',
            'box_id' =>  42
        ]);
        AlshatbList::create([
            'ques_number' => 18,
            'question' => 'يضع من 3-5 أجزاء متسلسلة من قصة ويقولها معا',
            'box_id' =>  42
        ]);

        //Box 43

        AlshatbList::create([
            'ques_number' => 1,
            'question' => 'يرضع',
            'box_id' =>  43
        ]);
        AlshatbList::create([
            'ques_number' => 2,
            'question' => 'يفتح الفم لتلقي زجاجه الرضاعة أو الصدر عند ملامسه الحلمه للفم',
            'box_id' =>  43
        ]);
        AlshatbList::create([
            'ques_number' => 3,
            'question' => 'يفتح الفم عندما يشاهد ملعقه عليها الطعام',
            'box_id' =>  43
        ]);
        AlshatbList::create([
            'ques_number' => 4,
            'question' => 'يأكل طعام ممزوج بسوائل يطعمه اياه أحد الوالدين مثل السيريلاك أو بسكويت ممزوج بالحليب',
            'box_id' =>  43
        ]);
        AlshatbList::create([
            'ques_number' => 5,
            'question' => 'يحمل زجاجه الرضاعه أو يمسك الثدي عند الرضاعه بدون أي مساعدة',
            'box_id' =>  43
        ]);
        AlshatbList::create([
            'ques_number' => 6 ,
            'question' => 'يحمل طعام مهروس يطعم بواسطه أحد الوالدين',
            'box_id' =>  43
        ]);
        AlshatbList::create([
            'ques_number' => 7,
            'question' => 'يشرب من كوب يحمله أحد الوالدين',
            'box_id' =>  43
        ]);
        AlshatbList::create([
            'ques_number' => 8,
            'question' => 'يأكل طعام شبه جامد يطعمه اياه أحد الوالدين( موز- بسكويت- عيش)',
            'box_id' =>  43
        ]);

        //Box 44

        AlshatbList::create([
            'ques_number' => 9,
            'question' => 'يطعم نفسه بأصابعه',
            'box_id' =>  44
        ]);
        AlshatbList::create([
            'ques_number' => 10,
            'question' => 'يحمل ويشرب من فنجان باستعمل كلتا يديه',
            'box_id' =>  44
        ]);

        //Box 45
        AlshatbList::create([
            'ques_number' => 11,
            'question' => 'يصب ماء دون مساعدةعند توفر كرسي أو درجات خشبيه له',
            'box_id' =>  45
        ]);
        AlshatbList::create([
            'ques_number' => 12,
            'question' => 'يصب من ابريق صغير في كوب دون مساعده',
            'box_id' =>  45
        ]);

        //Box 46
        AlshatbList::create([
            'ques_number' => 13,
            'question' => 'يأكل الوجبه كلها بنفسه بحسب عادات الأسرة (دون مساعده)',
            'box_id' =>  46
        ]);
        //Box 47

        AlshatbList::create([
            'ques_number' => 14,
            'question' => 'يدهن طعام لين(زبده- حمص -مربى) على قطعه من الخبز',
            'box_id' =>  47
        ]);
        AlshatbList::create([
            'ques_number' => 15,
            'question' => 'يسكب لنفسه الطعام بينما يحمل احد الوالدين الطبق المحتوي على الطعام',
            'box_id' =>  47
        ]);
        //Box 48

        AlshatbList::create([
            'ques_number' => 16,
            'question' => 'يسكب الطعام بطبقه من طبق السكب ثم يمرر طبق السكب للاخرين',
            'box_id' =>  48
        ]);
        AlshatbList::create([
            'ques_number' => 17,
            'question' => 'يحضر وجبته الخاصه من الحبوب(مثال: وجبه الحبوب مع السوائل- الكعك مع الحليب)',
            'box_id' =>  48
        ]);
        AlshatbList::create([
            'ques_number' => 18,
            'question' => 'يحضر شطيره(ساندويش لنفسه)',
            'box_id' =>  48
        ]);
        AlshatbList::create([
            'ques_number' => 19,
            'question' => 'يقطع الطعام بسكين امن(مثال: موز -بطاطس مسلوقه- بيض)',
            'box_id' =>  48
        ]);

        ///////النظافه والترتيب والصحه العامه////
        /// Box 49
        AlshatbList::create([
            'ques_number' => 1,
            'question' => '  يجلس على القصريه(النونيه)أو على مقعد المرحاض الخاص للأطفال لمده 5 دقائق  ',
            'box_id' =>  49
        ]);
        /// Box 50
        AlshatbList::create([
            'ques_number' => 2,
            'question' => 'يقول كلمات أو يشير الى احتياجه للذهاب الى المرحاض',
            'box_id' =>  50
        ]);
        AlshatbList::create([
            'ques_number' => 3,
            'question' => 'يمضغ ويبلع المواد الصالحه للأكل فقط ',
            'box_id' =>  50
        ]);
        /// Box 51
        AlshatbList::create([
            'ques_number' => 4,
            'question' => 'يمسح يديه ووجهه بالمنشفه بعد أن يأخذها من أحد الوالدين',
            'box_id' =>  51
        ]);
        AlshatbList::create([
            'ques_number' => 5,
            'question' => 'يذهب الى المرحاض بعد حركه الأمعاء حادث واحد خلال النهار /خلال أسبوع ممسموح',
            'box_id' =>  51
        ]);
        AlshatbList::create([
            'ques_number' => 6,
            'question' => 'يغسل يده ووجهه مستعملا الصابون عندما يوازن  له شخص كبير درجه حراره الماء',
            'box_id' =>  51
        ]);
        AlshatbList::create([
            'ques_number' => 7,
            'question' => 'يعلق البالطو على علاقه بطوله',
            'box_id' =>  51
        ]);
        AlshatbList::create([
            'ques_number' => 8,
            'question' => 'ينام دون أن يبلل نفسه(حلال النوم القصير)',
            'box_id' =>  51
        ]);
        AlshatbList::create([
            'ques_number' => 9,
            'question' => 'ينظف فمه عند الحاجه أثناء تناول الطعام',
            'box_id' =>  51
        ]);
        AlshatbList::create([
            'ques_number' => 10,
            'question' => 'يغسل يديه ورجليه بنفسه عندما يحمم',
            'box_id' =>  51
        ]);
        /// Box 52
        AlshatbList::create([
            'ques_number' => 11,
            'question' => 'يمسح أنفه عندما يذكر',
            'box_id' =>  52
        ]);
        AlshatbList::create([
            'ques_number' => 12,
            'question' => 'يبتعد عن الأخطار العاديه(الزجاج المكسور)',
            'box_id' =>  52
        ]);
        AlshatbList::create([
            'ques_number' => 13,
            'question' => 'يستيقظ ليلا لاستعمال المرحاض أو يبقى جافا طوال الليل',
            'box_id' =>  52
        ]);
        /// Box 53
        AlshatbList::create([
            'ques_number' => 14,
            'question' => 'ينظف ما سكب بجاب ممسحه أو اسفنج',
            'box_id' =>  53
        ]);
        AlshatbList::create([
            'ques_number' => 15,
            'question' => 'يبتعد عن السموم والمواد الضاره كواد التنظيف',
            'box_id' =>  53
        ]);
        AlshatbList::create([
            'ques_number' => 16,
            'question' => 'ينقل أدواته عن المائده بعد تناول الطعام',
            'box_id' =>  53
        ]);
        AlshatbList::create([
            'ques_number' => 17,
            'question' => 'يغسل اليدين والوجه',
            'box_id' =>  53
        ]);
        AlshatbList::create([
            'ques_number' => 18,
            'question' => 'ينظف(يمخط أنفه)75% من الوقت عندما يحتاج دون تذكير',
            'box_id' =>  53
        ]);

        AlshatbList::create([
            'ques_number' => 19,
            'question' => '  يغتسل(يستحم) بنفسه عدا الظهر الرقبه الاذنين',
            'box_id' =>  53
        ]);
        AlshatbList::create([
            'ques_number' => 20,
            'question' => 'يساعد والدته في اعداد سفره الطعام بالطريقه التي تتناسب مع عادات الاسره في تناول الطعام(بعد اعطائه التعليمات اللغويه)',
            'box_id' =>  53
        ]);
        AlshatbList::create
        ([
            'ques_number' => 21,
            'question' => 'ينظف أسنانه',
            'box_id' =>  53
        ]);
        AlshatbList::create([
            'ques_number' => 22,
            'question' => 'يذهب للمرحاض في الميعاد يخلع ملابسه يمسح يفتح السيفون ويلبس دون أي مساعده ',
            'box_id' =>  53
        ]);
        /// Box 54
        AlshatbList::create([
            'ques_number' => 23,
            'question' => 'ينفذ مهمه أسبوعيه واحده عند الطلب (مسئول عندها كليا)',
            'box_id' =>  54
        ]);
        AlshatbList::create([
            'ques_number' => 24,
            'question' => 'ينفذ مهمه منزليه يوميه مسئول عنها(تحضير المائده- القاء القمامه)',
            'box_id' =>  54
        ]);
        ///الارتداء///
        /// Box 55
        AlshatbList::create([
            'ques_number' => 1,
            'question' => 'يخلع الجوارب',
            'box_id' =>  55
        ]);
        AlshatbList::create([
            'ques_number' => 2,
            'question' => 'يعد الذراعين داخل كم القميص والرجلين داخل كم البنطلون',
            'box_id' =>  55
        ]);
        AlshatbList::create([
            'ques_number' => 3,
            'question' => 'يخلع الحذاء عندما يكون الرباط غير مربوط أو مرخي',
            'box_id' =>  56
        ]);
        AlshatbList::create([
            'ques_number' => 4,
            'question' => 'يخلع الجاكيت عندما يكون مفكوكا',
            'box_id' =>  56
        ]);
        AlshatbList::create([
            'ques_number' => 5,
            'question' => 'يخلع البنطلون عندما يكون مفكوكا',
            'box_id' =>  56
        ]);
        AlshatbList::create([
            'ques_number' => 6,
            'question' => 'يقفل أو يفتح سحاب كبير ولكن لا يركب طرفيه',
            'box_id' =>  56
        ]);
        /// Box 57
        AlshatbList::create([
            'ques_number' => 7,
            'question' => 'يلبس حذائه(دون ربط الرباط)',
            'box_id' =>  57
        ]);
        AlshatbList::create([
            'ques_number' => 8,
            'question' => 'يخلع ملابسه ال الخلع بعد فكها',
            'box_id' =>  57
        ]);
        AlshatbList::create([
            'ques_number' => 9,
            'question' => 'يفك كبسونه الملابس',
            'box_id' =>  57
        ]);
        AlshatbList::create([
            'ques_number' => 10,
            'question' => 'يلبس جواربه',
            'box_id' =>  57
        ]);
        AlshatbList::create([
            'ques_number' => 11,
            'question' => 'يلبس قميصه- جاكيته-أو البالطو الخاص به',
            'box_id' =>  57
        ]);
        AlshatbList::create([
            'ques_number' => 12,
            'question' => 'يقلب الملابس على وجهها',
            'box_id' =>  57
        ]);
        /// Box 58
        AlshatbList::create([
            'ques_number' => 13,
            'question' => 'يلبس بنفسه مع مساعده عند لبس ما يحتاج لتزرير',
            'box_id' =>  58
        ]);
        AlshatbList::create([
            'ques_number' => 14,
            'question' => 'يقفل كبسونات الملابس',
            'box_id' =>  58
        ]);
        AlshatbList::create([
            'ques_number' => 15,
            'question' => 'يعلق البالطو على علاقه وضعتعلى قضيب منخفض مع اعطاء التعليمات',
            'box_id' =>  58
        ]);
        /// Box 59

        AlshatbList::create([
            'ques_number' => 16,
            'question' => 'يفك ويزرر ملابسه',
            'box_id' =>  59
        ]);
        AlshatbList::create([
            'ques_number' => 17,
            'question' => 'يركب طرفي السحاب معا',
            'box_id' =>  59
        ]);
        AlshatbList::create([
            'ques_number' => 18,
            'question' => 'يربط ويفك الحزام ذو ابزيم من على الفستان - بنطلون أو حذاء',
            'box_id' =>  59
        ]);
        AlshatbList::create([
            'ques_number' => 19,
            'question' => 'يلبس بنفسه كليا اضافه الى تزرير كل الأزرار الأماميه عند الربط',
            'box_id' =>  59
        ]);
        AlshatbList::create([
            'ques_number' => 20,
            'question' => 'يعلق الملابس على العلاقه',
            'box_id' =>  59
        ]);
        AlshatbList::create([
            'ques_number' => 21,
            'question' => 'يربط حذاءه',
            'box_id' =>  59
        ]);
        /// Box 60

        AlshatbList::create([
            'ques_number' => 22,
            'question' => 'يختار ملابس مناسبه لدرجه الحراره والمناسبات',
            'box_id' =>  60
        ]);
        //////المهارات الحركية الكبيرة والتوازن////
        ////  Box 61////
        AlshatbList::create([
            'ques_number' => 1,
            'question' => 'يحرك الرأس الى الجانب بينما يكون مستلقيا على ظهره',
            'box_id' =>  61
        ]);
        AlshatbList::create([
            'ques_number' => 2,
            'question' => 'يرفع رأسه من على الكتف ويحافظ على زضعه للحظات بينما يكون الطفل محمولا ورأسه على كتف من يحمله',
            'box_id' =>  61
        ]);
        AlshatbList::create([
            'ques_number' => 3,
            'question' => 'يحرك الذراعين حوله بدون اتجاه معين',
            'box_id' =>  61
        ]);
        AlshatbList::create([
            'ques_number' => 4,
            'question' => 'يرفس بعنف عندما يكون مستلقيا على ظهره',
            'box_id' =>  61
        ]);
        AlshatbList::create([
            'ques_number' => 5,
            'question' => 'يرفع رأسه ويحافظ على وضعه لمده 5 ثوان بينما يكون الطفل على بطنه',
            'box_id' =>  61
        ]);
        AlshatbList::create([
            'ques_number' => 6,
            'question' => 'يجلس  متحكما بالرأس والكتفين وهو مسنود بوساده',
            'box_id' =>  61
        ]);
        AlshatbList::create([
            'ques_number' => 7,
            'question' => 'يرفع رأسه بثبات عندما يكون محمولا بوضع عامودي',
            'box_id' =>  61
        ]);
        AlshatbList::create([
            'ques_number' => 8,
            'question' => 'يتدحرج باستعمال الكتفين',
            'box_id' =>  61
        ]);
        AlshatbList::create([
            'ques_number' => 9,
            'question' => 'يستلقي على بطنه مسندا ؤأسه وصدره على ذراعيه',
            'box_id' =>  61
        ]);
        AlshatbList::create([
            'ques_number' => 10,
            'question' => 'يقلب وهو مستلق على بطنه الى جانبه ومن ثم الى بطنه',
            'box_id' =>  61
        ]);
        AlshatbList::create([
            'ques_number' => 11,
            'question' => 'يحرك رأسه بحريه وجسمه مسنودا',
            'box_id' =>  61
        ]);
        AlshatbList::create([
            'ques_number' => 12,
            'question' => 'يقلب وهو مستلق على ظهره الى جانبه ومن ثم الى بطنه',
            'box_id' =>  61
        ]);
        AlshatbList::create([
            'ques_number' => 13,
            'question' => 'يهز نفسه الى أعلى و أسفل في وضع الوقوف مسنودا',
            'box_id' =>  61
        ]);
        ////  Box 62////
        AlshatbList::create([
            'ques_number' => 14,
            'question' => 'يزحف بقدر طول جسمه ليحصل على الأداه',
            'box_id' =>  62
        ]);
        AlshatbList::create([
            'ques_number' => 15,
            'question' => 'يجلس  دون اسناد',
            'box_id' =>  62
        ]);
        AlshatbList::create([
            'ques_number' => 16,
            'question' => 'يتأرجح الى الخلف والأمام على يديه وركبتيه',
            'box_id' =>  62
        ]);
        AlshatbList::create([
            'ques_number' => 17,
            'question' => 'يسحب نفسه الى وضع على ركبتيه',
            'box_id' =>  62
        ]);
        AlshatbList::create([
            'ques_number' => 18,
            'question' => 'يسحب نفسه الى وضع الوقوف',
            'box_id' =>  62
        ]);
        AlshatbList::create([
            'ques_number' => 19,
            'question' => 'يقف وحده لمده دقيقه',
            'box_id' =>  62
        ]);
        AlshatbList::create([
            'ques_number' => 20,
            'question' => '  يفحص نفسه ليتخذ وضع الجلوس بعد أن كان واقفا',
            'box_id' =>  62
        ]);
        AlshatbList::create([
            'ques_number' => 21,
            'question' => 'يخطو بضعه خطوات دون مسانده',
            'box_id' =>  62
        ]);
        AlshatbList::create([
            'ques_number' => 22,
            'question' => 'يزحف الى أعلى الدرج',
            'box_id' =>  62
        ]);
        //Box 63///
        AlshatbList::create([
            'ques_number' => 23,
            'question' => 'يتسلق على كرسي الكبار يدير نفسه ويجلس',
            'box_id' =>  63
        ]);
        AlshatbList::create([
            'ques_number' => 24,
            'question' => 'يمشي لوحده بدون مساعده',
            'box_id' =>  63
        ]);
        AlshatbList::create([
            'ques_number' => 25,
            'question' => 'يجلس بنفسه على كرسي صغير',
            'box_id' =>  63
        ]);
        AlshatbList::create([
            'ques_number' => 26,
            'question' => 'يقرفص ثم ينهض',
            'box_id' =>  63
        ]);
        AlshatbList::create([
            'ques_number' => 27,
            'question' => 'يدفع ويسحب اللعب وهو يمشي',
            'box_id' =>  63
        ]);
        AlshatbList::create([
            'ques_number' => 28,
            'question' => 'ينحني من الوسط ليلتقط الأدوات دون أن يقع ',
            'box_id' =>  63
        ]);
        AlshatbList::create([
            'ques_number' => 29,
            'question' => 'يقفز في مكانه بكلتا قدميه',
            'box_id' =>  63
        ]);
        AlshatbList::create([
            'ques_number' => 30,
            'question' => 'يمشي للخلف',
            'box_id' =>  63
        ]);
        AlshatbList::create([
            'ques_number' => 31,
            'question' => 'يرمي كره الى شخص كبير على بعد متر ونصف دون أن يحرك هذا الشخص قدميه',
            'box_id' =>  63
        ]);
        //Box 64///
        AlshatbList::create([
            'ques_number' => 32,
            'question' => 'يرمي كره كبيره وثابته بقدمه',
            'box_id' =>  64
        ]);
        AlshatbList::create([
            'ques_number' => 33,
            'question' => 'يصعد وينزل الدرج بتبادل القدمين عندما يستعين بالدرابزين أو يسعده أحد',
            'box_id' =>  64
        ]);
        AlshatbList::create([
            'ques_number' => 34,
            'question' => 'يتشقلب الى الأمام بمساعده',
            'box_id' =>  64
        ]);
        AlshatbList::create([
            'ques_number' => 35,
            'question' => 'يقفز من ارتفاع 20 سم',
            'box_id' =>  64
        ]);
        AlshatbList::create([
            'ques_number' => 36,
            'question' => 'يضرب بفدمه كره كبيره مدحرجه اليه',
            'box_id' =>  64
        ]);
        AlshatbList::create([
            'ques_number' => 37,
            'question' => 'يتأرجح على أرجوحه بعد أن يدفعه أحد في البدايه',
            'box_id' =>  64
        ]);
        AlshatbList::create([
            'ques_number' => 38,
            'question' => 'يتشقلب الى الأمام',
            'box_id' =>  64
        ]);
        AlshatbList::create([
            'ques_number' => 39,
            'question' => 'يمسك كره مقذوفه اليه بكلتا يديه',
            'box_id' =>  64
        ]);

        //Box 65///
        AlshatbList::create([
            'ques_number' => 40,
            'question' => 'يقف على قدم واحده لمدخ 4-8 ثوان دون مساعده',
            'box_id' =>  65
        ]);
        AlshatbList::create([
            'ques_number' => 41,
            'question' => 'يجري مغيرا اتجاهه',
            'box_id' =>  65
        ]);

        AlshatbList::create([
            'ques_number' => 42,
            'question' => 'يمشي على خشبه التوازن',
            'box_id' =>  65
        ]);

        AlshatbList::create([
            'ques_number' => 43,
            'question' => 'يقفز الى الأمام 10 مرات دون أن يقع(2-3 توازن)',
            'box_id' =>  65
        ]);
        AlshatbList::create([
            'ques_number' => 44,
            'question' => 'يقفز على جبل يرتفع 5 سم عن الأرض',
            'box_id' =>  65
        ]);
        AlshatbList::create([
            'ques_number' => 45,
            'question' => 'يضرب كره كبيره على الأرض ويلتقطها',
            'box_id' =>  65
        ]);
        AlshatbList::create([
            'ques_number' => 46,
            'question' => 'يتسلق سلم انزلاق ارتفاعه 2م لينزلق من أعلى زلاقه(سحسليه)',
            'box_id' =>  65
        ]);
        AlshatbList::create([
            'ques_number' => 47,
            'question' => 'يمسك كره لينه أو كيس فاصوليابيد واحده(بعد أن يكون شخص قد رماه باتجاهه)',
            'box_id' =>  65
        ]);
        AlshatbList::create([
            'ques_number' => 48,
            'question' => 'يلتقط أداه من الأرض وهو يجري',
            'box_id' =>  65
        ]);
        AlshatbList::create([
            'ques_number' => 49,
            'question' => 'يقفز ثم يدور على قدم واحده',
            'box_id' =>  65
        ]);
        //Box 66
        AlshatbList::create([
            'ques_number' => 50,
            'question' => 'يقف على قدم واحده دون مسانده وعينيه مغلقتين لمده 10 ثوان',
            'box_id' =>  66
        ]);
        ////المهارات الحركية الدقيقة///
       //// Box 67
        AlshatbList::create([
            'ques_number' => 1,
            'question' => 'يضرب بعنف على أداه',
            'box_id' =>  67
        ]);
        AlshatbList::create([
            'ques_number' => 2,
            'question' => 'يمد يده نحو الأشياء محاولا المساك بها',
            'box_id' =>  67
        ]);
        AlshatbList::create([
            'ques_number' => 3,
            'question' => 'يمسك الطفل أدوات باستعمال الكف لمده 30 ثانيه ويسقطها بدون قصد',
            'box_id' =>  67
        ]);
        AlshatbList::create([
            'ques_number' => 4,
            'question' => 'يمد يده ويمسك أداه أمامه',
            'box_id' =>  67
        ]);
        AlshatbList::create([
            'ques_number' => 5,
            'question' => 'يترك الأدوات التي في يده عن قصد ليمد يده الى أداه أخرى',
            'box_id' =>  67
        ]);
        AlshatbList::create([
            'ques_number' => 6,
            'question' => 'يلتقط ويسقط أدوات عن قصد',
            'box_id' =>  67
        ]);AlshatbList::create([
        'ques_number' => 7,
        'question' => 'يرمي الأدوات بصوره اعتباطيه',
        'box_id' =>  67
    ]);
        AlshatbList::create([
            'ques_number' => 8,
            'question' => 'ينقل أداه من يد الى اليد الأخرى وهو في وضع الجلوس',
            'box_id' =>  67
        ]);AlshatbList::create([
        'ques_number' => 9,
        'question' => 'يحتفظ بمكعبين حجم كل منهم 2ز5سم 3 بيد واحده',
        'box_id' =>  67
    ]);
        AlshatbList::create([
            'ques_number' => 10,
            'question' =>  'يمسك بأداه بالسبابه والابهام على طريقه الكماشه',
            'box_id' =>  67
        ]);
        AlshatbList::create([
            'ques_number' => 11,
            'question' => 'يتحكم باللعاب السائل',
            'box_id' =>  67
        ]);
        //// Box 68
        AlshatbList::create([
            'ques_number' => 12,
            'question' => 'يلحس الطعام من حول فمه',
            'box_id' =>  68
        ]);
        AlshatbList::create([
            'ques_number' => 13,
            'question' => 'يغرف بالمعلقه أو المغرفه',
            'box_id' =>  68
        ]);
        AlshatbList::create([
            'ques_number' => 14,
            'question' => 'يصفق بكلتا يديه',
            'box_id' =>  68
        ]);
        AlshatbList::create([
            'ques_number' => 15,
            'question' => 'يدحدر كره بالتقليد',
            'box_id' =>  68
        ]);
        //// Box 69
        AlshatbList::create([
            'ques_number' => 16,
            'question' => 'يضع أربع خرزات كبيره في خيط خلال دقيقتين',
            'box_id' =>  69
        ]);
        AlshatbList::create([
            'ques_number' => 17,
            'question' => 'يدير يد الباب',
            'box_id' =>  69
        ]);
        AlshatbList::create([
            'ques_number' => 18,
            'question' => 'يقلب صفحات من كتاب صفحه صفحه',
            'box_id' =>  69
        ]);
        AlshatbList::create([
            'ques_number' => 19,
            'question' => 'يفك أداه صغيره ملفوفه',
            'box_id' =>  69
        ]);
        AlshatbList::create([
            'ques_number' => 20,
            'question' => 'يطوي ورقه من النصف بالتقليد',
            'box_id' =>  69
        ]);
        AlshatbList::create([
            'ques_number' => 21,
            'question' => 'يفك لعبا ذات أسنان',
            'box_id' =>  69
        ]);

        //// Box 70
        AlshatbList::create([
            'ques_number' => 22,
            'question' => 'يشكل كرات من الصلصل (المعجون)',
            'box_id' =>  70
        ]);
        AlshatbList::create([
            'ques_number' => 23,
            'question' => '  يدق بالشاكوش(المطرقه) ويصيب 5 أوتاد',
            'box_id' =>  70
        ]);
        AlshatbList::create([
            'ques_number' => 24,
            'question' => 'يقص بالمقص',
            'box_id' =>  70
        ]);
        AlshatbList::create([
            'ques_number' => 25,
            'question' => 'يتبع هيكل الشكل ',
            'box_id' =>  70
        ]);
        AlshatbList::create([
            'ques_number' => 26,
            'question' => 'يقص خيط مستقيم طوله 12 سم دون أن ينحرف عليه أكثر من 1 سم',
            'box_id' =>  70
        ]);
        AlshatbList::create([
            'ques_number' => 27,
            'question' => 'يشكل قطعتين أو ثلاث من الطين ويركبها معا',
            'box_id' =>  70
        ]);
        //// Box 71
        AlshatbList::create([
            'ques_number' => 28,
            'question' => 'يقص على خيط منحني',
            'box_id' =>  71
        ]);
        AlshatbList::create([
            'ques_number' => 29,
            'question' => 'يرركب أداه دات أسنان',
            'box_id' =>  71
        ]);
        AlshatbList::create([
            'ques_number' => 30,
            'question' => 'يقص دائره قطرها 5 سم ',
            'box_id' =>  71
        ]);
        AlshatbList::create([
            'ques_number' => 31,
            'question' => 'يرسم صورا بسيطه من الممكن التعرف عليها مثل(بيت - رجل -شجره)',
            'box_id' =>  71
        ]);
        AlshatbList::create([
            'ques_number' => 32,
            'question' => 'يقص ويلصق أشكال بسيطه ',
            'box_id' =>  71
        ]);
        //// Box 72
        AlshatbList::create([
            'ques_number' => 33,
            'question' => 'يلبس بابهامه كل أصبع بعد فردها',
            'box_id' =>  72
        ]);
        AlshatbList::create([
            'ques_number' => 34,
            'question' => 'يقص صوره من مجله كتالوج بدون أن ينحرف عن طرف الصوره أكثر من 1 سم',
            'box_id' =>  72
        ]);
        AlshatbList::create([
            'ques_number' => 35,
            'question' => 'يبري قلم الرصاص بالمبراه',
            'box_id' =>  72
        ]);
        AlshatbList::create([
            'ques_number' => 36,
            'question' => 'يمزق أشكال بسيطه من ورق',
            'box_id' =>  72
        ]);
        AlshatbList::create([
            'ques_number' => 37,
            'question' => 'يثني  مربع من ورق مرتين على القطر بالتقليد ',
            'box_id' =>  72
        ]);
        //// Box 73
         /////مهارات ماقبل الكتابة والكتابة المبكرة///
        AlshatbList::create([
            'ques_number' => 1,
            'question' => 'يحرك البهام مقابل الأصابع الأربعه الأخرى',
            'box_id' =>  73
        ]);
        //// Box 74
        AlshatbList::create([
            'ques_number' => 2,
            'question' => 'يخربش',
            'box_id' =>  74
        ]);
        //// Box 75
        AlshatbList::create([
            'ques_number' => 3,
            'question' => 'يرسم خطا عموديا مقلدا',
            'box_id' =>  75
        ]);
        AlshatbList::create([
            'ques_number' => 4,
            'question' => 'يرسم خطا افقيا مقلدا',
            'box_id' =>  75
        ]);
        AlshatbList::create([
            'ques_number' => 5,
            'question' => 'يرسم دائره مقلدا',
            'box_id' =>  75
        ]);
        //// Box 76
        AlshatbList::create([
            'ques_number' => 6,
            'question' => 'يمسك القلم بالسبابه والابهام مستندا على الأصبع الوسطي',
            'box_id' =>  76
        ]);
        AlshatbList::create([
            'ques_number' => 7,
            'question' => 'يرسم علامه + مقلدا',
            'box_id' =>  76
        ]);
        AlshatbList::create([
            'ques_number' => 8,
            'question' => 'يرسم شكل 7 مقلدا',
            'box_id' =>  76
        ]);
        AlshatbList::create([
            'ques_number' => 9,
            'question' => 'يرسم خط قطري من زاويه مربع الى الزاويه الأخرى',
            'box_id' =>  76
        ]);
        AlshatbList::create([
            'ques_number' => 10,
            'question' => 'يرسم مربعا بالتقليد',
            'box_id' =>  76
        ]);
        ///Box 77
        AlshatbList::create([
            'ques_number' => 11,
            'question' => 'ينسخ مثلث عند الطلب ',
            'box_id' =>  77
        ]);
        AlshatbList::create([
            'ques_number' => 12,
            'question' => 'يرسم رجل (راس- وسط - أربعه أطراف)',
            'box_id' =>  77
        ]);
        ///Box 78

        AlshatbList::create([
            'ques_number' => 13,
            'question' => 'يلون مع بقائه داخل الخطوط 95% من الوقت ',
            'box_id' =>  78
        ]);
        AlshatbList::create([
            'ques_number' => 14,
            'question' => 'يكتب اسمه اول',
            'box_id' =>  78
        ]);

        AlshatbList::create([
            'ques_number' => 15,
            'question' => 'يرسم المعين مقلدا ',
            'box_id' =>  78

        ]);















    }
}

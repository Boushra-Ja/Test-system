<?php

namespace Database\Seeders;

use App\Models\DifficultTitle;
use App\Models\PortageQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortageQuestionSeeder extends Seeder
{

    public function run(): void
    {

        ////////////@Boshra ////////////
        /////بعد العناية الذاتية
        //////Box 1
        PortageQuestion::create([
            'ques_number' => 1,
            'box_id' => 1 ,
            'question' =>'هل يمد الطفل يده للحصول على أدوات أمامه قريبة ولكنها بعيدة عن متناول يده؟(أداة رقم 0)' ,
            'title' => 'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 2,
            'box_id' => 1 ,
            'question' => '(أداة رقم 0)هل يمسك الطفل بشخص أو أداة لمدة 5 ثوان على الأقل ؟ (إما باليد كلها أو بالأصابع أو بإصبع واحد)'  ,
            'title' => 'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 3,
            'box_id' => 1 ,
            'question' => 'هل يمسك الطفل زجاجة الرضاعة بيديه أو قدميه عندما يشرب فيها؟(ليس من الضرورة أن يسندها) يوضع صح إن أمسك الثدي في حالة الرضاعة الطبيعية' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        //////Box 2
        PortageQuestion::create([
            'ques_number' => 4,
            'box_id' => 2 ,
            'question' => 'هل يمد الطفل يديه للأكمام عند إلباسه أو قدميه للبس الحذاء ؟؟' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 5,
            'box_id' => 2 ,
            'question' => 'هل يتجول الطفل داخل المنزل بدون مراقبة مستمرة؟(الكشف بين الحين والآخر ضروري لمعرفة مكانه ونشاطه)' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 6,
            'box_id' => 2 ,
            'question' => 'هل يشرب الطفل من كوب يحمله شخص آخر؟' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        //////Box 3
        PortageQuestion::create([
            'ques_number' => 7,
            'box_id' => 3 ,
            'question' => 'هل يخلع الطفل حذاءه(المفكوك) أو جواربه بدون مساعدة؟(ليس على صورة لعب)' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 8,
            'box_id' => 3 ,
            'question' => ' هل يشرب الطفل من كوب صغير دون مساعدة وبمهارة كافية بحيث لا يكب كثيرا؟؟' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 9,
            'box_id' => 3 ,
            'question' => 'هل يأكل الطفل بأصابعه دون مساعدة(قطعة بسكويت،قطعة خبز..)' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        //////Box 4
        PortageQuestion::create([
            'ques_number' => 10,
            'box_id' => 4 ,
            'question' => 'هل يفرق الطفل بين ما يؤكل وبين ما لا يؤكل؟(قد يضع ما لا يؤكل في فمه دون مضغه أو بلعه)',
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 11,
            'box_id' => 4 ,
            'question' => 'هل يخلع الطفل معطفه دون مساعدة عندما تكون الأزرار والسحاب مفتوحة؟',
            'title' => 'تطبيق مباشر - سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 12,
            'box_id' => 4 ,
            'question' => 'هل يأكل الطفل بشكل يتناسب مع عادات الأسرة بمساعدة؟' ,
            'title' => 'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        //////Box 5
        PortageQuestion::create([
            'ques_number' => 13,
            'box_id' => 5 ,
            'question' => 'هل يجفف الطفل يديه بدون مساعدة بحيث لا يعاد عليها بعد أن تكون قد غسلت بواسطة شخص آخر؟',
            'title' => 'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 14,
            'box_id' => 5 ,
            'question' => 'هل يصب الطفل لنفسه الماء دون مساعدة عند توفر كرسي أو درجات خشبية؟' ,
            'title' => 'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 15,
            'box_id' => 5 ,
            'question' => 'هل يأكل الطفل بشكل بتناسب مع عادات الأسرة مع قليل من السكب؟' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        //////Box 6
        PortageQuestion::create([
            'ques_number' => 16,
            'box_id' => 6 ,
            'question' => 'هل يرتدي معطفه بدون مساعدة؟(لا يتضمن هذا التزرير)' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 17,
            'box_id' => 6 ,
            'question' => 'هل يفك أزرار كبيرة ، سحابات ،رباطات أحذية' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 18,
            'box_id' => 6 ,
            'question' => 'هل يرتدي الطفل حذاءه؟(ليس من الضروري أن يضع القدم الصحيحة،وأن يفك أو يربط الحذاء كي ينجح في هذه المهمة)' ,
            'title' => 'تطبيق مباشر' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;


        //////Box 7
        PortageQuestion::create([
            'ques_number' => 19,
            'box_id' => 7 ,
            'question' => 'هل يبعد الطفل عن الأخطار العامة (الدرج العالي،الأماكن المرتفعة،الزجاج المكسور،الشوارع المزدحمة،الحيوانات الغريبة،أو غيرها من الأمثلة؟)' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 20,
            'box_id' => 7 ,
            'question' => 'هل يبقى الطفل نظيفا بحيث لا يتبول على نفسه إلا مرة واحدة على الأكثر أسبوعيا بما في ذلك الاستيقاظ،النوم،البول،البراز؟' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 21,
            'box_id' => 7 ,
            'question' => 'هل يغسل الطفل عادة وجهه ويداه بطريقة مناسبة مع القليل من المساعدة؟' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;


        ////Box 8
        PortageQuestion::create([
            'ques_number' => 22,
            'box_id' => 8 ,
            'question' => 'هل يلبس الطفل كليا وبمهارة عالية تمكنه من التحكم بقميص أو بلوزة عدا الربط والتزرير؟' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 23,
            'box_id' => 8 ,
            'question' => 'هل يخفي الطفل لعبة بترتيب عندما يطلب منه ذلك ؟(يحتاج الطفل أن يذكر أكثر من مرة)',
            'title' => 'تطبيق مباشر - سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 24,
            'box_id' => 8 ,
            'question' => 'هل يساعد الطفل والدته في إعداد سفرة الطعام بالطريقة التي تتناسب مع عادات الأسرة في تناول الطعام(بعد إعطائة التعليمات اللغوية)' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;


        ///////Box 9
        PortageQuestion::create([
            'ques_number' => 25,
            'box_id' => 9 ,
            'question' => 'هل يؤدي الطفل احتياجاته المرحاضية بدون مساعدة؟(يتضمن هذا الخلع،المسح،والارتداء،ولايحتاج ليعيد التزرير أو ربط السحاب لكي ينجح في هذه المهمة)' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 26,
            'box_id' => 9 ,
            'question' => 'هل حضر الطفل شطيرة؟يتضمن هذا القدرة على إحضار الطعام الصحيح من الثلاجة أو الخزانة أو صندوق الخبز ووضع الأشياء بالشطيرة' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        //////////Box 10
        PortageQuestion::create([
            'ques_number' => 27,
            'box_id' => 10 ,
            'question' => 'هل يقطع الطفل اللحم والخبز وأي طعام مشابه بواسطة السكين؟ربما يحتاج الى المساعدة لقطع الطعام السميك كالدجاج واللحم' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 28,
            'box_id' => 10 ,
            'question' => 'هل يمشط الطفل شعره بمهارة كافية لا يحتاج إلى شخص كبير إلا في الحالات الخاصة؟' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 29,
            'box_id' => 10 ,
            'question' => 'هل يؤدي الطفل مهمات منزلية لا تحتاج أن تعاد من قبل من هم أكبر منه سنا مرة في الأسبوع ؟ عمل المهمات بعد أن يطلب منه القبول' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        //////Box 11
        PortageQuestion::create([
            'ques_number' => 30,
            'box_id' => 11 ,
            'question' => 'هل بنى الطفل أو أصلح معدات شيئا يحتاج إلى معدات حقيقية(بدون مساعدة) مثل خيط و إبرة ،شاكوس ومسمار؟ الكبار ربما يساعدوه بإعطاء التعليمات ولكن ليس بالعمل(خياطة زر أو إصلاح عربة الطفل تعتبر أمثلة جيدة)' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 31,
            'box_id' => 11 ,
            'question' => 'هل يغتسل الطفل بشكل مقبول دون مساعدة؟(إعداد حوض الاستحمام أو الدش،وتجفيف نفسه)' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 32,
            'box_id' => 11 ,
            'question' => 'هل يسكب الطفل لنفسه الطعام ويأكل بشكل مستقل دون مساعدة مستخدما الأدوات المناسبة لعادات الأسرة؟' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        //////Box 12
        PortageQuestion::create([
            'ques_number' => 33,
            'box_id' => 12 ,
            'question' => 'هل يختار الطفل ما سيرتديه بنفسه بشكل مناسب ؟(ملابس المدرسة ، المناسبات الرسمية ، الطقس)' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 34,
            'box_id' => 12 ,
            'question' => 'هل يؤدي الطفل مهمتين على الأقل مثل ترتيب غرفة نومه وملابسه ؟(غسل الملابس،كيها ،  تلميع الأحذية، تنظيف الأثاث ومسحه ، ترتيب الأسرّة أمثلة جيدة/ يسمح بالتذكير للقيام بها )' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 35,
            'box_id' => 12 ,
            'question' => 'هل يقتصد الطفل ويوفر المال بصفة جيدة بحيث يشتري بعض الأشياء بنفسه بدون أن يخبر شخصا كبيرا؟' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        ///////Box 13
        PortageQuestion::create([
            'ques_number' => 36,
            'box_id' => 13 ,
            'question' => 'هل يشتري الطفل بضعة أشياء في وقت واحد؟يعني هذا أن يذهب إلى أكثر من محل واحد في آن واحد وإن لم تكن كل الأشياء المطلوبة موجودة في نفس المحل وأن يحسب المال المصروف والفكة المستلمة' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 37,
            'box_id' => 13 ,
            'question' => 'هل أعد الطفل اثنين من المأكل على الأقل مثل البيض بأي طريقة ،البشار(حبوب الذرة) ، الشوربة أو الكعك أو الجلو(الجليه)؟' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 38,
            'box_id' => 13 ,
            'question' => 'هل يحمل الطفل وحده مسؤولية رعاية حيوان؟ قد يتطلب ذلك مساعدة شخص كبير بحسب حجم ونوع الحيوان، ولكنه يجب أن يكون مسؤول عن إطعامه ، غسله ، وإيواءه بانتظام وبدون تذكير' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        ///////////////////////////////////////////////
        //////////////البعد الاتصالي //////
        PortageQuestion::create([
            'ques_number' => 1,
            'box_id' => 14,
            'question' =>'هل يصدر الطفل أصواتا عندما يلعب؟ يجب عليه أن يلعب بالأصوات(ليس مجرد البكاء أو الضحك أو القرقرة)' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 2,
            'box_id' => 14,
            'question' =>'هل يثرثر الطفل أو يستعمل بعض الأصوات في محاولة لتقليد الكلمات أو الحديث كأن يتظاهر بأنه يتكلم؟ ' ,
            'title' => 'سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 3,
            'box_id' => 14,
            'question' =>' هل ينظر الطفل الى مصدر الصوت عندما يبدأ أحد في الحديث معه مثال ؟(أداة رقم 5)' ,
            'title' => 'تطبيق مباشر سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 4,
            'box_id' => 15,
            'question' =>'هل يقلد الكلمات المنطوقة مثل بابا أو ماما؟ مع أنه قد لا يعرف معناها ' ,
            'title' => 'تطبيق مباشر سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 5,
            'box_id' => 15,
            'question' =>' هل يشير الطفل باشارات كطريقة للتكلم بأن يحرك رأسه بالنفي أو يمد يده كي يحمله أحد ' ,
            'title' => 'تطبيق مباشر سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 6,
            'box_id' => 15,
            'question' =>' هل يرد الطفل على كلام الكبير باشارات كاشارة باي بيده أو تحريك الرأس ايجابيا أو نفيا للسؤال؟ ' ,
            'title' => 'تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;



        PortageQuestion::create([
            'ques_number' => 7,
            'box_id' => 16,
            'question' =>' هل يعبر الطفل عما يريده ببعض الأصوات (كلمات أو أصوات تشبه كلمات)؟ ليس مجرد البكاء للحصول على ما يريده' ,
            'title' => ' سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 8,
            'box_id' => 16,
            'question' =>' هل يذكر الطفل اسم 5 أشياء على الأقل؟( ليس بالتقليد ولا تحسب اسماء الأشخاص )يجب أن ينطق الأسماء بطريقة واضحة بحيث يفهمها شخص غريب ' ,
            'title' => 'تطبيق مباشر' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 9,
            'box_id' => 16,
            'question' =>' هل ينفذ الطفل الأوامر مثل(أريني ,تعال ,روح ,جيب )؟مثال هل يشير الطفل الى أصابع قدميه أو يذهب بشئ الى والدته عندما يطلب منه ذلك؟' ,
            'title' => 'تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;


        PortageQuestion::create([
            'ques_number' => 10,
            'box_id' => 17,
            'question' =>'هل يستعمل الطفل 10 كلمة على الأقل عند حديثه (استعمالا مضبوطا)؟' ,
            'title' => 'ملاحظة مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 11,
            'box_id' => 17,
            'question' =>'هل يقول الطفل بالكلام أو بالاشارات أنه يريد المزيد من شئ ؟ ليس مجرد بكاء' ,
            'title' => ' سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 12,
            'box_id' => 17,
            'question' =>'هل يجمع الطفل كلمتين أو أكثر ليشكل الجمل؟ (روح أنت ,أنت عطيني ,محمد بده)' ,
            'title' => 'ملاحظة مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 13,
            'box_id' => 18,
            'question' =>'هل يشارك الطفل بمقاطع من اغاني مقلدا أطفال آخرين أثناء أدائهم لها ؟' ,
            'title' => 'تطبيق  مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 14,
            'box_id' => 18,
            'question' =>'هل يقول الطفل اسم 20 شئ على الأقل اذا رآها في الصورة ؟(أداه رقم لا)' ,
            'title' => 'تطبيق  مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 15,
            'box_id' => 18,
            'question' =>'هل يتكلم الطفل مستحدما 50 كلمة مختلفة على الأقل أثناء كلامه ؟(يستعملها ولا يكفي مجرد الفهم )' ,
            'title' => 'تطبيق  مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;




        PortageQuestion::create([
            'ques_number' => 16,
            'box_id' => 19,
            'question' =>'هل يخبر الطفل عن اسمه عندما يسأل عنه؟' ,
            'title' => 'تطبيق  مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 17,
            'box_id' => 19,
            'question' =>'هل يغني الطفل أغنيتين على الأقل؟ بيت واحد على الأقل من كل أغنية ' ,
            'title' => 'تطبيق  مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 18,
            'box_id' => 19,
            'question' =>'هل يجيب الطفل عندما يسأل ما اذا كان بنت أو ولد ؟ يجب أن يكون الجواب صحيحا ' ,
            'title' => 'تطبيق  مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 19,
            'box_id' => 20,
            'question' =>' هل يقول الطفل عادة اسمه الكامل(اسمه واسم والده واسم عائلته)عندما يطلب منه الكبار ذلك' ,
            'title' => 'تطبيق  مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 20,
            'box_id' => 20,
            'question' =>' هل يروي الطفل قصة بالنظر الى الصورة بالكتاب ؟(فقط الأحداث المتمصلة بالصورة)(أداة رقم 9) ' ,
            'title' => 'تطبيق  مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 21,
            'box_id' => 20,
            'question' =>' هل يجب الطفل على الهاتف ويخبر الشخص الرسالة الصحيحة ؟ على الطفل أن يقول ألو وما اذا كان الشخص المطلوب يستطيع الاجابة على الهاتف (ان لم يتوفر هاتف يترك هذا البند ويكون البند 19 و 20 من المساعدة يستحق 6 شهور بدلا من 4 شهور)' ,
            'title' => ' سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;


        PortageQuestion::create([
            'ques_number' => 22,
            'box_id' => 21,
            'question' =>' هل غنى الطفل أغنية مؤلفة من 30 كلمةعلى الأقل ؟ قد تكون الكثير من الكلمات مكررة في الأغنية ولكن على الطفل أن يغنيها لوحده' ,
            'title' => ' تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 23,
            'box_id' => 21,
            'question' =>' هل يقول الطفل عمره للآخرين (بالكلام أو بأصابعه) وعن عمره العام الماضي وما سيكون عمره في العام القادم؟' ,
            'title' => ' تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 24,
            'box_id' => 22,
            'question' =>' هل يسأل الطفل من وقت لآخر عن معنى كلمة ثم يستعملها عندما يتكلم؟' ,
            'title' => ' سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 25,
            'box_id' => 22,
            'question' =>' هل يروي الطفل (دون صورة مساعدة)قصة ويذكر الأحداث المهمة فيها؟ ' ,
            'title' => ' تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 26,
            'box_id' => 22,
            'question' =>' عندما يجادل الطفل هل يستعمل من وقت لآخر المنطق عن السبب والنتيجة؟ (أستطيع أن أسهر الليلة لأن غدا عطلة )' ,
            'title' => ' سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 27,
            'box_id' => 23,
            'question' =>'هل يقرأ الطفل 5 كلمات مكتوبة ويفهمها بطريقة ما ؟ليس مجرد فهمها لأنها مكتوبة لأنها مكتوبة على علبة أكل مثلا(أداة رقم 17 عدد 5)' ,
            'title' => ' تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 28,
            'box_id' => 23,
            'question' =>'هل يبحث الطفل عن رقم هاتف عندما يحتاجه أو يطلبه من الاستعلامات بشكل صحيح عندما يحتاج ذلك ؟' ,
            'title' => ' سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 29,
            'box_id' => 23,
            'question' =>'هل يقول الطفل النشيد الوطني كاملا أو أشياء مثله غير الأغاني ؟دعاء أذان أو قصيدة مؤلفة من 25 كلمة على الأثل؟' ,
            'title' => ' تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        //////Box 24
        PortageQuestion::create([
            'ques_number' => 30,
            'box_id' => 24,
            'question' => 'هل يقرأ الطفل قصة بسيطة بحيث يتابعها من يسمعها بشكل جيد؟' ,
            'title' => ' تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 31,
            'box_id' => 24,
            'question' => 'هل يروي الطفل في خمس دقائق ملخص مسرحية، قصة أو تمثيلية تلفزيونية؟ ليس مجرد الأحداث المثيرة فيها فقط(أداة رقم 11)' ,
            'title' => ' تطبيق مباشر - سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 32,
            'box_id' => 24,
            'question' => 'هل يفهم الطفل 3 من الإشارات غير اللفظية الأربع التالية:
            - هز الكتفين بمعنى لا أعرف أو لست متأكد
            - مد اليد لإيقاف سيارة تكسي
            - رفع الإبهام إشارة 100%
            - الغمز بالعين كتحية ودية أو إشارة أنه يمزح' ,
            'title' => ' تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        ////Box 25
        PortageQuestion::create([
            'ques_number' => 33,
            'box_id' => 25,
            'question' => 'هل يذكر الطفل كلمتين على الأقل على نفس الوزن مثل: رأس - فأس، حطة - بطة ، بصل - بطل؟' ,
            'title' => ' تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 34,
            'box_id' => 25,
            'question' => 'هل يغني الطفل أغاني أو بيوت مشهورة من أغاني شعبية؟ لا تحتسب أغاني الأطفال والأعياد ' ,
            'title' => ' تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        /////Box 26
        PortageQuestion::create([
            'ques_number' => 35,
            'box_id' => 26,
            'question' => 'هل سمع الطفل برنامج راديو وفهمه لمدة 10 دقائق على الأقل(رياضة ، أخبار ، دراما،وليس موسيقى)' ,
            'title' => ' تطبيق مباشر - سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 36,
            'box_id' => 26,
            'question' => 'هل كتب الطفل رسالة وبعثها دون مساعدة ؟ المساعدة ممكن أن تسمح في العنوان أو التهجية وليس الرسالة نفسها.' ,
            'title' => ' تطبيق مباشر - سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 37,
            'box_id' => 26,
            'question' => 'هل شارك الطفل في الألعاب الكلامية(مثل: سلطة ملطة تبلناها كلشي فيها إلا ... مافيها)' ,
            'title' => 'تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        ////////////البعد الحركي//////////////
        /////Box 27
        PortageQuestion::create([
            'ques_number' => 1,
            'box_id' => 27,
            'question' => 'هل يرفع الطفل رأسه إلى أعلى بدون دعم لمدة دقيقة على الأقل عندما يكون ملقيا على بطنه؟(أداة رقم 0)' ,
            'title' => 'تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 2,
            'box_id' => 27,
            'question' => 'هل يتدحرج الطفل على بطنه إلى ظهره أو بالعكس دون مساعدة؟' ,
            'title' => 'سؤال الأم - تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        PortageQuestion::create([
            'ques_number' => 3,
            'box_id' => 27,
            'question' => 'هل ينتقل الطفل من مكان إلى آخر بأي طريقة ؟ زاحفا وبطنه على الأرض أو حبوا وبطنه مرتفعا عن الأرض(بأي طريقة عدا الدحرجة)؟' ,
            'title' => 'ملاحظة مباشرة - سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        ///////Box 28
        PortageQuestion::create([
            'ques_number' => 4,
            'box_id' => 28,
            'question' => 'هل يلتقط الطفل الأشياء المقدمة له بأصبع الإبهام مع إصبع آخر أو أصبعين(هكذا ينجح) أو هل يلتقط الشيء بكل يده(وبهذه الطريقة يفشل)؟(أداة رقم 11)' ,
            'title' => 'تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 5,
            'box_id' => 28,
            'question' => 'هل ينتقل الطفل من وضع الزحف إلى الجلوس أو الوقوف؟ قد يستعين بالأثاث ولكن ليس شخص' ,
            'title' => 'سؤال الأم - تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 6,
            'box_id' => 28,
            'question' => 'هل توقف الطفل عن سيلان اللعاب؟ ويكون قد نجح في هذا البند إن كان ذلك بسبب التسنين أو أثناء الأكل.' ,
            'title' => 'سؤال الأم - تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        ///////Box 29
        PortageQuestion::create([
            'ques_number' => 7,
            'box_id' => 29,
            'question' => 'هل يمشي الطفل جيدا بدون مساعدة داخل المنزل وبدون أن يراقبه أحد بحيث لا يقع أو يتعثر بالأشياء؟' ,
            'title' => 'ملاحظة مباشرة - سؤال الأم' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 8,
            'box_id' => 29,
            'question' => 'هل يصعد الطفل السلم(واقفا وليس زاحفا) مستندا على الحائط أو الدرابزين أو ممسكا بيد شخص لمساعدته؟ واضعا كلتا القدمين على كل درجة وبهذه الطريقة يكون قد نجح.' ,
            'title' => 'سؤال الأم - تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 9,
            'box_id' => 29,
            'question' => 'هل يفك الطفل غطاء الورق عن قطعة الحلوى أو قطعة اللبان(العلكة) أو أي شيء ملفوف بورق؟(أداة رقم 11)' ,
            'title' => 'تطبيق مباشر ' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 10,
            'box_id' => 30,
            'question' => 'هل يقذف الطفل الشيء على بعد متر واحد على الأقل بالاتجاه الذي يريده؟ في حال ما قذفه عفواً لا يعتبر قد نجح (أداة رقم 10)' ,
            'title' => 'تطبيق مباشر' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 11,
            'box_id' => 30,
            'question' =>  'هل يصعد الطفل السلم واضعاً قدم واحدة على كل درجة ؟ على أن يستمر بالصعود على السلم و بنفس الطريقة , ولكن ربما يضع كلتا قدميه على كل درجةأثناء النزول',
            'title' =>  'تطبيق مباشر سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 12,
            'box_id' => 30,
            'question' =>  'هل يحرك الطفل يديه و رجليه إلى أعلى و اسفل بطريقة منظمة مقلداً شخص آخر يقف أمامه؟',
            'title' =>  'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 13,
            'box_id' => 31,
            'question' =>  'هل يرسم الطفل خط عمودي مقلداً باستخدام القلم و ألوان الشمع أو فرشاة الرسم؟ (أداة رقم 13 + 22 )',
            'title' =>  'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 14,
            'box_id' => 31,
            'question' =>  'هل يقفز الطفل بكلتا قدميه معاً دون أن يقع من على شيء يرتفع 20 سم على الأقل عن الأرض؟ (درجة أو صندوق) (أداة رقم 4)',
            'title' =>  'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' =>15 ,
            'box_id' => 31,
            'question' => 'هل يتحرك الطفل من مكان الى أخر قفزاً أو وثباً بكلتا قدميه معاً ؟ (على الطفل أن يذهب بهذه الطريقة 3 أمتار على الأقل)' ,
            'title' => 'تطبيق مباشر' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 16,
            'box_id' => 32,
            'question' =>  'هل يقص الطفل قطعة قماش أوورق بيد و اليد الأخر يستعملها لحمل الورقة أو قطعة القماش ؟ (قد يحملها شخص آخر , ولكن على الطفل أن يقص لا أن يمزق) (أداة رقم 19 +22 )',
            'title' =>  'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 17,
            'box_id' => 32,
            'question' => 'هل يقفز الطفل للأمام على قدم واحدة بدون سند لمسافة واحدة و نصف متر على الأقل ؟' ,
            'title' => 'تطبيق مباشر سؤال الام' ,
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 18,
            'box_id' => 32,
            'question' => 'هل يصعد الطفل على الدرج و يهبط منه واضعاً قدم واحدة على كل درجة؟ قد يستخدم الحائط أو الدرابزين للتوازن أو كساند و هذا مقبول' ,
            'title' =>  'ملاحظة مباشرة سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 19,
            'box_id' => 33,
            'question' =>  'هل يرمي الطفل كرة ( من أي حجم) لآخر بالغ واقف على بعد متر و نصف على الأقل؟ (أداة رقم 15 )',
            'title' =>  'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 20,
            'box_id' => 33,
            'question' =>  'هل يمسك الطفل يد الباب الداخلي و يفتحه؟ لا بد من أن يكون الطفل قادراً على أن يلف يد الباب و يدفع باب الحمام غير المقفل لكي يفتحه',
            'title' =>  'تطبيق المباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 21,
            'box_id' => 33,
            'question' =>  'هل يقص الطفل دائرة قطرها 5 سم مرسومة على ورقة على ألا يبتعد عن الخط أكثر من 5 مللميتر داخل أو خارج الدائرة ؟(على الطفل أن يحمل الورقة بيد واحدة بينما يقص بالأخرة )(أداة رقم 19+23)',
            'title' =>  'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 22,
            'box_id' => 34,
            'question' =>  'هل يلتقط الطفل الكرة (من أي حجم) المقذوفة له من شخص بالغ يقف أمامه على بعد متر و نصف ؟ (50% من المرات) (أداة رقم 15)',
            'title' =>  'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 23,
            'box_id' => 34,
            'question' =>  'هل يقفز الطفل الى المام على قدم واحدة لمسافة 3 متر على الأقل دون أن يقف ثم يعاود القفز؟',
            'title' =>  'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 24,
            'box_id' => 34,
            'question' =>  'هل يقفز الطفل عن الحبل بقدم واحدة و بكلتا قدميه مرتين على الأقل؟(أداة رقم 4)',
            'title' =>  'ملاحظة مباشرة',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 25,
            'box_id' => 35,
            'question' =>  'هل يفتح الطفل باب و يقفله بالمفتاح (قفل بمفتاح)(أداة رقم 12)',
            'title' =>  'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 26,
            'box_id' => 35,
            'question' =>  'هل يشكل الطفل كرة من الطين (المعجونة أو الصلصال) كبيرة وصلبة بما فيه الكفاية بحيث تبقى متماسكة إن قذفت على مسافة 2.25 متر (أداة رقم 18)',
            'title' =>  'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 27,
            'box_id' => 35,
            'question' =>  'هل يقفز الطفل عن عدة أشياء دون توقف؟ (يجب أن تكون الأشياء على ارتفاع 20 سم على الأقل)؟',
            'title' =>  'ملاحظة مباشرة',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            ////////update
            'ques_mark' => 1,

        ]) ;

        //البعد الاجتماعي
        PortageQuestion::create([
            'ques_number' => 1,
            'box_id' => 36,
            'question' =>  'هل يظهر الطفل أنه يريد الانتباه إليه؟ يتضمن هذا مد يده إلى أشخاص أو مناغاتهم أو وقوف البكاء عندما يلعب معه أحد (ولكن لا يحمله)',
            'title' =>  'ملاحظة مباشرة',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 2,
            'box_id' => 36,
            'question' =>  'هل يثرثر الطفل أو يصدر أصواتاً قد تعتبر مخاولات للحديث؟ لا يتضمن هذا البكاء للحصولعلى انتباه أحد أو زجاجة الرضاعة',
            'title' =>  'ملاحظة مباشرة',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 3,
            'box_id' => 36,
            'question' =>  'هل يظهر الطفل انفعالات سلبية(كالغضب , الرفض , الخوف , أو لارتداء)لأشياء غير مألوفة من الناحية الجسمية مثل الطعام المكروه أو الغرباء؟',
            'title' =>  'ملاحظة مباشرة',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 4,
            'box_id' => 37,
            'question' =>  'هل يؤشر الطفل (باي باي) في الأوقات المناسبة, أو هل يصفق مقلداً أو عندما يلعب معه أحد؟',
            'title' =>  'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 5,
            'box_id' => 37,
            'question' =>  'هل يظهر الطفل أنه يفهم معنى لي (يفهم عندما يقول أحد سيارتي أو أمي)؟',
            'title' =>  'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 6,
            'box_id' => 37,
            'question' =>  'هل يأتي الطفل عند الطلب منه 25% من الوقت على الأقل ؟',
            'title' =>  '',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 7,
            'box_id' => 38,
            'question' =>  'هل يحي الطفل الكبار المألوفين لديه بأن يتحرك باتجاههم أو يحاول لفت نظرهم أو مد يده نحوهم للسلام عليهم',
            'title' =>  'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 8,
            'box_id' => 38,
            'question' =>  'هل يبقى الطفل مشغول لمدة 15 دقيقة و هو يفعل شيئاً مما يلي : ينظر الى التلفاز , يرسم بقلم , يبني , ينظر الى الصورة؟ قد يفعل هذا لوحده أو مع أطفال آخرين , ولكن ليس بمراقبة الكبار',
            'title' =>  'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 9,
            'box_id' => 38,
            'question' =>  'هل يهتم الطفل بالأشياء و الألعاب التي يحبها الأطفال الآخرين؟ قد لا يستطيع الطفل أن يشارك أو يلعب بالدور مع أطفال آخرين',
            'title' =>  'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 10,
            'box_id' => 39,
            'question' =>  'هل يغار الطفل عندما ينتبه أحد إلى أشخاص آخرين خصوصاً أشخاص من العائلة ؟ قد تظهر الغيرة كالغضب أو التصرفات الطفولية أو الفوضوية أو طلب أن يكون محمول أو أي تغيرات خرى',
            'title' =>  'ملاحظة مباشرة أو سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 11,
            'box_id' => 39,
            'question' =>  'هل يلعب الطفل بلعبة سهلة الكسر مثل بالون أو طيارة أو سيارة من الكرتون دون أن يكسرها فوراً ؟ قد تنكسر اللعبة لاحقاً لكن بعد أن يلعب الطفل بها بطريقة صحيحة (أداة رقم 3)',
            'title' =>  'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 12,
            'box_id' => 39,
            'question' =>  'هل يكتشف الطفل الأماكن الجديدة كبيت صديق أو حديقة جار؟ لا تكفي العين فقط',
            'title' =>  'سؤالأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 13,
            'box_id' => 40,
            'question' =>  'هل يذكر الطفل جنسه أو جنس الآخرين؟ مقبول منه اظهار أنه يعرف أن ملابس أو انشطة أو ألعاب تناسب جنساً دون آخر',
            'title' =>  'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 14,
            'box_id' => 40,
            'question' =>  'هل يظهر الطفل رغبته في مساعدة والديه في البيت ؟ (يستمتع بأداء بعض الأنشطة كإلتقاط الأشياء عن الأرض , وضع ورق الشجر في القمامة , تنظيف الغبار , إعداد مائدة الطعام و رفعها)',
            'title' =>  'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 15,
            'box_id' => 40,
            'question' =>  'هل يطلب الطفل الذهاب إلى الحمام ؟ ليس بمجرد إظهار العصبية (الاشارات مقبولة)',
            'title' =>  'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 16,
            'box_id' => 41,
            'question' =>  'هل يأتي الطفل بشيء من مكان إلى آخر أو من شخص إلى آخر ,يجب عليه أن يجد الشيء وينفذ بإشادات شفوية مثل ( تعال به هنا , أحضره لماما )',
            'title' =>  'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 17,
            'box_id' => 41,
            'question' =>  'هل يظهر محاولات لتقليد دور الكبار مثال : (أن يرتدي ملابسهم و يقلد حركاتهم)',
            'title' =>  'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 18,
            'box_id' => 41,
            'question' =>  'هل يلعب الطفل بالألعاب بطريقة صحيحة؟ ( لا يجر عربة على رأسها بدلا من العجلات ,لا يستعمل البندقية لقطع الشجرة , ولا يمشي على الألعاب الكرتونية) قد يحدث هذا ولكن ليس كثيراً (أداة رقم 6 )',
            'title' =>  'تطبيق مباشر',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 19,
            'box_id' => 42,
            'question' =>  'هل يتبع الطفل القواعد في ألعاب جماعية يشرف عليها شخص كبير؟ قد تشمل الجلوس في دائرة , التتابع , التوجيهات , تقليد القائد ,أو تقليد أنشطة أفراد جماعة آخرين',
            'title' =>  'سؤال الأم ',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 20,
            'box_id' => 42,
            'question' =>  'هل يلعب قرب أو يتحدث مع أطفال آخرين عندما يعمل بمشروعه الخاص لمدة 30 دقيقة؟',
            'title' =>  'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 21,
            'box_id' => 42,
            'question' =>  'هل يعرف الطفل مفهوم الملكية (يطلب الأذن من الآخرين قبل أخذ أغراضهم الشخصية )؟',
            'title' =>  'تطبيق مباشر سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 22,
            'box_id' => 43,
            'question' =>  'هل يلعب الطفل بالدور؟ يعني هذا أن ينتظر شخصاًآخر يلعب قبله و يسمح للآخرين أن يلعبوا الأول 75% من الوقت',
            'title' =>  'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 23,
            'box_id' => 43,
            'question' =>  'هل يقول الطفل التعبيرات التالية (شكراً),(من فضلك),(عفواً),في الأوقات المناسبة؟',
            'title' =>  'تطبيق مباشر سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 24,
            'box_id' => 44,
            'question' =>  'هل يسأل الطفل عن أحوال االكبار و المرضى ؟',
            'title' =>  'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 25,
            'box_id' => 44,
            'question' =>  'هل يخبر الطفل عن شعور الآخرين بقوله هو (غاضب , خائف , قلق ) عليه أن يدرك الشعور المضبوط؟',
            'title' =>  'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 26,
            'box_id' => 45,
            'question' =>  'هل يجيب الطفل عن أسئلة الكبار الموجهة له حول ألعابه أو اهتماماته؟',
            'title' =>  'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 27,
            'box_id' => 45,
            'question' =>  'هل يزور الفل صديقاً (يقبل أطفال الأقارب و الجيران) و يلعب معه دون مراقبة شخص كبير؟ (عدا التأكد من الكبار عن وجوده مرة كل ساعة) يجب على الصديق أن لا يكون أكبر من الطفل بأكثر من سنة واحدة',
            'title' =>  'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 28,
            'box_id' => 45,
            'question' =>  'هل يواسي الطفل أصدقاء اللعب و يقدم لهم المساعدة عند الحاجة لذلك (السقوط , الاصابة .....الخ)',
            'title' =>  'سؤال الطفل',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 29,
            'box_id' => 46,
            'question' =>  'هل ينجز الطفل مهمة حقيقية واحدة (مرة أسبوعياً على الأقل)؟ كغسل الصحون , تنظيف الحديقة ,ترتيب سريره , إخراج سلة القمامة , تنظيف الغبار ,على أن يؤدي المهمة بشكل جيد دون تشجيع',
            'title' =>  'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 30,
            'box_id' => 46,
            'question' =>  'هل يصوت الطفل و يقبل أن رأي االأغلبية هو أساس اتخاذ أي قرار ؟',
            'title' =>  'سؤال الطفل',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 31,
            'box_id' => 47,
            'question' =>  'هل يقوم الطفل بقائمة مهمات منزلية لوحده و ينفذها بشكل مقبول دون التذكير على الاطلاق؟',
            'title' =>  'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 32,
            'box_id' => 47,
            'question' =>  'هل قال الطفل أن الشمس لن تعطيه سناً بدل السن المخلوع الذي يرميه عادة لأنهاقصة خيالية و كذلك بالنسبة للجنية  , أو الساحرة , و أنها مجرد قصص خيالية؟',
            'title' =>  'سؤال الطفل',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 33,
            'box_id' => 48,
            'question' =>  'هل يتجول الطفل بحرية عند ذهابه إلى مكان عام يتواجد فيه قرب أفراد أسرته ولكن دون مراقبة مستمرة منهم؟',
            'title' =>  'سؤال الأم',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 34,
            'box_id' => 48,
            'question' =>  'هل يعبر الطفل عن سعادته للوقت الذي يقضيه مع أقرانه؟',
            'title' =>  'سؤال الطفل',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;
        PortageQuestion::create([
            'ques_number' => 35,
            'box_id' => 48,
            'question' =>  'هل يشتري الطفل بدون مساعدة الأشياء المفيدة مث الهدايا للآخرين, مشتريات العائلة؟ يجب عليه أن يعرف كم من النقود يحتاج اليها و أن يختار الأشياء المناسبة وأن يحصل على مبلغ الفكة المطلوب',
            'title' =>  'سؤال الطفل',
            'type_id' => DifficultTitle::where('title' , 'الصورة الجانبية')->value('id') ,
            'ques_mark' => 1,

        ]) ;

        //////المعرفي















    }
}

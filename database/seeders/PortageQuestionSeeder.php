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

        //////////////////////////////////////////////////////////////////////


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

    }
}

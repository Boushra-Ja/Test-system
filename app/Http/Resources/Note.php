<?php

namespace App\Http\Resources;

use App\Models\Child;
use App\Models\PortageDiminssion;
use App\Models\TestResult;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Note extends JsonResource
{

   public  function  compare($Age){

       $pp="";

       if($Age<=25)
           $pp=" شديد جدا ";

       if(25<$Age && $Age<=40)
           $pp="شديد ";

       if(40<$Age && $Age<=55)
           $pp=" متوسط ";

       if(55<$Age && $Age<=70)
           $pp=" بسيط ";

       if(70<$Age && $Age<=85)
           $pp="بسيط جدا ";

       if(85<$Age && $Age<=100)
           $pp=" طبيعي ";
       return $pp;
   }

    public  function  calculate_age($Age1,$ss){

        $quotient = floor($Age1/12); // حساب القسم الصحيح
        $remainder = $Age1 % 12; // حساب القسم العشري وتقريبه
        if($remainder==0)
            $age_= "العمر".$ss." للطفل ".$quotient." سنوات  ";
        else
            $age_= "العمر".$ss." للطفل ".$quotient." سنه  "."و".$remainder." شهور ";
       return $age_;

    }

    public function toArray(Request $request): array
    {
        $string = "";
        $ratio4 = array(0, 0, 0, 0);


        $ratio0="أي الطفل ";


        $know_ratio_1=" يحدد مستوى أداء الطفل على المهارات المعرفيه الحاصه بمرحله ماقبل المدرسه وفي المرحله الاساسيه الأولى مثل الاشاره الى الألوان وتسميه الصور ومطابقه الأشكال الهندسيه. ";
        $know_ratio_2=" في البعد المعرفي مقارنه بأداء الأطفال الذين هم في نفس العمر الزمني ";

        $social_ratio_1=" يحدد مستوى أداء الطفل على المهارات الاجتماعيه كالتفاعل مع الاخرين من أقارب وأصدقاء وكذلك حسن التصرف في المواقف الاجتماعيه التي يواجهها الطفل. ";
        $social_ratio_2=" في البعد الاجتماعي مقارنه بأداء الأطفال الذين هم في نفس العمر الزمني ";


        $montor_ratio_1=" يحدد مستوى أداء الطفل على المهارات الحركيه الكبيره مثل المشي والقفز والمهارات الحركيه الدقيقه كاستعمال المقص أو الهمل بالمعجون .";
        $montor_ratio_2=" في البعد الحركي مقارنه بأداء الأطفال الذين هم في نفس العمر الزمني ";


        $comm_ratio_1=" يحدد مستوى أداء الطفل في المهارات التواصليه من لغه استقباليه وتعبيريه .";
        $comm_ratio_2=" في البعد الاتصالي مقارنه بأداء الأطفال الذين هم في نفس العمر الزمني ";

        $care_ratio_1=" يحدد مستوى أداء الطفل على مهارات العنايه الذاتيه مثل تحمل الطفل للمسوؤليه واعتمادهعلى نفسه فس المأكل والملبس وقضاء حاجته الخاصه. ";
        $care_ratio_2=" في بعد العنايه الذاتيه مقارنه بأداء الأطفال الذين هم في نفس العمر الزمني ";

        $age = Child::where('id', $this->child_id)->value('age');

      ////الاجتماعي //
        $social_basal_age = TestResult::where('child_id', $this->child_id)
            ->where('dim_id', PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id'))->value('basal');

        $social_additional_age = TestResult::where('child_id', $this->child_id)
            ->where('dim_id', PortageDiminssion::where('title', 'البعد الاجتماعي')->value('id'))->value('additional');

        /////الحركي///
        $montor_basal_age = TestResult::where('child_id', $this->child_id)
            ->where('dim_id', PortageDiminssion::where('title', 'البعد الحركي')->value('id'))->value('basal');

        $montor_additional_age = TestResult::where('child_id', $this->child_id)
            ->where('dim_id', PortageDiminssion::where('title', 'البعد الحركي')->value('id'))->value('additional');

/////الاتصالي///////
        $comm_basal_age = TestResult::where('child_id', $this->child_id)
            ->where('dim_id', PortageDiminssion::where('title', 'البعد الاتصالي')->value('id'))->value('basal');

        $comm_additional_age = TestResult::where('child_id', $this->child_id)
            ->where('dim_id', PortageDiminssion::where('title', 'البعد الاتصالي')->value('id'))->value('additional');

        ///////////////العنايه الذاتيه////
        $care_basal_age = TestResult::where('child_id', $this->child_id)
            ->where('dim_id', PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id'))->value('basal');

        $care_additional_age = TestResult::where('child_id', $this->child_id)
            ->where('dim_id', PortageDiminssion::where('title', 'بعد العناية الذاتية')->value('id'))->value('additional');

/////المعرفي////
        $know_basal_age = TestResult::where('child_id', $this->child_id)
            ->where('dim_id', PortageDiminssion::where('title', 'البعد المعرفي')->value('id'))->value('basal');

        $know_additional_age = TestResult::where('child_id', $this->child_id)
            ->where('dim_id', PortageDiminssion::where('title', 'البعد المعرفي')->value('id'))->value('additional');

        $social_ratio =intval(($social_basal_age + $social_additional_age) / $age) * 100;
        $care_ratio =intval(($care_basal_age + $care_additional_age) / $age) * 100;
        $comm_ratio =intval(($comm_basal_age + $comm_additional_age) / $age) * 100;
        $know_ratio =intval(($know_basal_age + $know_additional_age) / $age) * 100;
        $montor_ratio =intval(($montor_basal_age + $montor_additional_age) / $age) * 100;


        $social_str= $this->compare($social_basal_age);
        $care_str= $this->compare($care_basal_age);
        $comm_str= $this->compare($comm_basal_age);
        $know_str= $this->compare($know_basal_age);
        $montor_str= $this->compare($montor_basal_age);


        $social_a= $this->  calculate_age($social_basal_age,"الاجتماعي");

        $care_a= $this->  calculate_age($care_basal_age,"في العنايه الذاتيه");

        $comm_a= $this->  calculate_age($comm_basal_age,"الاتصالي");

        $know_a= $this->  calculate_age($know_basal_age,"المعرفي");

        $montor_a= $this->  calculate_age($montor_basal_age,"الحركي");


        $ratio4[0]= $social_ratio_1." "."".$social_a."نسبه الأداء"."(".$social_ratio."%)"."مستوى الأداء: ".$social_str.$ratio0.$social_str.$social_ratio_2;
        $ratio4[1]=$know_ratio_1." ".$know_a."نسبه الأداء"."(".$know_ratio."%)"."مستوى الأداء: ".$know_str.$ratio0.$know_str.$know_ratio_2;
        $ratio4[2]=$comm_ratio_1." ".$comm_a."نسبه الأداء"."(".$comm_ratio."%)"."مستوى الأداء: ".$comm_str.$ratio0.$comm_str.$comm_ratio_2;
        $ratio4[3]=$care_ratio_1." ".$care_a."نسبه الأداء"."(".$care_ratio."%)"."مستوى الأداء: ".$care_str.$ratio0.$care_str.$care_ratio_2;
        $ratio4[4]=$montor_ratio_1." ".$montor_a."نسبه الأداء"."(".$montor_ratio."%)"."مستوى الأداء: ".$montor_str.$ratio0.$montor_str.$montor_ratio_2;




        return [
            "العمر الاجتماعي"=>$ratio4[0],
            "العمر المعرفي"=>$ratio4[1],
            "العمر الاتصالي"=>$ratio4[2],
            "العمر في العنايه الذاتيه"=>$ratio4[3],
            "العمر الحركي"=>$ratio4[4],



        ];
    }
}

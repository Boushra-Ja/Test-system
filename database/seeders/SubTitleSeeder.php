<?php

namespace Database\Seeders;

use App\Models\PortageDiminssion;
use App\Models\SubTitle;
use Illuminate\Database\Seeder;

class SubTitleSeeder extends Seeder
{

    public function run(): void
    {
        ///المجال الاجتماعي
        SubTitle::create([
            'title' => 'التفاعل مع الآخرين',
            'dim_id' => PortageDiminssion::where('title' , 'البعد الاجتماعي')->value('id')
        ]) ;
        SubTitle::create([
            'title' => 'المهارات الانفعالية',
            'dim_id' => PortageDiminssion::where('title' , 'البعد الاجتماعي')->value('id')

        ]) ;

        SubTitle::create([
            'title' => 'اللعب الاجتماعي والتفاعل مع الألعاب',
            'dim_id' => PortageDiminssion::where('title' , 'البعد الاجتماعي')->value('id')

        ]) ;

        /////المجال المعرفي
        SubTitle::create([
            'title' => 'المهارات الحسية والإدراكية',
            'dim_id' => PortageDiminssion::where('title' , 'البعد المعرفي')->value('id')

        ]) ;
        SubTitle::create([
            'title' => 'الاستكشاف والتفكير المنطقي والأهداف الرياضية',
            'dim_id' => PortageDiminssion::where('title' , 'البعد المعرفي')->value('id')

        ]) ;

        /////المجال الاتصالي
        SubTitle::create([
            'title' => 'التواصل واللغة',
            'dim_id' => PortageDiminssion::where('title' , 'البعد الاتصالي' )->value('id')

        ]) ;
        SubTitle::create([
            'title' => 'مهارات القراءة المبكرة',
            'dim_id' => PortageDiminssion::where('title' , 'البعد الاتصالي')->value('id')

        ]) ;


        ///الغناية الذاتية
        SubTitle::create([
            'title' => 'التغذية',
            'dim_id' => PortageDiminssion::where('title' ,'بعد العناية الذاتية' )->value('id')

        ]) ;
        SubTitle::create([
            'title' => 'النظافة والترتيب والصحة العامة',
            'dim_id' => PortageDiminssion::where('title' ,'بعد العناية الذاتية' )->value('id')

        ]) ;
        SubTitle::create([
            'title' => 'ارتداء الملابس',
            'dim_id' => PortageDiminssion::where('title' ,'بعد العناية الذاتية' )->value('id')

        ]) ;

        /////المجال الحركي
        SubTitle::create([
            'title' => 'المهارات الحركية الكبيرة والتوازن',
            'dim_id' => PortageDiminssion::where('title' ,'البعد الحركي')->value('id')

        ]) ;
        SubTitle::create([
            'title' => 'المهارات الحركية الدقيقة',
            'dim_id' => PortageDiminssion::where('title' ,'البعد الحركي' )->value('id')

        ]) ;
        SubTitle::create([
            'title' => 'مهارات ماقبل الكتابة والكتابة المبكرة',
            'dim_id' => PortageDiminssion::where('title' ,'البعد الحركي' )->value('id')

        ]) ;
    }
}

<?php

namespace Database\Seeders;

use App\Models\DifficultTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DifficultTitleSeeder extends Seeder
{

    public function run(): void
    {
        DifficultTitle::create([
            'title' => 'الصورة الجانبية',
        ]);
        DifficultTitle::create([
            'title' => 'قائمة الشطب',
        ]);
        DifficultTitle::create([
            'title' => 'المستوى الأول',
        ]);
        DifficultTitle::create([
            'title' => 'المستوى الثاني',
        ]);
        DifficultTitle::create([
            'title' => 'المستوى الثالث',
        ]);
        DifficultTitle::create([
            'title' => 'المستوى الرابع',
        ]);
        DifficultTitle::create([
            'title' => 'المستوى الخامس',
        ]);
        DifficultTitle::create([
            'title' => 'المستوى السادس',
        ]);
        DifficultTitle::create([
            'title' => 'قراءة',
        ]);
        DifficultTitle::create([
            'title' => 'حساب'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\DatasetTag;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create(['name' => 'طلاب']);
        Tag::create(['name' => 'كلية']);
        Tag::create(['name' => 'تقرير']);
        Tag::create(['name' => 'سنوي']);
        Tag::create(['name' => 'منح']);
        Tag::create(['name' => 'الجامعة']);
        Tag::create(['name' => 'جنسية']);
        Tag::create(['name' => 'عمادة']);
        Tag::create(['name' => 'ادارة']);
        Tag::create(['name' => 'خريج']); //10
        Tag::create(['name' => 'مستجد']);
        Tag::create(['name' => 'منسحب']);
        Tag::create(['name' => 'مقيد']);
        Tag::create(['name' => '1435']);
        Tag::create(['name' => '1436']);
        Tag::create(['name' => '1437']);
        Tag::create(['name' => '1438']);
        Tag::create(['name' => '1439']);
        Tag::create(['name' => '1440']);
        Tag::create(['name' => '1441']);
        Tag::create(['name' => '1442']);
        Tag::create(['name' => '1443']);
        Tag::create(['name' => '1444']);
        Tag::create(['name' => '1445']);
        Tag::create(['name' => '2018']);
        Tag::create(['name' => '2019']);
        Tag::create(['name' => '2020']);
        Tag::create(['name' => '2021']);
        Tag::create(['name' => '2022']);
        Tag::create(['name' => '2023']);
        Tag::create(['name' => '2024']);
    }
}

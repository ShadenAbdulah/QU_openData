<?php

namespace Database\Seeders;

use App\Models\DatasetTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatasetTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DatasetTag::create(['dataset_id' => 1, 'tag_id' => 3]);
        DatasetTag::create(['dataset_id' => 1, 'tag_id' => 4]);
        DatasetTag::create(['dataset_id' => 2, 'tag_id' => 1]);
        DatasetTag::create(['dataset_id' => 2, 'tag_id' => 5]);
        DatasetTag::create(['dataset_id' => 3, 'tag_id' => 6]);
        DatasetTag::create(['dataset_id' => 4, 'tag_id' => 6]);
        DatasetTag::create(['dataset_id' => 5, 'tag_id' => 1]);
        DatasetTag::create(['dataset_id' => 5, 'tag_id' => 10]);
        DatasetTag::create(['dataset_id' => 5, 'tag_id' => 2]);
        DatasetTag::create(['dataset_id' => 6, 'tag_id' => 1]);
        DatasetTag::create(['dataset_id' => 6, 'tag_id' => 11]);
        DatasetTag::create(['dataset_id' => 6, 'tag_id' => 2]);
    }
}

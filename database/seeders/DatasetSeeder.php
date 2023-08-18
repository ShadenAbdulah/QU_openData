<?php

namespace Database\Seeders;

use App\Models\Dataset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DatasetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::withHeaders([
            'Authorization' => 'token',
        ])->get('https://data.qu.edu.sa/api/v1/datasets');

        foreach ($response['data'] as $key => $value) {
            Dataset::create([
                'ar_title' => $value['ar_title'],
                'ar_description' => ($value['ar_description'] === null)?'لا يوجد وصف':$value['ar_description'],
                'periodically_updating' => ($value['periodically_updating'] === 'half_yearly')?'نصف سنوي':'سنوي',
                'number_of_downloads' => $value['number_of_downloads'],
                'average_rating' => $value['average_rating'],
                'status' => ($value['status'] === 'published')?'منشور':'مؤرشف',
                'created_by' => ($value['created_by'] === 'k.almreef')?3:4,
                'updated_by' => ($value['updated_by'] === 'k.almreef')?3:4,
            ]);
        }
    }
}

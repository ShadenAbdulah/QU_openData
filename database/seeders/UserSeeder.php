<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'شادن المطوع',
            'admin' => 1,
            'email' => 'shadenabdulah1@gmail.com',
            'password' => '12345678',
        ]);
        User::create([
            'name' => 'شادن عبدالله',
            'email' => 'shadonh@gmail.com',
            'password' => '12345678',
        ]);
        User::create([
            'name' => 'k.almreef',
            'email' => 'k.almreef@qu.edu.sa',
            'password' => '12345678',
        ]);
        User::create([
            'name' => 'n.alshamari',
            'email' => 'n.alshamari@qu.edu.sa',
            'password' => '12345678',
        ]);
    }
}

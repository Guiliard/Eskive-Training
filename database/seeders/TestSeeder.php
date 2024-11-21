<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\test_model;
use Carbon\Carbon;


class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        test_model::create([
            'name' => 'Admin',
            'user_id' => 1,
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(), 
        ]);
    }
}

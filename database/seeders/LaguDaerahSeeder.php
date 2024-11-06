<?php

namespace Database\Seeders;

use App\Models\LaguDaerah;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LaguDaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LaguDaerah::factory()->count(10)->create();


    }
}

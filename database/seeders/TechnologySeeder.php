<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $thecnologies = ['html', 'css', 'javascript', 'php', 'laravel', 'vuejs', 'mysql', 'vite', 'bootstrap'];

        foreach ($thecnologies as $technology) {

            $newTechnology = new Technology();

            $newTechnology->title = $technology;

            $newTechnology->save();
        }
    }
}

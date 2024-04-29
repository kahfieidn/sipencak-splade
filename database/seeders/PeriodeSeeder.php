<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\Periode::create(['year' => '2024']);
        \App\Models\Periode::create(['year' => '2025']);
        \App\Models\Periode::create(['year' => '2026']);
        \App\Models\Periode::create(['year' => '2027']);
        \App\Models\Periode::create(['year' => '2028']);
        \App\Models\Periode::create(['year' => '2029']);
        \App\Models\Periode::create(['year' => '2030']);

    }
}

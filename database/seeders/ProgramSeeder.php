<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $year_2024 = \App\Models\Periode::create(['year' => '2024']);
        \App\Models\Periode::create(['year' => '2025']);
        \App\Models\Periode::create(['year' => '2026']);
        \App\Models\Periode::create(['year' => '2027']);
        \App\Models\Periode::create(['year' => '2028']);
        \App\Models\Periode::create(['year' => '2029']);
        \App\Models\Periode::create(['year' => '2030']);


        $program = \App\Models\Program::create([
            'kode' => 'A0123',
            'nama_program' => 'Program 1',
            'pagu' => 0,
            'periode_id' => $year_2024->id,
            'created_at' => \Carbon\Carbon::now(), // Menambah 1 detik dari waktu saat ini
        ]);

        $kegiatan = \App\Models\Kegiatan::create([
            'program_id' => $program->id,
            'kode' => 'A0123.1',
            'nama_kegiatan' => 'Kegiatan 1',
            'status' => 'DIBUKA'
        ]);
        \App\Models\SubKegiatan::create([
            'kegiatan_id' => $kegiatan->id,
            'kode' => 'A0123.1.1',
            'nama_sub_kegiatan' => 'Sub Kegiatan 1.1',
        ]);
        \App\Models\SubKegiatan::create([
            'kegiatan_id' => $kegiatan->id,
            'kode' => 'A0123.1.2',
            'nama_sub_kegiatan' => 'Sub Kegiatan 1.2',
        ]);
        \App\Models\SubKegiatan::create([
            'kegiatan_id' => $kegiatan->id,
            'kode' => 'A0123.1.3',
            'nama_sub_kegiatan' => 'Sub Kegiatan 1.3',
        ]);


        $kegiatan2 = \App\Models\Kegiatan::create([
            'program_id' => $program->id,
            'kode' => 'A0123.2',
            'nama_kegiatan' => 'Kegiatan 2',
            'status' => 'DIBUKA'
        ]);
        \App\Models\SubKegiatan::create([
            'kegiatan_id' => $kegiatan2->id,
            'kode' => 'A0123.2.1',
            'nama_sub_kegiatan' => 'Sub Kegiatan 2.1',
        ]);
        \App\Models\SubKegiatan::create([
            'kegiatan_id' => $kegiatan2->id,
            'kode' => 'A0123.2.2',
            'nama_sub_kegiatan' => 'Sub Kegiatan 2.2',
        ]);
        \App\Models\SubKegiatan::create([
            'kegiatan_id' => $kegiatan2->id,
            'kode' => 'A0123.2.3',
            'nama_sub_kegiatan' => 'Sub Kegiatan 2.3',
        ]);

        $program2 = \App\Models\Program::create([
            'kode' => 'B0123',
            'nama_program' => 'Program 2',
            'pagu' => 0,
            'periode_id' => $year_2024->id,
            'created_at' => \Carbon\Carbon::now()->addHour(), // Menambah 1 detik dari waktu saat ini
        ]);

        $kegiatan = \App\Models\Kegiatan::create([
            'program_id' => $program2->id,
            'kode' => 'B0123.1',
            'nama_kegiatan' => 'Kegiatan 1',
            'status' => 'DIBUKA'
        ]);


    }
}

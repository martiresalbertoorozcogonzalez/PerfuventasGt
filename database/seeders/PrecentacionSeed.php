<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrecentacionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('precentacions')->insert([
            'nombre' => 'Unidad',
            'slug' => Str::slug('Unidad'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
       ]);

       DB::table('precentacions')->insert([
            'nombre' => 'Estuche',
            'slug' => Str::slug('Estuche'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
       ]);
    }
}

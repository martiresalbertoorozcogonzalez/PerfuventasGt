<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generos')->insert([
            'nombre' => 'Mujer',
            'slug' => Str::slug('Mujer'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
       ]);

        DB::table('generos')->insert([
            'nombre' => 'Hombre',
            'slug' => Str::slug('Hombre'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('generos')->insert([
            'nombre' => 'Niña',
            'slug' => Str::slug('Niña'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('generos')->insert([
            'nombre' => 'Niño',
            'slug' => Str::slug('Niño'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('generos')->insert([
            'nombre' => 'Unisex',
            'slug' => Str::slug('Unisex'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

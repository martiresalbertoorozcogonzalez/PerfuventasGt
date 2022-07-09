<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Eau de parfum',
            'slug' => Str::slug('Eau de parfum'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
       ]);

        DB::table('categorias')->insert([
            'nombre' => 'Eau de toilette',
            'slug' => Str::slug('Eau de toilett'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Splash',
            'slug' => Str::slug('Splash'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

   }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->insert([
            'nome' => 'gilmore girls',
            'quant_temp' => 7,
            'genero' => 'comedia',
            'status_id' => 3,
            'created_at' =>'2022-01-28 9',
            'updated_at' => Carbon::now(),
        ]);

        DB::table('series')->insert([
            'nome' => 'game of thones',
            'quant_temp' => 7,
            'genero' => 'fantasia',
            'status_id' => 3,
            'created_at' =>'2022-02-07 9:30',
            'updated_at' => Carbon::now(),
        ]);

        DB::table('series')->insert([
            'nome' => 'roda do tempo',
            'quant_temp' => 1,
            'genero' => 'fantasia',
            'status_id' => 2,
            'created_at' =>'2022-02-07 9:30',
            'updated_at' => Carbon::now(),
        ]);
    }
}

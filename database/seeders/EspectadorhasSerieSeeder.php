<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class EspectadorhasSerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('espectador_has_series')->insert([
            'serie_id' => 1,
            'espectador_id' => 4,
            'created_at' =>'2022-01-28 9',
            'updated_at' => Carbon::now(),
        ]);

    }
}

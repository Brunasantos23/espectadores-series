<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class Servico_streming_has_espectadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('espectador_has_servico_streaming')->insert([
            'servico_streaming_id' => 9,
            'espectador_id' => 4,
            'created_at' =>'2022-01-28 9',
            'updated_at' => Carbon::now(),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class Serie_has_servico_streamingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series_has_servico_streaming')->insert([
            'series_id' => 1,
            'servico_streaming_id' => 1,
            'created_at' =>'2022-01-28 9',
            'updated_at' => Carbon::now(),

        ]);

        DB::table('series_has_servico_streaming')->insert([
            'series_id' => 2,
            'servico_streaming_id' => 2,
            'created_at' =>'2022-01-28 9',
            'updated_at' => Carbon::now(),

        ]);
    }
}

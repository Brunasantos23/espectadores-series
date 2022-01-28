<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Servico_stremingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servico_streming')->insert([
            'nome' => 'netfilx',
            'created_at' =>'2022-01-28 9',
            'updated_at' => Carbon::now(),
        ]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'status' => 'cancelada',
            'created_at' =>'2022-01-28 9',
            'updated_at' => Carbon::now(),

        ]);

        DB::table('status')->insert([
            'status' => 'em andamento',
            'created_at' =>'2022-02-07 9:30',
            'updated_at' => Carbon::now(),

        ]);

        DB::table('status')->insert([
            'status' => 'finalizada',
            'created_at' =>'2022-02-07 9:30',
            'updated_at' => Carbon::now(),

        ]);



    }
}

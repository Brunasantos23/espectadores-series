<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class EspectadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('espectadores')->insert([
            'nome' => 'cecilia',
            'idade' => 1,
            'created_at' =>'1975-05-23 22',
            'updated_at' => Carbon::now()->subDays(35),

        ]);

        DB::table('espectadores')->insert([
            'nome' => 'monique',
            'idade' => 3,
            'created_at' =>'1975-06-21 22',
            'updated_at' => Carbon::now()->subDays(35),

        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(array(

            EspectadorSeeder::class,

            StatusSeeder::class,

            SerieSeeder::class,

            Servico_stremingSeeder::class,

            Servico_streming_has_espectadorSeeder::class,

            EspectadorhasSerieSeeder::class,

            Serie_has_servico_streamingSeeder::class

        ));

    }
}

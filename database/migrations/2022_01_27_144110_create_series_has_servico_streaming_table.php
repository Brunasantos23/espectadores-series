<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesHasServicoStreamingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series_has_servico_streaming', function (Blueprint $table) {
            $table->id();

            $table->foreignId('series_id')->constrained('series');

            $table->foreignId('servico_streaming_id')->constrained('servico_streaming');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series_has_servico_streaming');
    }
}

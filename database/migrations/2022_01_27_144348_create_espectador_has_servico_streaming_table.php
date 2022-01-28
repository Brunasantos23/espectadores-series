<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspectadorHasServicoStreamingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espectador_has_servico_streaming', function (Blueprint $table) {
            $table->id();

            $table->foreignId('espectador_id')->constrained('espectador');

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
        Schema::dropIfExists('espectador_has_servico_streaming');
    }
}

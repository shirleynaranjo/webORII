<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->bigIncrements('idEvento');
            $table->string('tituloEvento',500);           
            $table->string('lugarEvento',500);
            $table->string('fechaEvento',500);
            $table->string('horaEvento',500);
            $table->string('descripcion',1000);
            $table->string('informacionP',100)->nullable();           
            $table->string('informacionI',100)->nullable();
            $table->string('miniatura',100);
            $table->timestamps();
            $table->charset='utf8mb4';
            $table->collation='utf8mb4_spanish2_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento');
    }
}

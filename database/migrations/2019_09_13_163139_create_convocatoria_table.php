<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvocatoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convocatoria', function (Blueprint $table) {
            $table->bigIncrements('idConvocatoria');
            $table->string('nombreConvocatoria',100);
            $table->string('oferenteConvocatoria',100);
            $table->string('fechaCierre',100);
            $table->string('vigenciaConvocatoria',45);
            $table->string('informacion',300);
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
        Schema::dropIfExists('convocatoria');
    }
}

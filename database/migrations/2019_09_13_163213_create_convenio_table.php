<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvenioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convenio', function (Blueprint $table) {
            $table->bigIncrements('idConvenio');
            $table->string('codigoConvenio',20);
            $table->string('tituloConvenio',200);
            $table->string('objetoConvenio',1000);
            $table->string('vigenciaConvenio',45);
            $table->string('fechaExpedicion',10);
            $table->string('fechaTerminacion',10);   
            $table->unsignedBigInteger('idPais'); //Relacion con Pais
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
        Schema::dropIfExists('convenio');
    }
}

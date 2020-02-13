<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ConveniosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('convenio')->truncate();


        DB::table('convenio')->insert([

            'codigoConvenio'=>'0001',
            'tituloConvenio'=>'EL INSTITUTO SUPERIOR DE EDUCACIÓN ADMINISTRACIÓN Y DESARROLLO, ISEAD',
            'objetoConvenio'=>'Marco',
            'vigenciaConvenio'=>'5 años',
            'fechaExpedicion'=>'2009',
            'fechaTerminacion'=>'2023',
            'idPais'=>'3',

        ]);

        DB::table('convenio')->insert([

            'codigoConvenio'=>'0002',
            'tituloConvenio'=>'CENTRO DE INVESTIGACIÓN Y DE ESTUDIOS AVANZADOS DEL I.P.N. (CINVESTAV)',
            'objetoConvenio'=>'Marco',
            'vigenciaConvenio'=>'5 años',
            'fechaExpedicion'=>'2013',
            'fechaTerminacion'=>'2022',
            'idPais'=>'1',

        ]);
    }
}

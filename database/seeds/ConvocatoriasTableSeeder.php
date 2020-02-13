<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ConvocatoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('convocatoria')->truncate();


        DB::table('convocatoria')->insert([

            'nombreConvocatoria'=>'FULBRIGHT',
            'oferenteConvocatoria'=>'FULBRIGHT',
            'fechaCierre'=>'6 junio',
            'vigenciaConvocatoria'=>'3 meses',
            'informacion'=>'si',

        ]);

        DB::table('convocatoria')->insert([

            'nombreConvocatoria'=>'OEA',
            'oferenteConvocatoria'=>'OEA',
            'fechaCierre'=>'6 mayo',
            'vigenciaConvocatoria'=>'3 meses',
            'informacion'=>'si',

        ]);

    }
}

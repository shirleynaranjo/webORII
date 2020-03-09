<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evento')->truncate();


        DB::table('evento')->insert([

            'tituloEvento'=>'Convocatorias movilidad',
            'lugarEvento'=>'UFPS',
            'fechaEvento'=>'Ver informacion',
            'horaEvento'=>'0',
            'descripcion'=>'Convocatorias movilidad',
            'informacionP'=>'',
            'informacionI'=>'',
            'miniatura'=>'',
        ]);

        DB::table('evento')->insert([

            'tituloEvento'=>'Curso de ingles',
            'lugarEvento'=>'UFPS',
            'fechaEvento'=>'30 marzo',
            'horaEvento'=>'8:00 am',
            'descripcion'=>'Curso de ingles',
            'informacionP'=>'',
            'informacionI'=>'',
            'miniatura'=>'',
        ]);

        DB::table('evento')->insert([

            'tituloEvento'=>'Documentos movilidades',
            'lugarEvento'=>'UFPS',
            'fechaEvento'=>'5 mayo',
            'horaEvento'=>'8:00 am',
            'descripcion'=>'Documentos movilidades',
            'informacionP'=>'',
            'informacionI'=>'',
            'miniatura'=>'',
        ]);
        
        
    }
}

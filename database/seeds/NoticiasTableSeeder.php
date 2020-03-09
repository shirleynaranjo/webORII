<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticia')->truncate();


        DB::table('noticia')->insert([

            'tituloNoticia'=>'Estudiante UFPS realizó ponencia Internacional en Expo Ciencia 2019',
            'descripcionNoticia'=>'Carlos Iván Ortega Álvarez, estudiante del programa de Ingeniería de Sistemas de la Universidad Francisco de Paula Santander y miembro del semillero de investigación SILUX, participó recientemente en calidad de ponente del Expo Ciencia 2019 realizado en la ciudad de Monterrey – México.',
            'fechaPublicacion'=>'13 de diciembre del 2019',
            'imagen'=>'',
            'video'=>'',
        ]);

        
        DB::table('noticia')->insert([

            'tituloNoticia'=>'Docentes y administrativo UFPS realizaron visita académica y empresarial a la República Popular de China',
            'descripcionNoticia'=>'La Universidad Francisco de Paula Santander sigue promoviendo la movilidad internacional de sus docentes y administrativos como una apuesta por fortalecer los indicadores de autoevaluación con fines de acreditación de alta calidad en los componentes de docencia, investigación y extensión.',
            'fechaPublicacion'=>' 18 de diciembre del 2019',
            'imagen'=>'',
            'video'=>'',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiencia')->truncate();

        DB::table('experiencia')->insert([

            'enlace'=>'https://www.youtube.com/embed/38w2_XG0ec4',
            'descripcion'=>'Magazín Siente La U - 20 de diciembre',
        ]);

        DB::table('experiencia')->insert([

            'enlace'=>'https://www.youtube.com/embed/nxVAP34Fb1M',
            'descripcion'=>'Presentamos una nueva edición del Magazín "Siente La U" TV',
        ]);

        DB::table('experiencia')->insert([

            'enlace'=>'https://www.youtube.com/embed/nxVAP34Fb1M',
            'descripcion'=>'Siente La U" TV',
        ]);

    }
}

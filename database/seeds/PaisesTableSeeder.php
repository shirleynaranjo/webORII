<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class PaisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pais')->truncate();


        DB::table('pais')->insert([
            'nombrePais'=>'Argentina',

        ]);

        DB::table('pais')->insert([
            'nombrePais'=>'Alemania',

        ]);

        DB::table('pais')->insert([
            'nombrePais'=>'Brasíl',

        ]);
        
        DB::table('pais')->insert([
            'nombrePais'=>'España',

        ]);
       
    }
}

<?php

use Illuminate\Database\Seeder;
use weborii\Models\Noticia;

class NoticiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Noticia::truncate();
        factory(Noticia::class,5)->create();
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PaisesTableSeeder::class);
        $this->call(ConveniosTableSeeder::class);
        $this->call(ConvocatoriasTableSeeder::class);
        $this->call(NoticiasTableSeeder::class);
        $this->call(EventosTableSeeder::class);
        $this->call(ExperienciasTableSeeder::class);
    }
}

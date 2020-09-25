<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Profession;

class ProfessionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ////////////////////////////////////////////
        /* Insertar datos con SQL y laravel */
        /* DB::insert('INSERT INTO professions (title) VALUES (:title)', [
            'title' => 'Desarrollador BAck-end',
        ]); */



        /* DB::table('nombreTabla') */
        /* Se insertan los datos en un array asociativo */
        // Constructor de consultas

        /* DB::table('professions')->insert([
           'title' => 'Desarrollador Back-end',
        ]);

        DB::table('professions')->insert([
            'title' => 'Desarrollador Front-end',
         ]);

         DB::table('professions')->insert([
             'title' => 'Diseñador Web',
         ]); */

         ///////////////////////////
         // Con Model
         Profession::create([
            'title' => 'Desarrollador Back-end',
         ]);

         Profession::create([
            'title' => 'Desarrollador Front-end',
         ]);

         Profession::create([
            'title' => 'Diseñador Web',
         ]);
    }
}

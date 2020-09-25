<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* Se hace la llamada al método truncateTable = Borra los registros de las tablas que se pasan
            por parámetro
        */
        $this->truncateTable([
            'users',
            'professions',
        ]);
        // $this->call(UsersTableSeeder::class);
        /* Se registra el seeder */
        $this->call(ProfessionalSeeder::class);
        $this->call(UserSeeder::class);
    }

    protected function truncateTable(array $tables){
        /* Desactivar la revisión de foreign Key en la DB */
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); /* Recomendado: Antes de insertar los datos se deben borrar primero */

        foreach ($tables as $table){
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); /* Desactivar la revisión de foreign Key en la DB */
    }
}

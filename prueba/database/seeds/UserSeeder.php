<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Profession;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //////////////////////////////////////////////
        // Para seleccionar el id de la profession
        // Primero con SQL utilizando el método SELECT
        /* $professions = DB::select('SELECT id FROM professions WHERE title = ? LIMIT 0,1', ['Desarrollador back-end']);
        dd($professions[0]->id); */

        // Método constructor de consultas SQl de laravel, es más fluido

        // $professions = DB::table('professions')->select('id')->take(1)->get();
        // dd($professions->first());
        // o
        // $profession = DB::table('professions')->select('id')->WHERE('title', 'Desarrollador back-end')->first();
        // o
        /* $professionId = DB::table('professions')
            ->WHERE(['title' => 'Desarrollador back-end'])
            ->value('id'); */
        // dd($professionId);

        // Traer el id de la profession con Model
        $professionId = Profession::where(['title' => 'Desarrollador back-end'])->value('id');

        // Con SQL
        /* DB::table('users')->insert([
            'name' => 'Duilio Palacios',
            'email' => 'duilio@sryde.net',
            'password' => bcrypt('laravel'),
            // 'profession_id' => $profession->id,
            'profession_id' => $professionId,
        ]); */

        // Con Models
        User::create([
            'name' => 'Duilio Palacios',
            'email' => 'duilio@sryde.net',
            'password' => bcrypt('laravel'),
            // 'profession_id' => $profession->id,
            'profession_id' => $professionId,
        ]);
    }
}

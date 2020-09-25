<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /*
        Laravel diseña la DB en forma de programación orientada a obj, desvincula/desligada del motor
        de DB a usar, soportado por laravel
    */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
            Fachada = schema
            Método = create
            1er Argumento = NomTable
            2do Argumanto = Funcion anonima -> recibe como argumento obj de clase blueprint
            Métodos de Blueprint = Diseña la estructura de la table
        */
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken(); /*  No representa una columna como tal de la DB, es un método helper (de ayuda),
                                         genera columnas comunes en la app, en este caso, genera una columna la cual
                                         almacena/recuerda los usuarios para visitas subsiguientes */
            $table->timestamps(); /*  Marcas de tiempo = se declaran dos columnas:
                                      create_at =  Creado en
                                      update_at = actualizado en
                                      Ambas pueden tener un valor null*/
        });
    }

    /*
        Método down() = revertir/devolver/eliminar loe hecho en el método up(), borra la tabla
        Usando el método dropIfExists de schema
    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }

    /*
        MÉTODOS DE CONSTRUCCIÓN -> schema Builder
        $table->string('nomColumn'); => Crea table type VARCHAR
        $table->integer('nomColumn'); => Crea table type INTEGER
        $table->integer('nomColumn')->unsigned()->default(0); => Crea table type INTEGER ->sin signo -> valor por defecto 0
    */
}

/*
    OJO
    Para cambiar la configuración de laravel para usar la DB:
    carpeta vendor
        file .env
            cambiar
                APP_NAME=Styde
                APP_URL=http://127.0.0.1:8000/
                DB_DATABASE=curso_styde
                DB_USERNAME=root
                DB_PASSWORD=8992C0
*/

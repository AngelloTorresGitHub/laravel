<?php

namespace Tests\Feature;

use Tests\TestCase;

class pruebaTest extends TestCase
{
    /** @test */
    function usuariosTest()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios');
    }

    /** @test */
    function detalleUsuarioTest()
    {
        $this->get('/usuarios/52')
            ->assertStatus(200)
            ->assertSee('Mostrado detalle del usuario: 5');
    }

    /** @test */
    public function nuevoUsuarioTest()
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }
}

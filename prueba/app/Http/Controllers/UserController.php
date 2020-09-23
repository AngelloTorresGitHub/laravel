<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (request()->has('empty')) {
            $users = [];
        } else {
            $users = [
                'Joel','Ellie','Tess','Tommy','Bill','<script>alert("Clicker")</script>'
            ];
        }

        return view('users', [
            'users' => $users,
            'title' => 'Listado de usuarios'
        ]);
    }

    public function show($id)
    {
        return view('show')->with('id', $id);
    }

    public function create()
    {
        return view('create');
    }
}

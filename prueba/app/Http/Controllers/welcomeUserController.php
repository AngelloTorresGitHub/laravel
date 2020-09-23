<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeUserController extends Controller
{
   public function __invoke($name, $nickname = null) {
        if($nickname){
            return "Bienvenido usuario {$name}, tu apodo es {$nickname}";
        }else {
            return "Bienvenido usuario {$name}, tu no tienes apodo";
        }
   }
}

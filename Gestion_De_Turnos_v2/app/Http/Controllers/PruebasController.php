<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;


class PruebasController extends Controller
{
    //
    public function index(){
        $titulo= 'Animales';
        $animales =['Perro','Gato'];

        return view('pruebas.index', array(
            'titulo' => $titulo,
            'animales' => $animales
        ));
    }

    public function testOrm(){
        $roles=Role::all();
        foreach($roles as $role){
            echo "<h1>".$role->descrp."</h1>";
        }

        die();
    }

    public function testUsers(){
        $users=User::all();
        foreach($users as $user){
            echo "<h1>".$user->name."</h1>";
            echo "<span>{$user->role->descrp}</span>";
        }

        die();
    }
}

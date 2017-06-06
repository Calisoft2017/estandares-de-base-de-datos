<?php

namespace proyecto\Http\Controllers;

class PruebaController extends Controller
{
    public function index()
    {
        return "Hola desde controladores";
    }
    public function nombre($nombre)
    {
        $suma=$nombre+5;
        return "Hola mi nombre es: ".$suma."laravel 5.4";
    }
}

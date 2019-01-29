<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    //

    //public function prueba() {
    //    return 'Estoy dentro de Prueba Controller';
    //}
    
    public function prueba($param) {
        return 'Estoy dentro de Prueba Controller y recibi este parametro: '. $param;
    }
}

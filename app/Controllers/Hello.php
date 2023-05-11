<?php

namespace App\Controllers;

class Hello extends BaseController
{
    public function index()
    {
        $producto = array("nombre"=>"leche","precio"=>6,"categoria"=>"lacteos");
        return view('view_hello',$producto);
    }
}
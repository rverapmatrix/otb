<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $encrypter = \Config\Services::encrypter();
        $clave = bin2hex($encrypter->encrypt(789));
        echo $clave;
       // return view('view_login.php');
    }
}
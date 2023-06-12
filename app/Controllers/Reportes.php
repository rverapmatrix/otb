<?php

namespace App\Controllers;
use App\Models\CobroModel;
use App\Models\UsuarioModel;

class Reportes extends BaseController
{
    protected $pagoModel;
    protected $userModel;

    public function index()
    {
        return view('welcome_message');
    }

    public function reportes()
    {
        $this->pagoModel = new CobroModel();
        $this->userModel = new UsuarioModel();

        $pagos = [
            'registros' => $this->pagoModel->getPagosSocios(),
            'usuarios' => $this->userModel->getUsuarios()
        ];

        return view('Estructura/view_reportes', $pagos);
    }
}


?>

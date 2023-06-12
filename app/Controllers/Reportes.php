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


    public function filtrar()
{
    //echo "Hola Mundo";
    $this->pagoModel = new CobroModel();
    $this->userModel = new UsuarioModel();

    echo $fechaIni = $this->request->getPost("fechaIni");
    echo $fechaFin = $this->request->getPost("fechaFin");
    echo $socio = $this->request->getPost("socio");

    // Obtener los pagos filtrados por rango de fechas y socio
    $pagos = $this->pagoModel->getPagosFiltrados($fechaIni, $fechaFin, $socio);

    // Obtener todos los usuarios para el dropdown de socios
    $usuarios = $this->userModel->getUsuarios();

    // Pasar los datos a la vista
    $data = [
        'registros' => $pagos,
        'usuarios' => $usuarios
    ];

    return view('Estructura/view_reportes', $data);
}

}


?>

<?php

namespace App\Controllers;
use App\Models\CobroModel;
use App\Models\UsuarioModel;
use DateTime;

class Cobros extends BaseController
{
    
    protected $userModel;
    protected $cobroModel;
    public function index()
    {
        return view('welcome_message');
    }

    public function cobroServicio(){
        $this->userModel = new UsuarioModel();
        $usuarios['usuarios'] = $this->userModel->getUsuarios();
      
                       
        return view('Estructura/registroPago',$usuarios);
    }

    public function generarCobro(){
    
       $this->cobroModel = new CobroModel();
        /**campos Cobro*** */

        $tipo = $this->request->getPost("tipo");
        $socio = $this->request->getPost("socio");
        $monto = $this->request->getPost("monto");
        $descuento = $this->request->getPost("descuento");
        $fecha = $this->request->getPost("fecha");
        $descripcion = $this->request->getPost("descripcion");
        $mes = date('n');
        $year = date('Y');

        $dataCobro = [
            'tipoPago'=>$tipo,
            'monto'=>$monto,
            'descuento'=>$descuento,
            'fecha'=>$fecha,
            'descripcion'=>$descripcion,
            'mes'=>$mes,
            'year'=>$year,
            'estado'=>'activo',
            'idUsuarioPago'=>$socio
        ];

        $this->cobroModel->insert($dataCobro);
        //return redirect()->to(base_url().'cobros');

        $mensaje = [
            'tipo'=>'success',
            'mensaje'=>'El registro se realizo de forma existosa!'
        ];

        

        $this->userModel = new UsuarioModel();
        $usuarios['usuarios'] = $this->userModel->getUsuarios();
        $usuarios['mensaje'] = $mensaje;
      
                       
        return view('Estructura/registroPago',$usuarios);
       
    }
}

<?php

namespace App\Controllers;

use App\Models\AccionModel;
use App\Models\UsuarioModel;

class Principal extends BaseController
{
    protected $userModel;
    protected $accionModel;
    public function index()
    {
        return view('Estructura/body');
    }

    public function verSocios(){
        return view('Estructura/socios');
    }

    public function mostrarRegistros()
    {
        $this->userModel = new UsuarioModel();
        //$accionModel = new AccionModel();

        // Obtener registros de la tabla Usuario
        $usuarios = $this->userModel->findAll();

        // Obtener registros de la tabla Accion
        //$acciones = $accionModel->findAll();

        // Pasar los registros a la vista
        $data = [
            'registros' => $usuarios,
            
        ];

        return view('Estructura/socios', $data);
    }

    public function agregarSocio(){
        return view('Estructura/registroSocios');
    }

    public function insertSocio(){
        
        $this->userModel = new UsuarioModel();
        $this->accionModel = new AccionModel();
        /**campos usuario*** */

        $nombre = $this->request->getPost("nombre");
        $apellidoPat = $this->request->getPost("apePat");
        $apellidoMat = $this->request->getPost("apeMat");
        $usuario = $this->request->getPost("usuario");
        $password = $this->request->getPost("passw");
        $rol = $this->request->getPost("rol");
        $celular = $this->request->getPost("celular");
        $direccion = $this->request->getPost("direccion");

        $dataUsuario = [
            'nombre'=>$nombre,
            'apellidoPat'=>$apellidoPat,
            'apellidoMat'=>$apellidoMat,
            'usuario'=>$usuario,
            'password'=>$password,
            'rol'=>$rol,
            'celular'=>$celular,
            'direccion'=>$direccion,
            'estado'=>'activo'
        ];

        $this->userModel->insert($dataUsuario);

        /*obtenicion de valores de campos accion y despues realizamos el insert*/
        $tipoAccion = $this->request->getPost("tipoAccion");
        $costo = $this->request->getPost("costo");
        echo $nroMedidor = $this->request->getPost("nroMedidor");
        $idUsuarioUlt=$this->userModel->getIdUsuarioUltimo();
        $idUsuarioUlt=$idUsuarioUlt[0]['idUsuario'];  //para obtener el ultimo id de Usuario registrado

        echo $idUsuarioUlt;
       $dataAccion = [
            'tipoAccion'=>$tipoAccion,
            'costo'=>$costo,
            'nroMedidor'=>$nroMedidor,
            'estado'=>'activo',
            'Usuario_idUsuario'=>$idUsuarioUlt
            
        ];

        $this->accionModel->insert($dataAccion);
        
        $mensaje = [
            'tipo'=>'success',
            'mensaje'=>'El registro se realizo de forma existosa!'
        ];

        return view('Estructura/registroSocios',$mensaje);

        /**campos accion */

        //$direccion = $this->request->getPost("direccion");
    }

}

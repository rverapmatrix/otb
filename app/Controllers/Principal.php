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
        $registros = $this->userModel->where('estado', 'activo')->findAll();

        $data['registros'] = $registros;
    // Resto del código para cargar la vista con los datos

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
        $nroMedidor = $this->request->getPost("nroMedidor");
        $idUsuarioUlt=$this->userModel->getIdUsuarioUltimo();
        $idUsuarioUlt=$idUsuarioUlt[0]['idUsuario'];  //para obtener el ultimo id de Usuario registrado

        //echo $idUsuarioUlt;
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

    }

    public function updateFormSocio($id){

        $this->userModel = new UsuarioModel();
        $this->accionModel = new AccionModel();

        $datosUsuario = $this->userModel->getDatosUsuarioUpdate($id);
        $datosAccion = $this->accionModel->getDatosAccionUpdate($id);

        $data = [
            'datos'=>$datosUsuario,
            'datosAccion'=>$datosAccion
        ];
        return view('Estructura/formUpdateSocios',$data);
    }

    public function updateRegistro($idUsu){

     
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

        $dataUsuario1 = [
            'nombre'=>$nombre,
            'apellidoPat'=>$apellidoPat,
            'apellidoMat'=>$apellidoMat,
            'usuario'=>$usuario,
            'password'=>$password,
            'rol'=>$rol,
            'celular'=>$celular,
            'direccion'=>$direccion,
            
        ];

        $this->userModel->update($idUsu,$dataUsuario1);

        //echo 'paso update usuario';

        /*obtenicion de valores de campos accion y despues realizamos el insert*/
        $tipoAccion = $this->request->getPost("tipoAccion");
        $costo = $this->request->getPost("costo");
        $nroMedidor = $this->request->getPost("nroMedidor");
        
        $idAccion = $this->accionModel->getDatosAccionUpdate($idUsu);  //se debe actualizar el registro en accion que coincida con el campo Usuario_idUsuario
        
        $dataAccion = [
            'tipoAccion'=>$tipoAccion,
            'costo'=>$costo,
            'nroMedidor'=>$nroMedidor,            
        ];

        $this->accionModel->update($idAccion[0]['idAccion'],$dataAccion);
        

        return redirect()->to(base_url().'socios');
       

    }

    public function deleteRegistroSocio($id){
        $this->userModel = new UsuarioModel();
        $this->accionModel = new AccionModel();
        /**campos usuario*** */

        $dataUsuario = [
            'estado'=>'inactivo'
        ];

        $this->userModel->update($id,$dataUsuario);
        return redirect()->to(base_url().'socios');
    }

}

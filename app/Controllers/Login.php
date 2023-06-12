<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Login extends BaseController
{
    protected $userModel;
    public function index()
    {
       
       return view('view_login.php');
    }

    public function validarIngreso(){

        $usuarioEnviado = $this->request->getPost("usuario");

        $this->userModel = new UsuarioModel();

        $usuarioBD = $this->userModel->getUsuario($usuarioEnviado); //recibiendo los datos obtenidos del registro

        if(!empty($usuarioBD) && isset($usuarioBD[0]['usuario'])){
            //$decrypter = \Config\Services::encrypter();
            //$passwDB = $decrypter->decrypt(hex2bin($usuarioBD[0]['password']));
            $passwDB = $usuarioBD[0]['password'];
            $passwIngresado = $this->request->getPost("password");

            if($passwDB == $passwIngresado){
                $data = [
                    'nombre'=> $usuarioBD[0]['nombre'],
                    'apellidoP'=> $usuarioBD[0]['apellidoPat'],
                    'id'=> $usuarioBD[0]['idUsuario']
                ];

                session()->set($data); //las variables de session
                return redirect()->to(base_url().'principal');
                
            }else{
                $respuesta = [
                    'tipo'=>'danger',
                    'mensaje'=>'Password no existe o es incorrecto'
                ];
                return view('view_login',$respuesta);
            }
        }else{
            $respuesta = [
                'tipo'=>'danger',
                'mensaje'=>'Usuario no existe o es incorrecto'
            ];
            return view('view_login',$respuesta);
        }

        

    }
}

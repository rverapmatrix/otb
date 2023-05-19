<?php

namespace App\Controllers;
use App\Models\EstudianteModel;

class Estudiante extends BaseController
{
    public function index()
    {
        $estudianteModel = new EstudianteModel();  //instancia de objeto, tipo EstudianteModel

        //CRUD

        //insert

        $data = [
            
            "semestre"=>5,
            "correoUni"=>"mmoreno@univalle.edu",
            "estado"=>"Activo"
        ];

        //insert

        //$estudianteModel->insert($data);

        //update
        //$estudianteModel->update(19,$data);


        //delete
        //$estudianteModel->delete(15);
        $estudianteModel->where('id',11)->delete();

        //mostrar registros

        $estudiante = $estudianteModel->findAll(); //Carga toda la data de tabla estudiante
        $arrayEstudiantes = array("llave"=>$estudiante); 
        return view('view_estudiante',$arrayEstudiantes);
    }
}
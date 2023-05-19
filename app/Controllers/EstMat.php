<?php

namespace App\Controllers;
use App\Models\EstudianteModel;
use App\Models\MateriaModel;

class EstMat extends BaseController
{

    private $estudianteModel;
    private $materiaModel;
    public function __construct(){
        $this->estudianteModel = new EstudianteModel();
        $this->materiaModel = new MateriaModel();
    }

    public function index()
    {
        $datos['datos'] = $this->materiaModel->getEstudianteMaterias();
        return view('view_est_mat',$datos);
    }
}
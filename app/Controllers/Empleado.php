<?php

namespace App\Controllers;
use App\Models\EmpleadoModel;

class Empleado extends BaseController
{

    private $empleadoModel;


    public function __construct(){
        $this->empleadoModel = new EmpleadoModel();

    }
    public function index()
    {

        return view('view_empleado');
    }

    public function incrementarSueldo(){
        $tabla = $this->empleadoModel->findAll();

        foreach($tabla as $empleado){
            $id = $empleado['id'];
            $salario = $empleado['salario'];
            $fechaContratacion = $empleado['fecha_contratacion'];

            $antiguedad = calcularAntiguedad($fechaContratacion);
            $incremento = calcularIncremento($antiguedad);

            $incTotal = $salario + $incremento;


            $data = [
                "salario"=>$incTotal
            ];

            $this->empleadoModel->update($id,$data);
        }

        $tablaEmpleado['datos'] = $this->empleadoModel->findAll();

        return view('view_empleado',$tablaEmpleado);
    }


    public function mostrarInfoDepto(){
        $datos['datos'] = $this->empleadoModel->getSueldoDepartamento();

        return view('view_empleado_dpto',$datos);

    }
}

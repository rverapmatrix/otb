<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpleadoModel extends Model
{
    protected $table      = 'empleados';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'apellido','fecha_contratacion','salario'];


    public function getSueldoDepartamento(){

        $builder = $this->db->table('empleados');
        $builder->select('departamentos.nombre AS departamento, SUM(empleados.salario) AS gastoTotal');
        $builder->join('departamentos','empleados.departamento_id=departamentos.id','inner');
        $builder->groupBy('departamentos.id, departamentos.nombre');

        return $builder->get()->getResultArray();
    }

    
}
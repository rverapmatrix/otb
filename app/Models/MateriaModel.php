<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriaModel extends Model
{
    protected $table      = 'materia';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;



    public function getEstudianteMaterias(){

        $builder = $this->db->table('materia');
        $builder->select('estudiante.id, estudiante.nombre, estudiante.apellidoPat, estudiante.apellidoMat,materia.nombre AS materia , materia.docente As docente');
        $builder->join('estudiante','estudiante.id = materia.idEst','inner');

        return $builder->get()->getResultArray();

    }

}

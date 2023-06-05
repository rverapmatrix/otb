<?php

namespace App\Models;

use CodeIgniter\Model;

class AccionModel extends Model
{
    protected $table      = 'accion';
    protected $primaryKey = 'idAccion';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['tipoAccion','costo','titular', 'estado'];


    public function getIdUsuarioUltimo(){
        $this->db->connect();
        $builder = $this->findAll();
        $builder->where();
    }


}
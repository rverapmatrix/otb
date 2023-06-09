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

    protected $allowedFields = ['tipoAccion','costo','titular','nroMedidor', 'estado', 'Usuario_idUsuario'];


    public function getDatosAccionUpdate($idUsuario){
        $builder = $this->db->table("accion");
        $builder->where('Usuario_idUsuario', $idUsuario);
        $builder->limit(1);
    
        return $builder->get()->getResultArray();
    }
  


}
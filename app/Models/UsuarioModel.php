<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'apellidos','usuario','password','tipo','estado'];

    public function getUsuario($valor){
        $this->db->connect();
        $builder = $this->db->table("usuario");
        $builder->where('usuario',$valor);
        $resultado = $builder->get()->getResultArray();

        return $resultado;
    }

}
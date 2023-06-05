<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'idUsuario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['usuario','password','nombre', 'apellidoPat','apellidoMat','rol','celular','direccion','estado'];

    public function getUsuario($valor){
        $this->db->connect();
        $builder = $this->db->table("usuario");
        $builder->where('usuario',$valor);
        $resultado = $builder->get()->getResultArray();

        return $resultado;
    }

}
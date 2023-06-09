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

    protected $allowedFields = ['idUsuario','usuario','password','nombre', 'apellidoPat','apellidoMat','rol','celular','direccion','estado'];

    public function getUsuario($valor){
        $this->db->connect();
        $builder = $this->db->table("usuario");
        $builder->where('usuario',$valor);
        $resultado = $builder->get()->getResultArray();

        return $resultado;
    }

    public function getIdUsuarioUltimo()
    {
        $builder = $this->db->table("usuario");
        $builder->orderBy('idUsuario', 'DESC');
        $builder->limit(1);
    
        return $builder->get()->getResultArray();
    }

    public function getDatosUsuarioUpdate($idUsuario){
        $builder = $this->db->table("usuario");
        $builder->where('idUsuario', $idUsuario);
        $builder->limit(1);
    
        return $builder->get()->getResultArray();
    }

    public function getUsuarios(){
        $builder = $this->db->table("usuario");
        $builder->where('estado', 'activo');
        return $builder->get()->getResultArray();
    }
    

    

}
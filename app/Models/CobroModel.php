<?php
namespace App\Models;

use CodeIgniter\Model;

class CobroModel extends Model
{
    protected $table      = 'pago';
    protected $primaryKey = 'idPago';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['idPago', 'tipoPago', 'monto', 'descuento', 'fecha', 'descripcion', 'mes', 'year', 'estado', 'idUsuarioPago'];

    public function getPagosSocios()
    {
        $builder = $this->db->table('pago');
        $builder->select('usuario.idUsuario, usuario.nombre, usuario.apellidoPat, usuario.apellidoMat, pago.monto, pago.fecha, pago.mes, pago.year, pago.tipoPago');
        $builder->join('usuario', 'usuario.idUsuario = pago.idUsuarioPago', 'inner');

        return $builder->get()->getResultArray();
    }

    public function getPagosFiltrados($fechaIni, $fechaFin, $socio)
    {
        $builder = $this->db->table('pago');
        $builder->select('usuario.nombre, usuario.apellidoPat, usuario.apellidoMat, pago.tipoPago, pago.monto, pago.mes, pago.year');
        $builder->join('usuario', 'usuario.idUsuario = pago.idUsuarioPago');
        $builder->where('pago.fecha >=', $fechaIni);
        $builder->where('pago.fecha <=', $fechaFin);
        $builder->where('usuario.idUsuario', $socio);
        $query = $builder->get();

        return $query->getResultArray();
    }
}
?>

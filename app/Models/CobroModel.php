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

    protected $allowedFields = ['idPago','tipoPago','monto','descuento', 'fecha','descripcion','mes','year','estado','idUsuarioPago'];



    

}
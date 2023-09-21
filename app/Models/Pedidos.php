<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'pedidos';
    public $timestamps = false;

    protected $fillable =
        array(
            "imagem",
            "id",
            "codigo",
            "codigoUser",
            "link",
            "status",
            "valor",
            "quantity",
            "nome",
            "total",
            "data"
        );

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miniaturas extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'miniaturas';
    public $timestamps = false;

    protected $fillable =
        array(
            "id",
            "nome",
            "link",
            "imagem",
            "status",
            "valor",
            "subcategoria_id"
        );

    use HasFactory;
}

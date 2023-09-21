<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategorias extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'subcategoria';
    public $timestamps = false;

    protected $fillable =
        array(
            "id",
            "nome",
            "slug",
            "imagem",
            "categoria_id"
        );

    use HasFactory;
}

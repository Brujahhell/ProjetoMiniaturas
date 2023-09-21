<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'categoria';
    public $timestamps = false;

    protected $fillable =
        array(
            "id",
            "nome",
            "slug",
            "imagem"
        );

    use HasFactory;
}

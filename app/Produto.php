<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = ['nome', 'categoria_id', 'quantidade', 'id_produto_user'];

    public function categoria(){
        return $this->hasOne('App\Categoria', 'id', 'categoria_id');
    }
}

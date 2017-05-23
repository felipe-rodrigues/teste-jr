<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{


    protected $table = "vendedores";

    protected $fillable = [
        'nome','email'

    ];


    public function vendas()
    {
        return $this->HasMany('App\Venda');
    }
}

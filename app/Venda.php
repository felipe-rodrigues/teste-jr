<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{


    protected $table = "vendas";

    protected $fillable = [
        'valor_venda'

    ];

    public function vendedor()
    {
        return $this->belongsTo('App\Vendedor');
    }


}

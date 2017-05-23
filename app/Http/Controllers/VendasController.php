<?php

namespace App\Http\Controllers;

use App\Vendedor;
use App\Venda;
use Illuminate\Http\Request;


class VendasController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendedores = Vendedor::all();
        return view('vendas.create')->with('vendedores',$vendedores);
    }

    /**
     * Salva venda no banco de dados
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'vendedor_id' => 'required',
            'valor_venda' => 'required'
        ]);

        $venda = new Venda();
        $data = $request->all();

        $vendedor_id = $data['vendedor_id'];
        $valor_venda = $data['valor_venda'];

        $vendedor = Vendedor::findOrFail($vendedor_id);
        $vendedor->vendas()->create($data);


        $valor_comissao = $valor_venda * 8.5/100;

        \Session::flash('flash_message',"Nome do Vendedor: $vendedor->nome | Email do Vendedor: $vendedor->email | Valor da Comissão sobre a venda: R$$valor_comissao");



        return back();



    }

}

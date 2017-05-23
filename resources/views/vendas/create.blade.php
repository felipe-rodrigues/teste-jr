@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif
            <hr>
                <form class="form-horizontal" method="post" action="/Vendas/store">
                    {{ csrf_field() }}
                <fieldset>

                <!-- Form Name -->
                <legend>Cadastrar Venda</legend>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="vendedor">Selecione o vendedor:</label>
                  <div class="col-md-4">
                      <select name="vendedor_id" id="vendedor">
                            @if($vendedores)
                                @foreach ($vendedores as $vendedor)
                                    <option value="{{ $vendedor->id }}">{{ $vendedor->nome }}</option>
                                @endforeach
                            @endif
                      </select>

                      <button type="button" onclick="window.location='{{ route('adicionar_vendedor') }}'"><span class="glyphicon glyphicon-plus"></span></button>

                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="valor_venda">Valor da venda</label>
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon">R$</span>
                      <input id="valor_venda" name="valor_venda" class="form-control" placeholder="Valor da venda" type="text">
                    </div>
                  </div>
                </div>

                <br>
                <div class="form-group">
                    <div class="col-md-4">
                         <button  name="singlebutton" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>

                </fieldset>
                </form>

        </div>
    </div>
</div>


@stop

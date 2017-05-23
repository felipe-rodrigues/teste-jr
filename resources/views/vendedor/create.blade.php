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
                <form class="form-horizontal" method="post" action="{{ route('salva_vendedor') }}">
                    {{ csrf_field() }}
                    <fieldset>
                        <legend>Cadastrar Vendedor</legend>


                        <div class="form-group">
                          <label class="col-md-4 control-label" for="nome">Digite o nome</label>
                          <div class="col-md-4">
                          <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md">
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="col-md-4 control-label" for="email">Email</label>
                          <div class="col-md-4">
                          <input id="email" name="email" type="text" placeholder="email" class="form-control input-md">
                          </div>
                        </div>



                        <div class="form-group">
                          <label class="col-md-4 control-label" for="cadastrar">Single Button</label>
                          <div class="col-md-4">
                            <button id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
                          </div>
                        </div>

                    </fieldset>
                </form>
        </div>
    </div>
</div>

@stop

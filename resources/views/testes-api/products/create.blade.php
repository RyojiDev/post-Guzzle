@extends ('testes-api.layouts.template')

@section('content')

<h1>Cadastrar Novo produto:</h1>

<a href="{{('/products')}}">Voltar</a>
{!! Form::open(["route" => 'products.store','class' => 'form']) !!}
<div class="form-group">
    {!! Form::text('cnpj',null,['class' => 'form-control', 'placeholder'=> 'cnpj'])!!}
</div>
<div class="form-group">
    {!! Form::text('razao_social',null,['class' => 'form-control','placeholder'=> 'razão social']) !!}
</div>
<div class="form-group">
    {!! Form::text('nome_fantasia',null,['class' => 'form-control','placeholder'=> 'nome fantasia']) !!}
</div>
<div class="form-group">
    {!! Form::date('data_limite',null,['class' => 'form-control','placeholder'=> 'data limite']) !!}
</div>
<div class="form-group">
   <input type="submit" value="enviar">
</div>

{!! Form::close()!!}
@endsection
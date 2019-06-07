@extends('testes-api.layouts.template')
@section('content')


<a href="{{route('products.create')}}" class="btn btn-success">Cadastrar <span class="glyphicon-plus"></span></a>
<table class="table shadow table-striped table-bordered table-hover" id="tabelaClientes">
    <thead>
        <tr>
            <th scope="col1">ID</th>
            <th scope="col2">CNPJ</th>
            <th scope="col3">Razão Social</th>
            <th scope="col4">Nome Fantasia</th>
            <th scope="col5">Data limite</th>
    </tr>
    @forelse($clientes as $cliente)
    </thead>
    <tbody>
    
        <td>{{$cliente->id}}</td>
        <td>{{$cliente->cnpj}}</td>
        <td>{{$cliente->razao_social}}</td>
        <td>{{$cliente->nome_fantasia}}</td>
        <td>{{$cliente->data_limite}}</td>
        
        
    </tbody>
@empty
<p>Nenhum Produto a ser Listado</p>
@endforelse

@endsection

@section('javascript')

<script type="text/javascript">




</script>
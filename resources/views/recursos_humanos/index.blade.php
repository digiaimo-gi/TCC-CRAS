@extends('layout')
 
@section('title', 'Recursos Humanos - Início')
 
@section('content')
<div class="title">
    <h3>Funcionários</h3>
</div>

<div class="botaoAdd">
    <a href="{{url('/recursosHumanos/create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Novo</a>
</div>

<div class="subcontent">
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">Matrícula</th>
                <th scope="col">Nome</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Cargo</th>
                <th scope="col" colspan="2">Ações</th>
            </tr>
        </thead>
        
    </table>
</div>
@endsection
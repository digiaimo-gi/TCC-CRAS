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
        <tbody>
            @foreach($data['funcionarios'] as $f)
            <tr>
                
                <td>{{$f->matricula}}</td>
                <td>{{$f->nome}}</td>
                <td>{{$f->data_nascimento}}</td>
                <td>{{$f->cargo}}</td>
                <td><span style="font-size: 2em"><a href="{{url('/recursos_humanos/ficha/' . $f->id)}}"><i class="fas fa-address-card"></i></a></span></td>
                <td><span style="font-size: 2em"><a href="{{url('/recursos_humanos/' . $f->id)}}"><i class="fas fa-trash-alt"></i></a></span></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@extends('layout')
 
@section('title', 'Referenciados - Início')
 
@section('content')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="title">
    <h3>Referenciados</h3>
</div>

<div class="botaoAdd">
    <a href="{{url('/referenciados/create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Novo</a>
</div>

<div class="subcontent">
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">Pront.</th>
                <th scope="col">Nome</th>
                <th scope="col">Assistente Social</th>
                <th scope="col">CPF</th>
                <th scope="col" colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['referenciados'] as $r)
            <tr>
                
                <td>{{$r->prontuario}}</td>
                <td>{{$r->nome}}</td>
                <td>{{$r->assistente_social}}</td>
                <td>{{$r->cpf}}</td>
                <td><span style="font-size: 2em"><a href="{{url('/referenciados/ficha/' . $r->id)}}"><i class="fas fa-address-card"></i></a></span></td>
                <td><span style="font-size: 2em"><a href=""><i class="fas fa-box-open"></i></a></span></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
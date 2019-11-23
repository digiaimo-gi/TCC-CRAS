@extends('layout')
 
@section('title', 'Referenciados - Início')
 
@section('content')

<div class="title">
    <h3>Referenciados</h3>
</div>

<div class="botaoAdd">
    <a href="{{url('/referenciados/create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Novo</a>
</div>

<!-- provavelmente eu vou substituir essa tabela só com um ou dois campos,
    e um botão para abrir uma ficha com os dados detalhados sobre a pessoa
    pq essa tabela está mt grande pra uma página web. Nem toda planilha dá
    pra ser adaptada pra web -->
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
                <td><span style="font-size: 2em"><a href=""><i class="fas fa-address-card"></i></a></span></td>
                <td><span style="font-size: 2em"><a href=""><i class="fas fa-box-open"></i></a></span></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
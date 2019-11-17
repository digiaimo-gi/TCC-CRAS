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
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                
                <td><span style="font-size: 2em"><i class="fas fa-address-card"></i></span></td>
                <td><span style="font-size: 2em"><i class="fas fa-box-open"></i></span></td>
                
            </tr>
        </tbody>
    </table>
</div>

@endsection
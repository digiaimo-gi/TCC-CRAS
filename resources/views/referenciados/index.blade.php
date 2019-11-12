@extends('layout')
 
@section('title', 'Referenciados - Início')
 
@section('content')

<div class="title">
    <h3>Referenciados</h3>
</div>

<!-- provavelmente eu vou substituir essa tabela só com um ou dois campos,
    e um botão para abrir uma ficha com os dados detalhados sobre a pessoa
    pq essa tabela está mt grande pra uma página web. Nem toda planilha dá
    pra ser adaptada pra web -->

<table class="table table-sm">
    <thead>
        <tr>
            <th scope="col">Pront.</th>
            <th scope="col">Nome</th>
            <th scope="col">D.N.</th>
            <th scope="col">Endereço</th>
            <th scope="col">Assistente Social</th>
            <th scope="col">RG</th>
            <th scope="col">CPF</th>
            <th scope="col">NIS</th>
            <th scope="col">Telefones</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

@endsection
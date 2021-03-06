@extends('layout')
 
@section('title', 'Ficha')
 
@section('content')

<div class="title">
    <h3>Ficha do Prontuário {{$data['referenciado']->id}}</h3>
</div>

<div class="subcontent">

    <div class="card">
        <div class="card-header">
            Dados Pessoais
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label for="nome"><b>Nome:</b></label> {{$data['referenciado']->nome}}
                </div>
                <div class="col-md-6">
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label> {{$data['referenciado']->data_nascimento}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="rg"><b>RG:</b></label> {{$data['referenciado']->rg}}
                </div>
                <div class="col-md-4">
                    <label for="cpf"><b>CPF:</b></label> {{$data['referenciado']->cpf}}
                </div>
                <div class="col-md-4">
                    <label for="nis"><b>NIS:</b></label> {{$data['referenciado']->nis === null ? "N/A" : $data['referenciado']->nis}}
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Telefones
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <label for="telefone"><b>Telefone:</b></label>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Logradouro
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label for="endereco"><b>Endereço:</b></label> {{$data['endereco']->tipo_logradouro}} {{$data['endereco']->nome_logradouro}}, nº {{$data['endereco']->numero}}
                </div>
                
                <div class="col-md-6">
                    <label for="bairro"><b>Bairro:</b></label> {{$data['endereco']->bairro}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="complemento"><b>Complemento:</b></label> {{$data['endereco']->complemento === null ? "Sem Complemento" : $data['endereco']->complemento}}
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Dados do Prontuário
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <label for="assistente_social"><b>Assistente Social:</b></label> {{$data['referenciado']->assistente_social}}
                </div>
                <div class="col-md-4">
                    <label for="status"><b>Status:</b></label> {{$data['referenciado']->status}}
                </div>
                <div class="col-md-4">
                    <label for="frequencia_cb"><b>Frequência CB:</b></label> {{$data['referenciado']->frequencia_cb}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="data_inclusao"><b>Data de Inclusão:</b></label> {{$data['referenciado']->data_inclusao}}
                </div>
                <div class="col-md-4">
                    <label for="data_inclusao_paif"><b>Data de Inclusão PAIF:</b></label> {{$data['referenciado']->data_inclusao_paif === null ? "N/A" : $data['referenciado']->data_inclusao_paif}}
                </div>
                <div class="col-md-4">
                    <label for="data_exclusao_paif"><b>Data de Exclusão PAIF:</b></label> {{$data['referenciado']->data_exclusao_paif === null ? "N/A" : $data['referenciado']->data_exclusao_paif}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="observacoes"><b>Observações:</b></label> {{$data['referenciado']->observacoes === null ? "N/A" : $data['referenciado']->observacoes}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="data_modificacao"><b>Data de Modificação:</b></label> {{$data['referenciado']->data_modificacao === null ? "N/A" : $data['referenciado']->data_modificacao}}
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <p style="color: red">*N/A: Sem informação cadastrada.</p>
        </div>
    </div>

    <div class="botaoAdd">
        <a href="{{url('/referenciados/'.$data['referenciado']->id.'/edit')}}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
    </div>
</div>

@endsection

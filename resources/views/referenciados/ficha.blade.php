@extends('layout')
 
@section('title', 'Ficha')
 
@section('content')

<div class="title">
    <h3>Ficha do Prontuário</h3>
</div>

<div class="subcontent">

    <div class="card">
        <div class="card-header">
            Dados Pessoais
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label for="nome"><b>Nome</b></label>
                </div>
                <div class="col-md-6">
                    <label for="data_nascimento"><b>Data de Nascimento</b></label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="rg"><b>RG</b></label>
                </div>
                <div class="col-md-4">
                    <label for="cpf"><b>CPF</b></label>
                </div>
                <div class="col-md-4">
                    <label for="nis"><b>NIS</b></label>
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
                    <label for="telefone"><b>Telefone</b></label>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Endereço
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label for="tipo_logradouro"><b>Logradouro</b></label>
                </div>
                <div class="col-md-6">
                    <label for="nnome_logradouro"><b>Nome Logradouro</b></label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="numero"><b>Número</b></label>
                </div>
                <div class="col-md-4">
                    <label for="complemento"><b>Complemento</b></label>
                </div>
                <div class="col-md-4">
                    <label for="bairro"><b>Bairro</b></label>
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
                    <label for="assistente_social"><b>Assistente Social</b></label>
                </div>
                <div class="col-md-4">
                    <label for="status"><b>Status</b></label>
                </div>
                <div class="col-md-4">
                    <label for="frequencia_cb"><b>Frequência CB</b></label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="data_inclusao"><b>Data de Inclusão</b></label>
                </div>
                <div class="col-md-4">
                    <label for="data_inclusao_paif"><b>Data de Inclusão PAIF</b></label>
                </div>
                <div class="col-md-4">
                    <label for="data_exclusao_paif"><b>Data de Exclusão PAIF</b></label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="observacoes"><b>Observações</b></label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="data_modificacao"><b>Data de Modificação</b></label>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

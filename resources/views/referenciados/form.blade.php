@extends('layout')
 
@section('title', 'Novo Referenciado')
 
@section('content')

<div class="title">
    <h3>Adicionar Referenciado</h3>
</div>

<div class="botaoAdd">
    <a href="{{url('/referenciados')}}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Voltar</a>
</div>

<div class="subcontent">
    <form>
        <div class="form-group row">
            <label for="inputProntuario" class="col-sm-2 col-form-label">Prontuário</label>
            <div class="col-sm-10">
                <input type="prontuario" class="form-control" id="inputProntuario" placeholder="Número do Prontuário">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNome" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input type="nome" class="form-control" id="inputNome" placeholder="Nome Completo">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDataNascimento" class="col-sm-2 col-form-label">Data de Nasc.</label>
            <div class="col-sm-10">
                <input type="dataNasc" class="form-control" id="inputDataNasc">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputAssistenteSocial" class="col-sm-2 col-form-label">Assistente Social</label>
            <div class="col-sm-10">
                <select class="custom-select mr-sm-2" id="inputAssistenteSocial">
                    <option selected>Escolher Assistente...</option>
                    <option value="1">Um</option>
                    <option value="2">Dois</option>
                    <option value="3">Três</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <select class="custom-select mr-sm-2" id="inputStatus">
                    <option selected>Escolher Status...</option>
                    <option value="1">Ativo</option>
                    <option value="2">PAIF</option>
                    <option value="3">Inativo</option>
                    <option value="4">Transferido</option>
                    <option value="5">Extinto</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputFrequencia" class="col-sm-2 col-form-label">Frequência</label>
            <div class="col-sm-10">
                <select class="custom-select mr-sm-2" id="inputFrequencia">
                    <option selected>Escolher Frequência...</option>
                    <option value="1">Mensal</option>
                    <option value="2">Bimestral</option>
                    <option value="3">Trimestral</option>
                    <option value="4">Eventual</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputRG" class="col-sm-2 col-form-label">RG</label>
            <div class="col-sm-10">
                <input type="RG" class="form-control" id="inputRG">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputCPF" class="col-sm-2 col-form-label">CPF</label>
            <div class="col-sm-10">
                <input type="CPF" class="form-control" id="inputCPF">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNIS" class="col-sm-2 col-form-label">NIS</label>
            <div class="col-sm-10">
                <input type="NIS" class="form-control" id="inputNIS">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </form>
</div>

@endsection
@extends('layout')
 
@section('title', 'Novo Funcionário')
 
@section('content')

<div class="title">
    <h3>Adicionar Funcionário</h3>
</div>

<div class="botaoAdd">
    <a href="{{url('/recursosHumanos')}}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Voltar</a>
</div>

<div class="subcontent">
    <form method="POST" action="{{url('recursosHumanos/store')}}">
        @csrf
        <div class="form-group row">
            <label for="inputMatricula" class="col-sm-2 col-form-label">Matrícula</label>
            <div class="col-sm-10">
                <input name="matricula" name="matricula" class="form-control" id="inputMatricula" placeholder="Número de Matrícula">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNome" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input name="nome" class="form-control" id="inputNome" placeholder="Nome Completo">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDataNascimento" class="col-sm-2 col-form-label">Data de Nasc.</label>
            <div class="col-sm-10">
                <input name="data_nascimento" class="form-control" id="inputDataNasc" placeholder="dd/mm/AAAA">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputRG" class="col-sm-2 col-form-label">RG</label>
            <div class="col-sm-10">
                <input name="rg" class="form-control" id="inputRG" placeholder="XX.XXX.XXX-XX">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputCPF" class="col-sm-2 col-form-label">CPF</label>
            <div class="col-sm-10">
                <input name="cpf" class="form-control" id="inputCPF" placeholder="XXX.XXX.XXX/XX">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputCargo" class="col-sm-2 col-form-label">Cargo</label>
            <div class="col-sm-10">
                <input name="cargo" class="form-control" id="inputCargo" placeholder="Cargo do Funcionário">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputFuncao" class="col-sm-2 col-form-label">Função</label>
            <div class="col-sm-10">
                <input name="funcao" class="form-control" id="inputFuncao" placeholder="Função do Funcionário">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDataInicio" class="col-sm-2 col-form-label">Início na Prefeitura</label>
            <div class="col-sm-10">
                <input name="data_inclusao" class="form-control" id="inputDataInclusao" placeholder="dd/mm/AAAA">
            </div>
        </div>
        <hr/>
        <div class="form-group row">
            <label for="inputTelefone1" class="col-sm-2 col-form-label">Telefone 1</label>
            <div class="col-sm-7">
                <input name="telefone1" class="form-control" id="inputTelefone1" placeholder="(XX) ?XXXX-XXXX">
            </div>
            <a href="" class="btn btn-success"><i class="fas fa-plus"></i> Adicionar Telefone</a>
        </div>
        <hr/>
        <div class="form-group row">
            <label for="selectLogradouro" class="col-sm-2 col-form-label">Logradouro</label>
            <div class="col-sm-10">
                <select name="tipo_logradouro" class="custom-select mr-sm-2" id="selectogradouro">
                    <option selected>Escolher Logradouro...</option>
                    <option value="Alameda">Alameda</option>
                    <option value="Avenida">Avenida</option>
                    <option value="Rodovia">Rodovia</option>
                    <option value="Rua">Rua</option>
                    <option value="Travessa">Travessa</option>
                    <option value="Viela">Viela</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNomeLogradouro" class="col-sm-2 col-form-label">Nome Logradouro</label>
            <div class="col-sm-10">
                <input name="nome_logradouro" class="form-control" id="inputNomeLogradouro" placeholder="Nome do Logradouro">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNumeroEndereco" class="col-sm-2 col-form-label">Número</label>
            <div class="col-sm-10">
                <input name="numero" class="form-control" id="inputNumeroEndereco" placeholder="Número do Logradouro">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputComplemento" class="col-sm-2 col-form-label">Complemento</label>
            <div class="col-sm-10">
                <input name="complemento" class="form-control" id="inputComplemento" placeholder="Número do Complemento">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputBairro" class="col-sm-2 col-form-label">Bairro</label>
            <div class="col-sm-10">
                <input name="bairro" class="form-control" id="inputBairro" placeholder="Nome do Bairro">
            </div>
        </div>
        <hr/>
        <div class="form-group row">
            <div class="col-sm-10">
                <button name="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </form>
</div>

@endsection
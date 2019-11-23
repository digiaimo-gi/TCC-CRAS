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
    <form method="POST" action="{{url('referenciados/store')}}">
        @csrf
        <div class="form-group row">
            <label for="inputProntuario" class="col-sm-2 col-form-label">Prontuário</label>
            <div class="col-sm-10">
                <input name="prontuario" name="prontuario" class="form-control" id="inputProntuario" placeholder="Número do Prontuário">
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
            <label for="inputNIS" class="col-sm-2 col-form-label">NIS</label>
            <div class="col-sm-10">
                <input name="nis" class="form-control" id="inputNIS" placeholder="XXX.XXXXX.XX-X">
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
            <label for="inputAssistenteSocial" class="col-sm-2 col-form-label">Assistente Social</label>
            <div class="col-sm-10">
                <select name="assistente_social" class="custom-select mr-sm-2" id="inputAssistenteSocial">
                    <option selected>Escolher Assistente Social de Referência...</option>
                    <option value="1">Um</option>
                    <option value="2">Dois</option>
                    <option value="3">Três</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <select name="status" class="custom-select mr-sm-2" id="inputStatus">
                    <option selected>Escolher Status...</option>
                    <option value="Ativo">Ativo</option>
                    <option value="PAIF">PAIF</option>
                    <option value="Inativo">Inativo</option>
                    <option value="Transferido">Transferido</option>
                    <option value="Extinto">Extinto</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputFrequencia" class="col-sm-2 col-form-label">Frequência CB</label>
            <div class="col-sm-10">
                <select name="frequencia_cb" class="custom-select mr-sm-2" id="inputFrequencia">
                    <option selected>Escolher Frequência da Cesta Básica...</option>
                    <option value="Mensal">Mensal</option>
                    <option value="Bimestral">Bimestral</option>
                    <option value="Trimestral">Trimestral</option>
                    <option value="Eventual">Eventual</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDataInclusao" class="col-sm-2 col-form-label">Data Inclusão</label>
            <div class="col-sm-10">
                <input name="data_inclusao" class="form-control" id="inputDataInclusao" placeholder="dd/mm/AAAA">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDataInclusaoPaif" class="col-sm-2 col-form-label">Data Inclusão PAIF</label>
            <div class="col-sm-10">
                <input name="data_inclusao_paif" class="form-control" id="inputDataInclusaoPaif" placeholder="dd/mm/AAAA">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDataExclusaoPaif" class="col-sm-2 col-form-label">Data Exclusão PAIF</label>
            <div class="col-sm-10">
                <input name="data_exclusao_paif" class="form-control" id="inputDataExclusaoPaif" placeholder="dd/mm/AAAA">
            </div>
        </div>
        <div class="form-group row">
            <label for="textareaObservacoes" class="col-sm-2 col-form-label">Observações</label>
            <div class="col-sm-10">
                <textarea name="observacoes" class="form-control" id="textareaObservacoes" rows="5" placeholder="Insira aqui observações sobre as modificações feitas no prontuário, como mudança de endereço, telefone ou status"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDataModificacao" class="col-sm-2 col-form-label">Data Modificação</label>
            <div class="col-sm-10">
                <input name="data_modificacao" class="form-control" id="inputDataModificacao" placeholder="dd/mm/AAAA">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button name="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </form>
</div>

@endsection
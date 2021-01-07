@extends('layout')
 
@section('title', 'Novo Referenciado')
 
@section('content')

<div class="title">
    <h3>{{$data['titulo']}} Referenciado</h3>
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
                <input name="prontuario" name="prontuario" class="form-control" id="inputProntuario" placeholder="Número do Prontuário" value="{{isset($data['referenciado']) ? $data['referenciado']->prontuario :''}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNome" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input name="nome" class="form-control" id="inputNome" placeholder="Nome Completo" value="{{isset($data['referenciado']) ? $data['referenciado']->Pessoa->nome :''}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDataNascimento" class="col-sm-2 col-form-label">Data de Nasc.</label>
            <div class="col-sm-10">
                <input name="data_nascimento" class="form-control" id="inputDataNasc" placeholder="dd/mm/AAAA" value="{{isset($data['referenciado']) ? $data['referenciado']->prontuario :''}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputRG" class="col-sm-2 col-form-label">RG</label>
            <div class="col-sm-10">
                <input name="rg" class="form-control" id="inputRG" placeholder="XX.XXX.XXX-XX" value="{{isset($data['referenciado']) ? $data['referenciado']->Pessoa->rg :''}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputCPF" class="col-sm-2 col-form-label">CPF</label>
            <div class="col-sm-10">
                <input name="cpf" class="form-control" id="inputCPF" placeholder="XXX.XXX.XXX/XX" value="{{isset($data['referenciado']) ? $data['referenciado']->Pessoa->cpf :''}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNIS" class="col-sm-2 col-form-label">NIS</label>
            <div class="col-sm-10">
                <input name="nis" class="form-control" id="inputNIS" placeholder="XXX.XXXXX.XX-X" value="{{isset($data['referenciado']) ? $data['referenciado']->nis :''}}">
            </div>
        </div>
        <hr/>
        <div class="form-group row">
            <label for="inputTelefone1" class="col-sm-2 col-form-label">Telefone 1</label>
            <div class="col-sm-7">
                <input name="telefone1" class="form-control" id="inputTelefone1" placeholder="(XX) ?XXXX-XXXX" value="">
            </div>
            <a href="" class="btn btn-success"><i class="fas fa-plus"></i> Adicionar Telefone</a>
        </div>
        <hr/>
        <div class="form-group row">
            <label for="selectLogradouro" class="col-sm-2 col-form-label">Logradouro</label>
            <div class="col-sm-10">
                <select name="tipo_logradouro" class="custom-select mr-sm-2" id="selectogradouro" >
                    <option selected>{{isset($data['referenciado']) ? $data['referenciado']->Pessoa->Endereco->tipo_logradouro : 'Escolher Logradouro...'}}</option>
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
                <input name="nome_logradouro" class="form-control" id="inputNomeLogradouro" placeholder="Nome do Logradouro" value="{{isset($data['referenciado']) ? $data['referenciado']->Pessoa->Endereco->nome_logradouro :''}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNumeroEndereco" class="col-sm-2 col-form-label">Número</label>
            <div class="col-sm-10">
                <input name="numero" class="form-control" id="inputNumeroEndereco" placeholder="Número do Logradouro" value="{{isset($data['referenciado']) ? $data['referenciado']->Pessoa->Endereco->numero :''}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputComplemento" class="col-sm-2 col-form-label">Complemento</label>
            <div class="col-sm-10">
                <input name="complemento" class="form-control" id="inputComplemento" placeholder="Número do Complemento" value="{{isset($data['referenciado']) ? $data['referenciado']->Pessoa->Endereco->complemento :''}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputBairro" class="col-sm-2 col-form-label">Bairro</label>
            <div class="col-sm-10">
                <input name="bairro" class="form-control" id="inputBairro" placeholder="Nome do Bairro" value="{{isset($data['referenciado']) ? $data['referenciado']->Pessoa->Endereco->bairro :''}}">
            </div>
        </div>
        <hr/>
        <div class="form-group row">
            <label for="inputAssistenteSocial" class="col-sm-2 col-form-label">Assistente Social</label>
            <div class="col-sm-10">
                <select name="assistente_social" class="custom-select mr-sm-2" id="inputAssistenteSocial">
                    <option selected>{{isset($data['referenciado']) ? $data['referenciado']->assistente_social : 'Escolher Assistente Social de Referência...'}}</option>
                        @foreach($data['assistentes'] as $a)
                            <option value="{{$a->nome}}">{{$a->nome}}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <select name="status" class="custom-select mr-sm-2" id="inputStatus">
                    <option selected>{{isset($data['referenciado']) ? $data['referenciado']->status : 'Escolher Status...'}}</option>
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
                    <option selected>{{isset($data['referenciado']) ? $data['referenciado']->frequencia_cb : 'Escolher Frequência da Cesta Básica...'}}</option>
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
                <input name="data_inclusao" class="form-control" id="inputDataInclusao" placeholder="dd/mm/AAAA" value="{{isset($data['referenciado']) ? $data['referenciado']->data_inclusao :''}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDataInclusaoPaif" class="col-sm-2 col-form-label">Data Inclusão PAIF</label>
            <div class="col-sm-10">
                <input name="data_inclusao_paif" class="form-control" id="inputDataInclusaoPaif" placeholder="dd/mm/AAAA" value="{{isset($data['referenciado']) ? $data['referenciado']->data_inclusao_paif :''}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDataExclusaoPaif" class="col-sm-2 col-form-label">Data Exclusão PAIF</label>
            <div class="col-sm-10">
                <input name="data_exclusao_paif" class="form-control" id="inputDataExclusaoPaif" placeholder="dd/mm/AAAA" value="{{isset($data['referenciado']) ? $data['referenciado']->data_exclusao_paif :''}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="textareaObservacoes" class="col-sm-2 col-form-label">Observações</label>
            <div class="col-sm-10">
                <textarea name="observacoes" class="form-control" id="textareaObservacoes" rows="5" placeholder="Insira aqui observações sobre as modificações feitas no prontuário, como mudança de endereço, telefone ou status" value="{{isset($data['referenciado']) ? $data['referenciado']->observacoes :''}}"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDataModificacao" class="col-sm-2 col-form-label">Data Modificação</label>
            <div class="col-sm-10">
                <input name="data_modificacao" class="form-control" id="inputDataModificacao" placeholder="dd/mm/AAAA" value="{{isset($data['referenciado']) ? $data['referenciado']->data_modificacao :''}}">
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
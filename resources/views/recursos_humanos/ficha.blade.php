@extends('layout')
 
@section('title', 'Ficha')
 
@section('content')

<div class="title">
    <h3>Ficha do Funcionário {{$data['funcionario']->nome}}</h3>
</div>

<div class="subcontent">

    <div class="card">
        <div class="card-header">
            Dados Pessoais
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label for="nome"><b>Nome:</b></label> {{$data['funcionario']->nome}}
                </div>
                <div class="col-md-6">
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label> {{$data['funcionario']->data_nascimento}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="rg"><b>RG:</b></label> {{$data['funcionario']->rg}}
                </div>
                <div class="col-md-6">
                    <label for="cpf"><b>CPF:</b></label> {{$data['funcionario']->cpf}}
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
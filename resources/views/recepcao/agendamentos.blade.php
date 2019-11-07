@extends('layout')
 
@section('title', 'Agendamentos')
 
@section('content')

<div class="title">
    <h3>Agendamentos</h3>
</div>

<div class="subcontent">
    <a href="{{url('/')}}" type="button" class="btn btn-primary btn-lg">Cadastro Único</a>
    <a href="{{url('/')}}" type="button" class="btn btn-primary btn-lg">Assistente Social Patrícia Silva</a>
    <a href="{{url('/')}}" type="button" class="btn btn-primary btn-lg">Assistente Social Patrícia Gouvea</a>
    <a href="{{url('/')}}" type="button" class="btn btn-primary btn-lg">Psicóloga</a>
</div>



@endsection
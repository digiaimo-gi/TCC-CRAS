<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferenciadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('referenciados.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('referenciados.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        DB::beginTransaction();
        try {
            $referenciado = Referenciado::create(
                [
                    'prontuario' => $request->prontuario,
                    'nome' => $request->nome,
                    'data_nascimento' => $request->data_nascimento,
                    'rg' => $request->rg,
                    'cpf' => $request->cpf,
                    'nis' => $request->nis,
                    'assistente_social' => $request->assistente_social,
                    'status' => $request->status,
                    'frequencia_cb' => $request->frequencia_cb,
                    'data_inclusao' => $request->data_inclusao,
                    'data_inclusao_paif' => $request->data_inclusao_paif,
                    'data_exclusao_paif' => $request->data_exclusao_paif,
                    'observacoes' => $request->observacoes,
                    'data_modificacao' => $request->data_modificacao,
                ]
            );
            /*$telefone = Telefone::create(
                [
                    
                ]    
            );*/
            /*$endereco = Endereco::create(
                [
                    'tipo_logradouro',
                    'nome_logradouro',
                    'numero',
                    'complemento',
                    'bairro'
                ]    
            );*/
            Endereco::create($request->all());
            Telefone::create($request->all());
            DB::commit();
            return redirect("/referenciados")->with('success', "Referenciado " . $request->nome . " cadastrado com sucesso!");
        } catch (Exception $e) {
            DB::rollback();
            return back()->with('danger', "Erro ao cadastrar referenciado!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

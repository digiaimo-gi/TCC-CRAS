<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Referenciado;
use App\Endereco;
use App\Telefone;
use DB;

class ReferenciadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'referenciados' => Referenciado::get(),
        ];
                
        return view('referenciados.index', compact('data'));
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
        //dd($request);
        DB::beginTransaction();
        try {
            $endereco = Endereco::create(
                [
                    'tipo_logradouro' => $request->tipo_logradouro,
                    'nome_logradouro' => $request->nome_logradouro,
                    'numero'          => $request->numero,
                    'complemento'     => $request->complemento,
                    'bairro'          => $request->bairro
                ]    
            );
            Referenciado::create(
                [
                    'prontuario'         => $request->prontuario,
                    'nome'               => $request->nome,
                    'data_nascimento'    => $request->data_nascimento,
                    'rg'                 => $request->rg,
                    'cpf'                => $request->cpf,
                    'nis'                => $request->nis,
                    'assistente_social'  => $request->assistente_social,
                    'status'             => $request->status,
                    'frequencia_cb'      => $request->frequencia_cb,
                    'data_inclusao'      => $request->data_inclusao,
                    'data_inclusao_paif' => $request->data_inclusao_paif,
                    'data_exclusao_paif' => $request->data_exclusao_paif,
                    'observacoes'        => $request->observacoes,
                    'data_modificacao'   => $request->data_modificacao,
                    'endereco_id'        => $endereco->id
                ]
            );
            /*$telefone = Telefone::create(
                [
                    
                ]    
            );*/
            
            DB::commit();
            return redirect("/referenciados")->with('success', "Referenciado " . $request->nome . " cadastrado com sucesso!");
        } catch (Exception $e) {
            DB::rollback();
            return back()->with('danger', "Erro ao cadastrar referenciado!");
        }
    }

    public function ficha($id) {

        $data = [
            'referenciado' => Referenciado::findOrFail($id),
        ];
                
        return view('referenciados.ficha', compact('data'));
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

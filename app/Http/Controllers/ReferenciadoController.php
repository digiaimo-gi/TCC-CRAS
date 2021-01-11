<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Referenciado;
use App\Endereco;
use App\Telefone;
use App\Pessoa;
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
            'referenciados' => DB::table('pessoa')
                           ->join('referenciados', 'pessoa.id', '=', 'referenciados.pessoa_id')
                           ->select('referenciados.prontuario', 'pessoa.nome', 
                           'referenciados.assistente_social', 'pessoa.cpf', 'referenciados.id')
                           ->get()
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
        $data = [
            'assistentes' => DB::table('pessoa')
                          ->join('funcionarios', 'pessoa.id', '=', 'funcionarios.pessoa_id')
                          ->where('cargo', '=', 'Assistente Social')
                          ->select('pessoa.nome')
                          ->get(),
            'titulo'      => "Adicionar",
        ];

        return view('referenciados.form', compact('data'));
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

            $pessoa = Pessoa::create(
                [
                    'nome'            => $request->nome,
                    'data_nascimento' => $request->data_nascimento,
                    'endereco_id'     => $endereco->id,
                    'rg'              => $request->rg,
                    'cpf'             => $request->cpf
                ]
            );

            $telefone = Telefone::create(
                [
                    'numero' => $request->numero,
                    'tipo'   => 'teste',
                    'pessoa_id' => $pessoa->id
                ]
                );

            Referenciado::create(
                [
                    'prontuario'         => $request->prontuario,
                    'nis'                => $request->nis,
                    'assistente_social'  => $request->assistente_social,
                    'status'             => $request->status,
                    'frequencia_cb'      => $request->frequencia_cb,
                    'data_inclusao'      => $request->data_inclusao,
                    'data_inclusao_paif' => $request->data_inclusao_paif,
                    'data_exclusao_paif' => $request->data_exclusao_paif,
                    'observacoes'        => $request->observacoes,
                    'data_modificacao'   => $request->data_modificacao,
                    'pessoa_id'          => $pessoa->id
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
            'referenciado' => DB::table('pessoa')
                           ->join('referenciados', 'pessoa.id', '=', 'referenciados.pessoa_id')
                           ->join('telefones', 'pessoa.id', '=', 'telefones.pessoa_id')
                           ->select('pessoa.*', 'referenciados.*')
                           ->where('referenciados.id', '=', $id)
                           ->first(),
            'endereco'     => DB::table('endereco')
                           ->join('pessoa', 'pessoa.endereco_id', '=', 'endereco.id')
                           ->join('referenciados', 'referenciados.pessoa_id', '=', 'pessoa.id')
                           ->select('endereco.*')
                           ->where('referenciados.id', '=', $id)
                           ->first()
        ];
        //dd($data);
                
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
        $data = [
            'assistentes'  => DB::table('pessoa')
                           ->join('funcionarios', 'pessoa.id', '=', 'funcionarios.pessoa_id')
                           ->where('cargo', '=', 'Assistente Social')
                           ->select('pessoa.nome')
                           ->get(),
            'referenciado' => Referenciado::findOrFail($id),
            'titulo'       => "Editar",
        ];
        //$referenciado = Referenciado::findOrFail($id);

        return view('referenciados.form', compact('data'));
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
        DB::beginTransaction();
        try {
            //update de referenciado está funcionando, de pessoa endereço e telefone ainda não
            $referenciado = Referenciado::findOrFail($id);
            //$pessoa = Pessoa::findOrFail($request->$referenciado->pessoa_id);
            //$endereco = Endereco::findOrFail($request->Endereco->id);
            //$telefone = Telefone::findOrFail($request->Telefone->id);

            $referenciado->update($request->all());
            //$pessoa->update($request->all());
            //$endereco->update($request->all());
            //$telefone->update($request->all());

            DB::commit();
            return redirect('/referenciados')->with('success', 'Dados do referenciado alterado com sucesso!');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Erro! As alterações não foram salvas.');
        }
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

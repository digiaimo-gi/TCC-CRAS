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
     * Mostra uma lista de referenciados, retornando para a view index
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
     * Redireciona para o formulário para adicionar um novo referenciado
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
     * Guarda os dados do formulário no banco de dados
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
     * Redireciona para o formulário de edição com os dados já preenchidos do referenciado para editar os dados
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

        return view('referenciados.form', compact('data'));
    }

    /**
     * Edita no banco de dados as informações enviadas pelo formulário de um referenciado já existente
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            //update de referenciado, pessoa e endereço está funcionando
            //falta achar um jeito de fazer todos os telefones serem salvos no BD
            $referenciado = Referenciado::findOrFail($id);
            $referenciado->update([
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
            ]);
            
            $pessoa = Pessoa::findOrFail($referenciado->pessoa_id);
            $pessoa->update([
                'nome'            => $request->nome,
                'data_nascimento' => $request->data_nascimento,
                'rg'              => $request->rg,
                'cpf'             => $request->cpf,
            ]);
            
            $endereco = Endereco::findOrFail($pessoa->endereco_id);
            $endereco->update([
                'tipo_logradouro' => $request->tipo_logradouro,
                'nome_logradouro' => $request->nome_logradouro,
                'numero'          => $request->numero,
                'complemento'     => $request->complemento,
                'bairro'          => $request->bairro,
            ]);

            //$telefone = Telefone::findOrFail($pessoa->Telefone->id);
            //$telefone->numero = $request->numero;
            //$telefone->tipo   = 'teste';

            DB::commit();
            return redirect('/referenciados')->with('success', 'Dados do referenciado alterado com sucesso!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Erro! As alterações não foram salvas.');
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

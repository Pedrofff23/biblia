<?php

namespace App\Http\Controllers;

use App\Models\Versao;
use Illuminate\Http\Request;

class VersaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Versao::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Versao::create($request->all())){
            return response()->json([
                'message' => 'Versao cadastrada com sucesso'
            ],201);

            return response()->json([
                'message' => 'Erro ao cadastrar o Versao'
            ],400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($versao)
    {
        $versao = Versao::find($versao);
        if($versao){
            $versao->idioma;
            $versao->livros;
            return $versao;
        }

        return response()->json([
            'message' => 'Erro ao pesquisar o versao'
        ],400);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $versao)
    {
        $versao = Versao::find($versao);
        if ($versao) {
            $versao->update($request->all());

            return $versao;
        }

        return response()->json([
            'message' => 'Erro ao autualizar a versao'
        ],400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($versao)
    {
        if(Versao::destroy($versao)){
            return response()->json([
                'message' => ' versao deletada com sucesso.'
            ],201);
        }
        return response()->json([
            'message' => ' Erro ao deletar o versao.'
        ],404);
    }
}

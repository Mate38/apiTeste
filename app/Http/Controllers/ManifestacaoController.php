<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manifestacao;

class ManifestacaoController extends Controller
{
    private $manifestacao;

    public function __construct(Manifestacao $manifestacao)
    {
        $this->manifestacao = $manifestacao;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manifestacoes = $this->manifestacao->all();

        return response()->json(['data' => $manifestacoes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json([
            'result' => 
                $this->manifestacao->create($request->all())
            ]);
    }

}

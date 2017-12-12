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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$nr = DB::select('select MAX(nrmanifestacao) from tbmanifestacao', [1]);

        $this->manifestacao->dsbairro = $request->dsbairro;
        $this->manifestacao->dscomplemento = $request->dscomplemento;
        $this->manifestacao->dslocalidade = $request->dslocalidade;
        $this->manifestacao->dssenha = $request->dssenha;
        $this->manifestacao->dstextomanifestacao = $request->dstextomanifestacao;
        $this->manifestacao->eeemailusuario = $request->eeemailusuario;
        $this->manifestacao->enendereco = $request->enendereco;
        $this->manifestacao->nmpessoa = $request->nmpessoa;
        $this->manifestacao->nrcelular = $request->nrcelular;
        $this->manifestacao->nrcpfcnpj = $request->nrcpfcnpj;
        $this->manifestacao->nrendereco = $request->nrendereco;
        $this->manifestacao->nrmanifestacao = '123456789';
        $this->manifestacao->nrpronac = $request->nrpronac;
        $this->manifestacao->nrtelefone = $request->nrtelefone;
        $this->manifestacao->sisigilo = $request->sisigilo;
        $this->manifestacao->stresposta = $request->stresposta;
        $this->manifestacao->ststatusmanifestacao = $request->ststatusmanifestacao;
        $this->manifestacao->ststatusocultacao = $request->ststatusocultacao;
        $this->manifestacao->tipopessoa = $request->tipopessoa;
        $this->manifestacao->tpmanifestante = $request->tpmanifestante;
        $this->manifestacao->tpraca = $request->tpraca;
        $this->manifestacao->tpsexo = $request->tpsexo;
        $this->manifestacao->idareaentrada = $request->idareaentrada;
        $this->manifestacao->idmeioentrada = $request->idmeioentrada;
        $this->manifestacao->idmeioresposta = $request->idmeioresposta;
        $this->manifestacao->idpais = $request->idpais;
        $this->manifestacao->idprioridade = $request->idprioridade;
        $this->manifestacao->idtipomanifestacao = $request->idtipomanifestacao;
        

        return response()->json([
            'result' => 
                $this->manifestacao->save()
            ]);
    }

}

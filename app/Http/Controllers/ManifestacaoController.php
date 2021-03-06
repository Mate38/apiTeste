<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manifestacao;
//use Illuminate\Support\Facades\DB;
use App\Mail\DadosManifestacaoMail;
use Mail;

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
        //$nr = DB::table('tbmanifestacao')->max('nrmanifestacao');
        $nr = Manifestacao::max('nrmanifestacao');

        $this->manifestacao->nrmanifestacao = $nr + 1;

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
        $this->manifestacao->nrpronac = $request->nrpronac;
        $this->manifestacao->nrtelefone = $request->nrtelefone;
        $this->manifestacao->tipopessoa = $request->tipopessoa;
        $this->manifestacao->idtipomanifestacao = $request->idtipomanifestacao;

        $this->manifestacao->latitude = $request->latitude;
        $this->manifestacao->longitude = $request->longitude;

        $this->manifestacao->sisigilo = 1;
        $this->manifestacao->stresposta = 1;
        $this->manifestacao->ststatusmanifestacao = 1;
        $this->manifestacao->ststatusocultacao = 2;
        $this->manifestacao->tpmanifestante = 1;
        $this->manifestacao->tpraca = 6;
        $this->manifestacao->tpsexo = 3;
        $this->manifestacao->idareaentrada = 1;
        $this->manifestacao->idmeioentrada = 1;
        $this->manifestacao->idmeioresposta = 1;
        $this->manifestacao->idpais = 37;
        $this->manifestacao->idprioridade = 1;
        
        $this->manifestacao->save();

        /*$inputs = [
            'nrmanifestacao' => $this->manifestacao->nrmanifestacao,
            'dssenha' => $this->manifestacao->dssenha
        ];*/

        Mail::to($this->manifestacao->eeemailusuario)->send(new DadosManifestacaoMail([
            'nrmanifestacao' => $this->manifestacao['nrmanifestacao'],
            'dssenha' => $this->manifestacao['dssenha']
        ]));

        return response()->json([
            'result' => 
                $this->manifestacao->nrmanifestacao
            ]);
    }

}

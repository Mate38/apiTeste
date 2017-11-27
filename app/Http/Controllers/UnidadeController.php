<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use App\Unidade;

class UnidadeController extends Controller
{
    private $unidade;

    public function __construct(Unidade $unidade)
    {
        $this->unidade = $unidade;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades = $this->unidade->all();

        return response()->json(['data' => $unidades]);
    }
}

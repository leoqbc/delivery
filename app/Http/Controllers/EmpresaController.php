<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;
use App\Empresa;

class EmpresaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(Request $request)
    {
         // dd() = var_dump($var);exit;
        $filtros = $request->get('filtros'); // pegando o campo get filtros[tag]

        // só usar o ->get() quando vcs usarem filtros(where, order etc)
        $tags = Tag::all();

        // montamos os filtros
        $empresas = Empresa::filtros($filtros);

        return view('empresas.index', compact('tags', 'empresas')); // ['tags' => $tags, 'empresas' => $empresas]
    }
}

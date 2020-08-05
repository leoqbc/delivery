<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;

class EmpresaController extends Controller
{
    public function index(Request $request)
    {
         // dd() = var_dump($var);exit;
        $filtros = $request->get('filtros'); // pegando o campo get filtros[tag]

        // só usar o ->get() quando vcs usarem filtros(where, order etc)
        $tags = Tag::all(); 

        return view('empresas.index')
                ->with('tags', $tags); // compact('tags')
    }
}

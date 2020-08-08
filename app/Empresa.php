<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Tag;

class Empresa extends Model
{
    protected $fillable = [
        'nome', 
        'endereco', 
        'descricao', 
        'coordenadas'
    ];

    public function tags()
    {
        // relaciona N:N com Tags não esqueça do padrão empresa_tag
        return $this->belongsToMany('App\Tag'); // automatica ('App\Tag', 'campo', 'tabela')
    }

    public static function filtros($filtros)
    {
        if ($filtros === null) {
            return Empresa::all();
        }
        // fazer o filtro e devolver a collection
        // use ($filtros) é para ter acesso externo a variavel $filtros
        return Empresa::whereHas('tags', function ($query) use ($filtros) {
            $query->whereIn('id', $filtros);
        })->get(); // filtrar usando os campos

        // return Empresa::whereHas('tags', fn($query) => $query->whereIn('id', $filtros));
    }
}

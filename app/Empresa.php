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
}

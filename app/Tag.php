<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Empresa;

class Tag extends Model
{
    protected $fillable = ['nome'];

    // Tag para empresa
    public function empresas()
    {
        return $this->belongsToMany(Empresa::class); // App\Empresa
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Empresa;

class Tag extends Model
{
    protected $fillable = ['nome'];
    
    public function empresas()
    {
        return $this->belongsToMany('App\Empresa');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['pessoa_id', 'matricula', 'cargo', 'funcao'];

    protected $table = 'funcionarios';

    public $timestamps = false;
    
    public function pessoa()
    {
        return $this->belongsTo('App\Pessoa');
    }
}

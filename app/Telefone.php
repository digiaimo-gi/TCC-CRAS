<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $fillable = ['numero', 'tipo', 'pessoa_id'];

    protected $table = 'telefones';

    public $timestamps = false;

    public function pessoa()
    {
        return $this->belongsTo('App\Pessoa');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referenciado extends Model
{
    protected $fillable = ['pessoa_id', 'prontuario', 'assistente_social', 'status', 'frequencia_cb', 'nis', 
    'data_inclusao', 'data_inclusao_paif', 'data_exclusao_paif', 'observacoes', 'data_modificacao'];

    protected $table = 'referenciados';

    public $timestamps = false;
    
    public function pessoa()
    {
        return $this->belongsTo('App\Pessoa');
    }
}

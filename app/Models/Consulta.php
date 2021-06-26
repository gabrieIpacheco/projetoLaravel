<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Especializacao;

class Consulta extends Model
{
    use HasFactory;
    protected $table = 'consulta';
    public $timestamps = false;
    protected $dates = ['data', 'hora'];
    
    public function especializacao(){
        return $this->belongsTo(Especializacao::class);
    }
    // public function paciente(){
    //     return $this->belongsTo(Paciente::class);
    // }
}

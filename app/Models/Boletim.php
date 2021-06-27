<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boletim extends Model
{
    use HasFactory;
    protected $table = 'boletim';
    public $timestamps = false;

    protected $dates = ['data_publicacao'];
}

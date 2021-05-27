<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'titulo',
        'avaliacao',
        'nota',
        'nome',
        'produto_id'

    ];



    public function produto()
    {
        return $this->belongsTo('App\Models\Produtos');
    }
}

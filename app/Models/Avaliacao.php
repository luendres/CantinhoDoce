<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    public $table = "avaliacoes";
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

    public function storeReviewForProduct($id, $nome, $avaliacao, $nota)
    {
        $produto = Produtos::find($id);

        $this->nome = $nome;
        $this->avaliacao = $avaliacao;
        $this->nota = $nota;
        $produto->avaliacoes()->save($this);
    }
}

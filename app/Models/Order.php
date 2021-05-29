<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'localEntrega', 'dataEntrega', 'horaEntrega', 'moradaEntrega', 'metodoPagamento', 'subtotal', 'taxaEntrega', 'total'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function Products(){
        return $this->belongsToMany('App\Models\Produtos')->withPivot('quantity');
    }
}



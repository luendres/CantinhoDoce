<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'morada_entrega', 'dia_entrega', 'hora_entrega', 'metodo_entrega', 'metodo_pagamento', 'subtotal', 'taxa_entrega', 'total'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function products(){
        return $this->belongsToMany('App\Models\Produtos')->withPivot('quantity');
    }
}

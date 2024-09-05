<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function keranjang(){
        return $this->hasMany(Keranjang::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function produk()
    {
        return $this->belongsTo(Products::class, 'id_produk');
    }

}

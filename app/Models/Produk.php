<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class, 'id_produk', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category','id');
    }
}

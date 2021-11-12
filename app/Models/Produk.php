<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'id_category',
        'harga_produk',
        'stok_produk',
        'foto_produk',
        'deskripsi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category','id');
    }
}

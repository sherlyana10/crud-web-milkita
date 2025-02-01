<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    use HasFactory;
    protected $table = 'produk_models';
    protected $primarykey = 'id';
    protected $fillable = [
            'nama',
            'harga',
            'deskripsi',
            'gambar'
    ];
}

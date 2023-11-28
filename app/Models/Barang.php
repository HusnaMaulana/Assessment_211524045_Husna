<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['id',
                            'KodeBarang',
                            'NamaBarang',
                            'Satuan',
                            'HargaSatuan',
                            'Stok'
                            ];
    protected $table = 'Barang';

    public $timestamps = false;

}

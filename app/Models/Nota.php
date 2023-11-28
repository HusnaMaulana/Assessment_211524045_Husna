<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    protected $fillable = ['id',
                            'KodeNota',
                            'KodeKasir',
                            'TglNota',
                            'JamNota',
                            'JumlahBelanja',
                            'Diskon',
                            'Total'
                            ];

}

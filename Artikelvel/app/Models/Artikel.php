<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    /** @use HasFactory<\Database\Factories\ArtikelFactory> */
    use HasFactory;

    public $table = 'contoh_artikel';
    protected $guarded = [];

    public $timestamps = false;


    // cast attributes
    protected $casts = [
        'tanggal' => 'datetime',
    ];
}

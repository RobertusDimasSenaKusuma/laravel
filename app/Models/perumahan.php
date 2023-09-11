<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perumahan extends Model
{
    use HasFactory;



    protected $fillable = [
        'id_perumahan',
        'kode_perumahan',
        'harga_perumahan',
    ];
}
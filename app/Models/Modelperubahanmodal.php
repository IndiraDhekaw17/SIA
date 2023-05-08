<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelperubahanmodal extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'tanggal',
        'voucher',
        'keterangan',
        'debit',
        'kredit'
    ];

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelbukubesar extends Model
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
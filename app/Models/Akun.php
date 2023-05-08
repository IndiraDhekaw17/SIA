<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $table = 'akuns';
    protected $primarykey = 'id';
    
    protected $fillable = [
        'kode_akun',
        'nama_akun',
        'saldo_awal',
        'saldo_akhir',
        'kategori',
    ];
    

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memorial extends Model
{
    use HasFactory;
    protected $table = 'memorials';
    protected $primarykey = 'id';
    protected $fillable = [
        'id', 
        'kode_akun', 
        'keterangan', 
        'debit',
        'kredit', 
        'nama_akun'];

}
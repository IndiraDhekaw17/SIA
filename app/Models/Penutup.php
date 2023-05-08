<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penutup extends Model
{
    use HasFactory;
    protected $table = 'penutups';
    protected $primarykey = 'id';
    protected $fillable = [
        'id', 
        'kode_akun', 
        'keterangan', 
        'debit',
        'kredit', 
        'nama_akun'];

}
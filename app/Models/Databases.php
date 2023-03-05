<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Databases extends Model
{
    use HasFactory;

    protected $table = 'databases';

    protected $fillable = ['id', 'nama_usaha', 'nama_pemilik', 'telp', 'email', 'alamat', 'produk', 'omzet', 'ijin', 'jtk', 'pelpam', 'jumlah', 'des', 'masalah', 'ket'];

    protected $primaryKey = 'id';
}

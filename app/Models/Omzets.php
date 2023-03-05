<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Omzets extends Model
{
    use HasFactory;

    protected $table = 'omzets';

    protected $fillable = ['id','jenis'];

    protected $primaryKey = 'id';

}

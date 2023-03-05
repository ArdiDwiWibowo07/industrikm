<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kapanewons extends Model
{
    use HasFactory;
    protected $table = 'kapanewons';

    protected $fillable = ['id', 'kapanewon'];

    protected $primaryKey = 'id';
}

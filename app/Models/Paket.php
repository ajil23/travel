<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $table = "paket";
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'destinasi', 'harga', 'rating', 'image'];

}

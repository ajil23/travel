<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = "pemesanan";
    protected $primaryKey = 'id';
    protected $fillable = [ 'paket', 'nama', 'telepon', 'email', 'qty', 'harga', 'total'];

    public function paket(){
        return $this->belongsTo(Paket::class,'paket_id','id');
    }
}

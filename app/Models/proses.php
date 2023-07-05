<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proses extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'Invoice',
        'idUser',
        'status',
        'nomerHp',
        'berat',
        'harga',
        'diskon',
        'total',
        'dibayar',
        'ongkos'
    ];
    public function member(){
        return $this->hasMany(member::class,'nomerHp','nomerHp');
    }
}

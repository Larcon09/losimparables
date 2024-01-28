<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    public function Cav(){
        return $this->hasMany(Cavs::class);
    }
}

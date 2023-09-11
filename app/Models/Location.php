<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'direccion',
    ];

    // Relación con el modelo User (uno a muchos)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
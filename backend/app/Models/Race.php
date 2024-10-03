<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date',
    ];
    protected $casts = [
        'date' => 'datetime', // Asegúrate de que 'date' se trate como datetime
    ];
    // Definir relación con Prediction
    public function predictions()
    {
        return $this->hasMany(Prediction::class);
    }
}

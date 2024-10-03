<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'race_id',
        'pole_position',
        'top8',
        'fastest_lap',
        'lap_downs',
        'last_finisher',
        'team_driver_1',
        'team_driver_2',
        'winner',
        'second',
        'points_obtained',
    ];

    // Definir relación con User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Definir relación con Race
    public function race()
    {
        return $this->belongsTo(Race::class);
    }
}

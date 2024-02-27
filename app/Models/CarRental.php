<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarRental extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'pickup_location',
        'dropoff_location',
        'pickup_date',
        'dropoff_date',
        'pickup_time',
    ];
}

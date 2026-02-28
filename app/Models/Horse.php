<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    /** @use HasFactory<\Database\Factories\HorseFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'date_of_birth'
    ];

    protected $appends = ['age'];

    public function getAgeAttribute(): int
    {
        return Carbon::parse($this->date_of_birth)->age;
    }
}



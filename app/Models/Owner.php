<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_surname',
        'phone_number',
        'e-mail',
        'date_of_birth',
        'country'

    ];

    public function musts()
    {
        return $this->hasMany(Must::class);
    }
}

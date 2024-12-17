<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tank extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'max_volume'
    ];


    public function musts()
    {
        return $this->hasMany(Must::class);
    }
}

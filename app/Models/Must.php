<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Must extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'volume',
        'plot_adress'
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function tanks()
    {
        return $this->belongsTo(Tank::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Direktor;

class Firma extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'adresa',
        'grad',
        'drzava'
    ];


    public function direktori()
    {
        return $this->hasMany(Direktor::class);
    }
}

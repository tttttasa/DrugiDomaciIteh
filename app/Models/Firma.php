<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Direktor;

class Firma extends Model
{
    use HasFactory;

    public function direktori()
    {
        return $this->hasMany(Direktor::class);
    }
}

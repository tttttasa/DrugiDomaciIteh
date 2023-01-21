<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Direktor;

class Zaposleni extends Model
{
    use HasFactory;

    public function direktor()
    {
        return $this->belongsTo(Direktor::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function formulas()
    {
        return $this->hasMany(Formula::class, 'tipo');
    }

    public function getRouteKeyName()
    {
        return 'url';
    }
}

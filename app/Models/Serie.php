<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $table = "series";
    protected $primaryKey = "serie_id";

    public function elementos()
    {
        return $this->hasMany(Elemento::class,'serie_id');
    }
}

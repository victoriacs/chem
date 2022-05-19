<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Elemento extends Model
{
    use HasFactory;
    protected $table = "elementos";
    protected $primaryKey = "id";

    public function serie()
    {
        return $this->belongsTo(Serie::class, 'serie_id');
    }
}

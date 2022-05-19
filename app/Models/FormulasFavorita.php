<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulasFavorita extends Model
{
    use HasFactory;

    protected $table = 'favorites';
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function formula()
    {
        return $this->belongsTo(Formula::class);
    }
}

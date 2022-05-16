<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementosFormula extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'formulas_id',
        'element1',
        'element2',
        'element3'
    ];
}

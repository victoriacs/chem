<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFavorite\Traits\Favoriteable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formula extends Model
{
    use HasFactory, Favoriteable;

    protected $guarded = [];

    protected $fillable = [
        'url',
        'nombre_comun',
        'nombre_sistematico',
        'tipo',
        'descripcion',
        'user_id',
        'elemento_1',
        'elemento_2',
        'elemento_3'
    ];
    

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'tipo');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}

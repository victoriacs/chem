<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFavorite\Traits\Favoriteable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

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

    public function fav()
    {
        return $this->hasMany(FormulasFavorita::class);
    }

    /**
     * Devuelve un booleano si el usuario tiene la formula en favoritos
     * @param mixed $formula_id
     * 
     * @return bool
     */
    public function isFavorited($formula_id)
    {
        if (Auth::check()) {
            $fav = FormulasFavorita::where('formula_id', $formula_id)->where('user_id', Auth::user()->id)->get();
            foreach($fav as $fa) {
                if($fa) {
                    return true;
                } else {
                    return false;
                }       
            }
        }
    }
}

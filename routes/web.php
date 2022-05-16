<?php
use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');

Route::view('/tabla-periodica', 'elementos.tabla')->name('elementos.tabla');
Route::get('/lista-elementos', 'App\Http\Controllers\ElementosController@index')->name('elementos.lista');


//Route::view('/formulas','formulas.index')->name('formulas.index');

// Buscador elementos en tiempo real
//Route::resource('/lista-elementos', 'App\Http\Controllers\ElementosController');

//Route::get('/elementos/tabla', 'App\Http\Controllers\ElementosController@tabla')->name('elementos.tabla');
//Route::get('/elementos/lista', 'App\Http\Controllers\ListaController@index')->name('elementos.lista');

//Route::view('/elementos','elementos.index')->name('elementos');

//Route::view('/tabla','tabla')->name('tabla');

//Route::resource('elementos','App\Http\Controllers\ElementosController')
//    ->names('elementos');
 
 Route::get('usuario/{user}','App\Http\Controllers\PerfilController@index')->name('perfil.index');

Route::resource('formulas-guardadas','App\Http\Controllers\FavoritosController')
    ->names('favorito');


Route::post('ajaxFavourite','App\Http\Controllers\FormulasController@addToFavourites');

Route::resource('formulas','App\Http\Controllers\FormulasController')
    ->names('formulas')
    ->parameters(['formulas' => 'formula']);

Route::get('formulas/categoria/{categoria}','App\Http\Controllers\CategoriasController@show')->name('categorias.show');

Route::view('configuracion/perfil','user.perfil')->name('conf.perfil');
Route::post('configuracion/perfil','App\Http\Controllers\UsersController@upload')->name('user.upload');

Route::view('configuracion/cuenta','user.cuenta')->name('conf.cuenta');
Route::post('configuracion/cuenta','App\Http\Controllers\UsersController@updateUser')->name('user.updateUser');
Route::delete('configuracion/cuenta','App\Http\Controllers\UsersController@destroy')->name('user.destroy');
// Route::post('configuracion/cuenta','App\Http\Controllers\UsersController@updateUsername')->name('user.updateUsername');
// Route::post('configuracion/cuenta','App\Http\Controllers\UsersController@updateEmail')->name('user.updateEmail');
// Route::post('/cuenta','App\Http\Controllers\UsersController@updatePassword')->name('updatePassword');
//Route::view('/table','table')->name('tabla');

//Auth::routes(['register' => false]);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::resource('favourites', 'App\Http\Controllers\FavoritosController', ['only' => 'store']);
// Route::delete('favourites/{formulaId}', ['as' => 'favourites.destroy', 'uses' => 'FavoritosController@destroy']);


// Route::get('/{any}'. function(){
//     return Redirect::to('/home');
// })

Route::get('/404', function () {
    return abort(404);
});

Route::get('detect-device', function () {
    $agent = new \Jenssegers\Agent\Agent;
    $result1 = $agent->isDesktop();
    $result2 = $agent->isMobile();
    $result3 = $agent->isTablet();
    echo $result1." , ".$result2. " , ".$result3;
});

Auth::routes();


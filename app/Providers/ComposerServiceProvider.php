<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->composeFavourites();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    protected function composeFavourites()
    {
        view()->composer(['admin.lettings.index', 'admin.lettings.show'], 'App\Http\Composers\FavouritesComposer');
    }
}

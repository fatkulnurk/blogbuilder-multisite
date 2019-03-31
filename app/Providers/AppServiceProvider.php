<?php

namespace App\Providers;

use App\Facades\Search\SearchFactory;
use App\Facades\StatusEnum\StatusEnumFactory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->app->bind('search', SearchFactory::class);
//        $this->app->bind('statusEnum', StatusEnumFactory::class);

        require_once app_path('Helpers/Helper.php');

        // mendaftarkan banyak helper sekaligus
//        foreach (glob(app_path('Helpers/*.php')) as $filename) {
//            require_once $filename;
//        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\PersonalDetail;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

        public function boot(): void
        {
            View::composer(
                'admin.layouts.app',
                function ($view) {

                    $personalDetail = PersonalDetail::first();

                    $view->with(
                        'personalDetail',
                        $personalDetail
                    );

                }
            );
        }
    
}

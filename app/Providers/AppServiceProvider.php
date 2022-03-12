<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Models\Lesson;
use App\Models\Section;
use Illuminate\Support\Facades\URL;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        Blade::directive('routeIs', function ($expression) {
            return "<?php if(Request::url() == route($expression)): ?>";
        });
    }
}

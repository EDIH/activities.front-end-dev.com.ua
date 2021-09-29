<?php

namespace App\Providers;

use App\Models\Block_template_attributes;
use App\Models\Block_templates;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
//        $this->app->singleton(Languages::class);
        View::share([
            'templates' => Block_templates::all(),
            'input_types' => Block_template_attributes::TYPE_LIST,
        ]);
    }
}

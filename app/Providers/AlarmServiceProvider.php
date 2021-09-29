<?php

namespace App\Providers;

use App\Models\Block_option_content_translations;
use Illuminate\Support\ServiceProvider;

class AlarmServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(Block_option_content_translations $option): void
    {
        $this->app->singleton('ContractAlarm', function () use ($option){
            if($option->type = 2){
                return dd($option);
            }
        });
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
}

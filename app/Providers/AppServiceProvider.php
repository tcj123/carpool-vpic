<?php

namespace App\Providers;

use App\Http\Resources\DecodedVINResource;
use App\Http\Resources\DecodedVINResourceCollection;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        DecodedVINResourceCollection::withoutWrapping();
        DecodedVINResource::withoutWrapping();
    }
}

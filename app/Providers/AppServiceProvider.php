<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\ContactObserver;
use App\Models\Contact;

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
        Contact::observe(ContactObserver::class);
    }
}

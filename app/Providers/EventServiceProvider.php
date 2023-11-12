<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

//Evento login
use Illuminate\Auth\Events\Login;
//Evento logout
use Illuminate\Auth\Events\Logout;


use App\Models\Pet;
use App\Observers\PetObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        //Evento login
        Login::class => [
            //Oyentes que se generan
            "App\Listeners\MergeTheList"
        ],

        //Evento logout
        Logout::class => [
            //Oyentes que se generan
            "App\Listeners\MergeTheListLogout"
        ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //Registrar el observer
        Pet::observe(PetObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}

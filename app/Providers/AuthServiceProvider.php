<?php

namespace App\Providers;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

    Gate::define('create-allat', function ($user) {
        return $user->isMenhely();
    });
    Gate::define('update-allat', function ($user, $allat) {
        return $user->isMenhely() || $user->id === $allat->user_id;
    });
    Gate::define('delete-allat', function ($user, $allat) {
        return $user->isMenhely() || $user->id === $allat->user_id;
    });

        
    }
}

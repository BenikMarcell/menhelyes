<?php

namespace App\Providers;


use App\Models\User;
use App\Models\Allat;
use App\Models\Menhely;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
    

    /*Gate::define('index-allat', function ($user, $allat, $menhely) {
    if ($user->isMenhely()) {
        $menhely = Menhely::where('email', $user->email)->first();
        return $menhely && $menhely->m_id === $allat->m_id;
    }
    return false;
    });
           Hibát jelez!!!!!!!!!!!
        
    });*/  
    
    

        
    }
}

<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        Gate::define('isSuperAdmin', function($user){
            return $user->hasRole('Administrateur');
        });

        Gate::define('isValidator', function($user){
            return $user->hasRole('Validateur');
        });


        // Users Utilisateurs
        Gate::define('manage-users', function($user){
            //return $user->hasAnyRoles(['admin', 'support']);
            return $user->hasRole('Administrateur');
        });
        Gate::define('add-users', function($user){
            //return $user->hasAnyRoles(['admin', 'support']);
            return $user->hasRole('Administrateur');
        });
        Gate::define('view-users', function($user){
            //return $user->hasAnyRoles(['admin', 'support']);
            return $user->hasRole('Administrateur');
        });
        Gate::define('edit-users', function($user){
            //return $user->hasAnyRoles(['admin', 'support']);
            return $user->hasRole('Administrateur');
        });
        Gate::define('delete-users', function($user){
            return $user->hasRole('Administrateur');
        });








        
    }
}

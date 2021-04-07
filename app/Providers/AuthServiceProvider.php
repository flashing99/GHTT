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


        // Sliders
        Gate::define('manage-sliders', function($user){
            return $user->hasAnyRoles(['Administrateur', 'Validateur']);
            //return $user->hasRole('Administrateur');
        });
        Gate::define('add-sliders', function($user){
            //return $user->hasAnyRoles(['admin', 'support']);
            return $user->hasRole('Administrateur');
        });
        Gate::define('view-sliders', function($user){
            //return $user->hasAnyRoles(['admin', 'support']);
            return $user->hasRole('Administrateur');
        });
        Gate::define('edit-sliders', function($user){
            //return $user->hasAnyRoles(['admin', 'support']);
            return $user->hasRole('Administrateur');
        });
        Gate::define('delete-sliders', function($user){
            return $user->hasRole('Administrateur');
        });


        // Events
        Gate::define('manage-events', function($user){
            return $user->hasAnyRoles(['Administrateur', 'Validateur']);
            //return $user->hasRole('Administrateur');
        });
        Gate::define('add-events', function($user){
            //return $user->hasAnyRoles(['admin', 'support']);
            return $user->hasRole('Administrateur');
        });
        Gate::define('view-events', function($user){
            //return $user->hasAnyRoles(['admin', 'support']);
            return $user->hasRole('Administrateur');
        });
        Gate::define('edit-events', function($user){
            //return $user->hasAnyRoles(['admin', 'support']);
            return $user->hasRole('Administrateur');
        });
        Gate::define('delete-events', function($user){
            return $user->hasRole('Administrateur');
        });

        
        // Galleries
        Gate::define('manage-galleries', function($user){
            return $user->hasAnyRoles(['Administrateur', 'Validateur']);
            //return $user->hasRole('Administrateur');
        });
        Gate::define('add-galleries', function($user){
            //return $user->hasAnyRoles(['admin', 'support']);
            return $user->hasRole('Administrateur');
        });
        Gate::define('view-galleries', function($user){
            //return $user->hasAnyRoles(['admin', 'support']);
            return $user->hasRole('Administrateur');
        });
        Gate::define('edit-galleries', function($user){
            //return $user->hasAnyRoles(['admin', 'support']);
            return $user->hasRole('Administrateur');
        });
        Gate::define('delete-galleries', function($user){
            return $user->hasRole('Administrateur');
        });



        
    }
}

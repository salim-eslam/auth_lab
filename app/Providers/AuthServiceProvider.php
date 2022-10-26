<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;

// use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
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
        Gate::define('user',function($user){

            return $user->rule=='user';
        });
        Gate::define('admin',function($user){

            return $user->rule=='admin';
        });
        Gate::define('superadmin',function($user){

            return $user->rule=='superadmin';
        });


    }
}

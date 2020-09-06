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
        // 第一：Gateの名前（制限を表す名前/自由） 第二：function（$user, $hobby）
        Gate::define('connect_hobbyTag', function ($user, $hobby) {
            return $user->id === $hobby->user_id || auth()->user()->role === 'admin';
        });
    }
}

<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Policies\TaskPolicy;
use App\Task;

class AuthServiceProvider extends ServiceProvider{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Task::class => TaskPolicy::class,
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate){

        $this->registerPolicies($gate);

        $gate->define('user',   function ($user){ return $user->roleid == 0; });
        $gate->define('admin',  function ($user){ return $user->roleid == 1; });
    }
}

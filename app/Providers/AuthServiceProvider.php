<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        try{
            Permission::get(['name'])->map(function($per){
                Gate::define($per->name, function($user) use ($per) {
                    return $user->hasAllow($per->name);
                });
            });

            Gate::define('edit-post', function($user,$post) {
                return $user->hasAllow('edit-post') && ($user->id == $post->user_id) ;
            });

            Gate::define('delete-post', function($user,$post) {
                return $user->hasAllow('delete-post') && ($user->id == $post->user_id) ;
            });
        }
        catch (\Exception $e) {
            return [];
        }
    

    }
}

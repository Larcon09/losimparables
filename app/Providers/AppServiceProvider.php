<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
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
        //
      /*  View::composer('*', function ($view){
            if(Auth::user()){
                $user=User::find(auth()->id());
                $menus=Menu::select()->where('rol','=',$user['rol'])->get();
            }else{
                $menus=[];
            }
            $view->with('menu',$menus);
        });*/
    }
}

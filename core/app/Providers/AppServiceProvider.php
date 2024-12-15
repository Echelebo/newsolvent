<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;
use App\Models\Settings;
use App\Models\Logo;
use App\Models\Currency;
use App\Models\User;
use App\Models\Alerts;
use Illuminate\Support\Facades\View;
use Session;
use Image;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view){
            $currency=Currency::whereStatus(1)->first();
            if (Auth::check()){
                $alert=Alerts::whereUser_id(Auth::user()->id)->orderBy('id', 'DESC')->get();
                $user=User::find(Auth::user()->id);
                if(empty($user->image)){
                    $cast="react.jpg";
                }else{
                    $cast=$user->image;
                }

                $view->with('alert', $alert );
                $view->with('user', $user );
                $view->with('cast', $cast );
                $view->with('currency', $currency );
            }
        });
        $data['set']=Settings::first();
        $data['logo']=Logo::first();
        $data['currency']=Currency::whereStatus(1)->first();

        
        view::share($data);
    }
}

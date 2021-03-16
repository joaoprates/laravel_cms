<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Page;

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
        // MENU
        $frontMenu = [
            '/' => 'Home'
        ];
        $pages = Page::all();
        foreach($pages as $page) {
            $frontMenu[ $page['slug'] ] = $page['title'];
        }
        View::share('front_menu', $frontMenu);

        // CONFIGURAÇÕES
        $config = [];
        $settings = Setting::all();
        foreach($settings as $setting) {
            $config[ $setting['name'] ] = $setting['content'];
        }
        View::share('front_config', $config);
    }
}

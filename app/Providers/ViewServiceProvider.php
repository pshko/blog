<?php

namespace App\Providers;

use App\Http\View\Composers\CategoryComposer;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
class ViewServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer('layouts.app', CategoryComposer::class);
    }
}

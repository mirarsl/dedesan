<?php

namespace App\Providers;

use App\About;
use App\Contact;
use App\Project;
use App\Service;
use App\Social;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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

        Carbon::now('Europe/Istanbul');
        setlocale(LC_TIME, 'Turkish');
        $Contact = Contact::find(1);
        $Social = Social::find(1);
        $About = About::find(1);

        $sharedContent = [
            'Contact' => $Contact,
            'Social' => $Social,
            'About' => $About
        ];
        View::share("sharedContent",$sharedContent);
    }
}

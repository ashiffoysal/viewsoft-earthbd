<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CompanyInformation;
use App\Models\Seo;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
    }


    public function boot()
    {
        $companyInformation = CompanyInformation::first();
        view()->share('companyInformation', $companyInformation);
    }
}

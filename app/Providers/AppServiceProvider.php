<?php

namespace App\Providers;

use App\Models\SmtpSetting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Config;


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
        Schema::defaultStringLength(191);

            
            $smtpsetting = SmtpSetting::first();
            if (Schema::hasTable('smtp_settings')) {
                $smtpsetting = SmtpSetting::first();
     
                if ($smtpsetting) {
                $data = [
                 'driver' => $smtpsetting->mailer, 
                 'host' => $smtpsetting->host,
                 'port' => $smtpsetting->port,
                 'username' => $smtpsetting->username,
                 'password' => $smtpsetting->password,
                 'encryption' => $smtpsetting->encryption,
                 'from' => [
                     'address' => $smtpsetting->from_address,
                     'name' => 'MwathekaLaravelProjects'
                 ]
     
                 ];
                 Config::set('mail',$data);
                }
            } // end if
        }
        // End if
    }

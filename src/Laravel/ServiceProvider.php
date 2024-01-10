<?php

namespace SMSClient\Laravel;

use Illuminate\Support\ServiceProvider as Provider;

use SMSClient\Laravel\SMSClientManager;
use SMSClient\Laravel\Facade\SMSClient;

/**
 * ServiceProvider
 * Facadeの登録を行う
 * 
 * @package SMSClient\Laravel
 */
class ServiceProvider extends Provider
{
    /**
     * アプリケーションの起動時に実行する
     * FacadeとManagerの紐づけを行う
     * 
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(SMSClient::class, function () {
            return new SMSClientManager();
        });
    }
}

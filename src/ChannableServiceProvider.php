<?php

namespace OnlineIdentity\LaravelChannable;

use Illuminate\Support\ServiceProvider;
use OnlineIdentity\Channable\Channable;
use OnlineIdentity\Channable\ChannableConfig;

class ChannableServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/channable.php', 'channable'
        );

        $this->app->bind('channable', function ($app) {

            $config = new ChannableConfig(
                api_token: config('channable.api_token'),
                company_id: config('channable.company_id'),
                project_id: config('channable.project_id'),
                version: config('channable.version'),
                base_url: config('channable.base_url')
            );

            return new Channable($config);
        });
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . "/config" => config_path()
        ], 'channable');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array<string>
     */
    public function provides(): array
    {
        return ['channable'];
    }
}
<?php

namespace Ottosmops\Settings;

use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/settings.php' => config_path('settings.php'),
        ], 'config');

        if (!class_exists('SettingsTable')) {
            $this->publishes([
                    __DIR__ . '/../database/migrations/0000_00_00_create_settings_table.php' => database_path('migrations/'. date('Y_m_d_His', time()) . '_create_settings_table.php')
            ], 'migrations');
        }
    }

    public function register()
    {

    }
}

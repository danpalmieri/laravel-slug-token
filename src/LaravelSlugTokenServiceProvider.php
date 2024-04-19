<?php

namespace DanPalmieri\LaravelSlugToken;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use DanPalmieri\LaravelSlugToken\Commands\LaravelSlugTokenCommand;

class LaravelSlugTokenServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-slug-token')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-slug-token_table')
            ->hasCommand(LaravelSlugTokenCommand::class);
    }
}

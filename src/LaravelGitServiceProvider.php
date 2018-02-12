<?php

namespace LaravelTools\LaravelGit;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Filesystem\Factory;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Routing\Router;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Intervention\Image\ImageManager;
use JeroenNoten\LaravelCkEditor\Http\Middleware\VerifyCsrfToken;
use JeroenNoten\LaravelCkEditor\Uploads\ImageUploader;
use JeroenNoten\LaravelPackageHelper\ServiceProviderTraits;

class LaravelGitServiceProvider extends BaseServiceProvider
{
    public function boot(Router $router)
    {
        $this->publishes([
            __DIR__.'/../config/git.php' => config_path('git.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/git.php', 'git');
    }

    protected function path()
    {
        return __DIR__ . '/..';
    }

    protected function name()
    {
        return 'git';
    }
}
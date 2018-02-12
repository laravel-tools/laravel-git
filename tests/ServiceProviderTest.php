<?php

use LaravelTools\LaravelGit\LaravelGitServiceProvider;

class ServiceProviderTest extends TestCase
{
    public function testConfig()
    {
        $this->assertEquals('laravel', config('git.user'));
    }

    public function getPackageProviders($app)
    {
        return [LaravelGitServiceProvider::class];
    }
}
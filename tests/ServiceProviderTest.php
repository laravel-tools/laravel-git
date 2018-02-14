<?php

use LaravelTools\LaravelGit\LaravelGitServiceProvider;
use Illuminate\Support\Facades\Storage;
use LaravelTools\LaravelGit\Git;

class ServiceProviderTest extends TestCase
{
    public function testConfig()
    {
        $this->assertEquals('laravel-tools', config('git.user'));
    }

    public function testConfigGitPath()
    {
        $this->assertEquals(public_path() . '/repos', config('git.path'));
    }

    public function testGitClone()
    {
    	// Git::cloneRepository('https://github.com/vuejs-templates/webpack.git');
        // Assert the file was stored...
        Storage::disk('repos')->assertExists(__DIR__ . '/webpack');
    }

    public function getPackageProviders($app)
    {
        return [LaravelGitServiceProvider::class];
    }
}
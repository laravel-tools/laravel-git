<?php

use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [LaravelTools\LaravelGit\LaravelGitServiceProvider::class];
    }

    protected function getCallReflector($callback)
    {
        if (is_string($callback) && strpos($callback, '::') !== false) {
            $callback = explode('::', $callback);
        }

        if (is_array($callback)) {
            return new ReflectionMethod($callback[0], $callback[1]);
        }

        return new ReflectionFunction($callback);
    }

}
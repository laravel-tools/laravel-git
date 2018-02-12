<?php

namespace LaravelTools\LaravelGit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Git.
 */
class GitFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Git';
    }
}

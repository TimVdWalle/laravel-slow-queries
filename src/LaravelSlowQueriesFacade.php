<?php

namespace TimVdWalle\LaravelSlowQueries;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TimVdWalle\LaravelSlowQueries\Skeleton\SkeletonClass
 */
class LaravelSlowQueriesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-slow-queries';
    }
}

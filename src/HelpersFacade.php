<?php

namespace Kometsoft\LaravelHelpers;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kometsoft\LaravelHelpers\Skeleton\SkeletonClass
 */
class LaravelHelpersFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-helpers';
    }
}

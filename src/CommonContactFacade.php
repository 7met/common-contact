<?php

namespace 7met\CommonContact;

use Illuminate\Support\Facades\Facade;

/**
 * @see \7met\CommonContact\Skeleton\SkeletonClass
 */
class CommonContactFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'common-contact';
    }
}

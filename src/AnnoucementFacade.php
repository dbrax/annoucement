<?php

namespace Epmnzava\Annoucement;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Epmnzava\Annoucement\Skeleton\SkeletonClass
 */
class AnnoucementFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'annoucement';
    }
}

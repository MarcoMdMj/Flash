<?php

namespace MarcoMdMj\Flash\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Flash Facade
 *
 * @package MarcoMdMj\Flash
 */
class Flash extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \MarcoMdMj\Flash\FlashService::class;
    }
}

<?php

namespace Rupadana\FilamentSwiper\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rupadana\FilamentSwiper\FilamentSwiper
 */
class FilamentSwiper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rupadana\FilamentSwiper\FilamentSwiper::class;
    }
}

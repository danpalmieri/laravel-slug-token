<?php

namespace DanPalmieri\LaravelSlugToken\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DanPalmieri\LaravelSlugToken\LaravelSlugToken
 */
class LaravelSlugToken extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \DanPalmieri\LaravelSlugToken\LaravelSlugToken::class;
    }
}

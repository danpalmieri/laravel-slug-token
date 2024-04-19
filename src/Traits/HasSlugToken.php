<?php

namespace DanPalmieri\LaravelSlugToken\Traits;

use Illuminate\Database\Eloquent\Model;

trait HasSlugToken
{
    /**
     * The length of the slug.
     * If null, the default value from the config file will be used.
     */
    public static ?int $length = null;

    /**
     * The characters to use for the slug.
     * If null, the default value from the config file will be used.
     */
    public static ?string $characters = null;

    /**
     * The column name to use for the slug.
     * If null, the default value from the config file will be used.
     */
    public static ?string $column = null;

    /**
     * Boot the trait.
     */
    public static function bootHasSlugToken(): void
    {
        static::creating(function (Model $model) {
            $column = self::$column ?? config('slug-token.column');
            $length = self::$length ?? config('slug-token.length');
            $characters = self::$characters ?? config('slug-token.characters');

            // If the slug is already set, don't generate a new one
            if ($model->{$column}) {
                return;
            }

            // Generate a unique slug
            do {
                $model->{$column} = substr(str_shuffle($characters), 0, $length);
            } while (
                get_class($model)::where($column, $model->slug)->exists()
            );
        });
    }
}

# Laravel Slug Token

[![Latest Version on Packagist](https://img.shields.io/packagist/v/danpalmieri/laravel-slug-token.svg?style=flat-square)](https://packagist.org/packages/danpalmieri/laravel-slug-token)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/danpalmieri/laravel-slug-token/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/danpalmieri/laravel-slug-token/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)

Auto generate a unique and configurable token during the model creation.

## Installation

You can install the package via composer:

```bash
composer require danpalmieri/laravel-slug-token
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-slug-token-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

Just add the `HasSlugToken` trait to your model.

```php
use DanPalmieri\LaravelSlugToken\Traits\HasSlugToken;

class YourModel extends Model
{
    use HasSlugToken; // Add this line
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Daniel Palmieri](https://github.com/danpalmieri)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

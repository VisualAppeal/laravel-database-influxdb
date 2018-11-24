# Laravel 5.6+ InfluxDB Database Package

## Installation

### Step 1: Composer

Via Composer command line:

```bash
$ composer require visualappeal/laravel-database-influxdb
```

Or add the package to your `composer.json`:

```json
{
    "require": {
        "visualappeal/laravel-database-influxdb": "0.1.*"
    }
}
```

### Step 2: Enable the package (Optional)

This package implements Laravel 5.5's auto-discovery feature. After you install it the package provider and facade are added automatically.

If you would like to declare the provider and/or alias explicitly, then add the service provider to your `config/app.php`:

```php
'providers' => [
    AustinHeap\Database\InfluxDb\InfluxDbServiceProvider::class,
];
```

And then add the alias to your `config/app.php`:

```php
'aliases' => [
    'InfluxDb' => AustinHeap\Database\InfluxDb\InfluxDbFacade::class,
];
```

### Step 3: Configure the package

Publish the package config file:

```bash
$ php artisan vendor:publish --provider="AustinHeap\Database\InfluxDb\InfluxDbServiceProvider"
```

You may now place your defaults in `config/influxdb.php`.

## Full .env Example

To override values in `config/influxdb.php`, simply add the following to your .env file:

```bash
INFLUXDB_PROTOCOL=https
INFLUXDB_USER=my-influxdb-user
INFLUXDB_PASS=my-influxdb-pass
INFLUXDB_HOST=my-influxdb.server
```

## References

- [influxdata/influxdb-php](https://github.com/influxdata/influxdb-php)

## Credits

This is a fork of [austinheap/laravel-database-influxdb](https://github.com/austinheap/laravel-database-influxdb).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

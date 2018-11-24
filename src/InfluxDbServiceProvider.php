<?php

namespace AustinHeap\Database\InfluxDb;

use InfluxDB\Client as InfluxClient;
use Illuminate\Support\ServiceProvider;

class InfluxDbServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/config/influxdb.php' => config_path('influxdb.php'),
        ]);

        $this->mergeConfigFrom(__DIR__ . '/config/influxdb.php', 'influxdb');
    }

    /**
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('InfluxDb', function () {
            $timeout = is_int(config('influxdb.timeout', null)) ? config('influxdb.timeout') : 5;
            $verifySsl = is_bool(config('influxdb.verify_ssl', null)) ? config('influxdb.verify_ssl') : true;
            $protocol = 'influxdb';

            if (in_array(config('influxdb.protocol'), ['https', 'udp'])) {
                $protocol = config('influxdb.protocol') . '+' . $protocol;
            }

            $dsn = sprintf('%s://%s:%s@%s:%s/%s',
                $protocol,
                config('influxdb.user'),
                config('influxdb.pass'),
                config('influxdb.host'),
                config('influxdb.port'),
                config('influxdb.database')
            );

            return InfluxClient::fromDSN($dsn, $timeout, $verifySsl);
        });
    }

    /**
     * @return \InfluxDB\Client|\InfluxDB\Database
     */
    public static function getInstance()
    {
        return app('InfluxDb');
    }
}

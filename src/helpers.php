<?php

if (!function_exists('influxdb')) {
    /**
     * @return \InfluxDB\Client|\InfluxDB\Database
     */
    function influxdb()
    {
        return \AustinHeap\Database\InfluxDb\InfluxDbServiceProvider::getInstance();
    }
}

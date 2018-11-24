<?php

namespace AustinHeap\Database\InfluxDb\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class Job implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    /**
     * @var array
     */
    public $args;

    /**
     * Write constructor.
     *
     * @param array $args
     */
    public function __construct(array $args = [])
    {
        if (count($args)) {
            $this->args = $args;
        }
    }

    /**
     * @return array
     */
    public function tags(): array
    {
        return [static::class];
    }
}

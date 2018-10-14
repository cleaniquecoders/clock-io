<?php

namespace CleaniqueCoders\ClockIO;

use CleaniqueCoders\ClockIO\Contracts\Clock as ClockContract;
use CleaniqueCoders\ClockIO\Contracts\ClockFormat as ClockFormatContract;

class ClockIO implements ClockContract, ClockFormatContract
{
    const IN  = 1;
    const OUT = 2;

    protected $clock_format = 'Y-m-d H:i:s';

    public function getClockFormat(): string
    {
        return $this->clock_format;
    }

    public function setClockFormat(string $format): ClockFormatContract
    {
        $this->clock_format = $format;

        return $this;
    }
}

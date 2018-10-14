<?php

namespace CleaniqueCoders\ClockIO\Tests\Stubs\Hotel;

use CleaniqueCoders\ClockIO\ClockIO;
use CleaniqueCoders\ClockIO\Contracts\ClockIn;

class CheckIn extends ClockIO implements ClockIn
{
    public function clockIn(): string
    {
        // do something on hotel checkin
        $this->checkin = new \DateTime();

        return $this->checkin->format($this->getClockFormat());
    }
}

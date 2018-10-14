<?php

namespace CleaniqueCoders\ClockIO\Tests\Stubs\Attendance;

use CleaniqueCoders\ClockIO\ClockIO;
use CleaniqueCoders\ClockIO\Contracts\ClockIn;

class CheckIn extends ClockIO implements ClockIn
{
    public function clockIn(): string
    {
        // do something on attendance checkin
        return (new \DateTime())->format($this->getClockFormat());
    }
}

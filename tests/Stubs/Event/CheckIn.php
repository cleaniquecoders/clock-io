<?php

namespace CleaniqueCoders\ClockIO\Tests\Stubs\Event;

use CleaniqueCoders\ClockIO\ClockIO;
use CleaniqueCoders\ClockIO\Contracts\ClockIn;

class CheckIn extends ClockIO implements ClockIn
{
    public function clockIn(): string
    {
        // do something on event checkin
        return (new \DateTime())->format($this->getClockFormat());
    }
}

<?php

namespace CleaniqueCoders\ClockIO\Tests\Stubs\Attendance;

use CleaniqueCoders\ClockIO\ClockIO;
use CleaniqueCoders\ClockIO\Contracts\ClockOut;

class CheckOut extends ClockIO implements ClockOut
{
    public function clockOut(): string
    {
        // do something on attendance checkout
        return (new \DateTime())->format($this->getClockFormat());
    }
}

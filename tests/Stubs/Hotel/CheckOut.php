<?php

namespace CleaniqueCoders\ClockIO\Tests\Stubs\Hotel;

use CleaniqueCoders\ClockIO\ClockIO;
use CleaniqueCoders\ClockIO\Contracts\ClockOut;

class CheckOut extends ClockIO implements ClockOut
{
    public function clockOut(): string
    {
        // do something on hotel checkout
        $this->checkout = new \DateTime();

        return $this->checkout->format($this->getClockFormat());
    }
}

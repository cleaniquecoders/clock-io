<?php

namespace CleaniqueCoders\ClockIO\Tests\Stubs;

use CleaniqueCoders\ClockIO\ClockIO;
use CleaniqueCoders\ClockIO\Contracts\ClockIn;
use CleaniqueCoders\ClockIO\Contracts\ClockOut;
use CleaniqueCoders\ClockIO\Contracts\ClockSummary;

class Clock extends ClockIO implements ClockIn, ClockOut, ClockSummary
{
	protected $clock_in;
	protected $clock_out;

	public function clockSummary()
	{
		return [
			'in' => $this->clock_in->format($this->getClockFormat()),
			'out' => $this->clock_out->format($this->getClockFormat())
		];
	}

	public function clockIn(): string
    {
    	$this->clock_in = new \DateTime();
        return $this->clock_in->format($this->getClockFormat());
    }

    public function clockOut(): string
    {
    	$this->clock_out = new \DateTime();
        return $this->clock_out->format($this->getClockFormat());
    }
}

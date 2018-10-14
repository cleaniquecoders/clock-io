<?php

namespace CleaniqueCoders\ClockIO\Contracts;

interface ClockFormat
{
    public function getClockFormat(): string;

    public function setClockFormat(string $format): ClockFormat;
}

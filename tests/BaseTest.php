<?php

namespace CleaniqueCoders\ClockIO\Tests;

use CleaniqueCoders\ClockIO\ClockIO;

class BaseTest extends TestCase
{
    /** @test */
    public function it_has_clock_io_class()
    {
        $this->assertTrue(class_exists(\CleaniqueCoders\ClockIO\ClockIO::class));
    }

    /** @test */
    public function it_has_clock_in_constant()
    {
        $this->assertEquals(1, ClockIO::IN);
    }

    /** @test */
    public function it_has_clock_out_constant()
    {
        $this->assertEquals(2, ClockIO::OUT);
    }

    /** @test */
    public function it_has_default_clock_format()
    {
        $expected = 'Y-m-d H:i:s';
        $actual   = (new ClockIO())->getClockFormat();
        $this->assertEquals($expected, $actual);
    }
}

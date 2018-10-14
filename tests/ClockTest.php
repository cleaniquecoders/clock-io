<?php

namespace CleaniqueCoders\ClockIO\Tests;

use CleaniqueCoders\ClockIO\Tests\Stubs\Clock;

class ClockTest extends TestCase
{
    /** @test */
    public function it_has_clock_class()
    {
        $this->assertTrue(class_exists(Clock::class));
    }

    /** @test */
    public function it_return_check_in_date_time()
    {
        $clock = new Clock();
        $this->assertTrue(! empty($clock->clockIn()));
    }

    /** @test */
    public function it_return_check_out_date_time()
    {
        $clock = new Clock();
        $this->assertTrue(! empty($clock->clockOut()));
    }

    /** @test */
    public function it_return_summary()
    {
        $clock = new Clock();
        $clock_in = $clock->clockIn();
        $clock_out = $clock->clockOut();
        $clock_summary = $clock->clockSummary();

        $this->assertTrue(! empty($clock_summary));
        $this->assertTrue(is_array($clock_summary));
        $this->assertTrue(isset($clock_summary['in']));
        $this->assertTrue(!empty($clock_summary['in']));
        $this->assertTrue(isset($clock_summary['out']));
        $this->assertTrue(!empty($clock_summary['out']));

        $expected_clock_in = $clock_summary['in'];
        $this->assertEquals($expected_clock_in, $clock_in);

        $expected_clock_out = $clock_summary['out'];
        $this->assertEquals($expected_clock_out, $clock_out);
    }
}

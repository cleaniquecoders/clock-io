<?php

namespace CleaniqueCoders\ClockIO\Tests;

use CleaniqueCoders\ClockIO\Tests\Stubs\Event\CheckIn;

class EventTest extends TestCase
{
    /** @test */
    public function it_has_event_check_in_class()
    {
        $this->assertTrue(class_exists(CheckIn::class));
    }

    /** @test */
    public function it_return_check_in_date_time()
    {
        $checkin = new CheckIn();
        $this->assertTrue(! empty($checkin->clockIn()));
    }
}

<?php

namespace CleaniqueCoders\ClockIO\Tests;

use CleaniqueCoders\ClockIO\Tests\Stubs\Attendance\CheckIn;
use CleaniqueCoders\ClockIO\Tests\Stubs\Attendance\CheckOut;

class AttendanceTest extends TestCase
{
    /** @test */
    public function it_has_attendance_check_in_class()
    {
        $this->assertTrue(class_exists(CheckIn::class));
    }

    /** @test */
    public function it_has_attendance_check_out_class()
    {
        $this->assertTrue(class_exists(CheckOut::class));
    }

    /** @test */
    public function it_return_check_in_date_time()
    {
        $checkin = new CheckIn();
        $this->assertTrue(! empty($checkin->clockIn()));
    }

    /** @test */
    public function it_return_check_out_date_time()
    {
        $checkout = new CheckOut();
        $this->assertTrue(! empty($checkout->clockOut()));
    }
}

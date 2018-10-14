# Clock In and Out: clock-io

clock-io is a PHP package to capture date and time in or out on particular event. The event can be attendance system, asset check in and check out from the premise and many more.

*clock-io* enabled developer to be consistent with capturing event date and time, plus it helps developers to implement their own logic based on their own system workflow.

## Installation

```
$ composer require cleaniquecodedrs/clock-io
```

## Usage

clock-io provide interfaces for you to implement based on your system workflow.

Following are the interfaces available for developers to use:

```php

// This is the main contract
use CleaniqueCoders\ClockIO\Contracts\Clock;

// This is for Clock Date Format
use CleaniqueCoders\ClockIO\Contracts\ClockFormat;

// This is for Clock In Contract
use CleaniqueCoders\ClockIO\Contracts\ClockIn;

// This is for Clock Out Contract
use CleaniqueCoders\ClockIO\Contracts\ClockOut;

// This is for Clock In and Out Summary
use CleaniqueCoders\ClockIO\Contracts\ClockSummary;
```

## Test

```
$ vendor/bin/phpunit
```

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

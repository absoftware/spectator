<?php

namespace Spectator\Tests;

use Illuminate\Support\Facades\Config;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    const NULLABLE_MISSING = 0;

    const NULLABLE_EMPTY_STRING = 1;

    const NULLABLE_VALID = 2;

    const NULLABLE_INVALID = 3;

    const NULLABLE_NULL = 4;

    const NULLABLE_REF = 5;

    const NULLABLE_REF_PROPERTY = 6;

    const NULLABLE_REF_PROPERTY_INVALID = 7;

    const NULLABLE_REF_ONE_OF = 8;

    const NULLABLE_REF_ONE_OF_PROPERTY = 9;

    const NULLABLE_REF_ONE_OF_PROPERTY_INVALID = 10;

    protected function getEnvironmentSetUp($app)
    {
        Config::set('spectator.suppress_errors', true);
    }

    protected function getPackageProviders($app)
    {
        return ['Spectator\SpectatorServiceProvider'];
    }
}

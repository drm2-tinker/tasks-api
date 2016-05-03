<?php

namespace App\Models\Auth;

use Cartalyst\Sentinel\Throttling\EloquentThrottle;

class Throttle extends EloquentThrottle
{
    use \App\Models\Traits\UuidKey;

    // disable auto-incrementing key generation for models
    public $incrementing = false;

    // make sure dates are mutated into Carbon objects
    protected $dates = [ 'created_at', 'updated_at' ];
}

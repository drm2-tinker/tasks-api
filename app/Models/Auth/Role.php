<?php

namespace App\Models\Auth;

use Cartalyst\Sentinel\Roles\EloquentRole;

class Role extends EloquentRole
{
    use \App\Models\Traits\UuidKey;
    use \Illuminate\Database\Eloquent\SoftDeletes;

    // disable auto-incrementing key generation for models
    public $incrementing = false;

    // make sure dates are mutated into Carbon objects
    protected $dates = [ 'created_at', 'updated_at', 'deleted_at' ];
}

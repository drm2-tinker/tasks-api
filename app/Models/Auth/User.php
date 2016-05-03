<?php

namespace App\Models\Auth;

use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends EloquentUser implements AuthenticatableContract, AuthorizableContract
{
    use \App\Models\Traits\UuidKey;
    use \Illuminate\Database\Eloquent\SoftDeletes;
    use \Illuminate\Auth\Authenticatable;
    use \Illuminate\Foundation\Auth\Access\Authorizable;

    // disable auto-incrementing key generation for models
    public $incrementing = false;

    // make sure dates are mutated into Carbon objects
    protected $dates = [ 'created_at', 'updated_at', 'deleted_at', 'last_login' ];
}

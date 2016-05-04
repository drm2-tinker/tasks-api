<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    use \App\Models\Traits\UuidKey;
    use \Illuminate\Database\Eloquent\SoftDeletes;

    // disable auto-incrementing key generation for models
    public $incrementing = false;

    // make sure dates are mutated into Carbon objects
    protected $dates = [ 'created_at', 'updated_at', 'deleted_at' ];
}

<?php

namespace App\Models;

use App\Models\Model;

class Task extends Model
{
    protected $table = 'tasks';

    // make sure dates are mutated into Carbon objects
    protected $dates = [ 'created_at', 'updated_at', 'deleted_at', 'completed_at' ];
}

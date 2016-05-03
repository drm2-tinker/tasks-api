<?php

namespace App\Models\Traits;

use Ramsey\Uuid\Uuid;

trait UuidKey
{
    // boot UUID key generator for model
    public static function bootUuidKey()
    {
        static::creating(function ($model)
        {
            // generate UUID key for new record
            $model->{$model->getKeyName()} = (string) Uuid::uuid4();
        });
    }
}

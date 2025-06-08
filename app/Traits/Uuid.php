<?php

namespace App\Traits;

use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid as Generator;

trait Uuid
{
    protected static function bootUuid()
    {
        static::creating(function ($model) {
            if (empty($model->id)) {
                try {
                    $model->id = Generator::uuid4()->toString();
                } catch (UnsatisfiedDependencyException $e) {
                    abort(500, $e->getMessage());
                }
            }
        });
    }
}
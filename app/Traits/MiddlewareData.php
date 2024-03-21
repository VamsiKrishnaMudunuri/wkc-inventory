<?php

namespace App\Traits;

use Illuminate\Support\Collection;
use Exception;

trait MiddlewareData
{
    public function createMiddlewareData()
    {
        $data = (object) [];
        $data->userId = null;
        $data->user = null;

        return $data;
    }
}

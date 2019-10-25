<?php

namespace App\Services\Tests;

use App\Models\Testing;
use App\Services\BaseService;

class TestService extends BaseService
{
    public function __construct(Testing $score)
    {
        $this->model = $score;
    }

    public function test()
    {
        return 'Hello Service';
    }
}

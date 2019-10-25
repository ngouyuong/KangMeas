<?php

namespace App\Http\Controllers;

use App\Models\Testing;
use App\Services\Tests\TestService;

class TestinController extends ParentController
{
    public function __construct(Testing $testing, TestService $testService)
    {
        $this->model = $testing;
        $this->service = $testService;
    }

    public function testing()
    {
        return parent::testing();
    }
}

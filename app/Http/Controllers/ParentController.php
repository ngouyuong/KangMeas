<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ParentController extends Controller
{
    use ResponseTrait;

    protected $service;
    protected $model;

    public function all()
    {
        return $this->service->getList();
    }
}

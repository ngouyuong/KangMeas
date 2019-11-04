<?php
/**
 * Created by Smis Team
 * User: Thavorac
 * Date: 2019-07-30
 * Time: 10:54
 */

namespace App\Services;

class BaseService
{
    protected $model;

    public function getList()
    {
        return $this->model->all()->toArray();
    }
}

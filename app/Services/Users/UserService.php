<?php
namespace App\Services\Users;

use App\User;
use App\Services\BaseService;
use Illuminate\Support\Facades\Hash;

class UserService extends BaseService
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function create($request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($request['password']);
        $user = User::create($input);
        return $user;
    }
//    public function getByUserId($user_id)
//    {
//        return $this->model = $this->getByUserId($user_id);
//    }
//    public function getByUserId($user_id)
//    {
//        return $this->model = $this->getByUserId($user_id);
//    }
}

<?php

namespace App\Http\Controllers;

use App\Services\Users\UserService;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;

class UserController extends ParentController
{
    public function __construct(User $user, UserService $userService)
    {
        $this->model = $user;
        $this->service = $userService;
    }

    public function index()
    {
        //$users = parent::get();
        $users =  User::with('roles')->get();

        return view('pages.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::get();
        return view('pages.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $roles = Role::whereIn('id', $request->roles)->get();
//        $this->validate($request, [
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8'],
//        ]);
        $objectCreate = $this->service->create($request);
        $objectCreate->assignRole($roles);
        if ($objectCreate instanceof $this->model)
        {
            return redirect()->route('users');
        }
        return 'Error';

    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::get();

        return view('pages.users.edit', compact('user', 'roles'));
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($user instanceof $this->model)
        {
            $user->update($request->all());
            return redirect('users')->with('success','updated');
        }
        return 'Not found';
    }
    public function delete($id)
    {
        $user = User::find($id);
        if ($user instanceof $this->model)
        {
            $user->delete();
            return redirect('users')->with('success','deleted');

        }
    }

    public function profile()
    {
        return view('pages.users.profile');
    }

    public function test($id,$name,$email)
    {
        return [$id,$name,$email];
    }
}

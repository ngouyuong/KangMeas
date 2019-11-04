<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('pages.users.index', compact('users'));
    }

    public function create()
    {
        return view('pages.users.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($request['password']);
        $user = User::create($input);
        return redirect()->route('users');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.users.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {

    }
}

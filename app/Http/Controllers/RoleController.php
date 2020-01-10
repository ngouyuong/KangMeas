<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleController extends Controller
{
    //
    public function index()
    {
        $roles = Role::with('permissions')->get();
        return view('pages.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::get();
        return view('pages.roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required','string', 'max:255'],
            'permissions' => ['required']
        ]);
        $permissions = Permission::whereIn('id',  $request->permissions)->get();
        $objectCreate = Role::create([
            'name' => $request->name
        ]);

        if ($objectCreate instanceof Role) {
            $objectCreate->givePermissionTo($permissions);
            return redirect()->route('roles');
        }
        return 'error';
    }
    public function edit($id)
    {
        $role = Role::with('permissions')->find($id);
        $permissions = Permission::get();
        return view('pages.roles.edit',compact('role', 'permissions'));
    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name' => ['required'],
            'permissions' => ['required']
        ]);
        $role = Role::with('permissions')->find($id);
        $permissions = Permission::whereIn('id', $request->permissions)->get();
        $role->syncPermissions($permissions);
        $role->name = $request->name;
        $role->save();
        return redirect('roles')->with('success','updated');
    }
    public function delete($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect('roles')->with('success','deleted');

    }
}

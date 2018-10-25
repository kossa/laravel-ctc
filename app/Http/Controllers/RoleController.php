<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class RoleController extends Controller
{
    //
    public function index()
    {
        $user = User::find(request('user_id'));

        $user->roles();
    }
    public function store()
    {
        $user = User::find(request('user_id'));
        $role = Role::find(request('role_id'));
        $user->roles()->attach($role);
    }
}

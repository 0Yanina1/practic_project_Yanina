<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Spatie\Permission\Models\Role;

class
EditController extends BaseController
{
    public function __invoke(User $user)
    {
        $roles = Role::all();
        return view('user.edit',compact('user', 'roles'));
    }
}

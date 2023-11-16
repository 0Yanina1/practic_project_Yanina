<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Spatie\Permission\Models\Role;

class DestroyController extends BaseController
{
    public function __invoke(User $user)
    {
        $roles = Role::all();
        foreach ($roles as $role){
            $user->removeRole($role);
        }

        $user->delete();


        return redirect()->route('user.index');
    }
}

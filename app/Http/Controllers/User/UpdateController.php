<?php

namespace App\Http\Controllers\User;


use App\Http\Requests\UpdateRequest;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $this->service->update($user, $data);
        $roles = Role::all();
        foreach ($roles as $role){
            $user->removeRole($role);
        }

        $model_roles = $data['role_name'];
        unset ($data['role_name']);
        foreach ($model_roles as $role){
            $user->assignRole($role);
        }
        return redirect()->route('user.show',$user->id);
    }
}

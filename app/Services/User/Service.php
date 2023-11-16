<?php

namespace App\Services\User;

use App\Models\User;

class Service
{
    public function store($data)
    {
        $model_roles = $data['role_name'];
        unset ($data['role_name']);
        $users = User::create($data);
        foreach ($model_roles as $role){
            $users->assignRole($role);
        }

    }
    public function update($post, $data)
    {
        $post->update($data);
    }
}

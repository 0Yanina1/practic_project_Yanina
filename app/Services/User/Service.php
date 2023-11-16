<?php

namespace App\Services\User;

use App\Models\User;

class Service
{
    public function store($data)
    {

        $post = User::create($data);
    }
    public function update($post, $data)
    {
        $post->update($data);
    }
}

<?php

namespace App\Http\Controllers\User;
use App\Models\User;


class IndexController
{
    public function __invoke()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }
}

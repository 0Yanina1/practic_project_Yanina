<?php

namespace App\Http\Controllers\User;


class CreateController
{
    public function __invoke()
    {
        return view('user.create');
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Models\User;

class
EditController extends BaseController
{
    public function __invoke(User $user)
    {
        return view('user.edit',compact('user'));
    }
}

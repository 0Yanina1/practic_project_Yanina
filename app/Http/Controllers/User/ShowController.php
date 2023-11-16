<?php
namespace App\Http\Controllers\User;

use App\Models\User;

class ShowController extends BaseController
{
    public function __invoke(User $user)
    {
        return view('user.show',compact('user'));
    }
}

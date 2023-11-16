<?php

namespace App\Http\Controllers\User;


use App\Http\Requests\UpdateRequest;
use App\Models\User;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $this->service->update($user, $data);
        return redirect()->route('user.show',$user->id);
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\StoreRequest;
use App\Models\User;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, User $user)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('user.index');
    }
}
